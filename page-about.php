<?php get_header(); ?>

<main id="main">
    <?php
    get_template_part('template-parts/sections/hero', null, ['variant' => 'page']);

    get_template_part('template-parts/sections/attorneys', null, [
        'class'     => 'attorneys--lg',
        'attorneys' => [
            ['name' => 'Jackson Bauer',    'role' => 'Finance Lawyer',          'image' => 'attorney-1.png'],
            ['name' => 'Stephanie Reilly', 'role' => 'Criminal Defence Lawyer', 'image' => 'attorney-2.png'],
            ['name' => 'Matthew Webb',     'role' => 'Tax Lawyer',              'image' => 'attorney-3.png'],
            ['name' => 'Jackson Bauer',    'role' => 'Criminal Defence Lawyer', 'image' => 'attorney-4.png'],
            ['name' => 'Stephanie Reilly', 'role' => 'Partner',                 'image' => 'attorney-5.png'],
            ['name' => 'Matthew Webb',     'role' => 'Tax Lawyer',              'image' => 'attorney-6.png'],
        ],
    ]);

    get_template_part('template-parts/sections/showcase');
    get_template_part('template-parts/sections/features');
    get_template_part('template-parts/sections/blog', null, ['class' => 'blog--white blog--lg']);
    ?>
</main>

<?php get_footer(); ?>
