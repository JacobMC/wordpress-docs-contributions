<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="content">
                <?php the_content(); ?>
            </div>

            <div class="widget-section">
                <?php the_widget( 'My_Widget_Class' ); ?>
            </div>

        <?php endwhile; ?>

    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
