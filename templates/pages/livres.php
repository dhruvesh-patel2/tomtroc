<?php 
require_once __DIR__ . '/../header.php'; 
?>
<main class="livres-page">
  <section class="livres-container">
      <div class="livres-header">
          <h1>Nos livres à l’échange</h1>
          <input type="text" placeholder="Rechercher un livre">
      </div>

      <div class="livres-grid">
          <?php
          $livres = [
              ["titre" => "Esther", "auteur" => "Andreas Barmettler", "image" => "/P4/tomtroc/public/images/echange/1.PNG"],
              ["titre" => "The Kinfolk Table", "auteur" => "Nathan Williams", "image" => "/P4/tomtroc/public/images/echange/2.PNG"],
              ["titre" => "Wabi Sabi", "auteur" => "Beth Kempton", "image" => "/P4/tomtroc/public/images/echange/3.PNG"],
              ["titre" => "Milk & Honey", "auteur" => "Rupi Kaur", "image" => "/P4/tomtroc/public/images/echange/4.PNG"],
              ["titre" => "Delight", "auteur" => "J.B. Priestley", "image" => "/P4/tomtroc/public/images/echange/5.PNG"],
              ["titre" => "Hygge", "auteur" => "Meik Wiking", "image" => "/P4/tomtroc/public/images/echange/6.PNG"],
              ["titre" => "Innovation", "auteur" => "Matt Ridley", "image" => "/P4/tomtroc/public/images/echange/7.PNG"],
              ["titre" => "Narnia", "auteur" => "C.S. Lewis", "image" => "/P4/tomtroc/public/images/echange/8.PNG"],
          ];

          foreach ($livres as $livre): ?>
              <div class="livre-card">
                  <div class="livre-image">
                      <img src="<?= htmlspecialchars($livre['image']) ?>" alt="<?= htmlspecialchars($livre['titre']) ?>">
                  </div>
                  <div class="livre-info">
                      <h3><?= htmlspecialchars($livre['titre']) ?></h3>
                      <p><?= htmlspecialchars($livre['auteur']) ?></p>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </section>
</main>

<?php 
require_once __DIR__ . '/../footer.php'; 
?>
