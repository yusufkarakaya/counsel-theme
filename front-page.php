<?php get_header(); ?>

<main id="main">
    <?php
    get_template_part('template-parts/sections/hero', null, [
        'variant'     => 'home',
        'title'       => 'Legal Solutions for Business and Individual Needs',
        'text'        => 'We provide expert legal advice and representation to help you navigate complex legal matters with confidence.',
        'button_text' => 'Make enquiry',
        'button_url'  => home_url('/contact-us/'),
    ]);
    ?>
</main>

<?php get_footer(); ?>