<?php get_header(); ?>

<!-- NAV -->
<nav id="navbar">
  <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
    <span class="nav-logo-mark">
      <svg viewBox="0 0 80 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 38 C4 38 10 8 20 8 C30 8 30 38 40 38 C50 38 50 8 60 8 C70 8 76 38 76 38" stroke="currentColor" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
      </svg>
    </span>
    <span class="nav-logo-text">Manyobra</span>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="#portafolio">Portafolio</a></li>
    <li><a href="#servicios">Cómo funciona</a></li>
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
        <path d="M8 76 C8 76 20 16 40 16 C60 16 60 76 80 76 C100 76 100 16 120 16 C140 16 152 76 152 76" stroke="currentColor" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
      </svg>
    </div>
    <div class="hero-tag">🏗️ Marketing para empresas de construcción · Chile</div>
    <h1>Tu obra llena<br/>tu <em>agenda</em>.</h1>
    <p class="hero-sub">Convertimos el registro de tus obras en campañas que llegan a quien puede contratarte. A tu WhatsApp llega gente con proyecto real, no curiosos.</p>
    <div class="hero-actions">
      <a href="#contacto" class="btn btn-grad">Quiero más proyectos</a>
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
    <p class="sec-sub">Cada cliente nos mandó el registro de su obra. Esto es lo que le devolvimos: piezas listas para campaña.</p>
    <div class="reel-grid">

      <!-- Para sumar una pieza: copia este bloque, cambia src, poster, cliente y rubro,
           y deja el .mp4 comprimido junto a su .jpg en testimonios/reels/ -->
      <div class="video-card">
        <div class="video-wrap">
          <video src="/testimonios/reels/jn-piscinas.mp4" data-poster="/testimonios/reels/jn-piscinas.jpg" preload="none" playsinline></video>
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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

<!-- SERVICES -->
<section class="services-sec sistema-sec" id="servicios" aria-labelledby="servicios-titulo">
  <div class="sec-inner">
    <div class="sec-tag">Cómo funciona</div>
    <h2 id="servicios-titulo">De tu obra a una <span class="accent">reunión agendada</span></h2>
    <p class="sec-sub">No vendemos videos sueltos ni campañas aisladas. El sistema acompaña a cada interesado desde que ve tu obra hasta que llega a tu agenda.</p>

    <ol class="sistema-pasos">
      <li class="sis-paso">
        <div class="sis-n">01</div>
        <div>
          <h3>Producimos</h3>
          <p>Nos mandas el registro de tu obra desde el teléfono. Nosotros lo convertimos en piezas de campaña: guion, edición y formato. Si el proyecto lo amerita, podemos ir a grabar en terreno como servicio aparte.</p>
        </div>
      </li>
      <li class="sis-paso">
        <div class="sis-n">02</div>
        <div>
          <h3>Captamos</h3>
          <p>Campañas en Meta segmentadas por zona y por perfil de quien de verdad contrata: propietarios, inmobiliarias y empresas.</p>
        </div>
      </li>
      <li class="sis-paso destacado">
        <div class="sis-n">03</div>
        <div>
          <h3>Filtramos <span class="sis-tag">Módulo IA</span></h3>
          <p>Donde el módulo está activo, el Agente IA responde en segundos y pregunta lo que importa: tipo de obra, zona y plazo. Así separas el proyecto real de la consulta suelta.</p>
        </div>
      </li>
      <li class="sis-paso destacado">
        <div class="sis-n">04</div>
        <div>
          <h3>Hacemos seguimiento <span class="sis-tag">Módulo IA</span></h3>
          <p>Con el módulo activo, nadie se enfría esperando respuesta mientras tú estás en terreno: el agente insiste hasta que la persona decide.</p>
        </div>
      </li>
      <li class="sis-paso">
        <div class="sis-n">05</div>
        <div>
          <h3>Te llegan los contactos</h3>
          <p>Gente que ya dijo qué obra necesita, dónde y para cuándo. Cerrar es lo único que queda de tu lado.</p>
        </div>
      </li>
      <li class="sis-paso">
        <div class="sis-n">06</div>
        <div>
          <h3>Medimos y escalamos</h3>
          <p>Cada quincena revisas qué campañas trajeron proyectos reales y hacia qué tipo de obra conviene empujar.</p>
        </div>
      </li>
    </ol>

    <div class="sistema-nota">
      <p>Los pasos 3 y 4 son los que la mayoría de las agencias te entrega como una guía para que los hagas tú. <strong>Acá existe un Agente IA que ya los hace solo, y se activa según el plan.</strong> <a href="/agente-ia/" class="svc-link">Ver cómo funciona →</a></p>
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
          <button type="button" class="video-play" onclick="playVideo(this)" aria-label="Reproducir video">
            <div class="play-btn"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
          </button>
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

