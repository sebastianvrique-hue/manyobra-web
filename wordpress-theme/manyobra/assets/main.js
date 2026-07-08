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
const form = document.getElementById('contactForm');
if (form) {
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    if (!document.getElementById('nombre').value.trim() || !document.getElementById('email').value.trim()) {
      alert('Por favor completa Nombre y Email.'); return;
    }
    const t = document.getElementById('toast');
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 4000);
    this.reset();
  });
}

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
