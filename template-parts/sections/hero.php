<?php
$args = wp_parse_args($args, [
    'variant'     => 'page',
    'title'       => get_the_title(),
    'text'        => '',
    'button_text' => '',
    'button_url'  => '',
    'class'       => 'section--dark',
]);
?>
<section class="hero hero--<?php echo esc_attr($args['variant']); ?> <?php echo esc_attr($args['class']); ?>" <?php echo $args['class'] === 'section--dark' ? counsel_bg('hero.jpg') : ''; ?>>
    <div class="container hero__inner">
        <h1 class="hero__title"><?php echo esc_html($args['title']); ?></h1>

        <?php if ($args['text']) : ?>
            <p class="hero__text"><?php echo esc_html($args['text']); ?></p>
        <?php endif; ?>

        <?php if ($args['button_text'] && $args['button_url']) : ?>
            <a class="btn hero__button" href="<?php echo esc_url($args['button_url']); ?>">
                <?php echo esc_html($args['button_text']); ?>
            </a>
        <?php endif; ?>
    </div>
</section>
