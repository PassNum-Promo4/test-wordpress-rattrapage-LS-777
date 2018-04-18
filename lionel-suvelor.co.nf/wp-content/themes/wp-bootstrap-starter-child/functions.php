<?php

/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// CPT "plats"
function create_post_type() {

    register_post_type( 'plats',
                       array(
                           'labels' => array(
                               'name' => __( 'Plats' ),
                               'singular_name' => __( 'Plat' ),
                           ),
                           'public' => true,
                           'has_archive' => true,
                           'rewrite' => array('slug' => 'plats'),
                       )
                      );
}
add_action( 'init', 'create_post_type' );






/* Customisation du CPT "plat" */


function custom_post_type() {

    $labels = array(
        'name'                => _x( 'Plats', 'Post Type General Name', 'wp-bootstrap-starter-child' ),
        'singular_name'       => _x( 'Plat', 'Post Type Singular Name', 'wp-bootstrap-starter-child' ),
        'menu_name'           => __( 'Plats', 'wp-bootstrap-starter-child' ),
        'parent_item_colon'   => __( 'Plat Parente', 'wp-bootstrap-starter-child' ),
        'all_items'           => __( 'Toutes les Plats', 'wp-bootstrap-starter-child' ),
        'view_item'           => __( 'Voir la Plat', 'wp-bootstrap-starter-child' ),
        'add_new_item'        => __( 'Ajouter une Nouvelle Plat', 'wp-bootstrap-starter-child' ),
        'add_new'             => __( 'Ajouter', 'wp-bootstrap-starter-child' ),
        'edit_item'           => __( 'Éditer une Plat', 'wp-bootstrap-starter-child' ),
        'update_item'         => __( 'Mettre à jour une Plat', 'wp-bootstrap-starter-child' ),
        'search_items'        => __( 'Rechercher une Plat', 'wp-bootstrap-starter-child' ),
        'not_found'           => __( 'Aucun Plat', 'wp-bootstrap-starter-child' ),
        'not_found_in_trash'  => __( 'Aucun Plat dans la corbeille', 'wp-bootstrap-starter-child' ),
    );

    // Paramètre d'autres options :

    $args = array(
        'label'               => __( 'Plats', 'wp-bootstrap-starter-child' ),
        'description'         => __( 'Nos plats & menus', 'wp-bootstrap-starter-child' ),
        'labels'              => $labels,

        // Ajoute les options suivantes à l'édition des articles Plats
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

        // Vous pouvez associer le Type d'Article avec un taxonomie ou une taxonomie personnalisée.
        'taxonomies'          => array( 'cuisine',),

        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-carrot', //icône associé au menu, ici une Carotte pour illustrer les Plats
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type'    => 'page', );

    // Enregistrement CPT
    register_post_type( 'Plats', $args ); }

add_action( 'init', 'custom_post_type', 0 );







// highlighting current cpt menu item

function custom_active_item_classes($classes = array(), $menu_item = false){
        global $post;
        $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item active' : '';
        return $classes;
    }
add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );

?>
