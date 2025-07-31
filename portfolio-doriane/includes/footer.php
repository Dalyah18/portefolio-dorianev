<footer class="site-footer">
  <p>© 2025 Doriane Vennel — Tous droits réservés</p>
  <p><a href="/portfolio-doriane/mentions-legales.php">Mentions légales</a></p>
</footer>


  <script src="/portfolio-doriane/assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Swiper
      const slideCount = document.querySelectorAll('.mySwiper .swiper-slide').length;
      const loopMode = slideCount > 3;

      const swiper = new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: loopMode,
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
          768: { slidesPerView: 2 },
          1024: { slidesPerView: 3 }
        }
      });

      // Bootstrap tooltips
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));
    });

      const burgerBtn = document.getElementById("burgerBtn");
      const mainMenu = document.getElementById("mainMenu");

      burgerBtn.addEventListener("click", () => {
        burgerBtn.classList.toggle("active");
        mainMenu.classList.toggle("show");
      });
  </script>

</body>
</html>
