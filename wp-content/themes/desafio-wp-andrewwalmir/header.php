<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <nav class="navbar">
            <a class="logo-link" href="<?php echo get_site_url() . '/' ?>">
                <img class="logotype" src="<?php echo get_template_directory_uri() . '/assets/images/logo-2.svg' ?>" alt="Logo Play">
            </a>
            <ul class="navbar-menu">
                <li>
                    <a href="<?php echo get_site_url() . '/filmes' ?>">Filmes</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url() . '/documentarios' ?>">Documentários</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url() . '/series' ?>">Séries</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="navbar-menu-mobile">
        <div class="navbar-menu-mobile-items">
            <a class="navbar-menu-mobile-link" href="<?php echo get_site_url() . '/filmes' ?>">
                <img class="logotype" src="<?php echo get_template_directory_uri() . '/assets/images/filmes.svg' ?>" alt="Filmes">
                <p>Filmes</p>
            </a>
            <a class="navbar-menu-mobile-link" href="<?php echo get_site_url() . '/documentarios' ?>">
                <img class="logotype" src="<?php echo get_template_directory_uri() . '/assets/images/documentarios.svg' ?>" alt="Filmes">
                <p>Documentários</p>
            </a>
            <a class="navbar-menu-mobile-link" href="<?php echo get_site_url() . '/series' ?>">
                <img class="logotype" src="<?php echo get_template_directory_uri() . '/assets/images/series.svg' ?>" alt="Filmes">
                <p>Séries</p>
            </a>
        </div>
    </div>