<?php
// Template Name: Filmes
?>

<?php get_header(); ?>

<main class="main">
    <section class="category-content">

        <div class="left" id="left">
            <h2 class="title-h2"><?php echo get_the_title() ?></h2>
            <p class="text-white"><?php echo get_the_content() ?></p>
        </div>

        <div class="right">

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
                <div class="card-video card-video-category">
                    <a class="" href="<?php echo get_permalink($v->ID) ?>">
                        <img class="card-video-image" src="<?php echo get_field('video-featured-image', $v->ID) ?>" alt="<?php echo the_title() ?>">
                        <span class="span-empty"><?php echo get_field('video-duration', $v->ID) ?>m</span>
                        <h3 class="title-h3"><?php echo $v->post_title ?></h3>
                    </a>
                </div>
            <?php } ?>
        </div>

    </section>

</main>

<?php get_footer(); ?>