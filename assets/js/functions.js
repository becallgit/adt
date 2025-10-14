var heightHeader = $('header').outerHeight();
var heightBtnFooter = $('#telefono-mobile').outerHeight();
var openCallCenter = false;

function resizeFondo() {
    if ($(window).width() > 992 || !openCallCenter) {
        heightBtnFooter = 0
    }
    var heightFondo = $(window).height() - heightHeader - heightBtnFooter + 1;
    var heightFondo404 = $('.fondo').height() - $('footer').height();
    if ($(window).width() <= 768) {
        $('.fondo').css({ 'height': '500px' });
    } else if ($(window).height() > 700) {
        $('.fondo').css({ 'height': '500px' });
    } else {
        $('.fondo').css({ 'height': '500px' });
        $('#scroll-down').hide();
    }
    ;
    if (pageActive == '404' && $(window).width() < 578) {
        $('.fondo').css({ 'height': heightFondo });
        $('#scroll-down').hide();
    } else if (pageActive == '404') {
        $('.fondo').css({ 'height': heightFondo404 });
    }
}

function scrollDown() {
    $([document.documentElement, document.body]).animate({ scrollTop: $('.back-blue-1').offset().top - heightHeader + 1 }, 300);
}

function animaArrow() {
    setInterval(function () {
        $('#scroll-down').prepend('<div class="banner-btn-scroll-arrow"></div>');
        setTimeout(function () {
            $('.banner-btn-scroll-arrow:last-child').remove();
        }, 1500);
    }, 750);
}

function is_fijo(phone) {
    return (/[0-9]{9}/.test(phone) && phone.length == 9 && (phone.substr(0, 1) == '8' || phone.substr(0, 1) == '9') && (phone.substr(0, 2) != '90') && (phone != 999999999));
}

function is_mobile(phone) {
    if (/[0-9]{9}/.test(phone) && phone.length == 9 && (phone.substr(0, 1) == '6' || phone.substr(0, 1) == '7')) {
        if (phone != '666666666') {
            return true
        }
    }
    return false
}

function isEmail(email) {
    // Define our regular expression.
    var validEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

    // Using test we can check if the text match the pattern
    if (validEmail.test(email)) {
        return true;
    } else {
        return false;
    }
}

function makeClick2Call(telefono, checked, type, click2callId) {

    const urlParams = new URLSearchParams(window.location.search);
    const adId = urlParams.get('adId');
    console.log('adId desde la URL:', adId);

    if (adId) {
        docCookies.setItem('adId', adId);
    }

    if (is_mobile(telefono) || is_fijo(telefono)) {
        if (checked) {
            // MODO LOCAL: Simular respuesta del servidor sin hacer llamada real
            console.log('MODO LOCAL: Simulando envío de teléfono:', telefono);
            console.log('Servicio:', docCookies.getItem('adt_servicio') || '');
            
            // Simular delay de red
            setTimeout(function() {
                // Simular respuesta exitosa del servidor
                let id = click2callId || docCookies.getItem('click2call');
                window.modal_showed = true;
                let respuesta = '<div id="enviado-ok-ctc' + id + '" class="c2c-formu-data p-5 col-xs-12" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; min-height: 300px; position: relative;">' +
                    '<div onclick="closeRespC2c()" class="btn-close btn-close-c2c-resp" style="position: absolute; top: 15px; right: 15px; cursor: pointer; font-size: 24px; color: #999; background: #f0f0f0; border-radius: 50%; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; line-height: 1;">×</div>' +
                    '<strong style="font-size: 24px; color: #245fa4; margin-bottom: 20px;">¡Gracias por confiar en nosotros!</strong>' +
                    '<p style="font-size: 16px; margin-bottom: 30px; color: #333;">Uno de nuestros asesores se pondrá en contacto contigo en breve.</p>' +
                    '<div class="text-center success-image-container"><img src="assets/img/ADT-alarmas.png" style="height: 200px; width: auto;" class="success-image" /></div>' +
                    '</div>';

             
                    if (!openCallCenter) {
                    respuesta = '<div id="enviado-ok-ctc' + id + '" class="c2c-formu-data p-5 col-xs-12" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; min-height: 300px; position: relative;">' +
                        '<div onclick="closeRespC2c()" class="btn-close btn-close-c2c-resp" style="position: absolute; top: 15px; right: 15px; cursor: pointer; font-size: 24px; color: #999; background: #f0f0f0; border-radius: 50%; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; line-height: 1;">×</div>' +
                        '<strong style="font-size: 24px; color: #245fa4; margin-bottom: 20px;">¡Gracias por confiar en nosotros!</strong>' +
                        '<p style="font-size: 16px; margin-bottom: 30px; color: #333;">Nuestros agentes se pondrán en contacto contigo en nuestro horario de Lunes a Viernes de 9:00 a 21:00.</p>' +
                        '<div class="text-center success-image-container"><img src="assets/img/ADT-alarmas.png" style="height: 200px; width: auto;" class="success-image" /></div>' +
                        '</div>';
                }

                // Para el formulario principal (banner), reemplazar todo el contenido del CTA
                if (type === '-banner') {
                    $('.cta').html(respuesta);
                } else {
                    // Para modales, reemplazar todo el contenido del modal
                    $('.data-box.c2c.modal-data').html(respuesta);
                }
                resetFormC2c(type);
                window.dataLayer = window.dataLayer || [];
                dataLayer.push({ 'event': 'formSubmitOK' });
                
                // GTM LeadOfertaAlarma event
                window.dataLayer.push({
                    event: "LeadOfertaAlarma",
                    leadInfo: {
                        idform: docCookies.getItem('idform') || '',
                        phone: telefono,
                        servicio: docCookies.getItem('adt_servicio') || ''
                    }
                });
                
                window.uetq = window.uetq || [];
                window.uetq.push({ 'ec': 'click2call', 'ea': 'send', 'el': 'conversion' });
                
                console.log('MODO LOCAL: Formulario enviado exitosamente');
            }, 1000); // Simular 1 segundo de delay

            function showErrorMsg(type, message) {
                $('#c2c-form-msg' + type).html(message).show();
                addMsgGtm(type);
            }
        } else {
            $('#c2c-form-msg' + type).html("Debes aceptar la política de privacidad");
            $('#c2c-checkbox-label' + type).addClass('checkbox-error');
            $('#c2c-form-msg' + type).show();
            addMsgGtm(type);
        }
    } else {
        $('#c2c-form-msg' + type).html("Debes introducir un teléfono válido");
        $('#c2c-phone' + type).css({ 'borderColor': 'red' });
        $('#c2c-form-msg' + type).show();
        addMsgGtm(type);
    }
    return false;
}