<!-- FAQ -->
<section class="faq-sec" id="faq">
  <div class="sec-inner">
    <div class="sec-tag">Antes de agendar</div>
    <h2>Lo que más nos <span class="accent">preguntan</span></h2>
    <div class="faq-list">
      <details><summary>¿Cuánto presupuesto necesito para la pauta?</summary><div class="faq-body">La pauta se carga directamente a tu cuenta de Meta y no está incluida en el plan. Se puede partir desde $50.000 mensuales; recomendamos cerca de $150.000 para que las campañas tengan datos suficientes.</div></details>
      <details><summary>¿Cuánto tardan en verse resultados?</summary><div class="faq-body">El algoritmo de Meta necesita entre 7 y 14 días para optimizar. Los primeros resultados concretos suelen verse al cierre del primer mes.</div></details>
      <details><summary>¿Por qué no le pido a alguien conocido que me haga los videos?</summary><div class="faq-body">Puedes, y a veces sale bien. La diferencia no está en grabar: está en a quién se le muestra después. Nosotros armamos la pieza pensando en la campaña y la ponemos frente a gente que está buscando lo que tú haces, en tu zona. Un video bonito que no ve nadie no trae obras.</div></details>
      <details><summary>Ya me llegan pegas por recomendación, ¿para qué esto?</summary><div class="faq-body">Por eso mismo. Esto no reemplaza el boca a boca, lo destapa: cuando el referido te busca y encuentra trabajo tuyo bien mostrado, llega convencido. Y en los meses en que las recomendaciones bajan, tienes algo funcionando que no depende de que alguien se acuerde de ti.</div></details>
      <details><summary>¿Tienen contrato de permanencia?</summary><div class="faq-body">No. Trabajamos mes a mes, con aviso previo de 15 días. Nos quedamos porque los resultados hablan.</div></details>
    </div>
  </div>
</section>

<!-- CONDICIONES -->
<section class="condiciones-sec">
  <div class="sec-inner">
    <div class="sec-tag">Para que funcione</div>
    <h2>Lo que necesitamos <span class="accent">de ti</span></h2>
    <p class="sec-sub">El sistema trae las oportunidades hasta tu agenda. Estas cuatro cosas dependen de ti, y sin ellas no funciona.</p>
    <div class="cond-grid">
      <div class="cond-item"><span><b>Responder a quien llega</b>El agente filtra y agenda, pero la reunión la haces tú.</span></div>
      <div class="cond-item"><span><b>Mantener la pauta activa</b>Cortar la inversión a mitad de camino reinicia el aprendizaje de las campañas.</span></div>
      <div class="cond-item"><span><b>Darnos acceso a la obra</b>Sin poder grabar tu trabajo real, el contenido pierde lo que lo hace funcionar.</span></div>
      <div class="cond-item"><span><b>Aprobar el contenido a tiempo</b>Te mandamos las piezas para revisión; si se quedan detenidas, se atrasa todo.</span></div>
    </div>
  </div>
</section>

