// Scroll suave para links internos
document.querySelectorAll('nav a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetID = link.getAttribute('href').slice(1);
      const target = document.getElementById(targetID);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
  
  // Animação fade-in das seções
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  
  document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
  });
  
  // Movimento do trem conforme o scroll
  const train = document.getElementById('scroll-train');
  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = scrollTop / docHeight;
    const minTop = 50;
    const maxTop = window.innerHeight * 0.9;
    train.style.top = minTop + scrollPercent * (maxTop - minTop) + 'px';
  });
  
  // Transição suave ao sair para qualquer link (exceto anchors e mailto)
  document.querySelectorAll('a[href]').forEach(link => {
    const href = link.getAttribute('href');
    if (!href.startsWith('#') && !href.startsWith('mailto:')) {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        document.body.classList.add('fade-out');
        const destination = this.href;
        setTimeout(() => {
          window.location.href = destination;
        }, 500); // tempo da transição
      });
    }
  });
  
  // Código para o slider funcionar
  const slides = document.querySelector('.slides');
  const slideImages = document.querySelectorAll('.slides img');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  
  let currentIndex = 0;
  
  function updateSlidePosition() {
    const slideWidth = slideImages[0].clientWidth;
    slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }
  
  nextBtn.addEventListener('click', () => {
    currentIndex++;
    if (currentIndex >= slideImages.length) {
      currentIndex = 0;
    }
    updateSlidePosition();
  });
  
  prevBtn.addEventListener('click', () => {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = slideImages.length - 1;
    }
    updateSlidePosition();
  });
  
  window.addEventListener('load', updateSlidePosition);
  window.addEventListener('resize', updateSlidePosition);
  
  // Espera o carregamento completo da página
  document.addEventListener("DOMContentLoaded", function () {
    const noticias = document.querySelectorAll(".noticia");

    noticias.forEach((noticia) => {
      noticia.addEventListener("mouseenter", () => {
        noticia.classList.add("noticia-destaque");
      });

      noticia.addEventListener("mouseleave", () => {
        noticia.classList.remove("noticia-destaque");
      });
    });
  });

