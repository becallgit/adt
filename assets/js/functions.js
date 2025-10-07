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
            let url = ('https:' == location.protocol ? 'https:' : 'http:') + '//backend.agrmediacion.com/es/api/send_click2call_adt?';

            console.log('adId desde las cookies:', docCookies.getItem('adId'));

            if (docCookies.hasItem('adt_fuente'))
                url += 'fuente=' + docCookies.getItem('adt_fuente') + '&';
            if (docCookies.hasItem('adt_campaign'))
                url += 'campanaId=' + docCookies.getItem('adt_campaign') + '&';
            if (docCookies.hasItem('gcadt_gclidlid'))
                url += 'gclid=' + docCookies.getItem('adt_gclid') + '&';
            if (docCookies.hasItem('adt_fclid'))
                url += 'fclid=' + docCookies.getItem('adt_fclid') + '&';
            if (docCookies.hasItem('adId'))
                url += 'adId=' + docCookies.getItem('adId') + '&';


            let servicio = docCookies.getItem('adt_servicio');

            url += 'telefono=' + telefono + '&servicio=' + (servicio ? servicio : '');
            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    if (data.success) {
                        let id = click2callId || docCookies.getItem('click2call');
                        window.modal_showed = true;
                        let respuesta = '<div id="enviado-ok-ctc' + id + '" class="c2c-formu-data p-5 col-xs-12">' +
                            '<strong class="text-center mb-4">¡Gracias por confiar en nosotros!</strong>' +
                            '<div onclick="closeRespC2c()" class="btn-close btn-close-c2c-resp"></div>' +
                            '<p>Uno de nuestros asesores se pondrá en contacto contigo en breve.</p>' +
                            '<div class="text-center pt-3"><img src="assets/img/Perfil completado 1.png" style="height: 120px" /></div>' +
                            '</div>';

                        if (!openCallCenter) {
                            respuesta = '<div id="enviado-ok-ctc' + id + '" class="c2c-formu-data p-5 col-xs-12">' +
                                '<strong class="text-center mb-4">¡Gracias por confiar en nosotros!</strong>' +
                                '<div onclick="closeRespC2c()" class="btn-close btn-close-c2c-resp"></div>' +
                                '<p>Nuestros agentes se pondrán en contacto contigo en nuestro horario de Lunes a Viernes de 9:00 a 21:00.</p>' +
                                '<div class="text-center pt-3"><img src="assets/img/Perfil completado 1.png" style="height: 120px" /></div>' +
                                '</div>';
                        }

                        $('#c2c-formu-resp' + type).css({ 'display': 'flex' });
                        $('#c2c-formu-resp' + type).html(respuesta);
                        resetFormC2c(type);
                        window.dataLayer = window.dataLayer || [];
                        dataLayer.push({ 'event': 'formSubmitOK' });
                        window.uetq = window.uetq || [];
                        window.uetq.push({ 'ec': 'click2call', 'ea': 'send', 'el': 'conversion' });
                    } else {
                        showErrorMsg(type, "Ocurrió un error. Vuelva a intentarlo más tarde.");
                    }
                },
                error: function () {
                    showErrorMsg(type, "Ocurrió un error. Vuelva a intentarlo más tarde.");
                }
            });

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
    $('.c2c-formu-resp').hide()
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
