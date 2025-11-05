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
            // Construir URL con parámetros GET como en tuofertaenergetica.es
            let url = getConfig().backendUrl;
            
            console.log('Enviando teléfono al backend:', telefono);
            console.log('Servicio:', docCookies.getItem('adt_servicio') || '');
            
            // Mostrar indicador de carga
            showLoadingIndicator(type);
            
            // Agregar parámetros a la URL
            if (docCookies.hasItem('adt_fuente'))
                url += 'fuente=' + docCookies.getItem('adt_fuente') + '&';
            if (docCookies.hasItem('adt_campaign'))
                url += 'campanaId=' + docCookies.getItem('adt_campaign') + '&';
            if (docCookies.hasItem('adt_medium'))
                url += 'medium=' + docCookies.getItem('adt_medium') + '&';
            if (docCookies.hasItem('adt_term'))
                url += 'term=' + docCookies.getItem('adt_term') + '&';
            if (docCookies.hasItem('adt_content'))
                url += 'content=' + docCookies.getItem('adt_content') + '&';
            if (docCookies.hasItem('adt_gclid'))
                url += 'gclid=' + docCookies.getItem('adt_gclid') + '&';
            if (docCookies.hasItem('adt_fclid'))
                url += 'fclid=' + docCookies.getItem('adt_fclid') + '&';
            if (docCookies.hasItem('adId'))
                url += 'adId=' + docCookies.getItem('adId') + '&';
            if (docCookies.hasItem('adt_keyword'))
                url += 'keyword=' + docCookies.getItem('adt_keyword') + '&';
            
            // Agregar servicio
            let servicio = docCookies.getItem('adt_servicio') || '';
            if (type === '-modal') {
                servicio = docCookies.getItem('adt_servicio') || '';
            }
            
            // Agregar teléfono al final
            url += 'telefono=' + telefono + '&servicio=' + servicio;
            
            console.log('URL completa:', url);
            console.log('Parámetros capturados:', {
                campaignid: docCookies.getItem('adt_campaignid'),
                adgroupid: docCookies.getItem('adt_adgroupid'),
                keyword: docCookies.getItem('adt_keyword'),
                adId: docCookies.getItem('adt_adId')
            });
            
            // Realizar llamada AJAX GET al backend
            $.ajax({
                url: url,
                type: 'GET',
                timeout: getConfig().timeout,
                success: function(response) {
                    console.log('Respuesta del backend:', response);
                    console.log('Tipo de respuesta:', typeof response);
                    
                    // Verificar si la respuesta es un string JSON
                    if (typeof response === 'string') {
                        try {
                            response = JSON.parse(response);
                        } catch (e) {
                            console.error('Error parseando JSON:', e);
                            handleErrorResponse(null, 'error', 'Respuesta del servidor no válida', type);
                            return;
                        }
                    }
                    
                    if (response && response.success) {
                        handleSuccessResponse(response, type, click2callId);
                    } else {
                        // Si el backend devuelve success: false, mostrar el mensaje de error específico
                        const config = getConfig();
                        let errorMessage = response.error || config.messages.error;
                        
                        // Verificar si es un registro duplicado
                        if (response.error && response.error.includes('duplicado')) {
                            errorMessage = 'Este teléfono ya está registrado. Nuestro equipo se pondrá en contacto contigo pronto.';
                        }
                        
                        // Ocultar el indicador de carga
                        $('#c2c-formu-resp' + type).hide();
                        
                        // Mostrar mensaje de error específico del backend
                        $('#c2c-form-msg' + type).html(errorMessage).show();
                        $('#c2c-form-msg' + type).css({ 'color': 'red', 'font-weight': 'bold' });
                        
                        // Restaurar formulario después de un tiempo
                        setTimeout(function() {
                            $('#c2c-form-msg' + type).html('&nbsp;').hide();
                        }, 5000);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error en la llamada al backend:', error);
                    console.error('Status:', status);
                    console.error('Response:', xhr.responseText);
                    console.error('XHR:', xhr);
                    
                    // Manejar específicamente el error 403 (registro duplicado)
                    if (xhr.status === 403) {
                        const config = getConfig();
                        let errorMessage = 'Este teléfono ya está registrado. Nuestro equipo se pondrá en contacto contigo pronto.';
                        
                        // Ocultar el indicador de carga
                        $('#c2c-formu-resp' + type).hide();
                        
                        // Mostrar mensaje específico para registro duplicado
                        $('#c2c-form-msg' + type).html(errorMessage).show();
                        $('#c2c-form-msg' + type).css({ 'color': 'orange', 'font-weight': 'bold' });
                        
                        // Restaurar formulario después de un tiempo
                        setTimeout(function() {
                            $('#c2c-form-msg' + type).html('&nbsp;').hide();
                        }, 5000);
                        return;
                    }
                    
                    handleErrorResponse(xhr, status, error, type);
                }
            });

            function showErrorMsg(type, message) {
                $('#c2c-form-msg' + type).html(message).show();
                addMsgGtm(type);
            }
        } else {
            const config = getConfig();
            $('#c2c-form-msg' + type).html(config.messages.privacyRequired);
            $('#c2c-checkbox-label' + type).addClass('checkbox-error');
            $('#c2c-form-msg' + type).show();
            addMsgGtm(type);
        }
    } else {
        const config = getConfig();
        $('#c2c-form-msg' + type).html(config.messages.phoneRequired);
        $('#c2c-phone' + type).css({ 'borderColor': 'red' });
        $('#c2c-form-msg' + type).show();
        addMsgGtm(type);
    }
    return false;
}

