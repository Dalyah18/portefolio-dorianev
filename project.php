<?php include('includes/header.php'); ?>
<?php include('projects-data.php'); ?>

<?php
$slug = $_GET['slug'] ?? null;
$project = null;

foreach ($projects as $p) {
  if ($p['slug'] === $slug) {
    $project = $p;
    break;
  }
}
?>

<?php if ($project): ?>
<section class="project-detail">
  <div class="container">
    <h1><?= htmlspecialchars($project['title']) ?></h1>
    <img src="<?= $project['image'] ?>" alt="<?= htmlspecialchars($project['title']) ?>" style="max-width:500px; border-radius: 15px; margin: 0 auto 2em; display: block;">
    
    <h3>Catégorie</h3>
    <p><?= htmlspecialchars($project['category']) ?></p>

    <h3>Description</h3>
    <p><?= htmlspecialchars($project['description']) ?></p>

    <?php if (!empty($project['context'])): ?>
      <h3>Contexte</h3>
      <p><?= htmlspecialchars($project['context']) ?></p>
    <?php endif; ?>

    <?php if (!empty($project['missions'])): ?>
      <h3>Missions</h3>
      <ul>
        <?php foreach ($project['missions'] as $mission): ?>
          <li><?= htmlspecialchars($mission) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if (!empty($project['technologies'])): ?>
      <h3>Technologies utilisées</h3>
      <p><?= implode(', ', array_map('htmlspecialchars', $project['technologies'])) ?></p>
    <?php endif; ?>

    <?php if (!empty($project['timeline'])): ?>
      <h3>Timeline</h3>
      <ul>
        <?php foreach ($project['timeline'] as $step): ?>
          <li><strong><?= htmlspecialchars($step['step']) ?> :</strong> <?= htmlspecialchars($step['date']) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if (!empty($project['link'])): ?>
      <a href="<?= $project['link'] ?>" target="_blank" class="project-link">Voir le site</a>
    <?php endif; ?>
  </div>
</section>
<?php else: ?>
  <section class="project-not-found">
    <div class="container">
      <h1>Projet non trouvé</h1>
      <p>Le projet demandé n'existe pas ou a été supprimé.</p>
    </div>
  </section>
<?php endif; ?>

<?php include('includes/footer.php'); ?>
