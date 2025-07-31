window.addEventListener('DOMContentLoaded', () => {
  const hero = document.querySelector('.hero');
  const lastProject = document.querySelector('.last-project');

  if (hero) hero.style.opacity = '1';
  if (lastProject) lastProject.style.opacity = '1';

  const buttons = document.querySelectorAll(".filters .btn");
  const cards = document.querySelectorAll(".project-card");

  buttons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();

      const filter = button.dataset.filter;

      // Active button UI
      buttons.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");

      cards.forEach((card, index) => {
        const match = filter === "tous" || card.dataset.category === filter;

        if (match) {
          card.classList.remove("hidden");
          card.style.setProperty('--stagger-delay', `${index * 80}ms`);
          void card.offsetWidth;
          card.classList.add("staggered");
        } else {
          card.classList.remove("staggered");
          card.classList.add("hidden");
        }
      });
    });
  });

  // Swiper carrousel à défilement continu
  const swiper = new Swiper('.mySwiper', {
    slidesPerView: 'auto',
    spaceBetween: 30,
    loop: true,
    speed: 8000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    allowTouchMove: window.innerWidth <= 768,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      }
    }
  });

  // ⏸ Stop autoplay on hover
  const carouselEl = document.querySelector('.projects-carousel .swiper');
  if (carouselEl) {
    carouselEl.addEventListener('mouseenter', () => {
      swiper.autoplay.stop();
    });
    carouselEl.addEventListener('mouseleave', () => {
      swiper.autoplay.start();
    });
  }
});
