<?php
$plans = [
    ['icon' => 'pen',   'title' => 'Business Law',        'price' => '$1890'],
    ['icon' => 'bank',  'title' => 'Banking and Finance', 'price' => '$2850'],
    ['icon' => 'house', 'title' => 'Real Estate',         'price' => '$2285'],
];
$features = ['20 hours in court', '25 hours meetings', '100% success'];
?>
<section class="plans">
    <div class="container">
        <header class="section-head">
            <h2 class="section-title">Choose Your Plan</h2>
            <p class="section-head__text">Varius quisque odio mauris lectus consequat sedretium purus feugiat volutpat pell</p>
        </header>

        <div class="plans__grid">
            <?php foreach ($plans as $plan) : ?>
                <article class="plan">
                    <span class="plan__icon"><?php echo counsel_icon($plan['icon']); ?></span>
                    <h3 class="plan__title"><?php echo esc_html($plan['title']); ?></h3>
                    <p class="plan__price"><?php echo esc_html($plan['price']); ?><sup>/Monthly</sup></p>
                    <ul class="plan__features">
                        <?php foreach ($features as $feature) : ?>
                            <li><?php echo counsel_icon('check'); ?><?php echo esc_html($feature); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a class="btn plan__button" href="<?php echo esc_url(counsel_page_url('contact')); ?>">Learn more</a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
