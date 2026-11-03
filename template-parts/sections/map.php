<?php $address = '43 W. Wellington Road Fairhope AL 36532'; ?>
<section class="map" aria-label="Office location">
    <?php if (file_exists(get_theme_file_path('assets/images/map.jpg'))) : ?>
        <?php counsel_image('map.jpg', 'Map showing ' . $address, 'map__image'); ?>
    <?php else : ?>
        <iframe class="map__frame"
            title="Map showing <?php echo esc_attr($address); ?>"
            src="<?php echo esc_url('https://maps.google.com/maps?q=' . rawurlencode($address) . '&z=14&output=embed'); ?>"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php endif; ?>
</section>
