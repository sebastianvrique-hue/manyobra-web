<?php get_header(); ?>

<!-- NAV -->
<nav id="navbar">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
    <span class="nav-logo-mark">
      <svg viewBox="0 0 80 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 38 C4 38 10 8 20 8 C30 8 30 38 40 38 C50 38 50 8 60 8 C70 8 76 38 76 38" stroke="white" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
      </svg>
    </span>
    <span class="nav-logo-text">Manyobra</span>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="#portafolio">Portafolio</a></li>
    <li><a href="#servicios">Qué hacemos</a></li>
    <li><a href="#proceso">Proceso</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ul>
  <a href="#contacto" class="nav-cta">Trabajemos juntos</a>
  <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
</nav>

<!-- HERO -->
<header class="hero">
  <video class="hero-video" data-src="/assets/hero.mp4" poster="/assets/hero.jpg"
         muted loop playsinline preload="none" aria-hidden="true"></video>
  <div class="hero-scrim" aria-hidden="true"></div>
  <div class="hero-bg" aria-hidden="true"></div>
  <div class="hero-tex" aria-hidden="true"></div>
  <div class="hero-inner">
    <div class="hero-logo">
      <svg viewBox="0 0 160 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 76 C8 76 20 16 40 16 C60 16 60 76 80 76 C100 76 100 16 120 16 C140 16 152 76 152 76" stroke="white" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
      </svg>
    </div>
    <div class="hero-tag">🏗️ Marketing para empresas de construcción · Chile</div>
    <h1>Tu obra es tu<br/><em>mejor vendedor</em>.</h1>
    <p class="hero-sub">Grabamos tus obras, las convertimos en contenido profesional y las ponemos frente a quien puede contratarte. Tú sigues en terreno; nosotros nos encargamos de que te encuentren.</p>
    <div class="hero-actions">
      <a href="#contacto" class="btn btn-grad">Quiero más proyectos</a>
      <a href="#planes" class="btn btn-outline">Ver los planes</a>
    </div>
    <p class="hero-note">Los resultados dependen de cada empresa. No garantizamos cifras específicas.</p>
  </div>
</header>

<!-- CLIENTES -->
<section class="clientes-strip" aria-label="Clientes">
  <div class="clientes-inner">
    <div class="clientes-label">Empresas que ya confían en nosotros</div>
    <ul class="clientes-lista">
      <li>JN Piscinas</li>
      <li>Áridos Lomas Blancas</li>
      <li>Landspace</li>
      <li>CJ1</li>
      <li>Obras Menores</li>
    </ul>
  </div>
</section>

<!-- DOLOR -->
<section class="services-sec dolor-sec" aria-labelledby="dolor-titulo">
  <div class="sec-inner">
    <div class="sec-tag">El problema</div>
    <h2 id="dolor-titulo">El boca a boca <span class="accent">tiene techo</span></h2>
    <p class="sec-sub">La mayoría de las empresas de construcción viven de referidos y licitaciones. Funciona, hasta que se acaba.</p>
    <div class="svc-grid">
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">01</div><h3>Meses buenos y meses muertos</h3><p>Si el trabajo llega solo por recomendación, no controlas cuándo llega ni cuánto.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">02</div><h3>Obras que nadie vio</h3><p>Terminas proyectos de calidad y no queda registro que puedas mostrarle al próximo cliente.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">03</div><h3>Compites solo por precio</h3><p>Sin nada que te diferencie, la conversación siempre termina en cuánto cobras.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">04</div><h3>No sabes de dónde vienen</h3><p>Sin medir, no distingues qué te trajo la obra grande del año y qué fue suerte.</p></div>
    </div>
  </div>
</section>