function resetFormC2c(type) {
    $('#c2c-phone' + type).val('');
    $('#c2c-name' + type).val('');
    $('#c2c-checkbox' + type).prop("checked", false);
    $('#c2c-phone' + type).css({ 'borderColor': 'black' });
    $('#c2c-name' + type).css({ 'borderColor': 'black' });
    $('#c2c-form-msg' + type).html('&nbsp;');
}

function closeRespC2c() {
    // Ocultar cualquier mensaje de respuesta
    $('.c2c-formu-resp').hide();
    
    // Si el mensaje está en el formulario principal, recargar la página
    if ($('.cta').find('#enviado-ok-ctc').length > 0) {
        location.reload();
        return;
    }
    
    // Si el mensaje está en un modal, cerrar el modal
    if ($('.data-box.c2c.modal-data').find('#enviado-ok-ctc').length > 0) {
        closeModal('c2c');
        return;
    }
    
    // Fallback: recargar la página si no se puede determinar la ubicación
    location.reload();
}

function addMsgGtm(type) {
    var msg = $('#c2c-form-msg' + type).text();
    if (msg != '&nbsp;' || msg != '') {
        if (typeof gtag === "function") {
            console.log('>>> ' + msg);
            gtag('event', msg + ' || ' + type, {
                'event_category': 'click2call',
                'event_label': window.location.origin + window.location.pathname
            });
        }
        ;
    }
    ;
}

function openModal(id) {
    $('#modal-' + id + '-cont').css({ 'display': 'flex' });
    setTimeout(function () {
        $('#modal-' + id + '-cont').addClass('modal-cont-open');
        $('.modal-back.' + id).addClass('modal-back-open');
        $('.' + id + '.modal-data').addClass('modal-data-open');
    }, 1);
    
    // Ocultar botón flotante en escritorio cuando se abre modal c2c
    if (id === 'c2c' && $(window).width() > 768) {
        $('.social-media-footer').hide();
    }
}

function closeModal(id) {
    setTimeout(function () {
        $('#modal-' + id + '-cont').removeClass('modal-cont-open');
        $('#modal-' + id + '-cont').css({ 'display': 'none' });
    }, 400);
    setTimeout(function () {
        $('.modal-back.' + id).removeClass('modal-back-open');
    }, 300);
    $('.' + id + '.modal-data').removeClass('modal-data-open');
    
    // Mostrar botón flotante en escritorio cuando se cierra modal c2c
    if (id === 'c2c' && $(window).width() > 768) {
        $('.social-media-footer').show();
    }
}

var horaInicioDiario = 9;
var horaFinDiario = 21;
var horaInicioFinde = 10;
var horaFinFinde = 21;
var abiertoDiario = true;
var abiertoSabado = false;
var abiertoDomingo = false;

function checkDayPhone() {
    var fecha = new Date();
    if (((fecha.getHours() >= horaInicioDiario && fecha.getHours() < horaFinDiario) && (diaSemana() != 'S' && diaSemana() != 'D') && (abiertoDiario == true)) || ((fecha.getHours() >= horaInicioFinde && fecha.getHours() < horaFinFinde) && (diaSemana() === 'S') && (abiertoSabado == true)) || ((fecha.getHours() >= horaInicioFinde && fecha.getHours() < horaFinFinde) && (diaSemana() === 'D') && (abiertoDomingo == true))) {
        openCallCenter = true;
    } else {
        hideBtnPhone();
        openCallCenter = false;
    }
}

function hideBtnPhone() {
    $('.btn-phone').addClass('display-none');
    $('.footer-cont').css({ 'padding': '15px 0' });
}

function controlMenuMobile() {
    $('#header-menu-mobile').toggleClass('header-menu-mobile-open');
    $('.header-menu-btn-mobile-bar').toggleClass('open-bar');
    $('.header-menu-btn-mobile-bar.a').toggleClass('open-rotate');
    $('.header-menu-btn-mobile-bar.c').toggleClass('open-rotate');
    $('.header-menu-btn-mobile-bar.b').toggleClass('open-bar-center');
}

// Scroll suave para imagen servicios móvil
$(document).ready(function() {
    $('.servicios-mobile-image-link').on('click', function(e) {
        e.preventDefault();
        var target = $('#servicios-mobile');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80 // Ajuste para el header fijo
            }, 800);
        }
    });
});
