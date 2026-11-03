<?php
$links = [
    'Home'       => home_url('/'),
    'Services'   => counsel_page_url('services'),
    'About Us'   => counsel_page_url('about'),
    'Contact Us' => counsel_page_url('contact'),
];
$practice_areas = ['Banking and Finance', 'Business Law', 'Real Estate', 'Family Law'];
?>
<footer class="site-footer">
    <div class="container site-footer__grid">
        <div class="site-footer__brand">
            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo counsel_icon('logo'); ?>
                <span><?php bloginfo('name'); ?></span>
            </a>
            <p>Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed.</p>
            <?php counsel_social_links('social social--round'); ?>
        </div>

        <nav class="site-footer__col" aria-label="Footer">
            <h2 class="site-footer__title">Links</h2>
            <ul>
                <?php foreach ($links as $label => $url) : ?>
                    <li><a href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="site-footer__col">
            <h2 class="site-footer__title">Find Us</h2>
            <address>
                <ul>
                    <li>43 W. Wellington Road Fairhope AL 36532</li>
                    <li><a href="tel:+12573886895">(257) 388-6895</a></li>
                    <li><a href="mailto:temmink@outlook.com">temmink@outlook.com</a></li>
                </ul>
            </address>
        </div>

        <div class="site-footer__col">
            <h2 class="site-footer__title">Practice Areas</h2>
            <ul>
                <?php foreach ($practice_areas as $area) : ?>
                    <li><?php echo esc_html($area); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <p class="site-footer__copy">&copy;Copyright <?php bloginfo('name'); ?> <?php echo esc_html(date('Y')); ?>. Design by Figma.guru</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
