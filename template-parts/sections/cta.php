<?php
$args = wp_parse_args($args, [
    'layout' => 'center', // center | split
    'tone'   => 'dark',   // dark | brown
]);

$title   = 'Have Legal Questions? Ask Our Experts!';
$url     = counsel_page_url('contact');
$classes = 'cta cta--' . $args['layout'] . ' cta--' . $args['tone'];
$classes .= $args['tone'] === 'dark' ? ' section--dark' : '';
?>
<?php if ($args['layout'] === 'split') : ?>
    <section class="<?php echo esc_attr($classes); ?>">
        <div class="container cta__inner">
            <div class="cta__media">
                <?php counsel_image('cta-expert.jpg', '', 'cta__image', 'slate'); ?>
            </div>
            <div class="cta__content">
                <h2 class="cta__title"><?php echo esc_html($title); ?></h2>
                <p class="cta__text">Lectus eget nisl orci elit malesuada id ipsum at velit.</p>
            </div>
            <a class="btn cta__button" href="<?php echo esc_url($url); ?>">Ask an expert</a>
        </div>
    </section>
<?php else : ?>
    <section class="<?php echo esc_attr($classes); ?>" <?php echo counsel_bg('cta.jpg'); ?>>
        <div class="container cta__inner">
            <h2 class="cta__title"><?php echo esc_html($title); ?></h2>
            <a class="btn" href="<?php echo esc_url($url); ?>">Ask an expert</a>
        </div>
    </section>
<?php endif; ?>
