<?php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="accueil">
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-copy">
        <span class="overline"><?php esc_html_e('Dépannage plombier à Paris en moins de 30 minutes', 'supermario-plomberie'); ?></span>
        <h1><?php esc_html_e('Votre réseau fuit ? SuperMario intervient.', 'supermario-plomberie'); ?></h1>
        <p>
          <?php esc_html_e("SuperMario Plomberie accompagne les particuliers, syndics et commerces parisiens pour les urgences, réparations et rénovations. Intervention propre, rapide et devis clair avant chaque chantier.", 'supermario-plomberie'); ?>
        </p>
        <div class="hero-actions">
          <a href="tel:+33180909990" class="btn btn-primary"><?php esc_html_e('Appeler maintenant', 'supermario-plomberie'); ?></a>
          <a href="#services" class="btn btn-secondary"><?php esc_html_e('Voir nos services', 'supermario-plomberie'); ?></a>
        </div>
      </div>

      <aside class="hero-panel">
        <h2><?php esc_html_e('Interventions clés', 'supermario-plomberie'); ?></h2>
        <ul>
          <li><?php esc_html_e("Fuite d'eau visible ou encastrée", 'supermario-plomberie'); ?></li>
          <li><?php esc_html_e('Débouchage toute canalisation', 'supermario-plomberie'); ?></li>
          <li><?php esc_html_e('Remplacement chauffe-eau', 'supermario-plomberie'); ?></li>
          <li><?php esc_html_e('Installation robinetterie et sanitaires', 'supermario-plomberie'); ?></li>
          <li><?php esc_html_e('Rénovation salle de bain', 'supermario-plomberie'); ?></li>
        </ul>
      </aside>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <h2 class="section-title"><?php esc_html_e('Services de plomberie', 'supermario-plomberie'); ?></h2>
      <p class="section-subtitle">
        <?php esc_html_e("Une équipe locale outillée pour agir vite, sécuriser l'installation et livrer une solution durable.", 'supermario-plomberie'); ?>
      </p>

      <div class="cards">
        <article class="card">
          <h3><?php esc_html_e('Urgence 24/7', 'supermario-plomberie'); ?></h3>
          <p>
            <?php esc_html_e("Intervention immédiate pour fuite majeure, dégât des eaux ou canalisation bouchée avec mise en sécurité sur place.", 'supermario-plomberie'); ?>
          </p>
        </article>
        <article class="card">
          <h3><?php esc_html_e('Réparation et entretien', 'supermario-plomberie'); ?></h3>
          <p>
            <?php esc_html_e('Remplacement de joints, vannes, mécanismes de chasse, siphons et chauffe-eau avec contrôle complet du réseau.', 'supermario-plomberie'); ?>
          </p>
        </article>
        <article class="card">
          <h3><?php esc_html_e('Rénovation sanitaire', 'supermario-plomberie'); ?></h3>
          <p>
            <?php esc_html_e("Transformation de salle de bain, adaptation PMR, optimisation des arrivées et évacuations avec devis détaillé.", 'supermario-plomberie'); ?>
          </p>
        </article>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="section-title"><?php esc_html_e("Zone d'intervention à Paris", 'supermario-plomberie'); ?></h2>
      <p class="section-subtitle"><?php esc_html_e('Disponibles dans tous les arrondissements, avec priorité aux demandes urgentes.', 'supermario-plomberie'); ?></p>
      <div class="zones">
        <div class="zone"><?php esc_html_e('Paris 1 - 4', 'supermario-plomberie'); ?></div>
        <div class="zone"><?php esc_html_e('Paris 5 - 8', 'supermario-plomberie'); ?></div>
        <div class="zone"><?php esc_html_e('Paris 9 - 12', 'supermario-plomberie'); ?></div>
        <div class="zone"><?php esc_html_e('Paris 13 - 20', 'supermario-plomberie'); ?></div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="section-title"><?php esc_html_e('Ce que disent nos clients', 'supermario-plomberie'); ?></h2>
      <div class="review-wrap">
        <article class="review">
          <p>
            <?php esc_html_e('"Fuite sous évier à 22h, intervention en 25 minutes. Travail propre, explications claires et prix respecté."', 'supermario-plomberie'); ?>
          </p>
          <span><?php esc_html_e('Claire D. · Paris 11e', 'supermario-plomberie'); ?></span>
        </article>
        <article class="review">
          <p>
            <?php esc_html_e('"Super réactivité pour remplacer notre ballon d\'eau chaude. Équipe pro et ponctuelle. Je recommande."', 'supermario-plomberie'); ?>
          </p>
          <span><?php esc_html_e('Mehdi L. · Paris 15e', 'supermario-plomberie'); ?></span>
        </article>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <h2 class="section-title"><?php esc_html_e('Contact rapide', 'supermario-plomberie'); ?></h2>
      <div class="contact-box">
        <div class="contact-grid">
          <div class="contact-item">
            <strong><?php esc_html_e('Téléphone', 'supermario-plomberie'); ?></strong>
            <p><?php esc_html_e('01 80 90 99 90', 'supermario-plomberie'); ?></p>
          </div>
          <div class="contact-item">
            <strong><?php esc_html_e('Email', 'supermario-plomberie'); ?></strong>
            <p><?php esc_html_e('contact@supermario-plomberie.fr', 'supermario-plomberie'); ?></p>
          </div>
          <div class="contact-item">
            <strong><?php esc_html_e('Adresse', 'supermario-plomberie'); ?></strong>
            <p><?php esc_html_e('32 rue du Faubourg Saint-Martin, 75010 Paris', 'supermario-plomberie'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
