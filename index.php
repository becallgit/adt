<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ALARMAS ADT</title>
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo.png?v=2" />
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/logo.png?v=2" />
  <link rel="shortcut icon" type="image/png" href="/assets/img/logo.png?v=2" />
  <link rel="apple-touch-icon" href="/assets/img/logo.png?v=2" />

  <link href="assets/css/bootstrap-v4.5.3.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/estilos.css" />
  <link rel="stylesheet" href="assets/css/estilos_extras.css" />
  <link rel="stylesheet" href="assets/css/cookies-adt.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link href="assets/css/owl-carousel-v2.3.4.min.css" rel="stylesheet" />
  <link
    href="assets/css/owl-carousel-theme-v2.3.4.min.css"
    rel="stylesheet" />

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <style>
    /* Responsive styles for App ADT title */
    @media (max-width: 1200px) {
      .banner-text p {
        font-size: 20px !important;
      }
    }
    
    @media (max-width: 992px) {
      .banner-text p {
        font-size: 18px !important;
      }
    }
    
    @media (max-width: 768px) {
      .banner-text p {
        font-size: 16px !important;
      }
    }
    
    @media (max-width: 576px) {
      .banner-text p {
        font-size: 14px !important;
      }
    }
  </style>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T5QGTHD3');</script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5QGTHD3"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
   
  <div class="hidden-xs" style="background: #000; position: fixed; right: 10px; top: 50%; z-index: 99999;border-radius:50px; padding: 5px 30px;">
    <div class="row">
      <div class="col-xs-12 text-center px-3">
        <a href="tel:919443678">
          <img src="assets/img/telf.png" alt="" style="height: 25px"><br>
          <small class="text-white">Llámanos</small>
        </a>
      </div>
    </div>
  </div>
  <div class="header">
    <!-- Versión Desktop -->
    <img
      src="assets/img/agente-autorizado.png"
      alt="agente-autorizado"
      class="agente-autorizado hidden-xs" />
    <a href="tel:919443678" class="hidden-xs">
      <img
        src="assets/img/adt-boton-llamada.png"
        alt="adt-boton-llamada"
        class="adt-boton-llamada" />
    </a>
    
    <!-- Versión Móvil -->
    <div class="header-mobile">
      <div class="logo-adt-mobile">
        <img
          src="assets/img/Group 86.png"
          alt="Group 86"
          class="logo-adt-img" />
      </div>
      <a href="tel:919443678" class="btn-llamar-mobile">
        <img src="assets/img/llamanos movil.png" alt="Llamanos móvil" style="width: 100%; height: auto;" />
      </a>
    </div>
  </div>

  <div class="hero">
    <!-- Banner Desktop -->
    <img
      src="assets/img/alarmas-adt.png"
      alt="alarmas-adt"
      class="alarmas-adt hidden-xs"
      style="width: 100%; height: auto; object-fit: cover; min-height: 600px;" />
    
    <!-- Banner Móvil -->
    <img
      src="assets/img/alamar-movil.png"
      alt="alamar-movil"
      class="alamar-movil hidden-lg" />

    <div class="hero-content">
      <div class="offer" style="position: relative;">
        <img src="assets/img/oferta-ADT.png" alt="oferta-ADT" class="hidden-sm hidden-xs" />
        <p style="font-style: italic; font-size: 14px; color: #000; text-align: center; margin-top: 30px; width: 100%;" class="hidden-sm hidden-xs">
          *19,90€ con iva incluido durante los 4 primeros meses sobre el precio tarifa del paquete elegido. Después desde 42,35€/mes IVA incluido. Instalación y alta gratis en paquetes ADT para hogar. Servicio ADT help incluido de acuerdo con las <a href="assets/Bases/bases (1).pdf" download style="color: #000; text-decoration: underline;">condiciones de promoción</a>.
        </p>
      </div>

      <!-- CTA Principal -->
      <div class="cta figma-form" id="formulario-principal">
        <!-- Imagen solo en desktop -->
        <img src="assets/img/formulario-adt.png" alt="Formulario adt" class="hidden-xs" />
        
        <!-- Título principal según Figma -->
        <h2 class="figma-form-title">¡Contrata Ahora!</h2>
        
        <!-- Subtítulo según Figma -->
        <p class="figma-form-subtitle">¿Lo prefieres? Te llamamos</p>
        
        <!-- Campo de teléfono según Figma -->
        <div class="figma-form-field">
          <input 
            type="tel" 
            class="figma-form-input" 
            placeholder="Teléfono" 
            id="c2c-phone-banner" 
            pattern="[0-9]*" 
            inputmode="numeric" 
            required />
        </div>
        
        <!-- Checkbox de privacidad según Figma -->
        <div class="figma-form-checkbox">
          <input id="c2c-checkbox-banner" type="checkbox" class="figma-checkbox" />
          <label for="c2c-checkbox-banner" class="figma-checkbox-label">
            Acepto la <span id="privacidad-modal-banner" class="figma-privacy-link">Política de Privacidad</span>
          </label>
        </div>
        
        <!-- Botón principal según Figma -->
        <button 
          class="figma-form-button" 
          style="margin-bottom: 15px !important;"
          onclick="docCookies.setItem('idform', 'formulario-header-form'); makeClick2Call($('#c2c-phone-banner').val(), $('#c2c-checkbox-banner').is(':checked'),'-banner', 1); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-header-form'});">
          Te llamamos GRATIS
        </button>
        
        <!-- Texto promocional solo para móvil -->
        <div class="mobile-promo-text" style="display: none; position: relative; margin-top: 10px;">
          <p style="font-size: 12px; color: #666; margin: 0; line-height: 1.3;">*19,90€ con iva incluido durante los 4 primeros meses sobre el precio tarifa del paquete elegido. Después desde 42,35€/mes IVA incluido. Instalación y alta gratis en paquetes ADT para hogar. Servicio ADT help incluido de acuerdo con las condiciones de promoción.</p>
        </div>
        
        <!-- Texto legal DGP según Figma -->
        <p class="figma-form-legal hidden-xs">
          ADT es una empresa de Seguridad homologada, inscrita en el Registro
          de Seguridad de la DGP con el nº 2817
        </p>
        
        <!-- Mensajes de respuesta -->
        <p id="c2c-form-msg-banner" class="c2c-form-msg">&nbsp;</p>
        <div id="c2c-formu-resp-banner" class="c2c-formu-resp"></div>
      </div>
      
      <!-- Imagen CTA debajo del formulario solo en móvil -->
      <img src="assets/img/cta.png" alt="CTA móvil" class="cta-mobile-image hidden-lg" />
      
      <!-- Imagen servicios con scroll solo en móvil -->
      <a href="#servicios-mobile" class="servicios-mobile-image-link hidden-lg">
        <img src="assets/img/scroll servicios.png" alt="Scroll Servicios" class="servicios-mobile-image" />
      </a>
    </div>
  </div>
  
  <div id="servicios-mobile" class="servicios-mobile hidden-lg">
    <div class="servicios-mobile-carousel owl-carousel owl-theme">
      <!-- CARD 1 -->
      <div class="serv-card" style="width: 320px !important; height: 850px !important; background: #F5F5F5 !important; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important; border-radius: 12px !important; margin: 0 auto 15px auto !important; padding: 0 !important; text-align: left !important; overflow: hidden !important;">
        <h3 style="margin: 0 !important; padding: 12px 16px !important; font-size: 22px !important; font-weight: 700 !important; color: #FFFFFF !important; background-color: #245FA4 !important; border-top-left-radius: 12px !important; border-top-right-radius: 12px !important; text-align: center !important;">SEGURIDAD</h3>
        <img class="serv-photo" src="assets/img/fondo-segurida.png" alt="protección hogar" style="width: 100% !important; height: 120px !important; object-fit: cover !important; margin: 0 !important;" />
        <div class="content" style="padding: 20px !important; text-align: left !important;">
          <img class="serv-icon" src="assets/img/icono_seguridad.png" alt="icono seguridad" style="margin-top: -10px !important;" />
          <p style="margin: 0 !important; padding: 0 !important; margin-bottom: -45px !important; line-height: 1.2 !important; font-size: 18px !important;">Tu hogar o negocio protegido 24/7 desde cualquier lugar</p>
          <ul class="serv-list" style="margin: 0 !important; margin-top: -10px !important; padding: 0 !important; list-style: none !important; color: #000 !important;">
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Protección con sensores de apertura y cierre y detectores de movimiento.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Conexión o desconexión de tu alarma desde tu móvil</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Programa un autoarmado y/o autodesarmado.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Recordatorios de conexión de tu alarma según tus rutinas.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Visualización de clips de vídeo para ver los saltos de alarma.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Gestión inteligente de usuarios.</li>
          </ul>
          <span class="smart-arming" style="margin-top: 15px !important; display: block !important;">Smart Arming INCLUIDO</span>
          <button class="btn-primary serv-btn btn-protegete" data-click2call="3" data-servicio="servicio1">PROTÉGETE AHORA</button>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="serv-card" style="width: 320px !important; height: 850px !important; background: #F5F5F5 !important; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important; border-radius: 12px !important; margin: 0 auto 15px auto !important; padding: 0 !important; text-align: left !important; overflow: hidden !important;">
        <h3 style="margin: 0 !important; padding: 12px 16px !important; font-size: 22px !important; font-weight: 700 !important; color: #FFFFFF !important; background-color: #245FA4 !important; border-top-left-radius: 12px !important; border-top-right-radius: 12px !important; text-align: center !important;">VÍDEO INTELIGENCIA</h3>
        <img class="serv-photo" src="assets/img/fondo-vigilancia.png" alt="protección negocio" style="width: 100% !important; height: 120px !important; object-fit: cover !important; margin: 0 !important;" />
        <div class="content" style="padding: 20px !important; text-align: left !important;">
          <img class="serv-icon" src="assets/img/camara-seguridad.icon.png" alt="icono cámara" style="margin-top: -10px !important;" />
          <p style="margin: 0 !important; padding: 0 !important; margin-bottom: -45px !important; line-height: 1.2 !important; font-size: 18px !important;">Suma videointeligencia y controla tu hogar o negocio en tiempo real.</p>
          <ul class="serv-list" style="margin: 0 !important; margin-top: -10px !important; padding: 0 !important; list-style: none !important; color: #000 !important;">
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Recibe notificaciones "push" con clips de vídeo cuando haya alguna actividad en tu hogar.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Define qué eventos deseas grabar y almacénalos de forma segura en la nube.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Conecta las cámaras IP a la central receptora de alarmas de ADT para una mayor protección.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Con la analítica de vídeo detecta y graba el movimiento de personas, mascotas o vehículos.</li>
          </ul>
          <span class="smart-arming" style="margin-top: 15px !important; display: block !important;">Smart Arming INCLUIDO</span>
          <button class="btn-primary serv-btn btn-protegete" data-click2call="4" data-servicio="servicio2">PROTÉGETE AHORA</button>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="serv-card" style="width: 320px !important; height: 850px !important; background: #F5F5F5 !important; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important; border-radius: 12px !important; margin: 0 auto 15px auto !important; padding: 0 !important; text-align: left !important; overflow: hidden !important;">
        <h3 style="margin: 0 !important; padding: 12px 16px !important; font-size: 22px !important; font-weight: 700 !important; color: #FFFFFF !important; background-color: #245FA4 !important; border-top-left-radius: 12px !important; border-top-right-radius: 12px !important; text-align: center !important;">CONECTIVIDAD</h3>
        <img class="serv-photo" src="assets/img/fondo_domotica.png" alt="ADT Help" style="width: 100% !important; height: 120px !important; object-fit: cover !important; margin: 0 !important;" />
        <div class="content" style="padding: 20px !important; text-align: left !important;">
          <img class="serv-icon" src="assets/img/adt_conectividad.png" alt="icono help" style="margin-top: -10px !important;" />
          <p style="margin: 0 !important; padding: 0 !important; margin-bottom: -45px !important; line-height: 1.2 !important; font-size: 18px !important;">Disfruta de mayor comodidad en tu hogar o negocio.</p>
          <ul class="serv-list" style="margin: 0 !important; margin-top: -10px !important; padding: 0 !important; list-style: none !important; color: #000 !important;">
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Control de la iluminación con encendido y apagado de luces programable.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Programa tus electrodomésticos y otros dispositivos.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Controla la apertura y cierre de puertas.</li>
            <li><img src="assets/img/adt-mini-ckeck.png" alt="check" /> Deja que tu alarma inteligente haga las cosas por ti a través de reglas, horarios, escenas y geo-servicios.</li>
          </ul>
          <span class="smart-arming" style="margin-top: 15px !important; display: block !important;">Smart Arming INCLUIDO</span>
          <button class="btn-primary serv-btn btn-protegete" data-click2call="5" data-servicio="servicio3">PROTÉGETE AHORA</button>
        </div>
      </div>
    </div>
  </div>

  <div class="titulo1 hidden-xs">
    <p>
      <span
        style="
            display: inline-block;
            transform: rotate(90deg);
            font-family: monospace;
            margin-right: 10px;
          ">></span>
      Protección que marca la diferencia
      <span
        style="
            display: inline-block;
            transform: rotate(90deg);
            font-family: monospace;
            margin-left: 10px;
          ">></span>
    </p>
    <!-- <img src="assets/img/titulo1-2.png" style="position: absolute; left: 0; top: 0;" alt="titulo1" /> -->
  </div>

  <div class="proteccion">
    <p class="porque">¿Por qué elegir ADT?</p>
    <p class="segundop">
      La tranquilidad de saber que todo está bajo control.
      <strong>ADT protección 24/7</strong>
    </p>
    <br />
    <br />
    <div class="container">
      <!-- Desktop: Carrusel -->
      <div class="owl-carousel owl-loaded owl-drag owl-theme cards hidden-xs">
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/aviso-policia-adt-icon.png" alt="icono" />
          </div>
          <h4>Aviso Policía</h4>
          <p>Aviso inmediato a policía en caso de intrusión.</p>
          <span class="destacado">Siempre disponibles para tí</span>
        </div>
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/instalacion-adt-icon.png" alt="icono" />
          </div>
          <h4>Instalación profesional</h4>
          <p>Nuestros técnicos dejan tu hogar protegido.</p>
          <span class="destacado">Instalación rápida, segura y garantizada</span>
        </div>
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/smarth-arming-adt.png" alt="icono" />
          </div>
          <h4>Smart Arming</h4>
          <p>
            Tu alarma se conecta por las noches y desconecta por las mañanas.
          </p>
          <span class="destacado">Armado inteligente</span>
        </div>
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/adt-help-icon.png" alt="icono" />
          </div>
          <h4>ADT Help</h4>
          <p>Pide ayuda inmediata en caso de urgencia, estés dónde estés.</p>
          <span class="destacado">Con nuestra App ADT Smart Security</span>
        </div>
      </div>

      <!-- Mobile: Sin carrusel -->
      <div class="cards-mobile hidden-lg">
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/aviso-policia-adt-icon.png" alt="icono" />
          </div>
          <h4>Aviso Policía</h4>
          <p>Aviso inmediato a policía en caso de intrusión.</p>
          <span class="destacado">Siempre disponibles para tí</span>
        </div>
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/instalacion-adt-icon.png" alt="icono" />
          </div>
          <h4>Instalación profesional</h4>
          <p>Nuestros técnicos dejan tu hogar protegido.</p>
          <span class="destacado">Instalación rápida, segura y garantizada</span>
        </div>
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/smarth-arming-adt.png" alt="icono" />
          </div>
          <h4>Smart Arming</h4>
          <p>
            Tu alarma se conecta por las noches y desconecta por las mañanas.
          </p>
          <span class="destacado">Armado inteligente</span>
        </div>
        <div class="card">
          <div class="card-icon">
            <img src="assets/img/adt-help-icon.png" alt="icono" />
          </div>
          <h4>ADT Help</h4>
          <p>Pide ayuda inmediata en caso de urgencia, estés dónde estés.</p>
          <span class="destacado">Con nuestra App ADT Smart Security</span>
        </div>
      </div>

      <button onclick="docCookies.setItem('idform', 'formulario-beneficios-form'); document.getElementById('formulario-principal').scrollIntoView({ behavior: 'smooth' }); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-beneficios-form'});" class="btn-primary btn-protegete" data-click2call="2">PROTÉGETE DESDE HOY</button>
    </div>
  </div>

  <div class="titulo2">
    <!-- <img src="assets/img/titulo2-2.png" alt="titulo2" /> -->
    <p>ADT Smart Security</p>
    <span>seguridad premium al mejor precio</span>
  </div>

  <div class="servicios">
    <!-- Desktop: Carrusel -->
    <div class="owl-carousel owl-loaded owl-drag owl-theme servicios-cards hidden-xs">
      <!-- CARD 1 -->
      <div class="serv-card" style="height: 1000px;">
        <h3>SEGURIDAD</h3>
        <img
          class="serv-photo"
          src="assets/img/fondo-segurida.png"
          alt="protección hogar" />
        <div class="content">
          <img
            class="serv-icon"
            src="assets/img/icono_seguridad.png"
            alt="icono seguridad" 
            style="margin-top: -10px !important;" />
          <p style="margin-bottom: 5px !important;">Tu hogar o negocio protegido 24/7 desde cualquier lugar</p>
          <ul class="serv-list">
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Protección con sensores de apertura y cierre y detectores de movimiento.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Conexión o desconexión de tu alarma desde tu móvil
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Programa un autoarmado y/o autodesarmado.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Recordatorios de conexión de tu alarma según tus rutinas.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Visualización de clips de vídeo para ver los saltos de alarma.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Gestión inteligente de usuarios.
            </li>
          </ul>
          <span class="smart-arming" style="margin-top: 15px !important; display: block !important;">Smart Arming INCLUIDO</span>
          <button class="btn-primary serv-btn btn-protegete" data-click2call="3" data-servicio="servicio1">PROTÉGETE AHORA</button>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="serv-card" style="height: 1000px;">
        <h3>VÍDEO INTELIGENCIA</h3>
        <img
          class="serv-photo"
          src="assets/img/fondo-vigilancia.png"
          alt="protección negocio" />
        <div class="content">
          <img
            class="serv-icon"
            src="assets/img/camara-seguridad.icon.png"
            alt="icono cámara" 
            style="margin-top: -10px !important;" />
          <p style="margin-bottom: 5px !important;">Suma videointeligencia y controla tu hogar o negocio en tiempo real.</p>
          <ul class="serv-list">
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Recibe notificaciones "push" con clips de vídeo cuando haya alguna actividad en tu hogar.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Define qué eventos deseas grabar y almacénalos de forma segura en la nube.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Conecta las cámaras IP a la central receptora de alarmas de ADT para una mayor protección.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Con la analítica de vídeo detecta y graba el movimiento de personas, mascotas o vehículos.
            </li>
          </ul>
          <span class="smart-arming" style="margin-top: 15px !important; display: block !important;">Smart Arming INCLUIDO</span>
          <button class="btn-primary serv-btn btn-protegete" data-click2call="4" data-servicio="servicio2">PROTÉGETE AHORA</button>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="serv-card" style="height: 1000px;">
        <h3>CONECTIVIDAD</h3>
        <img
          class="serv-photo"
          src="assets/img/fondo_domotica.png"
          alt="ADT Help" />
        <div class="content">
          <img
            class="serv-icon"
            src="assets/img/adt_conectividad.png"
            alt="icono help" 
            style="margin-top: -10px !important;" />
          <p style="margin-bottom: 5px !important;">Disfruta de mayor comodidad en tu hogar o negocio.</p>
          <ul class="serv-list">
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Control de la iluminación con encendido y apagado de luces programable.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Programa tus electrodomésticos y otros dispositivos.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Controla la apertura y cierre de puertas.
            </li>
            <li>
              <img src="assets/img/adt-mini-ckeck.png" alt="check" />
              Deja que tu alarma inteligente haga las cosas por ti a través de reglas, horarios, escenas y geo-servicios.
            </li>
          </ul>
          <span class="smart-arming" style="margin-top: 15px !important; display: block !important;">Smart Arming INCLUIDO</span>
          <button class="btn-primary serv-btn btn-protegete" data-click2call="5" data-servicio="servicio3">PROTÉGETE AHORA</button>
        </div>
      </div>
    </div>
    
  </div>

  <div class="banner-app">
    <img class="hidden-xs" src="assets/img/banner-seguridad-adt.png" alt="APP ADT Smart Security" />
    <img class="hidden-lg hidden-xs w-100 h-auto" src="assets/img/BANNER APP.png" alt="APP ADT Smart Security" />
    <div class="banner-text">
      <p style="color: #245FA4; font-size: 29px !important;" class="banner-title">
        <strong>Con nuestra App ADT Smart Security-</strong>
        tu hogar o negocio en tu mano
      </p>
      <ul class="list-app" style="font-size: 0.7em !important;">
        <li>
          <img src="assets/img/adt-check-blanco.png" alt="check" />
          Controla todos los dispositivos conectados
        </li>
        <li>
          <img src="assets/img/adt-check-blanco.png" alt="check" />
          Activa acciones por órdenes de voz como conectar o desconectar o ver cámara.
        </li>
        <li>
          <img src="assets/img/adt-check-blanco.png" alt="check" />
          Recibe alertas y recordatorios mediante notificaciones «push»
        </li>
        <li>
          <img src="assets/img/adt-check-blanco.png" alt="check" />
          Genera avisos de emergencia estés donde estés.
        </li>
        <li>
          <img src="assets/img/adt-check-blanco.png" alt="check" />
          Gestión inteligente de usuarios. Crea y edita diferentes perfiles.
        </li>
      </ul>
      <button onclick="docCookies.setItem('idform', 'formulario-appadt'); document.getElementById('formulario-principal').scrollIntoView({ behavior: 'smooth' }); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-appadt'});" class="btn-primary btn-protegete hidden-xs" data-click2call="6" style="margin-top: 40px !important;">INFÓRMATE AQUÍ</button>
    </div>
  </div>
  
  <!-- Sección móvil con fondo azul para el botón - FUERA del banner-app -->
  <div class="hidden-lg" style="background-color: #0057A7; padding: 30px 20px; text-align: center; margin-top: -1px;">
    <button onclick="docCookies.setItem('idform', 'formulario-appadt'); document.getElementById('formulario-principal').scrollIntoView({ behavior: 'smooth' }); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-appadt'});" class="btn-primary btn-protegete" data-click2call="6" style="background-color: white !important; color: #0057A7 !important; border: 2px solid white !important;">INFÓRMATE AQUÍ</button>
  </div>

  <div class="parent-integral">
    <div class="integral">
      <img
        src="assets/img/ADT-alarmas.png"
        alt="Seguridad Integral"
        class="sgint" />
      <div class="integral-content">
        <h2>SEGURIDAD INTELIGENTE</h2>
        <p>
          Un sistema que protege tu hogar o negocio las 24 horas con respuesta inmediata
          y aviso a policía y emergencias.
        </p>
        <ul class="list-integral">
          <li>
            <img src="assets/img/adt-mini-ckeck.png" alt="check" />
            Videovigilancia avanzada
          </li>
          <li>
            <img src="assets/img/adt-mini-ckeck.png" alt="check" />
            Conectividad y domótica
          </li>
          <li>
            <img src="assets/img/adt-mini-ckeck.png" alt="check" />
            Detección de inhibición y comunicación multivía.
          </li>
          <li>
            <img src="assets/img/adt-mini-ckeck.png" alt="check" /> Gestión
            centralizada en la app
          </li>
          <li>
            <img src="assets/img/adt-mini-ckeck.png" alt="check" /> Panel
            inteligente
          </li>
        </ul>
        <button onclick="docCookies.setItem('idform', 'formulario-seguridad-integral'); document.getElementById('formulario-principal').scrollIntoView({ behavior: 'smooth' }); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-seguridad-integral'});" class="btn-primary btn-protegete" data-click2call="7" style="margin-top: 20px; display: block; margin-left: auto; margin-right: auto;">Me Interesa</button>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="hidden-lg social-media-footer">
      <div class="row">
        <div class="col-xs-12 text-center px-3">
          <a href="tel:919443678">
            <img src="assets/img/telf.png" alt="" style="height: 25px"><br>
            <small class="text-white">Llámanos</small>
          </a>
        </div>
      </div>
    </div>
    <div class="oferta-especial">
      <div class="precio">
        <span>19,<span style="font-size: 30px">90 €/mes*</span></span>
      </div>
      <div class="detalles">
        <span>OFERTA ESPECIAL 4 meses + Instalación GRATUITA</span>
        <p style="font-style: italic; font-size: 12px; margin-top: 5px; color: #666; text-align: center;">*<a href="assets/Bases/bases (1).pdf" download style="color: #666; text-decoration: underline; cursor: pointer;">Consulta las condiciones de la promoción</a></p>
      </div>
      <div>
        <button onclick="docCookies.setItem('idform', 'formulario-footer-form'); document.getElementById('formulario-principal').scrollIntoView({ behavior: 'smooth' }); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-footer-form'});" class="btn-black btn-protegete" data-click2call="7"><span>PROTÉGETE AHORA</span></button>
      </div>
    </div>
    <div class="footer-top" style="margin-top: 30px;">
      <div class="logos-section">
        <div class="logos">
          <img src="assets/img/logo-becall.png" alt="logo becall" />
          <img src="assets/img/logo-adt-footer.png" alt="logo ADT" />
        </div>
        <p>
          <span><a href="assets/Bases/bases (1).pdf" download style="color: inherit; text-decoration: none;">Condiciones de Promoción</a></span> -
          <span id="privacidad-modal-footer" style="cursor: pointer">Política de Privacidad</span>-
          <span id="cookies-modal-footer" style="cursor: pointer">Política de Cookies</span>
        </p>
      </div>
      <a href="tel:919443678" class="hidden-xs">
        <img
          src="assets/img/boton-footer.png"
          alt="Boton footer"
          class="boton-footer" />
      </a>
    </div>
  </div>

  <div class="mobile-mini-form-spacer hidden-lg"></div>
  <div class="mobile-mini-form hidden-lg">
    <p class="mobile-mini-form-title">¿Lo prefieres? Te llamamos</p>
    <div class="mobile-mini-form-fields">
      <input
        type="tel"
        id="c2c-phone-footer-mobile"
        class="mobile-mini-form-input"
        placeholder="Teléfono"
        pattern="[0-9]*"
        inputmode="numeric"
        required />
      <button
        type="button"
        class="mobile-mini-form-button"
        onclick="docCookies.setItem('idform', 'formulario-footer-mobile'); makeClick2Call($('#c2c-phone-footer-mobile').val(), $('#c2c-checkbox-footer-mobile').is(':checked'), '-footer-mobile', 1); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-footer-mobile'});">
        Te llamamos
      </button>
    </div>
    <label for="c2c-checkbox-footer-mobile" class="mobile-mini-form-privacy" style="color: #fff;">
      <input id="c2c-checkbox-footer-mobile" type="checkbox" />
      <span>Acepto la <span id="privacidad-modal-footer-mobile" class="figma-privacy-link footer-privacy-link-mobile">Política de Privacidad</span></span>
    </label>
  </div>

  <div class="mobile-mini-form-spacer hidden-lg"></div>
  <div class="mobile-mini-form hidden-lg">
    <p class="mobile-mini-form-title">¿Lo prefieres? Te llamamos</p>
    <div class="mobile-mini-form-fields">
      <input
        type="tel"
        id="c2c-phone-footer-mobile"
        class="mobile-mini-form-input"
        placeholder="Teléfono"
        pattern="[0-9]*"
        inputmode="numeric"
        required />
      <button
        type="button"
        class="mobile-mini-form-button"
        onclick="docCookies.setItem('idform', 'formulario-footer-mobile'); makeClick2Call($('#c2c-phone-footer-mobile').val(), $('#c2c-checkbox-footer-mobile').is(':checked'), '-footer-mobile', 1); fbq('trackCustom', 'LeadOfertaAlarma', {idform: 'formulario-footer-mobile'});">
        Te llamamos
      </button>
    </div>
    <label for="c2c-checkbox-footer-mobile" class="mobile-mini-form-privacy">
      <input id="c2c-checkbox-footer-mobile" type="checkbox" />
      <span>Acepto la <span id="privacidad-modal-footer-mobile" class="figma-privacy-link">Política de Privacidad</span></span>
    </label>
  </div>

  <div id="modal-c2c-cont" class="modal-cont">
    <div id="cierre-modal-c2c-back" class="modal-back btn-medir c2c"></div>
    <div class="data-box c2c modal-data figma-modal" style="background-color: #fff; border-radius: 25px; padding: 0; overflow: visible; width: 394px; height: auto; max-height: 90vh; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
      
      <!-- Header negro con "Instalación GRATUITA" -->
      <div class="modal-c2c-header" style="background-color: #000; color: white; padding: 10px; text-align: center; border-radius: 25px 25px 0 0; position: relative;">
        <div
          id="cierre-modal-c2c-btn"
          class="btn-close btn-close-white btn-close-modal btn-medir c2c"
          style="position: absolute; top: 8px; right: 8px; width: 18px; height: 18px; font-size: 18px; font-weight: bold;">×</div>
        <p class="c2c-title" style="margin: 0; font-size: 18px; font-weight: bold; text-transform: uppercase; color: white; font-family: 'Roboto Condensed', sans-serif;">Instalación GRATUITA</p>
      </div>
      
          <!-- Sección azul con precio -->
      <div style="background-color: #245fa4; padding: 15px; position: relative;">
        <!-- Precio principal -->
        <div style="text-align: center; margin-bottom: 8px;">
          <span style="font-size: 45px; font-weight: bold; color: white; line-height: 1; font-family: 'Roboto Condensed', sans-serif;">19</span>
          <span style="font-size: 22px; font-weight: bold; color: white; vertical-align: top; font-family: 'Roboto Condensed', sans-serif;">,90 €/mes</span>
          <span style="font-size: 18px; color: white; vertical-align: top; font-family: 'Roboto Condensed', sans-serif;">*</span>
        </div>
        
        <!-- IVA incluido -->
        <div style="text-align: center; margin-bottom: 8px;">
          <span style="color: white; font-size: 12px; font-weight: bold; font-family: 'Roboto Condensed', sans-serif;">✓ IVA INCLUIDO</span>
        </div>
        
        <!-- Línea separadora -->
        <div style="border-top: 1px solid white; margin: 6px 0;"></div>
        
        <!-- Duración -->
        <div style="text-align: center;">
          <span style="color: white; font-size: 16px; font-weight: bold; text-transform: uppercase; font-family: 'Roboto Condensed', sans-serif;">DURANTE 4 MESES</span>
        </div>
        
        <!-- Línea separadora inferior -->
        <div style="border-top: 1px solid white; margin: 6px 0;"></div>
        
        <!-- Triángulo invertido hacia abajo -->
        <div style="position: absolute; bottom: -15px; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-top: 15px solid #245fa4;"></div>
      </div>
      
      <!-- Sección blanca con formulario -->
      <div style="background-color: #fff; padding: 15px; border-radius: 0 0 25px 25px;">
        <!-- Título principal -->
        <h2 style="text-align: center; font-size: 22px; font-weight: bold; color: #245fa4; margin-bottom: 6px; font-family: 'Roboto Condensed', sans-serif;">¡Contrata Ahora!</h2>
        
        <!-- Número de teléfono -->
        <p style="text-align: center; font-size: 22px; font-weight: bold; color: #245fa4; margin-bottom: 6px; font-family: 'Roboto Condensed', sans-serif;"><a href="tel:919443678" style="color: #245fa4; text-decoration: none;">919 44 36 78</a></p>
        
        <!-- Pregunta -->
        <p style="text-align: center; font-size: 16px; font-weight: bold; color: #000; margin-bottom: 10px; font-family: 'Roboto Condensed', sans-serif;">¿Lo prefieres? Te llamamos</p>
        
        <!-- Campo de teléfono -->
        <div style="margin-bottom: 10px;">
          <input
            type="tel"
            class="form-control"
            placeholder="Teléfono"
            id="c2c-phone-modal"
            pattern="[0-9]*"
            inputmode="numeric"
            required
            style="width: 100%; padding: 10px; border: 1px solid #245FA4; border-radius: 5px; font-size: 16px; font-family: 'Roboto Condensed', sans-serif;" />
        </div>
        
        <!-- Checkbox de privacidad -->
        <div style="margin-bottom: 10px;">
          <label style="display: flex; align-items: center; font-size: 12px; color: #000; font-family: 'Roboto Condensed', sans-serif;">
            <input
              id="c2c-checkbox-modal"
              type="checkbox"
              style="margin-right: 6px; width: 14px; height: 14px;" />
            Acepto la&nbsp;<span
              id="privacidad-modal-modal"
              class="btn-medir btn-politicas"
              style="color: #245fa4; text-decoration: underline; cursor: pointer;">Política de Privacidad</span>
          </label>
        </div>
        
        <!-- Texto legal DGP -->
        <p style="font-size: 12px; color: #000; margin-bottom: 12px; text-align: left; line-height: 1.2; font-family: 'Roboto Condensed', sans-serif; font-style: italic;">
          <strong>
            ADT es una empresa de Seguridad homologada, inscrita en el Registro
            de Seguridad de la DGP con el nº 2817
          </strong>
        </p>
        
        <!-- Botón principal -->
        <button
          id="enviar-c2c-modal"
          class="btn-black c2c-btn btn-medir w-100"
          onclick="makeClick2Call($('#c2c-phone-modal').val(), $('#c2c-checkbox-modal').is(':checked'), '-modal', null);"
          style="background-color: black; color: white; border: none; border-radius: 25px; font-weight: bold; font-size: 18px; cursor: pointer; padding: 10px; width: 100%; margin-bottom: 10px; font-family: 'Roboto Condensed', sans-serif;">
          Te llamamos GRATIS
        </button>
        
        <!-- Mensaje de respuesta -->
        <div id="c2c-formu-resp-modal" class="c2c-formu-resp"></div>
        <p id="c2c-form-msg-modal" class="c2c-form-msg">&nbsp;</p>
        
        <!-- Imagen ADT -->
        <div style="text-align: center; margin-top: 4px; padding-bottom: 8px;">
          <img
            src="assets/img/ADT-alarmas.png"
            alt="ADT Alarmas"
            style="width: 100%; max-width: 180px; height: auto; display: block !important; margin: 0 auto;" 
            loading="eager"
            decoding="sync"
            onload="console.log('ADT-alarmas.png cargada correctamente');"
            onerror="console.log('Error cargando ADT-alarmas.png'); this.style.display='none'; this.nextElementSibling.style.display='block';" />
        </div>
      </div>
    </div>
  </div>
  <div
    id="cookies-notice"
    class="back-white cookies-notice cookies-notice-close">
    <!--        <a id="telefono-mobile" href="tel:911 081 673"-->
    <!--           class="header-phone-cont footer-phone d-lg-none btn-phone btn-medir">-->
    <!--            <img class="header-phone-icon" src="assets/img/phone.svg" alt="icono teléfono">-->
    <!--            <div class="header-phone-number">-->
    <!--                <p class="free">&nbsp;Llámanos gratis</p>-->
    <!--                <p class="number telefono_numero">911 081 673</p>-->
    <!--            </div>-->
    <!--        0</a>-->
    <div class="container">
      <p class="cookies-notice-title">
        <img
          class="cookies-icon"
          src="assets/img/cookie.svg"
          alt="icono cookies" />
        Esta web utiliza cookies
      </p>
      <div class="row">
        <div class="col-md-9 cookies-notice-text">
          <p>
            Utilizamos cookies propias y de terceros para mejorar nuestros
            servicios, y mostrarles publicidad relacionada con sus
            preferencias mediante el análisis de sus hábitos de navegación.
          </p>
          <div class="cookies-config-cont">
            <a
              href="javascript:void(0)"
              id="cookies-modal-notice"
              class="btn-medir"><img
                src="assets/img/info.svg"
                alt="icono información cookies" />información cookies</a>
          </div>
        </div>
        <div class="col-md-3 d-none d-md-block">
          <button
            id="cookies-aceptar-todas-deskt"
            class="button-purple-cookies btn-medir btn-black">
            aceptar
          </button>
        </div>
      </div>
      <button
        id="cookies-aceptar-todas-mobile"
        class="d-md-none button-purple-cookies position-static btn-medir btn-black">
        aceptar
      </button>
    </div>
  </div>
  <div id="modal-cookies-cont" class="modal-cont">
    <div
      id="cookies-cierre-modal-back"
      class="modal-back btn-medir cookies"></div>
    <div class="data-box cookies modal-data back-white">
      <div id="cookies-data-cont" class="cookies-data-cont">
        <h1>Política de cookies</h1>

        <p>
          En cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de
          la Sociedad de la Información y Comercio Electrónico le informamos
          de que este sitio web, al igual que la mayoría de los sitios en
          Internet, usa Cookies para mejorar y optimizar la experiencia del
          usuario. A continuación encontrará información detallada sobre qué
          son las "Cookies", qué tipología utiliza este sitio web, cómo
          cambiar la configuración de sus cookies, y qué ocurre si deshabilita
          las Cookies.
          <br /><br />
          <strong>¿Qué son las Cookies?<br /></strong>
          Una cookie es un pequeño archivo que se descarga en el equipo del
          usuario con la finalidad de almacenar datos, los cuales podrán ser
          actualizados y recuperados por la entidad responsable de su
          instalación.
          <br /><br />
          <strong>¿Qué tipo de Cookies utiliza esta página web?<br /></strong>
        </p>

        <div class="cookies-checkbox-data">
          <div class="cookies-text-checkbox">
            <h3 class="cookies-checkbox-title">Necesaria</h3>
            <div class="switch_button">
              <input
                type="checkbox"
                name="switch-button"
                id="cookies_necesarias"
                class="switch-button_checkbox"
                checked
                disabled />
              <label
                for="cookies_necesarias"
                class="switch-button_label"></label>
            </div>
          </div>
          <!-- <div>
                        <input class="cookies-checkbox-input" type="checkbox" id="cookie-nece" value="second_checkbox" checked disabled>
                        <label class="toggle" for="cookie-nece"><span></span></label>
                    </div> -->
        </div>
        <p>
          Las cookies necesarias son absolutamente esenciales para que el
          sitio web funcione correctamente. Esta categoría solo incluye
          cookies que garantizan funcionalidades básicas y características de
          seguridad del sitio web. Estas cookies no almacenan ninguna
          información personal.
        </p>

        <div class="cookies-checkbox-data">
          <div class="cookies-text-checkbox">
            <h3 class="cookies-checkbox-title">Estadística</h3>
            <div class="switch_button">
              <input
                type="checkbox"
                name="switch-button"
                id="cookies_estadisticas"
                class="switch-button_checkbox"
                onclick="acceptCookie('adt_cookies_estadisticas', document.getElementById('cookies_estadisticas').checked)" />
              <label
                for="cookies_estadisticas"
                class="switch-button_label"></label>
            </div>
          </div>
          <!-- <div>
                        <input class="cookies-checkbox-input" type="checkbox" id="cookie-est" value="second_checkbox">
                        <label class="toggle" for="cookie-est"><span></span></label>
                    </div> -->
        </div>
        <p>
          Las cookies de estadísticas que pueden no ser particularmente
          necesarias para el funcionamiento del sitio web y se utilizan
          específicamente para recopilar datos personales del usuario a través
          de análisis, anuncios y otro contenidos integrados. Es obligatorio
          obtner el consentimiento del usuario antes de ejecutar estas cookies
          en su sitio web.
        </p>

        <br />
        <h2>¿Puede configurar sus Cookies en su navegador Web?</h2>
        <p>
          <br />Al navegar y continuar en nuestro sitio web estará
          consintiendo el uso de las Cookies en las condiciones contenidas en
          la presente Política de Cookies. Usted como usuario tiene la
          posibilidad de ejercer su derecho a bloquear, eliminar y rechazar el
          uso de Cookies, en todo momento, modificando las opciones de su
          navegador <br /><br />
        </p>

        <br />
        <h2>¿Qué ocurre si se deshabilitan las Cookies?</h2>
        <p>
          <br />Algunas funcionalidades de los Servicios o áreas de este sitio
          web podrían no funcionar correctamente. <br /><br />
        </p>

        <br />
        <h2>¿Actualizamos nuestra política de Cookies?</h2>
        <p>
          <br />Es posible que actualicemos la política de Cookies de nuestra
          página web, por ello, le recomendamos revisar esta política cada vez
          que acceda a nuestro sitio web con el objetivo de estar
          adecuadamente informado sobre cómo y para que usamos las Cookies.
        </p>
      </div>
      <!-- <div class="cookies-botones">
                <button id="cookies-aceptar-todas-popup" class="button-purple-cookies btn-medir">aceptar todas</button>
                <button id="cookies-aceptar-selecc" class="cookies-save-config btn-medir">Guardar configuración</button>
            </div> -->
      <div
        id="cookies-cierre-modal"
        class="btn-close btn-close-modal btn-medir cookies"></div>
    </div>
  </div>
  <div id="modal-legales-cont" class="modal-cont">
    <div
      id="cierre-modal-legales-back"
      class="modal-back btn-medir legales"></div>
    <div class="data-box legales modal-data back-white">
      <div id="cookies-data-cont" class="cookies-data-cont legales">
        <h1>Política de privacidad</h1>
        <h2>Responsable del tratamiento de sus datos</h2>
        <p>
          Responsable del tratamiento de sus datos Responsable BE CALL BPO,
          S.L. (Entidad perteneciente a BECALL GROUP). CIF B05254859 Domicilio
          social Paseo de la Castellana, 91 – 4º 28046 Madrid – ESPAÑA Correo
          electrónico rgpd@becallgroup.com Delegado de Protección de Datos
          Calle Cruz Roja de León, 10 – 5º - Oficina 3 24008 León
          rgpd@becallgroup.com
          <br />
          <br />La presente Política de Privacidad regula el acceso y el uso
          del servicio de BE CALL BPO, S.L. (también nombrado como "BE CALL",
          "BE CALL GROUP" o "EL GRUPO") poniendo a disposición del usuario (en
          adelante, el "Usuario") de Internet interesado en los servicios (en
          adelante, los "Servicios") y contenidos (en adelante, los
          "Contenidos") ofrecidos por BE CALL BPO, S.L. (en adelante, los
          "Servicios").<br />
          <br />
        </p>
        <h2>
          Bases de legitimación para el tratamiento de los datos personales
        </h2>
        <p>
          <br />Los datos de los Usuarios que se recaban a través de los
          formularios de registro online son recabados para BE CALL BPO, S.L.
          con la finalidad de poder prestarles los Servicios de BE CALL y de
          sus colaboradores y clientes. De conformidad con lo establecido en
          la normativa de privacidad aplicable y su normativa de desarrollo,
          BE CALL BPO, S.L., titular de los Servicios, informa al Usuario de
          la existencia de un fichero automatizado de datos de carácter
          personal, creado por BE CALL BPO, S.L. bajo su responsabilidad.<br />
        </p>
        <h2>Principios en el tratamiento de los datos personales:</h2>
        <p>
          <br />El respeto a tu privacidad es fundamental para nosotros, por
          lo que queremos informarte con toda transparencia de los
          tratamientos que podemos realizar con tus datos personales a fin de
          que puedas tomar una decisión al respecto. En el tratamiento de los
          datos personales por ti facilitados BE CALL BPO, S.L. (en adelante,
          "BE CALL", "LA EMPRESA" o "EL RESPONSABLE", indistintamente), se
          seguirán los principios de Transparencia, Licitud, Responsabilidad
          Proactiva, Minimización de los datos, Seudonimización y
          Eliminación.<br />
        </p>
        <h2>Finalidades del tratamiento:</h2>
        <p>
          BE CALL usará tus datos personales para dar cumplimiento a las
          siguientes finalidades:<br />

          • Tratar tus datos conforme al consentimiento que nos hayas dado en
          los casos en los que BE CALL no se base en otro fundamento jurídico.
          Entre los tratamientos se encuentran el envío de publicidad de
          empresas de BECALL GROUP y terceras entidades con las que BE CALL
          tenga acuerdos comerciales; a título ejemplificativo, pero no
          limitativo, servicios de entidades del sector bancario, seguros, de
          telecomunicaciones, energético, entre otros, tratar tus datos de
          navegación, facturación con fines comerciales o usar información
          anonimizada y agregada generada a partir de la tuya con fines de
          análisis de información (Big Data).<br />

          • La prestación de servicios y productos de nuestra empresa,
          celebrar contratos y permitir su posterior ejecución. El tratamiento
          de los datos a realizar podrá variar en función del servicio o
          producto del que se trate. Esto nos permite ofrecerte el mejor
          servicio que hayas solicitado y también hacerte comunicaciones en
          relación con el mismo o con tus intereses comerciales en función de
          tu visita a nuestra página Web. También necesitamos realizar
          verificaciones de datos y de crédito para permitir la contratación
          de nuestros servicios o productos y/o realizar acciones de recobro
          de deuda en caso de impagos.<br />

          • Satisfacer los intereses comerciales legítimos de BE CALL, por
          ejemplo, la prevención de fraude, el mantenimiento de la seguridad
          de nuestra red y servicios, el envío de comunicaciones comerciales
          sobre nuestros productos y servicios y la mejora de nuestros
          servicios, pudiendo trazar perfiles suyos con dichas finalidades. En
          estos casos, siempre evaluamos nuestros intereses comerciales para
          asegurarnos de que no colisionan con tus derechos. Además, en
          algunos casos, tienes derecho a oponerte a estos tratamientos. En
          esta política recogemos todos los derechos que te protegen.<br />

          • Cumplir con una obligación legal, como, por ejemplo, dar
          cumplimiento a nuestras obligaciones contables y fiscales, o retener
          tus datos de tráfico para cumplir con la legislación vigente en
          materia de conservación de datos, entre otras.<br />
          <br />De acuerdo con las finalidades expresadas tus datos personales
          serán usados para:<br />

          En relación con tus pedidos:<br />

          o Procesar el pedido de los productos y servicios que nos has
          comprado y mantenerte informado del progreso de tu pedido y
          proporcionarte el producto o servicio correspondiente. Esto puede
          incluir servicios de terceros no recogidos en tu contrato con
          nosotros.<br />

          o Para facturarte o cobrarte por el uso de nuestros productos y
          servicios, así como contactarte si la información de facturación que
          nos proporcionaste no está actualizada, va a caducar o no podemos
          aceptar el pago.<br />

          o Responder a cualquier pregunta o inquietud que puedas tener sobre
          nuestra entidad, productos o servicios.<br />

          o Mensajes de información y comunicaciones de marketing<br />

          Marketing y Generación de Perfiles o En el caso de que seas nuestro
          cliente, BE CALL tiene interés legítimo en mantenerte informado
          sobre los nuevos productos y servicios. Adaptamos estos mensajes en
          función de los tipos de productos y servicios que has contratado.<br />

          o Podremos enviarte boletines informativos, invitarte a participar
          en una encuesta o informarte sobre sorteos de premios o concursos,
          en su caso.<br />

          o Para poder facilitarte información comercial relevante para ti,
          podrás visualizar publicidad dirigida en línea basada en el uso de
          cookies. Puede darse en nuestro Sitio Web, en sitios web de otras
          compañías de BE CALL, en su caso, de organizaciones y de otros
          medios de comunicación online como las redes sociales. También
          podemos combinar los datos recopilados a través de las cookies con
          otros datos que hemos recopilado. Si no deseas que la información
          que obtenemos a través de las cookies sea utilizada, consulta
          nuestra Política de Cookies para excluirlas.<br />

          Investigación y análisis (Big Data).<br />

          A través de la técnica de "Big Data", se analizan grandes cantidades
          de datos para encontrar los patrones y tendencias hasta ahora no
          reveladas, interviniendo el pleno respeto a la ley y al principio de
          transparencia.<br />

          En estos análisis utilizamos únicamente datos anonimizados y
          agregados de manera que no es posible asociar dicha información con
          ninguno de nuestros clientes. A través del análisis proporcionamos
          informes agregados y anonimizados a terceros. No obstante, en
          cualquier momento puedes manifestar tu deseo para que tus datos no
          sean tenidos en cuenta en iniciativas BIG DATA, lo cual puedes
          llevar a cabo dirigiéndote por escrito a la dirección
          rgpd@becallgroup.com.<br />
        </p>
        <h2>Plazos de conservación:</h2>
        <p>
          Los datos proporcionados, se conservarán mientras no se solicite su
          supresión por el interesado. Todas nuestras comunicaciones
          comerciales incluyen la posibilidad de dejar de estar en el fichero
          creado por BE CALL. Si usted ejecuta la opción de "baja" sus datos
          se cancelarán del fichero creado de nuestras comunicaciones
          generales. Como norma general sus datos se conservarán encriptados y
          protegidos el plazo que la ley determine, como mínimo, mientras
          usted siga siendo cliente de BE CALL y durante cinco años después de
          que usted deje de serlo.<br />
          <br />Bases legitimadoras Consentimiento expreso o Registro en
          nuestros sistemas para solicitar información sobre un producto o
          servicio específico o para contratarlo o usarlo. o Suscripción a
          boletines, alertas u otros servicios.<br />

          o Contacto a través de nuestros canales o Participación en un
          concurso, sorteo o encuesta o Consentimiento a terceros a los que se
          ha permitido la cesión o Visitas o navegas por cualquiera de los
          sitios web de BE CALL o de BECALL GROUP<br />

          Obligación legal y/o contractual o Compras o utilizas cualquiera de
          nuestros productos y servicios.<br />
          o Eres cliente de BE CALL o de alguna de las empresas de BECALL
          GROUP.<br />

          Interés legítimo o Cuando tu información esté disponible
          públicamente, y legalmente esté permitido su uso.<br />

          Datos que tratamos<br />

          La información que BE CALL recoge una vez hayas prestado el
          consentimiento y de acuerdo con las distintas finalidades
          especificadas podrán ser referida a:<br />

          • Datos personales: nombre, dirección, número de teléfono, fecha de
          nacimiento, sexo y dirección de correo electrónico.<br />

          • Datos financieros: cuenta bancaria y/o tarjeta de crédito (en el
          caso de realizar una contratación, para comunicar a la empresa
          prestadora del servicio). Control de scoring previo a la
          contratación.<br />

          • Datos de voz: en el caso de contactar telefónicamente, la llamada
          puede ser grabada con fines de formación y calidad, así como para
          garantizar el cumplimiento de las obligaciones contractuales.<br />

          • Datos contractuales: fechas de alta y baja, así como los productos
          que han sido contratados<br />

          • Datos familiares: estado civil, parentescos con terceras personas,
          número de familiares, tipo de residencia.<br />

          • Datos de salud: datos básicos sobre el estado de salud para la
          contratación de pólizas de seguro del sector, así como los
          cuestionarios a los que conteste durante la contratación de los
          productos<br />

          • Datos técnicos: datos de navegación, IP, dispositivo y navegador
          utilizados.<br />

          Destinatarios de sus datos<br /><br />

          Los datos personales que recogemos, son tratados conforme a los
          principios expuestos anteriormente y sólo se tratarán en BE CALL y
          podrán tener como destinatarios adicionales:<br />

          • Compañías de BECALL GROUP<br />

          • PROVEEDORES de servicios contratados<br />

          • Compañías que BE CALL ha contratado o colabora con ellas para la
          prestación de los servicios.<br />

          • ADMINISTRACIONES PUBLICAS ESTATALES, AUTONOMICAS O LOCALES u otro
          tipo de autoridades o terceros en caso de cumplimiento de obligación
          o autorización legal.<br /><br />

          Cuando compras un producto o un servicio de un tercero a través de
          BE CALL, el contrato se realiza con el tercero que vende ese
          producto o servicio. BE CALL tendrá que facilitar cierta información
          personal al tercero para completar la compra con ellos. Los términos
          y condiciones del vendedor, así como sus políticas de privacidad y
          de cookies serán las aplicables para el tratamiento de tu
          información personal. <br />
        </p>
        <h2>Derechos del interesado:</h2>
        <p>
          Te informamos que, sobre tus datos personales, tienes derecho a:<br /><br />

          • Solicitar el acceso a los datos almacenados.<br />

          • Solicitar una rectificación o la cancelación.<br />

          • Solicitar la limitación de su tratamiento.<br />

          • Oponerte al tratamiento.<br />

          • Solicitar la portabilidad de tus datos.<br />

          El ejercicio de estos derechos es personal y por tanto debe ser
          ejercido directamente por el interesado, solicitándolo directamente
          al BE CALL, lo que significa que cualquiera que haya facilitado sus
          datos en algún momento puede dirigirse al Titular y pedir
          información sobre los datos que tiene almacenados y cómo los ha
          obtenido, solicitar la rectificación de los mismos, solicitar la
          portabilidad de sus datos personales, oponerse al tratamiento,
          limitar su uso o solicitar la cancelación de esos datos en los
          ficheros del Titular.<br /><br />

          Para ejercitar tus derechos de acceso, rectificación, cancelación,
          portabilidad y oposición tienes que enviar un correo electrónico a
          rgpd@becallgroup.com junto con la prueba válida en derecho como una
          fotocopia del D.N.I. o equivalente. BE CALL le responderá en el
          plazo de un mes, salvo que por motivos de complejidad o volumen de
          solicitudes recibidas necesite prorrogar el plazo de respuesta hasta
          un máximo de dos meses más, en cuyo caso será usted informado del
          motivo de la prórroga dentro de los 30 días siguientes a su
          solicitud de ejercicio de sus derechos.<br /><br />

          Tienes derecho a la tutela judicial efectiva y a presentar una
          reclamación ante la autoridad de control, en este caso, la Agencia
          Española de Protección de Datos, si consideras que el tratamiento de
          datos personales que te conciernen infringe el Reglamento.
          <br /><br />
          En el caso de que ejerza sus derechos de solicitud de limitación o
          de oposición al tratamiento, BE CALL cesará en el tratamiento de sus
          datos, si bien podrá conservarlos para el ejercicio o la defensa de
          reclamaciones. <br />
        </p>
        <h2>Seguridad en el tratamiento de los datos</h2>
        <p>
          Para proteger tus datos personales, BE CALL toma todas las
          precauciones razonables y sigue las mejores prácticas de la
          industria para evitar su pérdida, mal uso, acceso indebido,
          divulgación, alteración o destrucción de los mismos.<br />

          Le informamos de que nuestros proveedores de servicios, como
          entidades encargadas del tratamiento, también han adoptado medidas
          razonables y apropiadas en el mismo sentido de otorgar una
          protección eficaz a los datos personales que nos proporciona.<br />

          Igualmente, usted tiene derecho a presentar una reclamación ante la
          Autoridad de control (Agencia Española de Protección de Datos) si
          considera que el tratamiento no se ajusta a la normativa establecida
          en el RGPD.<br />
        </p>
        <h2>Transferencias Internacionales de Datos:</h2>
        <p>
          Es posible que necesitemos transferir tu información a otras
          compañías de BECALL GROUP o a distintos proveedores de servicios en
          países que se encuentran fuera de la Comunidad Económica Europea
          (CEE).<br />

          Si BE CALL manda tu información a un país que no forma parte de la
          CEE, nos aseguraremos de que tu información sea protegida de manera
          apropiada. Siempre nos aseguraremos de la existencia de un contrato
          apropiado que cubra la transferencia de datos. Además, si se
          considera que el país no tiene leyes equivalentes a los estándares
          de protección de datos de la UE, pediremos al tercero que firme un
          acuerdo legal que refleje dichos estándares.<br />

          Igualmente, en el caso de que sea necesario, solicitaremos con
          carácter previo, la autorización de la Agencia Española de
          Protección de Datos para quedar habilitados para realizar la
          transferencia internacional.<br /><br /><br /><br /><br /><br /><br /><br /><br />
        </p>
      </div>
      <div
        id="cierre-modal-legales-btn"
        class="btn-close btn-close-modal btn-medir legales"></div>
    </div>
  </div>
  <div id="modal-privacidad-cont" class="modal-cont">
    <div
      id="cierre-modal-privacidad-back"
      class="modal-back btn-medir privacidad"></div>
    <div class="data-box privacidad modal-data back-white">
      <div id="cookies-data-cont" class="cookies-data-cont privacidad">
        <h1>Política de privacidad</h1>
        <h2>Responsable del tratamiento de sus datos</h2>
        <p>
          Responsable del tratamiento de sus datos Responsable BE CALL BPO,
          S.L. (Entidad perteneciente a BECALL GROUP). CIF B05254859 Domicilio
          social Paseo de la Castellana, 91 – 4º 28046 Madrid – ESPAÑA Correo
          electrónico rgpd@becallgroup.com Delegado de Protección de Datos
          Calle Cruz Roja de León, 10 – 5º - Oficina 3 24008 León
          rgpd@becallgroup.com
          <br />
          <br />La presente Política de Privacidad regula el acceso y el uso
          del servicio de BE CALL BPO, S.L. (también nombrado como "BE CALL",
          "BE CALL GROUP" o "EL GRUPO") poniendo a disposición del usuario (en
          adelante, el "Usuario") de Internet interesado en los servicios (en
          adelante, los "Servicios") y contenidos (en adelante, los
          "Contenidos") ofrecidos por BE CALL BPO, S.L. (en adelante, los
          "Servicios").<br />
          <br />
        </p>
        <h2>
          Bases de legitimación para el tratamiento de los datos personales
        </h2>
        <p>
          <br />Los datos de los Usuarios que se recaban a través de los
          formularios de registro online son recabados para BE CALL BPO, S.L.
          con la finalidad de poder prestarles los Servicios de BE CALL y de
          sus colaboradores y clientes. De conformidad con lo establecido en
          la normativa de privacidad aplicable y su normativa de desarrollo,
          BE CALL BPO, S.L., titular de los Servicios, informa al Usuario de
          la existencia de un fichero automatizado de datos de carácter
          personal, creado por BE CALL BPO, S.L. bajo su responsabilidad.<br />
        </p>
        <h2>Principios en el tratamiento de los datos personales:</h2>
        <p>
          <br />El respeto a tu privacidad es fundamental para nosotros, por
          lo que queremos informarte con toda transparencia de los
          tratamientos que podemos realizar con tus datos personales a fin de
          que puedas tomar una decisión al respecto. En el tratamiento de los
          datos personales por ti facilitados BE CALL BPO, S.L. (en adelante,
          "BE CALL", "LA EMPRESA" o "EL RESPONSABLE", indistintamente), se
          seguirán los principios de Transparencia, Licitud, Responsabilidad
          Proactiva, Minimización de los datos, Seudonimización y
          Eliminación.<br />
        </p>
        <h2>Finalidades del tratamiento:</h2>
        <p>
          BE CALL usará tus datos personales para dar cumplimiento a las
          siguientes finalidades:<br />

          • Tratar tus datos conforme al consentimiento que nos hayas dado en
          los casos en los que BE CALL no se base en otro fundamento jurídico.
          Entre los tratamientos se encuentran el envío de publicidad de
          empresas de BECALL GROUP y terceras entidades con las que BE CALL
          tenga acuerdos comerciales; a título ejemplificativo, pero no
          limitativo, servicios de entidades del sector bancario, seguros, de
          telecomunicaciones, energético, entre otros, tratar tus datos de
          navegación, facturación con fines comerciales o usar información
          anonimizada y agregada generada a partir de la tuya con fines de
          análisis de información (Big Data).<br />

          • La prestación de servicios y productos de nuestra empresa,
          celebrar contratos y permitir su posterior ejecución. El tratamiento
          de los datos a realizar podrá variar en función del servicio o
          producto del que se trate. Esto nos permite ofrecerte el mejor
          servicio que hayas solicitado y también hacerte comunicaciones en
          relación con el mismo o con tus intereses comerciales en función de
          tu visita a nuestra página Web. También necesitamos realizar
          verificaciones de datos y de crédito para permitir la contratación
          de nuestros servicios o productos y/o realizar acciones de recobro
          de deuda en caso de impagos.<br />

          • Satisfacer los intereses comerciales legítimos de BE CALL, por
          ejemplo, la prevención de fraude, el mantenimiento de la seguridad
          de nuestra red y servicios, el envío de comunicaciones comerciales
          sobre nuestros productos y servicios y la mejora de nuestros
          servicios, pudiendo trazar perfiles suyos con dichas finalidades. En
          estos casos, siempre evaluamos nuestros intereses comerciales para
          asegurarnos de que no colisionan con tus derechos. Además, en
          algunos casos, tienes derecho a oponerte a estos tratamientos. En
          esta política recogemos todos los derechos que te protegen.<br />

          • Cumplir con una obligación legal, como, por ejemplo, dar
          cumplimiento a nuestras obligaciones contables y fiscales, o retener
          tus datos de tráfico para cumplir con la legislación vigente en
          materia de conservación de datos, entre otras.<br />
          <br />De acuerdo con las finalidades expresadas tus datos personales
          serán usados para:<br />

          En relación con tus pedidos:<br />

          o Procesar el pedido de los productos y servicios que nos has
          comprado y mantenerte informado del progreso de tu pedido y
          proporcionarte el producto o servicio correspondiente. Esto puede
          incluir servicios de terceros no recogidos en tu contrato con
          nosotros.<br />

          o Para facturarte o cobrarte por el uso de nuestros productos y
          servicios, así como contactarte si la información de facturación que
          nos proporcionaste no está actualizada, va a caducar o no podemos
          aceptar el pago.<br />

          o Responder a cualquier pregunta o inquietud que puedas tener sobre
          nuestra entidad, productos o servicios.<br />

          o Mensajes de información y comunicaciones de marketing<br />

          Marketing y Generación de Perfiles o En el caso de que seas nuestro
          cliente, BE CALL tiene interés legítimo en mantenerte informado
          sobre los nuevos productos y servicios. Adaptamos estos mensajes en
          función de los tipos de productos y servicios que has contratado.<br />

          o Podremos enviarte boletines informativos, invitarte a participar
          en una encuesta o informarte sobre sorteos de premios o concursos,
          en su caso.<br />

          o Para poder facilitarte información comercial relevante para ti,
          podrás visualizar publicidad dirigida en línea basada en el uso de
          cookies. Puede darse en nuestro Sitio Web, en sitios web de otras
          compañías de BE CALL, en su caso, de organizaciones y de otros
          medios de comunicación online como las redes sociales. También
          podemos combinar los datos recopilados a través de las cookies con
          otros datos que hemos recopilado. Si no deseas que la información
          que obtenemos a través de las cookies sea utilizada, consulta
          nuestra Política de Cookies para excluirlas.<br />

          Investigación y análisis (Big Data).<br />

          A través de la técnica de "Big Data", se analizan grandes cantidades
          de datos para encontrar los patrones y tendencias hasta ahora no
          reveladas, interviniendo el pleno respeto a la ley y al principio de
          transparencia.<br />

          En estos análisis utilizamos únicamente datos anonimizados y
          agregados de manera que no es posible asociar dicha información con
          ninguno de nuestros clientes. A través del análisis proporcionamos
          informes agregados y anonimizados a terceros. No obstante, en
          cualquier momento puedes manifestar tu deseo para que tus datos no
          sean tenidos en cuenta en iniciativas BIG DATA, lo cual puedes
          llevar a cabo dirigiéndote por escrito a la dirección
          rgpd@becallgroup.com.<br />
        </p>
        <h2>Plazos de conservación:</h2>
        <p>
          Los datos proporcionados, se conservarán mientras no se solicite su
          supresión por el interesado. Todas nuestras comunicaciones
          comerciales incluyen la posibilidad de dejar de estar en el fichero
          creado por BE CALL. Si usted ejecuta la opción de "baja" sus datos
          se cancelarán del fichero creado de nuestras comunicaciones
          generales. Como norma general sus datos se conservarán encriptados y
          protegidos el plazo que la ley determine, como mínimo, mientras
          usted siga siendo cliente de BE CALL y durante cinco años después de
          que usted deje de serlo.<br />
          <br />Bases legitimadoras Consentimiento expreso o Registro en
          nuestros sistemas para solicitar información sobre un producto o
          servicio específico o para contratarlo o usarlo. o Suscripción a
          boletines, alertas u otros servicios.<br />

          o Contacto a través de nuestros canales o Participación en un
          concurso, sorteo o encuesta o Consentimiento a terceros a los que se
          ha permitido la cesión o Visitas o navegas por cualquiera de los
          sitios web de BE CALL o de BECALL GROUP<br />

          Obligación legal y/o contractual o Compras o utilizas cualquiera de
          nuestros productos y servicios.<br />
          o Eres cliente de BE CALL o de alguna de las empresas de BECALL
          GROUP.<br />

          Interés legítimo o Cuando tu información esté disponible
          públicamente, y legalmente esté permitido su uso.<br />

          Datos que tratamos<br />

          La información que BE CALL recoge una vez hayas prestado el
          consentimiento y de acuerdo con las distintas finalidades
          especificadas podrán ser referida a:<br />

          • Datos personales: nombre, dirección, número de teléfono, fecha de
          nacimiento, sexo y dirección de correo electrónico.<br />

          • Datos financieros: cuenta bancaria y/o tarjeta de crédito (en el
          caso de realizar una contratación, para comunicar a la empresa
          prestadora del servicio). Control de scoring previo a la
          contratación.<br />

          • Datos de voz: en el caso de contactar telefónicamente, la llamada
          puede ser grabada con fines de formación y calidad, así como para
          garantizar el cumplimiento de las obligaciones contractuales.<br />

          • Datos contractuales: fechas de alta y baja, así como los productos
          que han sido contratados<br />

          • Datos familiares: estado civil, parentescos con terceras personas,
          número de familiares, tipo de residencia.<br />

          • Datos de salud: datos básicos sobre el estado de salud para la
          contratación de pólizas de seguro del sector, así como los
          cuestionarios a los que conteste durante la contratación de los
          productos<br />

          • Datos técnicos: datos de navegación, IP, dispositivo y navegador
          utilizados.<br />

          Destinatarios de sus datos<br /><br />

          Los datos personales que recogemos, son tratados conforme a los
          principios expuestos anteriormente y sólo se tratarán en BE CALL y
          podrán tener como destinatarios adicionales:<br />

          • Compañías de BECALL GROUP<br />

          • PROVEEDORES de servicios contratados<br />

          • Compañías que BE CALL ha contratado o colabora con ellas para la
          prestación de los servicios.<br />

          • ADMINISTRACIONES PUBLICAS ESTATALES, AUTONOMICAS O LOCALES u otro
          tipo de autoridades o terceros en caso de cumplimiento de obligación
          o autorización legal.<br /><br />

          Cuando compras un producto o un servicio de un tercero a través de
          BE CALL, el contrato se realiza con el tercero que vende ese
          producto o servicio. BE CALL tendrá que facilitar cierta información
          personal al tercero para completar la compra con ellos. Los términos
          y condiciones del vendedor, así como sus políticas de privacidad y
          de cookies serán las aplicables para el tratamiento de tu
          información personal. <br />
        </p>
        <h2>Derechos del interesado:</h2>
        <p>
          Te informamos que, sobre tus datos personales, tienes derecho a:<br /><br />

          • Solicitar el acceso a los datos almacenados.<br />

          • Solicitar una rectificación o la cancelación.<br />

          • Solicitar la limitación de su tratamiento.<br />

          • Oponerte al tratamiento.<br />

          • Solicitar la portabilidad de tus datos.<br />

          El ejercicio de estos derechos es personal y por tanto debe ser
          ejercido directamente por el interesado, solicitándolo directamente
          al BE CALL, lo que significa que cualquiera que haya facilitado sus
          datos en algún momento puede dirigirse al Titular y pedir
          información sobre los datos que tiene almacenados y cómo los ha
          obtenido, solicitar la rectificación de los mismos, solicitar la
          portabilidad de sus datos personales, oponerse al tratamiento,
          limitar su uso o solicitar la cancelación de esos datos en los
          ficheros del Titular.<br /><br />

          Para ejercitar tus derechos de acceso, rectificación, cancelación,
          portabilidad y oposición tienes que enviar un correo electrónico a
          rgpd@becallgroup.com junto con la prueba válida en derecho como una
          fotocopia del D.N.I. o equivalente. BE CALL le responderá en el
          plazo de un mes, salvo que por motivos de complejidad o volumen de
          solicitudes recibidas necesite prorrogar el plazo de respuesta hasta
          un máximo de dos meses más, en cuyo caso será usted informado del
          motivo de la prórroga dentro de los 30 días siguientes a su
          solicitud de ejercicio de sus derechos.<br /><br />

          Tienes derecho a la tutela judicial efectiva y a presentar una
          reclamación ante la autoridad de control, en este caso, la Agencia
          Española de Protección de Datos, si consideras que el tratamiento de
          datos personales que te conciernen infringe el Reglamento.
          <br /><br />
          En el caso de que ejerza sus derechos de solicitud de limitación o
          de oposición al tratamiento, BE CALL cesará en el tratamiento de sus
          datos, si bien podrá conservarlos para el ejercicio o la defensa de
          reclamaciones. <br />
        </p>
        <h2>Seguridad en el tratamiento de los datos</h2>
        <p>
          Para proteger tus datos personales, BE CALL toma todas las
          precauciones razonables y sigue las mejores prácticas de la
          industria para evitar su pérdida, mal uso, acceso indebido,
          divulgación, alteración o destrucción de los mismos.<br />

          Le informamos de que nuestros proveedores de servicios, como
          entidades encargadas del tratamiento, también han adoptado medidas
          razonables y apropiadas en el mismo sentido de otorgar una
          protección eficaz a los datos personales que nos proporciona.<br />

          Igualmente, usted tiene derecho a presentar una reclamación ante la
          Autoridad de control (Agencia Española de Protección de Datos) si
          considera que el tratamiento no se ajusta a la normativa establecida
          en el RGPD.<br />
        </p>
        <h2>Transferencias Internacionales de Datos:</h2>
        <p>
          Es posible que necesitemos transferir tu información a otras
          compañías de BECALL GROUP o a distintos proveedores de servicios en
          países que se encuentran fuera de la Comunidad Económica Europea
          (CEE).<br />

          Si BE CALL manda tu información a un país que no forma parte de la
          CEE, nos aseguraremos de que tu información sea protegida de manera
          apropiada. Siempre nos aseguraremos de la existencia de un contrato
          apropiado que cubra la transferencia de datos. Además, si se
          considera que el país no tiene leyes equivalentes a los estándares
          de protección de datos de la UE, pediremos al tercero que firme un
          acuerdo legal que refleje dichos estándares.<br />

          Igualmente, en el caso de que sea necesario, solicitaremos con
          carácter previo, la autorización de la Agencia Española de
          Protección de Datos para quedar habilitados para realizar la
          transferencia internacional.<br /><br /><br /><br /><br /><br /><br /><br /><br />
        </p>
      </div>
      <div
        id="cierre-modal-privacidad-btn"
        class="btn-close btn-close-modal btn-medir privacidad"></div>
    </div>
  </div>

  <script src="assets/js/jquery-v3.5.1.min.js"></script>
  <script src="assets/js/bootstrap-v4.5.3.min.js"></script>
  <script src="assets/js/owl-carousel-v2.3.4.min.js"></script>
  <script src="assets/js/gestionar-cookies.js"></script>
  <script src="assets/js/captura-parametros.js"></script>
  <script src="assets/js/config.js"></script>
  <script src="assets/js/functions.js"></script>
  <script src="assets/js/cookies-adt.js"></script>

  <script>
    let params = location.search;
    let pageActive = "index";
    $(function() {
      resizeFondo();
      animaArrow();

      $("#scroll-down").on("click", scrollDown);
      $(
        "#cookies-aceptar-todas, #cookies-aceptar-todas-popup, #cookies-aceptar-todas-deskt, #cookies-aceptar-todas-mobile"
      ).on("click", acceptAllCookies);
      $("#cookies-aceptar-selecc").on("click", acceptSeleccCookies);
      $(".cookie-description-btn-show").on("click", showCookies);
      $("#cookies-modal-footer, #cookies-modal-notice").on(
        "click",
        function() {
          openModal("cookies");
        }
      );
      $('.btn-protegete').on('click', function($event) {
        docCookies.setItem('click2call', $event.target.dataset.click2call);
        if ($event.target.dataset.servicio)
          docCookies.setItem('adt_servicio', $event.target.dataset.servicio);
        else
          docCookies.setItem('adt_servicio', '');
        openModal('c2c')
      });
      $(".btn-close.c2c, .modal-back.c2c").on("click", function() {
        closeModal("c2c");
      });
      $(".btn-close.cookies, .modal-back.cookies").on("click", function() {
        closeModal("cookies");
      });
      $(
        "#legales-modal-footer, #legales-modal-banner, #legales-modal-modal, #legales-modal-mobile, #legales-modal-auto"
      ).on("click", function() {
        openModal("legales");
      });
      $(
        "#privacidad-modal-footer, #privacidad-modal-footer-mobile, #privacidad-modal-banner, #privacidad-modal-modal, #privacidad-modal-mobile, #privacidad-modal-auto"
      ).on("click", function() {
        openModal("privacidad");
      });
      $(".btn-close.privacidad, .modal-back.privacidad").on(
        "click",
        function() {
          closeModal("privacidad");
        }
      );
      $(".btn-close.legales, .modal-back.legales").on("click", function() {
        closeModal("legales");
      });
      // Sistema de cookies mejorado - mantener compatibilidad
      setTimeout(function() {
        // Solo mostrar el banner antiguo si el nuevo sistema no está disponible
        if (typeof adtCookiesManager === 'undefined' && !checkCookie()) {
          $("#cookies-notice").addClass("cookies-notice-open");
          $("#cookies-notice").removeClass("cookies-notice-close");
        }
      }, 500);

      var owl = $(".owl-carousel");
      owl.owlCarousel({
        margin: 20,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            stagePadding: 20,
            nav: false,
            mouseDrag: true,
            touchDrag: true,
            loop: false,
            center: false,
          },
          768: {
            items: 2,
            stagePadding: 50,
            nav: false,
            mouseDrag: true,
            touchDrag: true,
          },
          1024: {
            items: 4,
            nav: false,
            mouseDrag: false,
            touchDrag: false,
          },
        },
      });
      owl.on("dragged.owl.carousel", function(event) {
        if (typeof gtag === "function") {
          gtag("event", "drag-ofertas", {
            event_category: "drag",
            event_label: "drag ofertas",
          });
        }
      });
      $(".disabled-button").off("click");

      document
        .getElementById("c2c-phone-banner")
        .addEventListener("input", function(e) {
          this.value = this.value.replace(/[^0-9]/g, ""); // Elimina cualquier carácter que no sea un número
        });
      document
        .getElementById("c2c-phone-modal")
        .addEventListener("input", function(e) {
          this.value = this.value.replace(/[^0-9]/g, ""); // Elimina cualquier carácter que no sea un número
        });
      var footerMobileInput = document.getElementById("c2c-phone-footer-mobile");
      if (footerMobileInput) {
        footerMobileInput.addEventListener("input", function(e) {
          this.value = this.value.replace(/[^0-9]/g, "");
        });
      }
        
        // Sistema de tracking automático para botones "PROTÉGETE AHORA" con data-servicio
        $('.btn-protegete[data-servicio]').on('click', function($event) {
            // Determinar idform basado en el contexto del botón
            var servicio = $event.target.dataset.servicio;
            var buttonText = $event.target.textContent.trim();
            var idform = '';
            
            // Botones "PROTÉGETE AHORA" con servicio específico
            if (buttonText === 'PROTÉGETE AHORA' && servicio) {
                idform = 'formulario-principal-' + servicio;
            }
            
            // Guardar en cookies para el tracking
            if (typeof docCookies !== 'undefined') {
                docCookies.setItem('idform', idform);
                docCookies.setItem('click2call', $event.target.dataset.click2call);
                docCookies.setItem('adt_servicio', servicio);
            }
            
            console.log('Botón clickeado, servicio:', servicio, 'idform:', idform);
            
            // Ejecutar tracking de Facebook
            if (typeof fbq === 'function') {
                fbq('trackCustom', 'LeadOfertaAlarma', {idform: idform});
            }
            
            // Abrir modal para los botones de servicios
            openModal('c2c');
        });
    });
  </script>
</body>

</html>
