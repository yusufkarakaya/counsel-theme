<?php get_header(); ?>

<main id="main">
    <div class="contact-top section--dark" <?php echo counsel_bg('contact.jpg'); ?>>
        <?php
        get_template_part('template-parts/sections/hero', null, ['variant' => 'page', 'class' => '', 'title' => 'Contact us']);
        get_template_part('template-parts/sections/contact');
        ?>
    </div>

    <?php
    get_template_part('template-parts/sections/map');
    get_template_part('template-parts/sections/cta', null, ['layout' => 'split', 'tone' => 'brown']);
    ?>
</main>

<?php get_footer(); ?>
