<?php
// Template Name: Video Simples
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main class="main">
            <section class="video-info">
                <div class="video-info-content">
                    <span class="span-full"><?php echo get_the_terms(get_the_id(), 'categoria')[0]->name ?></span>
                    <span class="span-empty"><?php echo get_field('video-duration') ?>m</span>
                    <h1 class="title-h1"><?php echo the_title() ?></h1>
                </div>
            </section>

            <section class="video-trailler">
                <?php echo get_field('video-trailer') ?>
            </section>

            <section class="video-description">
                <div class="video-description-content">
                    <p><?php echo get_field('video-sinopse') ?></p>
                </div>
            </section>

        </main>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>