<!-- GARANTIAS -->
<section class="guarantee-strip">
  <div class="guarantee-strip-inner">
    <h2>Trabajas sin riesgo</h2>
    <p>Nos hacemos responsables de lo que controlamos. No prometemos ventas: el cierre depende de ti y de tu mercado.</p>
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
      <div class="gs-card">
        <div class="gs-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l2-7 4 14 2-7h6"/></svg></div>
        <div>
          <div class="gs-title">Conversaciones calificadas o seguimos sin costo</div>
          <div class="gs-desc">Si en el período acordado el sistema no genera conversaciones con proyectos reales, seguimos trabajando sin cobrarte hasta lograrlo.</div>
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
    <p>Antes de venderte nada revisamos dos números: cuánta gente alcanzable hay en tu zona de operación y cuánto vale tu obra promedio. <strong>Si no dan para que la pauta se pague sola, te lo decimos.</strong> Esa revisión no tiene costo.</p>
    <p class="cuenta-obra">Haz la cuenta con tu obra promedio: si una sola obra al año viene de acá, el sistema ya se pagó.</p>
    <div class="cupos-home">
      <span class="cupos-dot"></span>
      <p><strong>Tomamos solo 3 a 4 clientes nuevos al mes.</strong> Es la única forma de mantener la calidad de producción y que tu obra no sea una más en la fila.</p>
    </div>

    <!-- Escalon intermedio: quien no esta listo para una videollamada
         deja su correo y recibe por escrito los dos numeros. Sin esto,
         el unico camino era agendar, y quien no agendaba se perdia. -->
    <div class="diag-box">
      <h3>¿Prefieres los números antes de hablar?</h3>
      <p class="diag-sub">Déjanos tu correo y te mandamos por escrito cuánta gente alcanzable hay en tu zona y qué tendría que rendir la pauta según tu obra promedio. Lo escribimos nosotros, no es un informe automático.</p>
      <form class="diag-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="manyobra_diagnostico" />
        <?php wp_nonce_field('manyobra_diagnostico', 'manyobra_nonce'); ?>
        <p class="trampa" aria-hidden="true"><label>No rellenar<input type="text" name="sitio_web" tabindex="-1" autocomplete="off" /></label></p>
        <div class="diag-fila">
          <label class="diag-campo"><span>Tu correo</span>
            <input type="email" name="email" required placeholder="nombre@empresa.cl" autocomplete="email" /></label>
          <label class="diag-campo"><span>Comuna o zona donde trabajas</span>
            <input type="text" name="zona" required placeholder="Ej: Rancagua y alrededores" /></label>
        </div>
        <div class="diag-fila">
          <label class="diag-campo"><span>Qué tipo de obra haces</span>
            <select name="obra">
              <option value="">Elige una</option>
              <option>Casas y ampliaciones</option>
              <option>Edificios y obra gruesa</option>
              <option>Movimiento de tierra o áridos</option>
              <option>Piscinas</option>
              <option>Paisajismo y exteriores</option>
              <option>Otro</option>
            </select></label>
          <label class="diag-campo"><span>Teléfono <em>(opcional)</em></span>
            <input type="tel" name="telefono" placeholder="+56 9 ..." autocomplete="tel" /></label>
        </div>
        <button type="submit" class="btn btn-grad">Mándame los números</button>
        <p class="diag-legal">Te escribimos solo por esto. No compartimos tu correo con nadie.</p>
      </form>
      <div class="diag-aviso" id="diagAviso" role="status" hidden></div>
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
          <span class="nav-logo-mark"><svg viewBox="0 0 80 50" fill="none"><path d="M4 38 C4 38 10 8 20 8 C30 8 30 38 40 38 C50 38 50 8 60 8 C70 8 76 38 76 38" stroke="currentColor" stroke-width="7" stroke-linecap="round" fill="none"/></svg></span>
          <span class="nav-logo-text">Manyobra</span>
        </a>
        <p>Producción audiovisual y Meta Ads para empresas de construcción en Chile.</p>
      </div>
      <div class="footer-col">
        <h4>Navegación</h4>
        <ul>
          <li><a href="#portafolio">Portafolio</a></li>
          <li><a href="#servicios">Cómo funciona</a></li>
          <li><a href="/agente-ia/">Agente IA</a></li>
          <li><a href="#contacto">Agendar reunión</a></li>
        </ul>
      </div>
    </div>
<!-- TRAYECTORIA (pie) -->
<div class="stats stats-footer">
  <div class="stats-grid">
    <div class="stat"><div class="stat-n">+<span class="accent">200</span></div><div class="stat-l">Campañas</div></div>
    <div class="stat"><div class="stat-n"><span class="accent">3.5</span>x</div><div class="stat-l">ROAS promedio</div></div>
    <div class="stat"><div class="stat-n">+<span class="accent">50</span></div><div class="stat-l">Clientes</div></div>
    <div class="stat"><div class="stat-n"><span class="accent">4</span>+</div><div class="stat-l">Años</div></div>
  </div>
  <p class="stats-note">Experiencia acumulada de la agencia en todos los rubros que hemos trabajado, no exclusivamente en construcción.</p>
</div>
    <div class="footer-bottom">
      <p>© 2026 Manyobra SpA. Todos los derechos reservados.</p>
      <p><button type="button" class="link-legal" onclick="openPrivacy(event)">Privacidad</button> &nbsp;·&nbsp; <button type="button" class="link-legal" onclick="openTerms(event)">Términos</button></p>
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
