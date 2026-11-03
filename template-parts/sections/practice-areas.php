<?php
$areas = [
    ['icon' => 'bank',     'title' => 'Banking and Finance', 'text' => 'Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volut'],
    ['icon' => 'family',   'title' => 'Family Law',          'text' => 'Pretium purus feugiat volutpat pellentesque. Potenti porta mauris nec vulputate'],
    ['icon' => 'pen',      'title' => 'Business Law',        'text' => 'Potenti porta mauris nec vulputate. Massa sagittis lectus montes vel sit'],
    ['icon' => 'house',    'title' => 'Real Estate',         'text' => 'Massa sagittis lectus montes vel sit. Faucibus odio in ut massa in integer ultrice'],
    ['icon' => 'scales',   'title' => 'Civil Law',           'text' => 'Faucibus odio in ut massa in integer ultrices lacus est. Tempus ultrices placerat tellus'],
    ['icon' => 'document', 'title' => 'Corporate Law',       'text' => 'Tempus ultrices placerat tellus morbi.Varius quisque odio mauris lectus consequat sed'],
    ['icon' => 'badge',    'title' => 'Criminal Law',        'text' => 'Potenti porta mauris nec vulputate. Massa sagittis lectus montes vel sit'],
    ['icon' => 'passport', 'title' => 'Immigration Law',     'text' => 'Pretium purus feugiat volutpat pellentesque. Potenti porta mauris nec vulputate'],
    ['icon' => 'globe',    'title' => 'International Law',   'text' => 'Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volut'],
];
?>
<section class="practice-areas section--warm">
    <div class="container">
        <header class="section-head">
            <h2 class="section-title">Practice Areas</h2>
            <p class="section-head__text">Varius quisque odio mauris lectus consequat sedretium purus feugiat volutpat pell</p>
        </header>

        <div class="practice-areas__grid">
            <?php foreach ($areas as $area) : ?>
                <article class="area-card">
                    <span class="area-card__icon"><?php echo counsel_icon($area['icon']); ?></span>
                    <h3 class="area-card__title"><?php echo esc_html($area['title']); ?></h3>
                    <p class="area-card__text"><?php echo esc_html($area['text']); ?></p>
                    <a class="link-more" href="<?php echo esc_url(counsel_page_url('contact')); ?>">Read more <span class="screen-reader-text">about <?php echo esc_html($area['title']); ?></span><?php echo counsel_icon('arrow'); ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