<!-- PORTAFOLIO -->
<section class="reel-sec" id="portafolio">
  <div class="sec-inner">
    <div class="sec-tag">Portafolio</div>
    <h2>Contenido que <span class="accent">ya produjimos</span></h2>
    <p class="sec-sub">Piezas reales que produjimos para las campañas de clientes del rubro.</p>
    <div class="reel-grid">

      <!-- Para sumar una pieza: copia este bloque, cambia src, poster, cliente y rubro,
           y deja el .mp4 comprimido junto a su .jpg en testimonios/reels/ -->
      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/jn-piscinas.mp4" data-poster="/testimonios/reels/jn-piscinas.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="reel-rubro">Piscinas</div>
          <div class="reel-client">JN Piscinas</div>
          <div class="reel-desc">Pieza para campaña de captación.</div>
        </div>
      </div>

      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/landspace-1.mp4" data-poster="/testimonios/reels/landspace-1.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="reel-rubro">Arquitectura y construcción</div>
          <div class="reel-client">Landspace</div>
          <div class="reel-desc">Pieza para campaña de captación de proyectos.</div>
        </div>
      </div>

      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/aridos-lomas.mp4" data-poster="/testimonios/reels/aridos-lomas.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="reel-rubro">Áridos</div>
          <div class="reel-client">Áridos Lomas Blancas</div>
          <div class="reel-desc">Pieza sobre operación y despacho de material.</div>
        </div>
      </div>

      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/cj1.mp4" data-poster="/testimonios/reels/cj1.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="reel-rubro">Construcción</div>
          <div class="reel-client">CJ1</div>
          <div class="reel-desc">Pieza para campaña en redes.</div>
        </div>
      </div>

      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/landspace-2.mp4" data-poster="/testimonios/reels/landspace-2.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="reel-rubro">Arquitectura y construcción</div>
          <div class="reel-client">Landspace</div>
          <div class="reel-desc">Segunda entrega mensual de contenido.</div>
        </div>
      </div>

      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/aridos-agosto.mp4" data-poster="/testimonios/reels/aridos-agosto.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="reel-rubro">Áridos</div>
          <div class="reel-client">Áridos Lomas Blancas</div>
          <div class="reel-desc">Entrega mensual de contenido para redes.</div>
        </div>
      </div>

      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/pedro-campos.mp4" data-poster="/testimonios/reels/pedro-campos.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="reel-rubro">Obras Menores</div>
          <div class="reel-client">Pedro Campos</div>
          <div class="reel-desc">Caso extendido · 3:36 min</div>
        </div>
      </div>

    </div>
    <p class="reel-note">Los videos se cargan solo cuando los reproduces, para no consumir tus datos de más.</p>
  </div>
</section>

<!-- STATS -->
<div class="stats">
  <div class="stats-grid">
    <div class="stat"><div class="stat-n">+<span class="accent">200</span></div><div class="stat-l">Campañas</div></div>
    <div class="stat"><div class="stat-n"><span class="accent">3.5</span>x</div><div class="stat-l">ROAS promedio</div></div>
    <div class="stat"><div class="stat-n">+<span class="accent">50</span></div><div class="stat-l">Clientes</div></div>
    <div class="stat"><div class="stat-n"><span class="accent">4</span>+</div><div class="stat-l">Años</div></div>
  </div>
  <p class="stats-note">Experiencia acumulada de la agencia en todos los rubros que hemos trabajado, no exclusivamente en construcción.</p>
</div>

<!-- SERVICES -->
<section class="services-sec" id="servicios" aria-labelledby="servicios-titulo">
  <div class="sec-inner">
    <div class="sec-tag">Qué hacemos</div>
    <h2 id="servicios-titulo">Todo bajo <span class="accent">un mismo equipo</span></h2>
    <p class="sec-sub">No coordinas con nadie más: producción, pauta y atención en un solo lugar.</p>
    <div class="svc-grid">
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">01</div><h3>Grabamos tus obras</h3><p>Vamos a terreno con equipo profesional y convertimos tu trabajo real en contenido que vende.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">02</div><h3>Las ponemos frente a quien contrata</h3><p>Campañas en Meta segmentadas por zona y perfil: propietarios, inmobiliarias y empresas.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">03</div><h3>Atendemos tus cotizaciones 24/7</h3><p>Un agente de IA responde y califica por WhatsApp mientras tú estás en la obra. <a href="/agente-ia/" class="svc-link">Ver cómo funciona →</a></p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">04</div><h3>Sabes en qué se va cada peso</h3><p>Reportes claros: cuánto costó cada contacto y de qué anuncio llegó. Sin humo.</p></div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process-sec" id="proceso">
  <div class="sec-inner">
    <div class="sec-tag">Proceso</div>
    <h2>Cómo <span class="accent">trabajamos</span></h2>
    <p class="sec-sub">Simple y transparente: tú apruebas, nosotros hacemos que te lleguen proyectos.</p>
    <div class="process-grid">
      <div class="process-step"><div class="p-num">01</div><h3>Diagnóstico gratuito</h3><p>Revisamos qué tipo de obras haces, a quién le quieres llegar y contra quién compites en tu zona.</p></div>
      <div class="process-step"><div class="p-num">02</div><h3>Estrategia y plan de rodaje</h3><p>Definimos qué obras grabar, qué mostrar de cada una y a qué público dirigir la pauta.</p></div>
      <div class="process-step"><div class="p-num">03</div><h3>Grabamos en terreno</h3><p>Vamos a tu obra, producimos el material y activamos las campañas.</p></div>
      <div class="process-step"><div class="p-num">04</div><h3>Reportes y escalado</h3><p>Ajustamos lo que funciona y escalamos hacia el tipo de proyecto que más te conviene.</p></div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi-sec" id="testimonios">
  <div class="sec-inner">
    <div class="sec-tag">Testimonios</div>
    <h2>Lo que dicen <span class="accent">nuestros clientes</span></h2>
    <p class="sec-sub">Clientes reales del rubro construcción.</p>
    <div class="video-grid">

      <!-- Para sumar un testimonio: copia este bloque, cambia el src, el nombre y la empresa,
           y deja el .mp4 comprimido dentro de testimonios/reels/ (el deploy sube esa carpeta completa). -->
      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/testimonio-pedro.mp4" data-poster="/testimonios/reels/testimonio-pedro.jpg" preload="none" playsinline></video>
          <div class="video-play" onclick="playVideo(this)">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </div>
        </div>
        <div class="video-info">
          <div class="stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <div class="client-name">Pedro Campos</div>
          <div class="client-biz">Obras Menores</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PLANES (resumen) -->
