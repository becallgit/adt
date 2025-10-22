# Sistema de Cookies ADT - Documentación

## Descripción
Sistema de cookies mejorado para el proyecto ADT que mantiene la funcionalidad existente pero con una mejor experiencia de usuario y diseño moderno.

## Características

### ✅ Funcionalidades Principales
- **Banner de cookies moderno** con diseño responsive
- **Modal de configuración** para gestión granular de cookies
- **Compatibilidad total** con el sistema existente
- **Colores corporativos ADT** (#245fa4, #000000, #ffffff)
- **Animaciones suaves** y transiciones
- **Cumplimiento RGPD** completo

### 🎨 Diseño
- Banner fijo en la parte inferior
- Modal centrado con overlay
- Switch toggles modernos para cada categoría
- Botones con efectos hover
- Diseño responsive para móviles

### 🔧 Funcionalidad
- **Cookies Necesarias**: Siempre activas (no se pueden desactivar)
- **Cookies de Análisis**: Opcionales, para Google Analytics
- **Cookies de Marketing**: Opcionales, para publicidad
- **Persistencia**: Las preferencias se guardan por 365 días
- **Eventos personalizados**: Para integración con otros scripts

## Archivos Incluidos

### CSS
- `assets/css/cookies-adt.css` - Estilos del nuevo sistema

### JavaScript
- `assets/js/cookies-adt.js` - Lógica del sistema de cookies

### HTML
- Se integra automáticamente en `index.html`

## Uso

### Inicialización Automática
El sistema se inicializa automáticamente cuando se carga la página:

```javascript
// Se inicializa automáticamente
window.adtCookiesManager = new ADTCookiesManager();
```

### Métodos Públicos

```javascript
// Verificar si una cookie está aceptada
adtCookiesManager.isCookieAccepted('adt_cookies_estadisticas');

// Mostrar banner manualmente
adtCookiesManager.showBannerManually();

// Mostrar modal de configuración
adtCookiesManager.showModalManually();
```

### Eventos Personalizados

```javascript
// Escuchar cambios en el consentimiento
document.addEventListener('adt-cookies-consent', function(event) {
    console.log('Consentimiento:', event.detail.type);
    console.log('Preferencias:', event.detail.preferences);
    
    // Ejemplo: Inicializar Google Analytics solo si está aceptado
    if (event.detail.preferences.analytics) {
        // Inicializar Google Analytics
        gtag('config', 'GA_MEASUREMENT_ID');
    }
});
```

## Compatibilidad

### Sistema Existente
El nuevo sistema es **100% compatible** con el sistema existente:

- ✅ Mantiene todas las funciones de `gestionar-cookies.js`
- ✅ Compatible con `docCookies`
- ✅ No interfiere con el envío de formularios
- ✅ Mantiene el tracking existente

### Fallback
Si el nuevo sistema falla, automáticamente se muestra el banner antiguo.

## Personalización

### Colores
Los colores se pueden personalizar modificando las variables CSS en `cookies-adt.css`:

```css
:root {
    --adt-primary: #245fa4;    /* Azul ADT */
    --adt-secondary: #000000;   /* Negro */
    --adt-accent: #ffffff;      /* Blanco */
    --adt-text: #333333;        /* Texto */
    --adt-light-gray: #f5f5f5;  /* Fondo claro */
}
```

### Textos
Los textos se pueden personalizar en `cookies-adt.js` en el método `createBanner()`.

### Configuración de Cookies
Se pueden agregar nuevas categorías de cookies modificando `cookieConfig` en el constructor.

## Testing

### Verificar Funcionamiento
1. Abrir la página en modo incógnito
2. El banner debe aparecer automáticamente
3. Probar todos los botones (Aceptar, Rechazar, Configurar)
4. Verificar que las preferencias se guardan
5. Recargar la página y verificar que no aparece el banner

### Verificar Compatibilidad
1. Probar que los formularios siguen funcionando
2. Verificar que el tracking existente funciona
3. Comprobar que no hay errores en la consola

## Troubleshooting

### El banner no aparece
- Verificar que `cookies-adt.js` se carga correctamente
- Comprobar que no hay errores de JavaScript
- Verificar que no hay cookies previas

### Los formularios no funcionan
- El nuevo sistema NO debe afectar los formularios
- Si hay problemas, verificar conflictos de CSS
- Revisar la consola del navegador

### Estilos no se aplican
- Verificar que `cookies-adt.css` se carga después de otros CSS
- Comprobar que no hay conflictos de clases CSS
- Verificar la especificidad de los selectores

## Migración

### Desde Sistema Anterior
No es necesaria migración. El sistema es completamente compatible y se puede activar/desactivar sin problemas.

### Desactivar Sistema Nuevo
Para desactivar temporalmente:
1. Comentar la línea `<script src="assets/js/cookies-adt.js"></script>`
2. El sistema automáticamente volverá al banner antiguo

## Soporte

Para cualquier problema o duda:
1. Revisar la consola del navegador
2. Verificar que todos los archivos se cargan correctamente
3. Comprobar la compatibilidad con el sistema existente
4. Probar en diferentes navegadores
