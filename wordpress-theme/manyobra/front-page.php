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
    <li><a href="#servicios">Servicios</a></li>
    <li><a href="#proceso">Proceso</a></li>
    <li><a href="#perfil">Sobre mí</a></li>
    <li><a href="#testimonios">Testimonios</a></li>
    <li><a href="#planes">Planes</a></li>
    <li><a href="/agente-ia/">Agente IA</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ul>
  <a href="#contacto" class="nav-cta">Trabajemos juntos</a>
  <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg" aria-hidden="true"></div>
  <div class="hero-tex" aria-hidden="true"></div>
  <div class="hero-inner">
    <div class="hero-logo">
      <svg viewBox="0 0 160 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 76 C8 76 20 16 40 16 C60 16 60 76 80 76 C100 76 100 16 120 16 C140 16 152 76 152 76" stroke="white" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
      </svg>
    </div>
    <div class="hero-tag">Agencia Meta Ads · Chile</div>
    <h1>Más <em>clientes</em>.<br/>Menos <em>complicaciones</em>.</h1>
    <p class="hero-sub">Ponemos a trabajar tus anuncios, tu contenido y tu WhatsApp para que lleguen clientes reales a tu negocio. Tú solo te encargas de atenderlos.</p>
    <div class="hero-actions">
      <a href="#contacto" class="btn btn-grad">Quiero más clientes</a>
      <a href="#planes" class="btn btn-outline">Ver planes y precios</a>
    </div>
    <p class="hero-note">Los resultados dependen de cada negocio. No garantizamos cifras específicas.</p>
  </div>
</header>

<!-- STATS -->
<div class="stats">
  <div class="stats-grid">
    <div class="stat"><div class="stat-n">+<span class="accent">200</span></div><div class="stat-l">Campañas</div></div>
    <div class="stat"><div class="stat-n"><span class="accent">3.5</span>x</div><div class="stat-l">ROAS promedio</div></div>
    <div class="stat"><div class="stat-n">+<span class="accent">50</span></div><div class="stat-l">Clientes</div></div>
    <div class="stat"><div class="stat-n"><span class="accent">4</span>+</div><div class="stat-l">Años</div></div>
  </div>
</div>

<!-- SERVICES -->
<section class="services-sec" id="servicios">
  <div class="sec-inner">
    <div class="sec-tag">Servicios</div>
    <h2>Lo que hacemos <span class="accent">bien</span></h2>
    <p class="sec-sub">No te vendemos servicios sueltos: te damos resultados para tu negocio.</p>
    <div class="svc-grid">
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">01</div><h3>Más clientes que te compran</h3><p>Campañas en Facebook e Instagram para que la gente correcta te encuentre y te escriba.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">02</div><h3>Una marca que se ve profesional</h3><p>Producimos los videos y fotos que hacen que tu negocio se vea a la altura de lo que vale.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">03</div><h3>Nunca más pierdes un mensaje</h3><p>Un agente de IA responde, califica y agenda por WhatsApp 24/7, aunque estés durmiendo.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">04</div><h3>Recuperas las ventas que se escapan</h3><p>Volvemos a impactar a quienes te vieron y no compraron, hasta que se deciden.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">05</div><h3>Sabes en qué se va cada peso</h3><p>Reportes claros: ves qué funciona y qué no, sin humo.</p></div>
      <div class="svc-card"><div class="svc-dot"></div><div class="svc-num">06</div><h3>Cero dolores de cabeza con Meta</h3><p>Cuidamos que tus anuncios cumplan las políticas para que nunca te bloqueen la cuenta.</p></div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process-sec" id="proceso">
  <div class="sec-inner">
    <div class="sec-tag">Proceso</div>
    <h2>Cómo <span class="accent">trabajamos</span></h2>
    <p class="sec-sub">Simple y transparente: tú apruebas, nosotros hacemos que lleguen clientes.</p>
    <div class="process-grid">
      <div class="process-step"><div class="p-num">01</div><h3>Diagnóstico gratuito</h3><p>Analizamos tu negocio, competencia y objetivos para entender el punto de partida real.</p></div>
      <div class="process-step"><div class="p-num">02</div><h3>Estrategia personalizada</h3><p>Diseñamos el plan de campañas, creativos y automatizaciones según tu presupuesto.</p></div>
      <div class="process-step"><div class="p-num">03</div><h3>Lanzamos y producimos</h3><p>Activamos campañas, grabamos el contenido y configuramos el bot de WhatsApp.</p></div>
      <div class="process-step"><div class="p-num">04</div><h3>Reportes y escalado</h3><p>Ajustes continuos y escalado de lo que mejor funciona.</p></div>
    </div>
  </div>
</section>

