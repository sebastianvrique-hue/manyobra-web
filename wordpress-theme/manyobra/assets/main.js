// Nav
const ham = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
if (ham) ham.addEventListener('click', () => navLinks.classList.toggle('open'));
window.addEventListener('scroll', () => {
  document.getElementById('navbar').style.borderBottomColor =
    window.scrollY > 20 ? 'rgba(255,255,255,0.12)' : 'rgba(255,255,255,0.08)';
});

// Testimonial tabs
function switchTab(panel, btn) {
  document.querySelectorAll('.testi-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.testi-panel').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('panel-' + panel).classList.add('active');
}

// Check empty panels
function checkEmpty() {
  ['videos','imagenes','audios'].forEach(type => {
    const grid = document.getElementById(type === 'videos' ? 'video-grid' : type === 'imagenes' ? 'img-grid' : 'audio-grid');
    const empty = document.getElementById('empty-' + type);
    if (grid && empty) {
      const hasContent = grid.querySelector('.video-card, .img-card, .audio-card');
      grid.style.display = hasContent ? 'grid' : 'none';
      empty.style.display = hasContent ? 'none' : 'block';
    }
  });
}
checkEmpty();

// Video player
function playVideo(overlay) {
  const video = overlay.previousElementSibling;
  video.play();
  overlay.style.display = 'none';
  video.controls = true;
}

// Audio player
function toggleAudio(btn) {
  const card = btn.closest('.audio-player');
  const audio = card.previousElementSibling.tagName === 'AUDIO'
    ? card.previousElementSibling
    : card.closest('.audio-card').querySelector('audio');
  if (!audio) return;
  if (audio.paused) {
    document.querySelectorAll('audio').forEach(a => { a.pause(); a.closest('.audio-card')?.querySelector('.audio-play-btn')?.classList.remove('playing'); });
    audio.play();
    btn.classList.add('playing');
  } else {
    audio.pause();
    btn.classList.remove('playing');
  }
  audio.ontimeupdate = () => {
    const fill = card.querySelector('.progress-bar-fill');
    const time = card.querySelector('.audio-time');
    if (fill && audio.duration) fill.style.width = (audio.currentTime / audio.duration * 100) + '%';
    if (time) time.textContent = fmt(audio.currentTime) + ' / ' + fmt(audio.duration || 0);
  };
  audio.onended = () => btn.classList.remove('playing');
}
function seekAudio(e, bar) {
  const audio = bar.closest('.audio-card').querySelector('audio');
  if (!audio || !audio.duration) return;
  audio.currentTime = (e.offsetX / bar.offsetWidth) * audio.duration;
}
function fmt(s) {
  const m = Math.floor(s / 60), sec = Math.floor(s % 60);
  return m + ':' + (sec < 10 ? '0' : '') + sec;
}

// Modals
function openPrivacy(e) { e.preventDefault(); document.getElementById('privacyModal').classList.add('active'); }
function openTerms(e)   { e.preventDefault(); document.getElementById('termsModal').classList.add('active'); }
function closeModal(id) { document.getElementById(id).classList.remove('active'); }
document.querySelectorAll('.modal-overlay').forEach(el => el.addEventListener('click', e => { if (e.target === el) el.classList.remove('active'); }));
document.addEventListener('keydown', e => { if (e.key === 'Escape') document.querySelectorAll('.modal-overlay.active').forEach(m => m.classList.remove('active')); });

// Form
// Calendly: cuando alguien agenda, lo registramos como conversión en Meta.
// Validar el origen es obligatorio: sin esto cualquier iframe podría disparar conversiones falsas.
window.addEventListener('message', function (e) {
  if (e.origin !== 'https://calendly.com') return;
  if (e.data && e.data.event === 'calendly.event_scheduled' && window.fbq) {
    fbq('track', 'Schedule');
    fbq('track', 'Lead');
  }
});


// Reveal on scroll (las clases se agregan por JS: sin JS nada queda oculto)
(function () {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if (!('IntersectionObserver' in window)) return;
  const grids = document.querySelectorAll('.svc-grid, .process-grid, .why-grid, .video-grid, .lp-grid, .stats-grid, .faq-list');
  grids.forEach(g => Array.from(g.children).forEach((el, i) => {
    el.classList.add('reveal');
    el.style.transitionDelay = Math.min(i * 70, 420) + 'ms';
  }));
  document.querySelectorAll('.sec-inner > .sec-tag, .sec-inner > h2, .sec-inner > .sec-sub, .lp-banner, .planes-more, .founder-card, .contact-form')
    .forEach(el => el.classList.add('reveal'));
  const io = new IntersectionObserver(entries => entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
  }), { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));
})();

