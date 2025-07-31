<?php include('includes/header.php'); ?>
<?php include('projects-data.php'); ?>

<?php
$categories = array_unique(array_map(fn($p) => $p['category'], $projects));
sort($categories);
$filter = $_GET['categorie'] ?? 'tous';
?>

<section class="projects">
  <h2>Mes Projets</h2>

    <div class="filters" id="filterButtons">
        <a href="#" class="btn active" data-filter="tous">Tous</a>
        <?php foreach ($categories as $cat): ?>
            <a href="#" class="btn" data-filter="<?= htmlspecialchars($cat) ?>">
            <?= htmlspecialchars($cat) ?>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="project-grid" id="projectGrid">
    <?php foreach ($projects as $project): ?>
        <div class="project-card" data-category="<?= htmlspecialchars($project['category']) ?>">
        <a href="project.php?slug=<?= urlencode($project['slug']) ?>" class="project-card-link">
            <img src="<?= $project['image'] ?>" alt="<?= htmlspecialchars($project['title']) ?>">
            <h3><?= htmlspecialchars($project['title']) ?></h3>
        </a>
        <p><?= htmlspecialchars($project['description']) ?></p>
        <?php if (!empty($project['link'])): ?>
            <a href="<?= $project['link'] ?>" target="_blank" class="btn melodaire" onclick="event.stopPropagation()">Voir le site</a>
        <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </div>


</section>

<?php include('includes/footer.php'); ?>
