<?php include('includes/header.php'); ?>

<main>
  <section class="hero">
    <h1>Bienvenue sur mon portfolio !</h1>
    <p>Je suis <strong>Doriane Vennel</strong></p>
    <p>Développeuse web passionnée par le graphisme, je conçois des sites modernes et créatifs, dont <em>Parrot Studio</em>, mon projet personnel phare.</p>
    <div class="btn-wrapper">
      <a href="projets.php" class="rainbow-btn">Voir mes projets</a>
    </div>
  </section>

  <section class="expertise">
  <h2>Mes compétences</h2>
  <div class="expertise-cards">
    
    <div class="card">
      <i class="bi bi-code-slash skill-icon" style="color: #29265B;"></i>
      <h3>Développement Web</h3>
      <p>HTML, CSS, JS, PHP, React Native, Expo, Bootstrap, WordPress</p>
    </div>

    <div class="card">
      <i class="bi bi-palette-fill skill-icon" style="color: #29265B;"></i>
      <h3>Design Graphique</h3>
      <p>Illustrator, Photoshop, identité visuelle, supports print</p>
    </div>

    <div class="card">
      <i class="bi bi-kanban-fill skill-icon" style="color: #29265B;"></i>
      <h3>Gestion de Projet</h3>
      <p>Scrum, Kanban, Trello, Notion, Gantt</p>
    </div>

    <div class="card">
      <i class="bi bi-robot skill-icon" style="color: #29265B;"></i>
      <h3>Intelligence Artificielle</h3>
      <p>Prompt Engineering, GPT, Mistral, intégration web</p>
    </div>

  </div>
</section>

  <?php include('projects-data.php'); ?>

<section class="projects-carousel">
  <h2>Mes projets</h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <?php foreach ($projects as $project): ?>
        <div class="swiper-slide">
          <a href="project.php?slug=<?= htmlspecialchars($project['slug']) ?>">
            <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>">
            <h3><?= htmlspecialchars($project['title']) ?></h3>
          </a>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- Pagination et navigation -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
</main>

<?php include('includes/footer.php'); ?>
