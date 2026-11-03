<?php get_header(); ?>

<main id="main">
    <?php get_template_part('template-parts/sections/hero', null, ['variant' => 'page']); ?>

    <div class="container">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>