<!-- PROFILE -->
<section class="profile-sec" id="perfil">
  <div class="sec-inner">
    <div class="sec-tag">El equipo</div>
    <h2>Un <span class="accent">equipo</span> detrás de tu marca</h2>
    <p class="sec-sub">A Manyobra la lidero yo, pero nunca trabajas con una sola persona.</p>
    <div class="founder-card">
      <div class="founder-head">
        <div class="founder-avatar" aria-hidden="true">S</div>
        <div>
          <div class="profile-name">Hola, soy <span class="accent">Sebastián</span></div>
          <div class="profile-role">Fundador y director · Meta Ads &amp; Producción Audiovisual</div>
        </div>
      </div>
      <div class="founder-cols">
        <div>
          <p class="profile-bio">Llevo más de 4 años ayudando a negocios chilenos a crecer con publicidad en Meta. Combino estrategia con producción audiovisual, porque los mejores resultados llegan cuando el contenido y la pauta trabajan juntos.</p>
          <p class="profile-bio">Pero Manyobra no es una sola persona: según lo que pide cada proyecto sumo a especialistas de confianza —edición de video, diseño y gestión de pauta— para que cada área la trabaje alguien que de verdad sabe. Yo dirijo, coordino y respondo por todo: tú tienes un solo interlocutor y, detrás, un equipo.</p>
        </div>
        <div class="founder-side">
          <div class="profile-nums">
            <div class="pn"><div class="pn-val">+200</div><div class="pn-lbl">Campañas</div></div>
            <div class="pn"><div class="pn-val">+50</div><div class="pn-lbl">Clientes</div></div>
            <div class="pn"><div class="pn-val">4+ años</div><div class="pn-lbl">Meta Ads</div></div>
          </div>
          <div class="profile-tags">
            <span class="ptag">Meta Ads</span><span class="ptag">Facebook Ads</span>
            <span class="ptag">Instagram Ads</span><span class="ptag">Producción Video</span>
            <span class="ptag">WhatsApp Bot</span><span class="ptag">CRM</span>
          </div>
          <div class="profile-socials">
          <a href="https://wa.me/56956747949" target="_blank" rel="noopener" class="social-btn">
            <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            WhatsApp
          </a>
          <a href="https://www.instagram.com/manyobra.cl/" target="_blank" rel="noopener" class="social-btn">
            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            @manyobra.cl
          </a>
          <a href="https://www.instagram.com/sebavega_mk/" target="_blank" rel="noopener" class="social-btn">
            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            @sebavega_mk
          </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi-sec" id="testimonios">
  <div class="sec-inner">
    <div class="sec-tag">Testimonios</div>
    <h2>Lo que dicen <span class="accent">nuestros clientes</span></h2>
    <p class="sec-sub">Resultados reales de negocios reales.</p>
    <div class="testi-tabs">
      <button class="testi-tab active" onclick="switchTab('videos', this)">Video</button>
      <button class="testi-tab" onclick="switchTab('imagenes', this)">Imagen</button>
      <button class="testi-tab" onclick="switchTab('audios', this)">Audio</button>
    </div>
    <div class="testi-panel active" id="panel-videos">
      <div class="video-grid" id="video-grid"></div>
      <div class="testi-empty" id="empty-videos">
        <p><strong>Aún no hay videos.</strong><br/>Agrega archivos .mp4 en la carpeta del tema.</p>
      </div>
    </div>
    <div class="testi-panel" id="panel-imagenes">
      <div class="img-grid" id="img-grid"></div>
      <div class="testi-empty" id="empty-imagenes">
        <p><strong>Aún no hay imágenes.</strong><br/>Agrega archivos .jpg/.png en la carpeta del tema.</p>
      </div>
    </div>
    <div class="testi-panel" id="panel-audios">
      <div class="audio-grid" id="audio-grid"></div>
      <div class="testi-empty" id="empty-audios">
        <p><strong>Aún no hay audios.</strong><br/>Agrega archivos .mp3 en la carpeta del tema.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY -->
<section class="why-sec">
  <div class="sec-inner">
    <div class="sec-tag">Por qué elegirnos</div>
    <h2>No somos una agencia <span class="accent">más</span></h2>
    <p class="sec-sub">Combinamos lo que pocas agencias ofrecen juntas.</p>
    <div class="why-grid">
      <div class="why-item"><div class="why-icon">🎬</div><h3>Todo resuelto, en un solo lugar</h3><p>No coordinas con nadie más: estrategia y producción audiovisual bajo un mismo equipo.</p></div>
      <div class="why-item"><div class="why-icon">🤖</div><h3>Atiende y vende por ti, 24/7</h3><p>El bot de WhatsApp califica leads automáticamente para que solo llegues a clientes que realmente quieren comprar.</p></div>
      <div class="why-item"><div class="why-icon">📊</div><h3>Sabes siempre cómo va tu negocio</h3><p>Acceso directo al equipo que gestiona tus campañas. Sin intermediarios ni sorpresas.</p></div>
      <div class="why-item"><div class="why-icon">🤝</div><h3>Te quedas porque quieres, no porque debes</h3><p>Trabajamos mes a mes porque confiamos en que los resultados hablan solos.</p></div>
    </div>
  </div>
