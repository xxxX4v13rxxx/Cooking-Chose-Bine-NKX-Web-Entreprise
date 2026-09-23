<?php
// Ajout des styles dans l'éditeur de blocs
add_theme_support( 'editor-styles' );
add_editor_style( 'style.css' );

// Ajout des styles du thème
wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), null);

// Ajout des supports de base pour le thème
function theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_setup' );
