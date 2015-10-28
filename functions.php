<?
    function register_navigation_menus() {
        register_nav_menu('header-menu', 'Header Menu' );
    }
    add_action( 'init', 'register_navigation_menus' );


    function post_categories_and_tags() {
        // Add tag metabox to page
        register_taxonomy_for_object_type('post_tag', 'page');
        // Add category metabox to page
        register_taxonomy_for_object_type('category', 'page');
    }
    add_action( 'init', 'post_categories_and_tags' );


    function theme_enqueue_style() {
        wp_enqueue_style( 'styles-css', get_stylesheet_uri(), false );
    }

    function theme_enqueue_script() {
        wp_enqueue_script( 'global-min-js', get_template_directory_uri() .'/js/global.min.js', false );
    }

    add_action( 'wp_enqueue_scripts', 'theme_enqueue_style' );
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_script' );

?>
