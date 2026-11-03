<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
    <div class="container site-header__inner">

        <a class="site-header__logo logo" href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php echo wp_get_attachment_image(get_theme_mod('custom_logo'), 'full'); ?>
            <?php else : ?>
                <?php echo counsel_icon('logo'); ?>
                <span><?php bloginfo('name'); ?></span>
            <?php endif; ?>
        </a>

        <button class="site-header__toggle" aria-expanded="false" aria-controls="primary-nav">
            <span class="screen-reader-text">Menu</span>
            <span class="burger"></span>
        </button>

        <nav id="primary-nav" class="site-nav" aria-label="Primary">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'site-nav__list',
                'fallback_cb'    => 'counsel_nav_fallback',
            ]);
            ?>
        </nav>

        <a class="site-header__phone" href="tel:+12573886895">
            <?php echo counsel_icon('phone'); ?>
            (257) 388-6895
        </a>

    </div>
</header>
