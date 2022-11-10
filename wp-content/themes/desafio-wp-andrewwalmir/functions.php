<?php

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 45,
        'width'       => 250,
        'header-text' => array('site-title', 'site-description'),
    ));

    register_nav_menus(
        array(
            'primary' => 'Primary'
        )
    );
}

function themebs_enqueue_styles()
{
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/js/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/js/slick/slick-theme.css');
    wp_enqueue_style('core', get_template_directory_uri() . '/assets/styles/style.css');
}
add_action('wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts()
{
    wp_enqueue_script(
        'my-jquery',
        get_template_directory_uri() . '/assets/js/jquery-1.11.0.min.js',
        array(),
        '1.11.0',
        true
    );

    // wp_enqueue_script(
    //     'jquery-migrate',
    //     get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js',
    //     array(),
    //     '1.2.1',
    //     true
    // );

    wp_enqueue_script(
        'popper',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',
        array('jquery'),
        '1.16.1',
        true
    );

    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . '/assets/js/slick/slick.min.js',
        array('popper'),
        '1.8.1',
        true
    );

    wp_enqueue_script(
        'my-scripts',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'themebs_enqueue_scripts');

/*-------------------------------------------*/
// ACF


/*-------------------------------------------*/
// CPT UI