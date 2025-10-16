# Integración ADT con Artemiza

## Problema Solucionado

El código anterior estaba funcionando en **MODO LOCAL**, simulando la respuesta del servidor sin hacer llamadas reales a la API de Artemiza. Esto causaba que apareciera el mensaje "¡Gracias por confiar en nosotros!" sin recibir respuesta real de la API.

## Cambios Realizados

### 1. Modificación de `makeClick2Call` (assets/js/functions.js)
- ✅ Eliminado el modo local/simulación
- ✅ Implementada llamada AJAX real al backend usando método GET
- ✅ Agregado indicador de carga durante el envío
- ✅ Manejo completo de errores y respuestas
- ✅ Construcción de URL con parámetros GET (igual que tuofertaenergetica.es)

### 2. Nuevo archivo de configuración (assets/js/config.js)
- ✅ Configuración centralizada del endpoint del backend
- ✅ Endpoint correcto: `backend.agrmediacion.com/es/api/send_click2call_adt`
- ✅ Mensajes personalizables
- ✅ Configuración de timeouts y reintentos
- ✅ Configuración de horarios de atención
- ✅ Configuración de tracking

### 3. Estilos CSS actualizados (assets/css/estilos.css)
- ✅ Animación para spinner de carga
- ✅ Estilos para mensajes de error
- ✅ Transiciones suaves

### 4. Archivo principal actualizado (index.php)
- ✅ Incluido el archivo de configuración

## Configuración del Backend

### Endpoint Configurado
El frontend ahora envía datos a: `https://backend.agrmediacion.com/es/api/send_click2call_adt`

### Método de Envío
- **Método**: GET (igual que tuofertaenergetica.es)
- **Parámetros**: Se construyen en la URL como query parameters

### Parámetros Enviados
```
https://backend.agrmediacion.com/es/api/send_click2call_adt?fuente=google&campanaId=adt-alarmas&gclid=abc123&fclid=def456&adId=12345&telefono=612345678&servicio=servicio1
```

**Parámetros disponibles:**
- `fuente`: Fuente de tráfico (utm_source)
- `campanaId`: ID de campaña (utm_campaign)
- `gclid`: Google Click ID
- `fclid`: Facebook Click ID
- `adId`: ID de anuncio
- `telefono`: Número de teléfono
- `servicio`: Tipo de servicio seleccionado

### Respuesta Esperada del Backend

#### Respuesta Exitosa
```json
{
  "success": true,
  "message": "Uno de nuestros asesores se pondrá en contacto contigo en breve.",
  "leadId": "LEAD123456",
  "phone": "612345678",
  "outsideHours": false
}
```

#### Respuesta Fuera de Horario
```json
{
  "success": true,
  "message": "Mensaje personalizado del backend",
  "leadId": "LEAD123456",
  "phone": "612345678",
  "outsideHours": true
}
```

#### Respuesta de Error
```json
{
  "success": false,
  "error": "Error específico del backend",
  "code": "INVALID_PHONE"
}
```

## Configuración del Endpoint

El endpoint ya está configurado correctamente en `assets/js/config.js`:

```javascript
window.ADT_CONFIG = {
    backendUrl: ('https:' == location.protocol ? 'https:' : 'http:') + '//backend.agrmediacion.com/es/api/send_click2call_adt?',
    // ... resto de configuración
};
```

## Testing

### 1. Verificar que el endpoint esté funcionando
```bash
curl -X GET "https://backend.agrmediacion.com/es/api/send_click2call_adt?telefono=612345678&servicio=servicio1"
```

### 2. Verificar en la consola del navegador
- Abrir DevTools (F12)
- Ir a la pestaña Console
- Enviar un formulario
- Verificar que aparezcan los logs de envío y respuesta

### 3. Verificar en Network
- Abrir DevTools (F12)
- Ir a la pestaña Network
- Enviar un formulario
- Verificar que aparezca la llamada GET al endpoint

## Mensajes de Error

El sistema ahora maneja diferentes tipos de errores:

- **Timeout**: "La solicitud tardó demasiado. Por favor, verifica tu conexión e inténtalo de nuevo."
- **400 Bad Request**: "Los datos enviados no son válidos. Por favor, verifica el teléfono e inténtalo de nuevo."
- **500 Server Error**: "Error interno del servidor. Por favor, inténtalo más tarde."
- **Connection Error**: "No se pudo conectar con el servidor. Por favor, verifica tu conexión."

## Tracking

El sistema mantiene el tracking existente:
- ✅ Google Tag Manager (GTM)
- ✅ UET (Universal Event Tracking)
- ✅ Console logs (configurable)

## Diferencias con tuofertaenergetica.es

### Similitudes
- ✅ Mismo endpoint base (`backend.agrmediacion.com`)
- ✅ Mismo método GET con parámetros en URL
- ✅ Misma estructura de respuesta
- ✅ Mismo manejo de errores

### Diferencias
- 🔄 Endpoint específico: `/send_click2call_adt` vs `/send_click2call_repsol`
- 🔄 Parámetros específicos de ADT vs Repsol
- 🔄 Tracking events: `LeadOfertaAlarma` vs `LeadOfertaEnergía`

## Próximos Pasos

1. ✅ **Endpoint configurado** correctamente
2. ✅ **Método GET implementado** igual que tuofertaenergetica.es
3. ✅ **Parámetros construidos** en la URL
4. **Probar la integración** con números de teléfono reales
5. **Verificar que Artemiza reciba los datos** correctamente

## Notas Importantes

- El sistema ahora envía **datos reales** al backend usando el mismo método que tuofertaenergetica.es
- Se mantiene **compatibilidad** con el tracking existente
- Los **mensajes son configurables** desde el archivo de configuración
- Se incluye **manejo robusto de errores**
- El **indicador de carga** mejora la experiencia del usuario
- **Mismo endpoint base** que el proyecto que ya funciona correctamente