</section>

<!-- PLANES (resumen) -->
<!-- OJO: precios duplicados — si cambian, actualizar también planes/index.html (tarjetas HTML + objeto billingData del script) -->
<section class="planes-sec" id="planes">
  <div class="sec-inner">
    <div class="sec-tag">Planes</div>
    <h2>Planes desde <span class="accent">$100.000/mes</span></h2>
    <p class="sec-sub">Elige cuánto quieres crecer este mes. Tú solo apruebas el contenido; nosotros conseguimos que tu negocio se vea y venda. Todos los precios son + IVA.</p>

    <div class="lp-banner">
      <div>
        <div class="lp-banner-name">🔑 Arranque <span class="lp-tag">Plan de entrada</span></div>
        <p class="lp-banner-desc">Empieza a aparecer y a atraer tus primeros clientes: 4 videos + 4 imágenes + 4 historias al mes (contenido editado), con Meta Ads gestionados: campañas de conversión segmentadas (12 anuncios) y app de avance.</p>
      </div>
      <div class="lp-banner-right">
        <div class="lp-banner-price">$100.000<span>/mes + IVA</span></div>
        <a href="https://wa.me/56956747949?text=Hola%20Manyobra%2C%20quiero%20el%20Plan%20Arranque" target="_blank" rel="noopener" class="lp-cta ghost">Lo quiero →</a>
      </div>
    </div>

    <div class="lp-grid">
      <article class="lp-card popular">
        <div class="lp-badge">⭐ Popular</div>
        <div class="lp-name">⚙️ Impulso</div>
        <p class="lp-desc">Aparece todos los días y llena tu agenda sin mover un dedo.</p>
        <div class="lp-price"><span class="n">$200.000</span><span class="p">/mes + IVA</span></div>
        <ul class="lp-feats">
          <li><strong>✓ Todo lo de Arranque</strong>, más:</li>
          <li><strong>Producción audiovisual real</strong> (sesión de grabación): 8 videos · 8 imágenes · 8 historias</li>
          <li><strong>Página web</strong> (Landing o Tienda Online) con Píxel de Meta</li>
          <li>Meta Ads: 12 anuncios <strong>con retargeting</strong> + reporte quincenal</li>
          <li>Community Manager + onboarding en 48-72 hrs</li>
        </ul>
        <a href="https://wa.me/56956747949?text=Hola%20Manyobra%2C%20quiero%20el%20Plan%20Impulso" target="_blank" rel="noopener" class="lp-cta grad">Quiero este plan →</a>
      </article>

      <article class="lp-card">
        <div class="lp-badge ghost">🤖 Con Agente IA</div>
        <div class="lp-name">🏎️ Turbo</div>
        <p class="lp-desc">Tu sistema completo para convertir seguidores en clientes, con Agente IA incluido.</p>
        <div class="lp-price"><span class="n">$300.000</span><span class="p">/mes + IVA</span></div>
        <ul class="lp-feats">
          <li><strong>✓ Todo lo de Impulso</strong>, más:</li>
          <li><strong>Agente de venta IA especializado</strong>: responde, califica y agenda por WhatsApp 24/7</li>
          <li>12 videos · 12 imágenes · 12 historias + 1 sesión extra de producción</li>
          <li>Meta Ads con A/B testing + remarketing multi-etapa</li>
          <li>Landing Page Premium + copywriting de ventas + reporte semanal</li>
        </ul>
        <a href="https://wa.me/56956747949?text=Hola%20Manyobra%2C%20quiero%20el%20Plan%20Turbo" target="_blank" rel="noopener" class="lp-cta ghost">Quiero este plan →</a>
      </article>
    </div>

    <div class="planes-more">
      <a href="/planes/" class="btn btn-grad">Ver desglose completo de los planes →</a>
      <p>Incluye el detalle de cada pilar, garantías, pago 3 meses con ~33% de descuento y descarga en PDF.<br/>¿Solo quieres el Agente IA, sin plan de contenido? <a href="/agente-ia/" style="color:var(--blue);">También se contrata solo →</a></p>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-sec" id="faq">
  <div class="sec-inner">
    <div class="sec-tag">FAQ</div>
    <h2>Preguntas <span class="accent">frecuentes</span></h2>
    <p class="sec-sub">Todo lo que necesitas saber antes de empezar.</p>
    <div class="faq-list">
      <details><summary>¿Cuánto presupuesto necesito?</summary><div class="faq-body">Podemos trabajar desde $50.000 CLP mensuales en pauta. Recomendamos $150.000 para tener datos estadísticamente significativos.</div></details>
      <details><summary>¿Incluyen producción de videos y fotos?</summary><div class="faq-body">Sí. Ofrecemos producción audiovisual como parte de nuestros planes. Grabamos y editamos contenido para Reels, Stories y Feed pensado específicamente para ads.</div></details>
      <details><summary>¿Cómo funciona el bot de WhatsApp?</summary><div class="faq-body">El bot atiende a los prospectos que llegan por tus anuncios, hace preguntas de calificación y solo te pasa los leads que cumplen con el perfil que definimos juntos.</div></details>
      <details><summary>¿Cuánto tiempo tardan en verse resultados?</summary><div class="faq-body">El algoritmo de Meta necesita entre 7 y 14 días para optimizar. Los primeros resultados concretos suelen verse al final del primer mes de campaña.</div></details>
      <details><summary>¿Ustedes manejan el dinero de mi pauta?</summary><div class="faq-body">No. La pauta se carga directamente a tu cuenta Meta. Solo cobramos por gestión y estrategia. Tú tienes control total.</div></details>
      <details><summary>¿Tienen contrato de permanencia?</summary><div class="faq-body">No. Trabajamos mes a mes con aviso previo de 15 días.</div></details>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="cta-sec" id="contacto">
  <div class="sec-inner">
    <div class="sec-tag">Contacto</div>
    <h2>Hablemos de tu <span class="accent">negocio</span></h2>
    <p>Cuéntanos qué necesitas y te respondemos en menos de 24 horas.</p>
    <form class="contact-form" id="contactForm" novalidate>
      <div class="form-row">
        <div class="form-group"><label>Nombre *</label><input type="text" id="nombre" placeholder="Tu nombre" required /></div>
        <div class="form-group"><label>Email *</label><input type="email" id="email" placeholder="tu@email.com" required /></div>
      </div>
      <div class="form-row">
        <div class="form-group"><label>WhatsApp</label><input type="tel" id="whatsapp" placeholder="+56 9 XXXX XXXX" /></div>
        <div class="form-group">
          <label>Presupuesto en pauta</label>
          <select id="presupuesto">
            <option value="">Selecciona un rango</option>
            <option>$50.000 – $150.000 CLP</option>
            <option>$150.000 – $500.000 CLP</option>
            <option>$500.000 – $1.500.000 CLP</option>
            <option>Más de $1.500.000 CLP</option>
          </select>
        </div>
      </div>
      <div class="form-group"><label>Cuéntanos</label><textarea id="mensaje" placeholder="¿Qué vendes? ¿Cuál es tu objetivo principal?"></textarea></div>
      <button type="submit" class="btn-submit">Enviar →</button>
      <p class="form-footer">Al enviar aceptas nuestra <a href="#" onclick="openPrivacy(event)">Política de Privacidad</a>. No compartimos tus datos.</p>
    </form>
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
        <p>Agencia de Meta Ads y producción audiovisual para negocios chilenos que quieren crecer.</p>
      </div>
      <div class="footer-col">
        <h4>Servicios</h4>
        <ul>
          <li><a href="#servicios">Meta Ads</a></li>
          <li><a href="#servicios">Producción Audiovisual</a></li>
          <li><a href="#servicios">Bot WhatsApp</a></li>
          <li><a href="#servicios">Retargeting</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Planes</h4>
        <ul>
          <li><a href="/planes/">🔑 Arranque</a></li>
          <li><a href="/planes/">⚙️ Impulso</a></li>
          <li><a href="/planes/">🏎️ Turbo</a></li>
          <li><a href="/agente-ia/">🤖 Agente IA</a></li>
          <li><a href="/planes/">Ver todos →</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Empresa</h4>
        <ul>
          <li><a href="#perfil">Sobre mí</a></li>
          <li><a href="#testimonios">Testimonios</a></li>
          <li><a href="#contacto">Contacto</a></li>
          <li><a href="#" onclick="openPrivacy(event)">Privacidad</a></li>
          <li><a href="#" onclick="openTerms(event)">Términos</a></li>
          <li><a href="mailto:contacto@manyobra.cl">contacto@manyobra.cl</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 Manyobra SpA. Todos los derechos reservados.</p>
      <p><a href="#" onclick="openPrivacy(event)">Privacidad</a> &nbsp;·&nbsp; <a href="#" onclick="openTerms(event)">Términos</a></p>
    </div>
  </div>
</footer>

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
