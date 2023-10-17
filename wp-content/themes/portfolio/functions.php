<?php

// Configuration du thème
require_once get_template_directory() . '/inc/config.php';

// Fonctionnalités
require_once get_template_directory() . '/inc/features.php';


function portfolio_register_assets()
{

  // Déclarer le JS
  wp_enqueue_script(
    'portfolio',
    get_template_directory_uri() . '/dist/js/bundle.js',
    '1.0',
    true
  );

  wp_enqueue_style(
    'portfolio',
    get_template_directory_uri() . '/dist/output.css',
    array(),
    '1.0'
  );

  wp_enqueue_style(
    'portfolio-splide',
    get_template_directory_uri() . '/dist/css/vendors/splide-core.min.css',
    array(),
    '1.0'
  );
}
add_action('wp_enqueue_scripts', 'portfolio_register_assets');

// Ajoute la possibilité de rajouter l'attribut link_class dans wp_nav_menu
function add_menu_link_class($atts, $item, $args)
{
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);


// Enregistrer une sidebar pour un futur widget

register_sidebar(array(
  'id' => 'logos-sidebar',
  'name' => 'Logos',
  "before_sidebar" => '<div id="splide-logos" class="splide %2$s"><div class="splide__track"><div class="splide__list">',
  "after_sidebar" => '</div></div></div> ',
  'before_widget'  => '<div class="splide__slide %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<p class="">',
  'after_title' => '</p>',
));


add_action('after_setup_theme', 'wpdocs_theme_setup');
function wpdocs_theme_setup()
{
  add_image_size('lazyimage', 1, 1, true); 
}
