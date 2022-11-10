<?php
/* Template Name: Home */
?>

<?php get_header(); ?>

<main class="main">
    <?php
    $args_filmes = array(
        'post_type' => 'videos',
        'numberposts' => 1,
        'order' => 'DESC',
    );
    $videos_filmes = get_posts($args_filmes);
    foreach ($videos_filmes as $v) { ?>
        <section class="hero js-image" data-bg="<?php echo get_field('video-cover-image', $v->ID) ?>">
            <dvi class="hero-content">
                <span class="span-full"><?php echo get_the_terms(get_the_id(), 'categoria')[0]->name ?></span>
                <span class="span-empty"><?php echo get_field('video-duration', $v->ID) ?>m</span>
                <h1 class="title-h1"><?php echo $v->post_title ?> </h1>
                <a href="<?php echo get_permalink($v->ID) ?>" class="btn-primary">Mais informações</a>
            </dvi>
        </section>
    <?php } ?>

    <section class="videos">

        <div class="videos-movies" id="filmes">
            <h2 class="title-h2">Filmes</h2>
            <div class="carrossel" id="videos-carrossel">
                <?php
                $args_filmes = array(
                    'post_type' => 'videos',
                    'numberposts' => 6,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categoria',
                            'field'    => 'slug',
                            'terms'    => 'filmes',
                        ),
                    ),
                );
                $videos_filmes = get_posts($args_filmes);
                if (!$videos_filmes) { ?>
                    <p class="empty-videos">Não há vídeos nessa categoria. ☹️</p>
                <?php }
                foreach ($videos_filmes as $v) { ?>
                    <div class="card-video">
                        <a class="" href="<?php echo get_permalink($v->ID) ?>">
                            <img class="card-video-image" src="<?php echo get_field('video-featured-image', $v->ID) ?>" alt="<?php echo the_title() ?>">
                            <span class="span-empty"><?php echo get_field('video-duration', $v->ID) ?>m</span>
                            <h3 class="title-h3"><?php echo $v->post_title ?></h3>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="videos-docs" id="documentarios">
            <h2 class="title-h2">Documentários</h2>
            <div class="carrossel" id="videos-carrossel">
                <?php
                $args_documentarios = array(
                    'post_type' => 'videos',
                    'numberposts' => 6,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categoria',
                            'field'    => 'slug',
                            'terms'    => 'documentarios',
                        ),
                    ),
                );
                $videos_documentarios = get_posts($args_documentarios);
                if (!$videos_documentarios) { ?>
                    <p class="empty-videos">Não há vídeos nessa categoria. ☹️</p>
                <?php }
                foreach ($videos_documentarios as $v) { ?>
                    <div class="card-video">
                        <a class="" href="<?php echo get_permalink($v->ID) ?>">
                            <img class="card-video-image" src="<?php echo get_field('video-featured-image', $v->ID) ?>" alt="<?php echo the_title() ?>">
                            <span class="span-empty"><?php echo get_field('video-duration', $v->ID) ?>m</span>
                            <h3 class="title-h3"><?php echo $v->post_title ?></h3>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="videos-series" id="series">
            <h2 class="title-h2">Séries</h2>
            <div class="carrossel" id="videos-carrossel">
                <?php
                $args_series = array(
                    'post_type' => 'videos',
                    'numberposts' => 6,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categoria',
                            'field'    => 'slug',
                            'terms'    => 'series',
                        ),
                    ),
                );
                $videos_series = get_posts($args_series);
                if (!$videos_series) { ?>
                    <p class="empty-videos">Não há vídeos nessa categoria. ☹️</p>
                <?php }
                foreach ($videos_series as $v) { ?>

                    <div class="card-video">
                        <a class="" href="<?php echo get_permalink($v->ID) ?>">
                            <img class="card-video-image" src="<?php echo get_field('video-featured-image', $v->ID) ?>" alt="<?php echo the_title() ?>">
                            <span class="span-empty"><?php echo get_field('video-duration', $v->ID) ?>m</span>
                            <h3 class="title-h3"><?php echo $v->post_title ?></h3>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>