<?php
/**
 * Register Custom Post Types
 *
 * @package 3dpieces
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Portfolio Custom Post Type
 */
function tdp_register_portfolio_cpt() {
    $labels = array(
        'name'                  => __('Portfolio', '3dpieces'),
        'singular_name'         => __('Progetto', '3dpieces'),
        'menu_name'             => __('Portfolio', '3dpieces'),
        'name_admin_bar'        => __('Progetto', '3dpieces'),
        'add_new'               => __('Aggiungi Nuovo', '3dpieces'),
        'add_new_item'          => __('Aggiungi Nuovo Progetto', '3dpieces'),
        'new_item'              => __('Nuovo Progetto', '3dpieces'),
        'edit_item'             => __('Modifica Progetto', '3dpieces'),
        'view_item'             => __('Vedi Progetto', '3dpieces'),
        'all_items'             => __('Tutti i Progetti', '3dpieces'),
        'search_items'          => __('Cerca Progetti', '3dpieces'),
        'not_found'             => __('Nessun progetto trovato', '3dpieces'),
        'not_found_in_trash'    => __('Nessun progetto nel cestino', '3dpieces'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true, // Enable Gutenberg editor
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'tdp_register_portfolio_cpt');

/**
 * Register Portfolio Category Taxonomy
 */
function tdp_register_portfolio_taxonomy() {
    $labels = array(
        'name'              => __('Categorie Portfolio', '3dpieces'),
        'singular_name'     => __('Categoria Portfolio', '3dpieces'),
        'search_items'      => __('Cerca Categorie', '3dpieces'),
        'all_items'         => __('Tutte le Categorie', '3dpieces'),
        'parent_item'       => __('Categoria Genitore', '3dpieces'),
        'parent_item_colon' => __('Categoria Genitore:', '3dpieces'),
        'edit_item'         => __('Modifica Categoria', '3dpieces'),
        'update_item'       => __('Aggiorna Categoria', '3dpieces'),
        'add_new_item'      => __('Aggiungi Nuova Categoria', '3dpieces'),
        'new_item_name'     => __('Nome Nuova Categoria', '3dpieces'),
        'menu_name'         => __('Categorie', '3dpieces'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-categoria'),
        'show_in_rest'      => true,
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'tdp_register_portfolio_taxonomy');

/**
 * Add default portfolio categories on theme activation
 */
function tdp_add_default_portfolio_categories() {
    $categories = array(
        'stampa-3d'         => __('Stampa 3D', '3dpieces'),
        'progettazione-cad' => __('Progettazione CAD', '3dpieces'),
        'automotive'        => __('Automotive', '3dpieces'),
        'industriale'       => __('Industriale', '3dpieces'),
        'altro'             => __('Altro', '3dpieces'),
    );

    foreach ($categories as $slug => $name) {
        if (!term_exists($slug, 'portfolio_category')) {
            wp_insert_term($name, 'portfolio_category', array('slug' => $slug));
        }
    }
}
add_action('after_switch_theme', 'tdp_add_default_portfolio_categories');