// Función para mostrar indicador de carga
function showLoadingIndicator(type) {
    const config = getConfig();
    const loadingHtml = '<div class="loading-indicator" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; min-height: 200px;">' +
        '<div class="spinner" style="border: 4px solid #f3f3f3; border-top: 4px solid #245fa4; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; margin-bottom: 20px;"></div>' +
        '<p style="color: #245fa4; font-size: 16px;">' + config.messages.loading + '</p>' +
        '</div>';
    
    // Mostrar el indicador de carga en el elemento de respuesta
    $('#c2c-formu-resp' + type).css({ 'display': 'flex' });
    $('#c2c-formu-resp' + type).html(loadingHtml);
}

// Función para manejar respuesta exitosa del backend
function handleSuccessResponse(response, type, click2callId) {
    console.log('Procesando respuesta exitosa:', response);
    console.log('Tipo de formulario:', type);
    console.log('Elemento de respuesta:', '#c2c-formu-resp' + type);
    
    const config = getConfig();
    let id = click2callId || docCookies.getItem('click2call');
    window.modal_showed = true;
    
    // Determinar el mensaje basado en la respuesta del backend
    let message = response.message || config.messages.successMessage;
    
    // Si el backend indica que está fuera del horario
    if (response.outsideHours) {
        message = config.messages.outsideHoursMessage;
    }
    
    let respuesta = '<div id="enviado-ok-ctc' + id + '" class="c2c-formu-data p-5 col-xs-12" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; min-height: 300px; position: relative;">' +
        '<div onclick="closeRespC2c()" class="btn-close btn-close-c2c-resp" style="position: absolute; top: 15px; right: 15px; cursor: pointer; font-size: 24px; color: #999; background: #f0f0f0; border-radius: 50%; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; line-height: 1;">×</div>' +
        '<strong style="font-size: 24px; color: #245fa4; margin-bottom: 20px;">' + config.messages.success + '</strong>' +
        '<p style="font-size: 16px; margin-bottom: 30px; color: #333;">' + message + '</p>' +
        '<div class="text-center success-image-container"><img src="assets/img/ADT-alarmas.png" style="height: 200px; width: auto;" class="success-image" /></div>' +
        '</div>';

    // Para ambos formularios (banner y modal), usar el mismo método
    console.log('Mostrando mensaje de éxito en:', '#c2c-formu-resp' + type);
    $('#c2c-formu-resp' + type).css({ 'display': 'flex' });
    $('#c2c-formu-resp' + type).html(respuesta);
    console.log('Mensaje de éxito mostrado');
    
    resetFormC2c(type);
    
    // Eventos de tracking
    if (config.tracking.enableGTM) {
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({ 'event': 'formSubmitOK' });
        
        // GTM LeadOfertaAlarma event
        window.dataLayer.push({
            event: "LeadOfertaAlarma",
            leadInfo: {
                idform: docCookies.getItem('idform') || '',
                phone: response.phone || '',
                servicio: docCookies.getItem('adt_servicio') || '',
                leadId: response.leadId || ''
            }
        });
    }
    
    if (config.tracking.enableUET) {
        window.uetq = window.uetq || [];
        window.uetq.push({ 'ec': 'click2call', 'ea': 'send', 'el': 'conversion' });
    }
    
    if (config.tracking.enableConsole) {
        console.log('Formulario enviado exitosamente al backend');
    }
}

// Función para manejar errores del backend
function handleErrorResponse(xhr, status, error, type) {
    console.error('Error del backend:', { xhr, status, error });
    
    const config = getConfig();
    let errorMessage = config.messages.error;
    
    // Personalizar mensaje según el tipo de error
    if (status === 'timeout') {
        errorMessage = config.messages.timeout;
    } else if (xhr.status === 400) {
        errorMessage = config.messages.invalidData;
    } else if (xhr.status === 500) {
        errorMessage = config.messages.serverError;
    } else if (xhr.status === 0) {
        errorMessage = config.messages.connectionError;
    }
    
    // Ocultar el indicador de carga
    $('#c2c-formu-resp' + type).hide();
    
    // Mostrar mensaje de error
    $('#c2c-form-msg' + type).html(errorMessage).show();
    $('#c2c-form-msg' + type).css({ 'color': 'red', 'font-weight': 'bold' });
    
    // Restaurar formulario después de un tiempo
    setTimeout(function() {
        $('#c2c-form-msg' + type).html('&nbsp;').hide();
    }, 5000);
    
    // Tracking de error
    addMsgGtm(type);
    
    if (config.tracking.enableConsole) {
        console.log('Error manejado:', errorMessage);
    }
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
    if ($('#c2c-formu-resp-banner').find('#enviado-ok-ctc').length > 0) {
        location.reload();
        return;
    }
    
    // Si el mensaje está en un modal, cerrar el modal
    if ($('#c2c-formu-resp-modal').find('#enviado-ok-ctc').length > 0) {
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
