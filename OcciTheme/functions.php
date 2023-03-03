<?php

function occi_register_assets() {
    
    // Déclarer style.css à la racine du thème
    wp_register_style('main_style', get_template_directory_uri().'/css/main.css', array(), true);
    wp_enqueue_style('main_style');
}
add_action( 'wp_enqueue_scripts', 'occi_register_assets' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' ); 

// Création de mon menu pour le header -> 


register_nav_menus( array(
	'header' => 'Menu haut de page', //slug //nom ds l'admin
    'footer' => 'Menu footer',      
) );

function occi_widgets_init()
{
    if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
            'name' => __('Sidebar 1', 'occi'),
            'description' => __('Colonne Widget 1', 'Résultats'),
            'id' => 'colonne-1',
            'before_widget' => '<div class="border border-info mb-3 rounded p-2">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => __('Sidebar 2', 'occi'),
            'description' => __('Colonne Widget 2', 'Classements'),
            'id' => 'colonne-2',
            'before_widget' => '<div class="border border-info mb-3 rounded p-2">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="title-widget">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => __('Boutique', 'shop'),
            'description' => __('Boutique', 'shop'),
            'id' => 'colonne-shop',
            'before_widget' => '<div class="border border-info mb-3 rounded p-2">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="title-widget">',
            'after_title' => '</h4>',
        ));
    }
}

add_action( 'widgets_init', 'occi_widgets_init' );

