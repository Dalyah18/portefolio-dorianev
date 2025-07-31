<?php include('includes/header.php'); ?>

<div class="page-container">
  <section class="cv-section">
    <section class="contact-section">
      <h1>Me contacter</h1>
      <p class="intro">Pour toute demande liée à une alternance ou à un projet professionnel, n’hésitez pas à me contacter.</p>

      <div class="contact-toggle">
        <button id="revealBtn" class="reveal-button">Afficher mes coordonnées</button>
        <div id="contactInfo" class="contact-info blurred">
          <p><i class="bi bi-envelope-fill"></i> <a href="mailto:dorianevennel.pro@gmail.com">dorianevennel.pro@gmail.com</a></p>
          <p><i class="bi bi-linkedin"></i> <a href="https://www.linkedin.com/in/doriane-vennel" target="_blank">linkedin.com/in/doriane-vennel</a></p>
        </div>
      </div>
    </section>
</div>
<script>
  document.getElementById("revealBtn").addEventListener("click", function () {
    document.getElementById("contactInfo").classList.remove("blurred");
    this.style.display = "none";
  });
</script>

<?php include('includes/footer.php'); ?>
