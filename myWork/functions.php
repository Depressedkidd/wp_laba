<?php 

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'script_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'registr_my_widgets');



function registr_my_widgets(){
    register_sidebar(array(
        'name' => 'left sidebar',
        'id' => 'left_sidebar',
        'description' => 'sidebar for left',
        'before_widget' => '<div class="widget widget_search">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',

    ));
}

function theme_register_nav_menu () {
    register_nav_menu('top', 'Меню в шапке');
    register_nav_menu('footer', 'Меню в подвале');
    register_nav_menu('sidebar', 'Меню в сайдбаре');
}


function style_theme () {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('animate',  get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bootstrap',  get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome',  get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('owl.carousel',  get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_style('owl.theme',  get_template_directory_uri() . '/assets/css/owl.theme.default.css');
    wp_enqueue_style('stylesheet',  get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive',  get_template_directory_uri() . '/assets/css/responsive.css');   
}

function script_theme () {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('jquery.nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js');
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js');
    wp_enqueue_script('lte', get_template_directory_uri() . '/assets/js/lte-ie7.js');
}