<section class="planes-sec" id="planes">
  <div class="sec-inner">
    <div class="sec-tag">Cómo trabajamos</div>
    <h2>Dos caminos, según quién <span class="accent">produce el contenido</span></h2>
    <p class="sec-sub">Armamos el plan según el tamaño de tu empresa y lo que necesites mostrar. Lo vemos en la reunión.</p>
    <div class="lp-grid">
      <article class="lp-card">
        <div class="lp-name">Online</div>
        <p class="lp-desc">Tú nos envías fotos y videos desde la obra. Nosotros los convertimos en piezas profesionales y gestionamos la pauta.</p>
      </article>
      <article class="lp-card popular">
        <div class="lp-name">Con grabación</div>
        <p class="lp-desc">Vamos a terreno con equipo de producción: cámara, dirección de arte y edición. El contenido lo generamos nosotros.</p>
      </article>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-sec" id="faq">
  <div class="sec-inner">
    <div class="sec-tag">Antes de agendar</div>
    <h2>Lo que más nos <span class="accent">preguntan</span></h2>
    <div class="faq-list">
      <details><summary>¿Cuánto presupuesto necesito para la pauta?</summary><div class="faq-body">La pauta se carga directamente a tu cuenta de Meta y no está incluida en el plan. Se puede partir desde $50.000 mensuales; recomendamos cerca de $150.000 para que las campañas tengan datos suficientes.</div></details>
      <details><summary>¿Cuánto tardan en verse resultados?</summary><div class="faq-body">El algoritmo de Meta necesita entre 7 y 14 días para optimizar. Los primeros resultados concretos suelen verse al cierre del primer mes.</div></details>
      <details><summary>¿Tienen contrato de permanencia?</summary><div class="faq-body">No. Trabajamos mes a mes, con aviso previo de 15 días. Nos quedamos porque los resultados hablan.</div></details>
    </div>
  </div>
</section>

<!-- GARANTIAS -->
<section class="guarantee-strip">
  <div class="guarantee-strip-inner">
    <h2>Trabajas sin riesgo</h2>
    <p>Tres compromisos que asumimos por escrito desde el primer mes.</p>
    <div class="guarantee-strip-grid">
      <div class="gs-card">
        <div class="gs-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v6c0 4-3 7-7 9-4-2-7-5-7-9V6l7-3Z"/><path d="m9 12 2 2 4-4"/></svg></div>
        <div>
          <div class="gs-title">Satisfacción garantizada en 15 días</div>
          <div class="gs-desc">Si en los primeros 15 días no estás conforme con el trabajo, te devolvemos lo pagado.</div>
        </div>
      </div>
      <div class="gs-card">
        <div class="gs-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7Z"/><path d="M9 7V4h6v3"/><path d="M9 13h6"/></svg></div>
        <div>
          <div class="gs-title">El contenido es tuyo para siempre</div>
          <div class="gs-desc">Todo el material que producimos queda en tu poder, aunque dejes de trabajar con nosotros.</div>
        </div>
      </div>
      <div class="gs-card">
        <div class="gs-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
        <div>
          <div class="gs-title">Entrega en plazo o descuento automático</div>
          <div class="gs-desc">Si no cumplimos el plazo acordado, se aplica un descuento automático en tu próxima factura.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="cta-sec" id="contacto">
  <div class="sec-inner">
    <div class="sec-tag">Contacto</div>
    <h2>Agenda tu <span class="accent">diagnóstico gratuito</span></h2>
    <p>Elige el horario que más te acomode. Conversamos sobre tu negocio, tus objetivos y qué plan te conviene — sin compromiso.</p>
    <div class="cupos-home">
      <span class="cupos-dot"></span>
      <p><strong>Tomamos solo 3 a 4 clientes nuevos al mes.</strong> Es la única forma de mantener la calidad de producción y que tu obra no sea una más en la fila.</p>
    </div>
    <div class="calendly-wrap">
      <div class="calendly-inline-widget" data-url="https://calendly.com/sebastian-vrique/reunion-manyobra-marketing-1-1?hide_gdpr_banner=1&amp;background_color=111111&amp;text_color=ffffff&amp;primary_color=ffffff" style="min-width:320px;height:700px;"></div>
      <noscript>
        <a href="https://calendly.com/sebastian-vrique/reunion-manyobra-marketing-1-1" target="_blank" rel="noopener" class="btn btn-grad">Agendar una reunión →</a>
      </noscript>
    </div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <p class="form-footer">¿Prefieres escribir primero? <a href="https://wa.me/56956747949?text=Hola%20Manyobra%2C%20quiero%20informaci%C3%B3n" target="_blank" rel="noopener">Háblanos por WhatsApp →</a></p>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-top">
