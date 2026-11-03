<?php
$args = wp_parse_args($args, [
    'variant'     => 'home',
    'title'       => get_the_title(),
    'text'        => '',
    'button_text' => '',
    'button_url'  => '',
]);
?>
<section class="hero hero--<?php echo esc_attr($args['variant']); ?>">
    <div class="container">
        <h1><?php echo esc_html($args['title']); ?></h1>

        <?php if ($args['text']) : ?>
            <p><?php echo esc_html($args['text']); ?></p>
        <?php endif; ?>

        <?php if ($args['button_text'] && $args['button_url']) : ?>
            <a class="hero__button" href="<?php echo esc_url($args['button_url']); ?>">
                <?php echo esc_html($args['button_text']); ?>
            </a>
        <?php endif; ?>
    </div>
</section>