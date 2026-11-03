<?php get_header(); ?>

<main id="main">
    <?php
    get_template_part('template-parts/sections/hero', null, ['variant' => 'page']);
    get_template_part('template-parts/sections/services-intro');
    get_template_part('template-parts/sections/cta', null, ['layout' => 'split']);
    get_template_part('template-parts/sections/practice-areas');
    get_template_part('template-parts/sections/faq');
    get_template_part('template-parts/sections/plans');
    ?>
</main>

<?php get_footer(); ?>
