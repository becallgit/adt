// Configuración del backend para Artemiza
window.ADT_CONFIG = {
    // Endpoint del backend para enviar leads a Artemiza
    backendUrl: ('https:' == location.protocol ? 'https:' : 'http:') + '//backend.agrmediacion.com/es/api/send_click2call_adt?',
    
    // Configuración de timeout para las llamadas AJAX (en milisegundos)
    timeout: 10000,
    
    // Configuración de reintentos en caso de error
    maxRetries: 3,
    retryDelay: 2000, // 2 segundos entre reintentos
    
    // Configuración de horarios de atención
    businessHours: {
        weekdays: {
            start: 9,  // 9:00 AM
            end: 21     // 9:00 PM
        },
        saturday: {
            start: 10, // 10:00 AM
            end: 21    // 9:00 PM
        },
        sunday: {
            start: 10, // 10:00 AM
            end: 21    // 9:00 PM
        }
    },
    
    // Mensajes personalizables
    messages: {
        loading: 'Enviando datos...',
        success: '¡Gracias por confiar en nosotros!',
        successMessage: 'Uno de nuestros asesores se pondrá en contacto contigo en breve.',
        outsideHoursMessage: 'Nuestros agentes se pondrán en contacto contigo en nuestro horario de Lunes a Viernes de 9:00 a 21:00.',
        error: 'Ha ocurrido un error al enviar los datos. Por favor, inténtalo de nuevo.',
        timeout: 'La solicitud tardó demasiado. Por favor, verifica tu conexión e inténtalo de nuevo.',
        invalidData: 'Los datos enviados no son válidos. Por favor, verifica el teléfono e inténtalo de nuevo.',
        serverError: 'Error interno del servidor. Por favor, inténtalo más tarde.',
        connectionError: 'No se pudo conectar con el servidor. Por favor, verifica tu conexión.',
        privacyRequired: 'Debes aceptar la política de privacidad',
        phoneRequired: 'Debes introducir un teléfono válido'
    },
    
    // Configuración de tracking
    tracking: {
        enableGTM: true,
        enableUET: true,
        enableConsole: true
    }
};

// Función para obtener la configuración
function getConfig() {
    return window.ADT_CONFIG;
}

// Función para actualizar la URL del backend
function setBackendUrl(url) {
    window.ADT_CONFIG.backendUrl = url;
}

// Función para verificar si estamos en horario de atención
function isBusinessHours() {
    const config = getConfig();
    const now = new Date();
    const day = now.getDay(); // 0 = Domingo, 1 = Lunes, ..., 6 = Sábado
    const hour = now.getHours();
    
    let schedule;
    if (day === 0) { // Domingo
        schedule = config.businessHours.sunday;
    } else if (day === 6) { // Sábado
        schedule = config.businessHours.saturday;
    } else { // Lunes a Viernes
        schedule = config.businessHours.weekdays;
    }
    
    return hour >= schedule.start && hour < schedule.end;
}

console.log('ADT Config cargado:', window.ADT_CONFIG);
