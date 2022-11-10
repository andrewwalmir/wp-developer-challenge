<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <title><?php bloginfo('name'); ?></title>

    <link href="//db.onlinewebfonts.com/c/01173b246d9d9ea808ea75a26b3b61bb?family=Circular+Spotify+Tx+T+Black" rel="stylesheet" type="text/css" />

    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <nav class="navbar">
            <a class="logo-link" href="<?php echo get_site_url() . '/' ?>">
                <img class="logotype" src="<?php echo get_template_directory_uri() . '/assets/images/logo-2.svg' ?>" alt="Logo Play">
            </a>

            <div>
                <?php
                $args = array(
                    'menu' => 'Menu Principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                );

                wp_nav_menu($args);
                ?>
            </div>

        </nav>
    </header>