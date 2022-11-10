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


/* -----------------------------------------------------------------
    - ACF
----------------------------------------------------------------- */
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_636a6ccb14d2f',
        'title' => 'Informações do Vídeo',
        'fields' => array(
            array(
                'key' => 'field_636a6ccb795b8',
                'label' => 'Imagem de Capa',
                'name' => 'video-featured-image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => 'Medidas: 248px X 387px',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_636bf4194a99a',
                'label' => 'Imagem de Destaque',
                'name' => 'video-cover-image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => 'Medidas: 1920px X 1080px',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_636bc100c3438',
                'label' => 'Categoria',
                'name' => 'video-category',
                'aria-label' => '',
                'type' => 'taxonomy',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'taxonomy' => 'categoria',
                'add_term' => 0,
                'save_terms' => 1,
                'load_terms' => 1,
                'return_format' => 'object',
                'field_type' => 'select',
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array(
                'key' => 'field_636a6d12795b9',
                'label' => 'Descrição',
                'name' => 'video-description',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_636a6da3795bc',
                'label' => 'Sinopse',
                'name' => 'video-sinopse',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'field_636a6d6c795bb',
                'label' => 'Duração',
                'name' => 'video-duration',
                'aria-label' => '',
                'type' => 'number',
                'instructions' => 'Tempo em Minutos',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'min' => '',
                'max' => '',
                'placeholder' => '',
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_636a6dcd795bd',
                'label' => 'Trailer',
                'name' => 'video-trailer',
                'aria-label' => '',
                'type' => 'oembed',
                'instructions' => 'URL do vídeo',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'width' => 1000,
                'height' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'videos',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'excerpt',
            2 => 'page_attributes',
            3 => 'featured_image',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

endif;

/* -----------------------------------------------------------------
    - CPT UI
----------------------------------------------------------------- */
function cptui_register_my_cpts()
{

    /**
     * Post Type: Vídeos.
     */

    $labels = [
        "name" => esc_html__("Vídeos", "bx-desafio"),
        "singular_name" => esc_html__("Vídeo", "bx-desafio"),
        "all_items" => esc_html__("Todos os Vídeos", "bx-desafio"),
        "add_new" => esc_html__("Add Novo Vídeo", "bx-desafio"),
    ];

    $args = [
        "label" => esc_html__("Vídeos", "bx-desafio"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "videos", "with_front" => true],
        "query_var" => true,
        "menu_position" => 2,
        "menu_icon" => "dashicons-controls-play",
        "supports" => ["title", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("videos", $args);
}

add_action('init', 'cptui_register_my_cpts');


function cptui_register_my_taxes()
{

    /**
     * Taxonomy: Categorias.
     */

    $labels = [
        "name" => esc_html__("Categorias", "bx-desafio"),
        "singular_name" => esc_html__("Categoria", "bx-desafio"),
        "menu_name" => esc_html__("Categorias", "bx-desafio"),
        "all_items" => esc_html__("Todas as Categorias", "bx-desafio"),
        "edit_item" => esc_html__("Editar Categoria", "bx-desafio"),
        "view_item" => esc_html__("Ver Categoria", "bx-desafio"),
        "add_new_item" => esc_html__("Add Nova Categoria", "bx-desafio"),
    ];


    $args = [
        "label" => esc_html__("Categorias", "bx-desafio"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'categoria', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "categoria",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy("categoria", ["videos"], $args);
}
add_action('init', 'cptui_register_my_taxes');
