<?php
/** Theme setup and portable asset paths. No content is inserted into the database. */
function ecolefortin_setup() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'ecolefortin_setup' );

function ecolefortin_styles() {
    wp_enqueue_style( 'ecolefortin', wp_make_link_relative( get_stylesheet_uri() ), array(), filemtime( get_theme_file_path( 'style.css' ) ) );
}
add_action( 'wp_enqueue_scripts', 'ecolefortin_styles' );

function ecolefortin_asset( $file ) {
    return wp_make_link_relative( get_theme_file_uri( 'Images/' . $file ) );
}
function ecolefortin_link( $path = '/' ) {
    return wp_make_link_relative( home_url( $path ) );
}
function ecolefortin_pattern_category() {
    register_block_pattern_category( 'ecolefortin', array( 'label' => 'École Fortin' ) );
}
add_action( 'init', 'ecolefortin_pattern_category' );


/** Highlight the current page for portable custom navigation links. */
function ecolefortin_current_navigation_link( $content, $block ) {
    if ( is_admin() || empty( $block['attrs']['url'] ) ) {
        return $content;
    }
    $current = ( is_front_page() || is_page( 'accueil' ) ) ? ecolefortin_link( '/accueil/' ) : wp_make_link_relative( get_permalink( get_queried_object_id() ) );
    $target_path = untrailingslashit( (string) wp_parse_url( $block['attrs']['url'], PHP_URL_PATH ) );
    $current_path = untrailingslashit( (string) wp_parse_url( $current, PHP_URL_PATH ) );
    if ( $target_path === $current_path ) {
        $html = new WP_HTML_Tag_Processor( $content );
        if ( $html->next_tag( 'LI' ) ) {
            $html->add_class( 'ef-current' );
        }
        if ( $html->next_tag( 'A' ) ) {
            $html->set_attribute( 'aria-current', 'page' );
        }
        return $html->get_updated_html();
    }
    return $content;
}
add_filter( 'render_block_core/navigation-link', 'ecolefortin_current_navigation_link', 10, 2 );
