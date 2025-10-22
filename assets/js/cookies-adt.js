/**
 * Sistema de Cookies ADT - JavaScript Mejorado
 * Mantiene la funcionalidad existente pero con mejor UX
 */

class ADTCookiesManager {
    constructor() {
        this.banner = null;
        this.modal = null;
        this.isInitialized = false;
        this.cookieExpiry = 365; // días
        
        // Guardar referencias de las funciones para poder remover los event listeners
        this.boundPreventNavigationKeys = this.preventNavigationKeys.bind(this);
        this.boundPreventNavigationClicks = this.preventNavigationClicks.bind(this);
        this.boundPreventFormSubmission = this.preventFormSubmission.bind(this);
        
        // Configuración de cookies
        this.cookieConfig = {
            necessary: {
                name: 'adt_cookies_necesarias',
                required: true,
                description: 'Cookies necesarias para el funcionamiento básico del sitio web'
            },
            analytics: {
                name: 'adt_cookies_estadisticas',
                required: false,
                description: 'Cookies de análisis que nos ayudan a mejorar el sitio web'
            },
            marketing: {
                name: 'adt_cookies_marketing',
                required: false,
                description: 'Cookies de marketing para mostrar publicidad relevante'
            }
        };
        
        this.init();
    }
    
    init() {
        if (this.isInitialized) return;
        
        // Esperar a que el DOM esté listo
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.setup());
        } else {
            this.setup();
        }
        
        this.isInitialized = true;
    }
    
    setup() {
        this.createBanner();
        this.createModal();
        this.bindEvents();
        
        // Mostrar banner si no hay consentimiento previo
        if (!this.hasConsent()) {
            this.showBanner();
        }
    }
    
    createBanner() {
        const bannerHTML = `
            <div id="adt-cookies-banner" class="adt-cookies-banner">
                <div class="adt-cookies-container">
                    <div class="adt-cookies-content">
                        <div class="adt-cookies-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div class="adt-cookies-text">
                            <h3 class="adt-cookies-title">🍪 Política de Cookies</h3>
                            <p class="adt-cookies-description">
                                Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias. 
                                <br><br>
                                <strong>Debe aceptar o rechazar las cookies para continuar navegando.</strong>
                                <br><br>
                                <a href="#" id="adt-cookies-policy-link">📋 Ver política de cookies completa</a>
                            </p>
                        </div>
                    </div>
                    <div class="adt-cookies-actions">
                        <button id="adt-cookies-accept-all" class="adt-cookies-btn adt-cookies-btn-primary">
                            ✅ Aceptar todas
                        </button>
                        <button id="adt-cookies-settings" class="adt-cookies-btn adt-cookies-btn-settings">
                            ⚙️ Configurar
                        </button>
                        <button id="adt-cookies-reject" class="adt-cookies-btn adt-cookies-btn-secondary">
                            ❌ Denegar
                        </button>
                    </div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', bannerHTML);
        this.banner = document.getElementById('adt-cookies-banner');
    }
    
    createModal() {
        const modalHTML = `
            <div id="adt-cookies-modal" class="adt-cookies-modal">
                <div class="adt-cookies-modal-content">
                    <div class="adt-cookies-modal-header">
                        <h2 class="adt-cookies-modal-title">Configuración de Cookies</h2>
                        <button id="adt-cookies-modal-close" class="adt-cookies-modal-close">×</button>
                    </div>
                    <div class="adt-cookies-modal-body">
                        <p style="margin-bottom: 20px; color: #666;">
                            Utilizamos cookies para mejorar su experiencia en nuestro sitio web. Puede elegir qué tipos de cookies desea permitir.
                            <br><br>
                            <strong>Las cookies necesarias son obligatorias y no se pueden desactivar.</strong>
                        </p>
                        
                        <div class="adt-cookies-category">
                            <div class="adt-cookies-category-header">
                                <h3 class="adt-cookies-category-title">Cookies Necesarias</h3>
                                <label class="adt-cookies-switch">
                                    <input type="checkbox" id="adt-cookies-necessary" checked disabled>
                                    <span class="adt-cookies-slider"></span>
                                </label>
                            </div>
                            <p class="adt-cookies-category-description">
                                Estas cookies son esenciales para el funcionamiento del sitio web y no se pueden desactivar.
                            </p>
                        </div>
                        
                        <div class="adt-cookies-category">
                            <div class="adt-cookies-category-header">
                                <h3 class="adt-cookies-category-title">Cookies de Análisis</h3>
                                <label class="adt-cookies-switch">
                                    <input type="checkbox" id="adt-cookies-analytics">
                                    <span class="adt-cookies-slider"></span>
                                </label>
                            </div>
                            <p class="adt-cookies-category-description">
                                Nos ayudan a entender cómo los visitantes interactúan con nuestro sitio web recopilando información de forma anónima.
                            </p>
                        </div>
                        
                        <div class="adt-cookies-category">
                            <div class="adt-cookies-category-header">
                                <h3 class="adt-cookies-category-title">Cookies de Marketing</h3>
                                <label class="adt-cookies-switch">
                                    <input type="checkbox" id="adt-cookies-marketing">
                                    <span class="adt-cookies-slider"></span>
                                </label>
                            </div>
                            <p class="adt-cookies-category-description">
                                Se utilizan para mostrar anuncios más relevantes para usted y sus intereses.
                            </p>
                        </div>
                    </div>
                    <div class="adt-cookies-modal-footer">
                        <button id="adt-cookies-save-preferences" class="adt-cookies-btn adt-cookies-btn-primary">
                            Guardar Preferencias
                        </button>
                        <button id="adt-cookies-reject-optional" class="adt-cookies-btn adt-cookies-btn-secondary">
                            Rechazar Opcionales
                        </button>
                        <button id="adt-cookies-accept-all-modal" class="adt-cookies-btn adt-cookies-btn-primary">
                            Aceptar Todas
                        </button>
                    </div>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        this.modal = document.getElementById('adt-cookies-modal');
        
        // Cargar preferencias existentes
        this.loadPreferences();
    }
    
    bindEvents() {
        // Banner events
        document.getElementById('adt-cookies-accept-all').addEventListener('click', () => {
            this.acceptAll();
        });
        
        document.getElementById('adt-cookies-reject').addEventListener('click', () => {
            this.rejectAll();
        });
        
        document.getElementById('adt-cookies-settings').addEventListener('click', () => {
            this.showModal();
        });
        
        document.getElementById('adt-cookies-policy-link').addEventListener('click', (e) => {
            e.preventDefault();
            this.showModal();
        });
        
        // Modal events
        document.getElementById('adt-cookies-modal-close').addEventListener('click', () => {
            this.hideModal();
        });
        
        document.getElementById('adt-cookies-save-preferences').addEventListener('click', () => {
            this.savePreferences();
        });
        
        document.getElementById('adt-cookies-accept-all-modal').addEventListener('click', () => {
            this.acceptAll();
        });
        
        document.getElementById('adt-cookies-reject-optional').addEventListener('click', () => {
            this.rejectAll();
        });
        
        // No cerrar modal al hacer clic fuera ya que no hay área fuera del contenido
        // Solo cerrar con el botón X o con Escape
        
        // Cerrar con tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.modal.classList.contains('show')) {
                this.hideModal();
            }
        });
    }
    
    showBanner() {
        if (this.banner) {
            this.banner.classList.add('show');
            this.banner.classList.remove('hide');
            
            // Bloquear scroll y navegación
            this.blockNavigation();
        }
    }
    
    hideBanner() {
        if (this.banner) {
            this.banner.classList.add('hide');
            this.banner.classList.remove('show');
            
            // Desbloquear scroll y navegación
            this.unblockNavigation();
            
            // Remover del DOM después de la animación
            setTimeout(() => {
                if (this.banner) {
                    this.banner.remove();
                }
            }, 500);
        }
    }
    
    blockNavigation() {
        // Bloquear scroll del body
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.width = '100%';
        
        // Bloquear eventos de teclado importantes
        document.addEventListener('keydown', this.boundPreventNavigationKeys);
        
        // Bloquear clics en enlaces y botones (excepto los del banner)
        document.addEventListener('click', this.boundPreventNavigationClicks, true);
        
        // Bloquear formularios
        document.addEventListener('submit', this.boundPreventFormSubmission, true);
    }
    
    unblockNavigation() {
        // Restaurar scroll del body
        document.body.style.overflow = '';
        document.body.style.position = '';
        document.body.style.width = '';
        
        // Remover event listeners usando las referencias guardadas
        document.removeEventListener('keydown', this.boundPreventNavigationKeys);
        document.removeEventListener('click', this.boundPreventNavigationClicks, true);
        document.removeEventListener('submit', this.boundPreventFormSubmission, true);
    }
    
    preventNavigationKeys(event) {
        // Bloquear teclas de navegación importantes
        const blockedKeys = [
            'Tab', 'Enter', 'Space', 'ArrowUp', 'ArrowDown', 
            'ArrowLeft', 'ArrowRight', 'Home', 'End', 'PageUp', 'PageDown'
        ];
        
        if (blockedKeys.includes(event.key)) {
            event.preventDefault();
            event.stopPropagation();
        }
    }
    
    preventNavigationClicks(event) {
        // Permitir clics dentro del banner de cookies
        if (this.banner && this.banner.contains(event.target)) {
            return;
        }
        
        // Permitir clics dentro del modal de cookies
        if (this.modal && this.modal.contains(event.target)) {
            return;
        }
        
        // Bloquear todos los demás clics
        event.preventDefault();
        event.stopPropagation();
        
        // Mostrar mensaje de que debe aceptar cookies primero
        this.showNavigationBlockedMessage();
    }
    
    preventFormSubmission(event) {
        // Permitir formularios dentro del banner de cookies
        if (this.banner && this.banner.contains(event.target)) {
            return;
        }
        
        // Permitir formularios dentro del modal de cookies
        if (this.modal && this.modal.contains(event.target)) {
            return;
        }
        
        // Bloquear envío de formularios
        event.preventDefault();
        event.stopPropagation();
        
        this.showNavigationBlockedMessage();
    }
    
    showNavigationBlockedMessage() {
        // Crear mensaje temporal
        const message = document.createElement('div');
        message.style.cssText = `
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--adt-danger);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 600;
            z-index: 10001;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            animation: slideDown 0.3s ease-out;
        `;
        message.textContent = '⚠️ Debe aceptar las cookies para continuar navegando';
        
        document.body.appendChild(message);
        
        // Remover mensaje después de 3 segundos
        setTimeout(() => {
            if (message.parentNode) {
                message.parentNode.removeChild(message);
            }
        }, 3000);
    }
    
    showModal() {
        if (this.modal) {
            this.modal.classList.add('show');
            // No bloquear scroll ni navegación cuando se muestra el modal
            // El modal debe permitir ver la web normal detrás
        }
    }
    
    hideModal() {
        if (this.modal) {
            this.modal.classList.remove('show');
            // No hay nada que restaurar ya que no bloqueamos nada
        }
    }
    
    acceptAll() {
        // Aceptar todas las cookies
        this.setCookie(this.cookieConfig.necessary.name, 'accepted');
        this.setCookie(this.cookieConfig.analytics.name, 'accepted');
        this.setCookie(this.cookieConfig.marketing.name, 'accepted');
        this.setCookie('adt_cookies_consent', 'all');
        
        this.hideBanner();
        this.hideModal();
        this.triggerConsentEvent('accepted');
    }
    
    rejectAll() {
        // Solo aceptar cookies necesarias
        this.setCookie(this.cookieConfig.necessary.name, 'accepted');
        this.setCookie(this.cookieConfig.analytics.name, 'rejected');
        this.setCookie(this.cookieConfig.marketing.name, 'rejected');
        this.setCookie('adt_cookies_consent', 'necessary');
        
        this.hideBanner();
        this.hideModal();
        this.triggerConsentEvent('rejected');
    }
    
    savePreferences() {
        const analytics = document.getElementById('adt-cookies-analytics').checked;
        const marketing = document.getElementById('adt-cookies-marketing').checked;
        
        // Siempre aceptar cookies necesarias
        this.setCookie(this.cookieConfig.necessary.name, 'accepted');
        
        // Guardar preferencias específicas
        this.setCookie(this.cookieConfig.analytics.name, analytics ? 'accepted' : 'rejected');
        this.setCookie(this.cookieConfig.marketing.name, marketing ? 'accepted' : 'rejected');
        this.setCookie('adt_cookies_consent', 'custom');
        
        this.hideBanner();
        this.hideModal();
        this.triggerConsentEvent('custom', { analytics, marketing });
    }
    
    loadPreferences() {
        // Cargar preferencias existentes en el modal
        // Si no hay preferencias previas, marcar las opcionales por defecto
        const analyticsAccepted = this.getCookie(this.cookieConfig.analytics.name) === 'accepted' || 
                                 this.getCookie(this.cookieConfig.analytics.name) === null;
        const marketingAccepted = this.getCookie(this.cookieConfig.marketing.name) === 'accepted' || 
                                 this.getCookie(this.cookieConfig.marketing.name) === null;
        
        document.getElementById('adt-cookies-analytics').checked = analyticsAccepted;
        document.getElementById('adt-cookies-marketing').checked = marketingAccepted;
    }
    
    hasConsent() {
        return this.getCookie('adt_cookies_consent') !== null;
    }
    
    setCookie(name, value) {
        const date = new Date();
        date.setTime(date.getTime() + (this.cookieExpiry * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = `${name}=${value};${expires};path=/;SameSite=Lax`;
    }
    
    getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    
    triggerConsentEvent(type, preferences = {}) {
        // Disparar evento personalizado para que otros scripts puedan reaccionar
        const event = new CustomEvent('adt-cookies-consent', {
            detail: {
                type: type,
                preferences: preferences,
                timestamp: new Date().toISOString()
            }
        });
        
        document.dispatchEvent(event);
        
        // Mantener compatibilidad con el sistema existente
        if (typeof docCookies !== 'undefined') {
            docCookies.setItem('adt', 'adt');
            docCookies.setItem('adt_cookies_necesarias', 'adt_cookies_necesarias');
            
            if (preferences.analytics) {
                docCookies.setItem('adt_cookies_estadisticas', 'adt_cookies_estadisticas');
            }
        }
        
        console.log('ADT Cookies: Consentimiento guardado', { type, preferences });
    }
    
    // Método público para verificar si una cookie está aceptada
    isCookieAccepted(cookieName) {
        return this.getCookie(cookieName) === 'accepted';
    }
    
    // Método público para mostrar el banner manualmente
    showBannerManually() {
        this.showBanner();
    }
    
    // Método público para mostrar el modal manualmente
    showModalManually() {
        this.showModal();
    }
}

// Inicializar el sistema de cookies cuando el DOM esté listo
let adtCookiesManager;

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        adtCookiesManager = new ADTCookiesManager();
    });
} else {
    adtCookiesManager = new ADTCookiesManager();
}

// Hacer disponible globalmente para compatibilidad
window.ADTCookiesManager = ADTCookiesManager;
window.adtCookiesManager = adtCookiesManager;
