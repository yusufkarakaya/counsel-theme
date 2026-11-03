<?php get_header(); ?>

<main id="main">
    <?php
    get_template_part('template-parts/sections/hero', null, [
        'variant'     => 'front',
        'title'       => 'Legal Solutions for Business and Individual Needs',
        'text'        => 'Pretium purus feugiat volutpat pellentesque. Potenti porta mauris nec vulputate.',
        'button_text' => 'Make enquiry',
        'button_url'  => counsel_page_url('contact'),
    ]);

    get_template_part('template-parts/sections/about');
    get_template_part('template-parts/sections/services');
    get_template_part('template-parts/sections/cta');
    get_template_part('template-parts/sections/attorneys');
    get_template_part('template-parts/sections/excellence');
    get_template_part('template-parts/sections/testimonials');
    get_template_part('template-parts/sections/consultation');
    get_template_part('template-parts/sections/blog');
    ?>
</main>

<?php get_footer(); ?>
