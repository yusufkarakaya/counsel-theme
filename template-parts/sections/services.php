<?php
$text = 'Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volutpat.';

$services = [
    ['icon' => 'bank',     'title' => 'Banking and Finance'],
    ['icon' => 'family',   'title' => 'Family Law'],
    ['icon' => 'pen',      'title' => 'Business Law'],
    ['icon' => 'house',    'title' => 'Real Estate'],
    ['icon' => 'scales',   'title' => 'Civil Law'],
    ['icon' => 'document', 'title' => 'Corporate Law'],
];
?>
<section class="services section--warm" aria-label="Our services">
    <div class="container">
        <div class="services__grid">
            <?php foreach ($services as $service) : ?>
                <div class="service">
                    <span class="service__icon"><?php echo counsel_icon($service['icon']); ?></span>
                    <h3 class="service__title"><?php echo esc_html($service['title']); ?></h3>
                    <p class="service__text"><?php echo esc_html($text); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
