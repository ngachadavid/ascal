<?php get_header(); ?>

    <main id="main-content">
        <?php
        while (have_posts()) :
            the_post(); ?>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>