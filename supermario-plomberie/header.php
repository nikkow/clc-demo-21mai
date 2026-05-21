<?php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="topbar">
      <div class="container topbar-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand">
          <span class="brand-badge"><?php esc_html_e('SM', 'supermario-plomberie'); ?></span>
          <span class="brand-text">
            <span class="brand-name"><?php esc_html_e('SuperMario Plomberie', 'supermario-plomberie'); ?></span>
            <span class="brand-city"><?php esc_html_e('Plombier à Paris', 'supermario-plomberie'); ?></span>
          </span>
        </a>
        <a href="tel:+33180909990" class="topbar-cta"><?php esc_html_e('Urgence 24/7 · 01 80 90 99 90', 'supermario-plomberie'); ?></a>
      </div>
    </header>