<div class="footer-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
          <span class="nav-logo-mark"><svg viewBox="0 0 80 50" fill="none"><path d="M4 38 C4 38 10 8 20 8 C30 8 30 38 40 38 C50 38 50 8 60 8 C70 8 76 38 76 38" stroke="white" stroke-width="7" stroke-linecap="round" fill="none"/></svg></span>
          <span class="nav-logo-text">Manyobra</span>
        </a>
        <p>Producción audiovisual y Meta Ads para empresas de construcción en Chile.</p>
      </div>
      <div class="footer-col">
        <h4>Navegación</h4>
        <ul>
          <li><a href="#portafolio">Portafolio</a></li>
          <li><a href="#servicios">Qué hacemos</a></li>
          <li><a href="/agente-ia/">Agente IA</a></li>
          <li><a href="#contacto">Agendar reunión</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 Manyobra SpA. Todos los derechos reservados.</p>
      <p><a href="#" onclick="openPrivacy(event)">Privacidad</a> &nbsp;·&nbsp; <a href="#" onclick="openTerms(event)">Términos</a></p>
    </div>
  </div>
</footer>

<!-- CTA FIJO EN MÓVIL -->
<div class="cta-movil">
  <a href="https://calendly.com/sebastian-vrique/reunion-manyobra-marketing-1-1?utm_source=web&utm_content=barra-movil" target="_blank" rel="noopener">Agendar reunión →</a>
</div>

<!-- WA FLOAT -->
<a href="https://wa.me/56956747949?text=Hola%20Manyobra%2C%20me%20interesa%20saber%20m%C3%A1s" target="_blank" rel="noopener" class="wa-float">
  <div class="wa-tip">Escríbenos</div>
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<!-- PRIVACY MODAL -->
<div class="modal-overlay" id="privacyModal">
  <div class="modal">
    <button class="modal-close" onclick="closeModal('privacyModal')">✕</button>
    <h2>Política de Privacidad</h2>
    <p><strong>Última actualización:</strong> Abril 2025</p>
    <h3>1. Responsable</h3><p>Manyobra SpA, con domicilio en Chile.</p>
    <h3>2. Datos recopilados</h3><p>Nombre, email, teléfono y mensaje al completar el formulario.</p>
    <h3>3. Finalidad</h3><p>Responder tu consulta, enviarte información si lo autorizas, y mejorar el sitio.</p>
    <h3>4. Conservación</h3><p>Hasta 2 años desde la última interacción.</p>
    <h3>5. Terceros</h3><p>No vendemos ni cedemos datos. Solo proveedores tecnológicos bajo confidencialidad.</p>
    <h3>6. Tus derechos</h3><p>Acceso, rectificación y cancelación: <a href="mailto:contacto@manyobra.cl">contacto@manyobra.cl</a></p>
    <h3>7. Cookies</h3><p>Usamos Meta Pixel y cookies analíticas. Puedes desactivarlas en tu navegador.</p>
    <h3>8. Legislación</h3><p>Ley N° 19.628 de Chile.</p>
  </div>
</div>

<!-- TERMS MODAL -->
<div class="modal-overlay" id="termsModal">
  <div class="modal">
    <button class="modal-close" onclick="closeModal('termsModal')">✕</button>
    <h2>Términos de Servicio</h2>
    <p><strong>Última actualización:</strong> Abril 2025</p>
    <h3>1. Objeto</h3><p>Regulan el uso de manyobra.cl y la contratación de servicios de gestión publicitaria y producción audiovisual.</p>
    <h3>2. Resultados</h3><p>Manyobra no garantiza resultados específicos. Los resultados dependen de factores externos al servicio.</p>
    <h3>3. Inversión publicitaria</h3><p>El presupuesto de pauta es administrado directamente por el cliente en su cuenta Meta.</p>
    <h3>4. Cancelación</h3><p>Con 15 días de aviso previo, sin penalidades.</p>
    <h3>5. Legislación</h3><p>Leyes de Chile. Disputas ante tribunales de Santiago.</p>
  </div>
</div>

<div class="toast" id="toast">Mensaje enviado. Te contactamos pronto.</div>

<?php wp_footer(); ?>
</body>
</html>