// Video del hero: solo se descarga en pantallas grandes y sin movimiento reducido.
// Con display:none el navegador igual lo pediria, asi que la fuente se asigna por JS.
// Se escucha el cambio de media query porque al cargar en segundo plano el ancho
// puede reportarse como 0 y entonces nunca se activaria.
(function () {
  var v = document.querySelector('.hero-video');
  if (!v) return;
  var grande = window.matchMedia('(min-width: 769px)');
  var quieto = window.matchMedia('(prefers-reduced-motion: reduce)');
  function aplicar() {
    if (!grande.matches || quieto.matches) return;
    if (!v.src) v.src = v.dataset.src;
    // Se reintenta en cada disparo: el primer play() puede fallar si la pestana esta oculta.
    if (v.paused) v.play().catch(function () { /* si el navegador lo bloquea, queda el poster */ });
  }
  aplicar();
  grande.addEventListener('change', aplicar);
  window.addEventListener('resize', aplicar);
  window.addEventListener('load', aplicar);
})();

// ── Medición de conversiones ──
// Antes solo se registraba PageView y el agendamiento de Calendly: los enlaces a
// WhatsApp, que son el CTA principal, no disparaban nada. Sin esto no se puede
// optimizar campañas por la acción que la gente realmente hace.
(function () {
  function evento(nombre, datos) {
    if (window.fbq) fbq('track', nombre, datos || {});
    if (window.gtag) gtag('event', nombre, datos || {});
  }

  // Un solo listener delegado para todos los enlaces a WhatsApp de la página.
  document.addEventListener('click', function (e) {
    var a = e.target.closest && e.target.closest('a[href*="wa.me"]');
    if (!a) return;
    var tarjeta = a.closest('.plan-card, .lp-card, .suelto-card, .agente-ia-card');
    var nombre = tarjeta && tarjeta.querySelector('.plan-name, .lp-name, .suelto-name, .ai-name');
    evento('Contact', {
      content_name: nombre ? nombre.textContent.trim() : 'General',
      content_category: document.body.dataset.pagina || location.pathname
    });
  }, true);

  // Quien llega a comparar planes es intención alta: habilita el público de
  // "miró planes y no agendó".
  if (/\/planes\/?$/.test(location.pathname)) {
    evento('ViewContent', { content_category: 'Planes' });
  }

  // Reproducir una pieza del portafolio es señal de interés real, no una visita suelta.
  document.addEventListener('play', function (e) {
    if (e.target.tagName !== 'VIDEO') return;
    if (e.target.dataset.medido) return;
    e.target.dataset.medido = '1';
    var tarjeta = e.target.closest('.video-card');
    var cliente = tarjeta && tarjeta.querySelector('.reel-client, .client-name');
    evento('ViewContent', {
      content_type: 'portafolio',
      content_name: cliente ? cliente.textContent.trim() : 'video'
    });
  }, true);
})();

// ── Pósters diferidos ──
// El atributo poster no admite carga diferida nativa: los del portafolio (540KB)
// se descargaban en la carga inicial aunque estén bajo la primera pantalla.
// No se confía solo en IntersectionObserver: si por alguna razón no dispara, los
// pósters no cargarían nunca. Por eso hay respaldo por scroll y por load.
(function () {
  var vids = [].slice.call(document.querySelectorAll('video[data-poster]'));
  if (!vids.length) return;

  function poner(v) {
    if (v.poster || !v.dataset.poster) return;
    v.poster = v.dataset.poster;
  }
  function revisarCercanos() {
    var alto = window.innerHeight || 800;
    vids = vids.filter(function (v) {
      var r = v.getBoundingClientRect();
      if (r.top < alto + 400 && r.bottom > -400) { poner(v); return false; }
      return true;
    });
    if (!vids.length) window.removeEventListener('scroll', alScroll);
  }
  // Limitador por tiempo en vez de requestAnimationFrame: rAF no corre si la
  // pestaña no está pintando, y entonces los pósters no cargarían nunca.
  var ultimo = 0;
  function alScroll() {
    var ahora = Date.now();
    if (ahora - ultimo < 120) return;
    ultimo = ahora;
    revisarCercanos();
  }

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) {
        if (e.isIntersecting) { poner(e.target); io.unobserve(e.target); }
      });
    }, { rootMargin: '400px' });
    vids.forEach(function (v) { io.observe(v); });
  }

  window.addEventListener('scroll', alScroll, { passive: true });
  window.addEventListener('resize', alScroll, { passive: true });
  window.addEventListener('load', revisarCercanos);
  revisarCercanos();
})();
