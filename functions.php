<?php 


// ajout style et script
function ajout_scripts() {
    wp_enqueue_style( "style", get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script( "script", get_template_directory_uri() . "/script.js");
    wp_enqueue_script( "slider", get_template_directory_uri() . "/js/slider.js");
    wp_enqueue_style( 'font', "https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700;900&display=swap" );
    wp_enqueue_style( 'fontchewy', "https://fonts.googleapis.com/css2?family=Chewy&display=swap" );
    wp_enqueue_style( 'fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" );
}
add_action("wp_enqueue_scripts", "ajout_scripts");


// enregistrer le menu
register_nav_menus( array("menu" => "Menu principal"));


//thumbnails
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// Modifier le nombre de mots des extraits
function wpm_post_excerpt($length) {
	return 20;
}
add_filter('excerpt_length', 'wpm_post_excerpt');

//supprimer barre admin
function wpc_show_admin_bar() {
    return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');
//fin

// Bouton read more

//Nombres de mots a afficher dans l’aperçu des articles page blog
function new_excerpt_length($length) {
    return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
    global $post;
    return '… <a href="'. get_permalink($post->ID) . '">' . 'Lire Plus &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
//fin
/* ajouter champ “Extrait” dans les page WP */
function ajouter_extrait_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'ajouter_extrait_pages' );
