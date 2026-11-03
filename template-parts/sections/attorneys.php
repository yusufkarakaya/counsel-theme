<?php
$attorneys = [
    ['name' => 'Jackson Bauer',    'role' => 'Finance Lawyer',          'image' => 'attorney-1.png'],
    ['name' => 'Stephanie Reilly', 'role' => 'Criminal Defence Lawyer', 'image' => 'attorney-2.png'],
    ['name' => 'Matthew Webb',     'role' => 'Tax Lawyer',              'image' => 'attorney-3.png'],
];
?>
<section class="attorneys section--warm">
    <div class="container">
        <header class="section-head">
            <h2 class="section-title">Our Attorneys</h2>
            <p class="section-head__text">Varius quisque odio mauris lectus consequat sed pretium purus feugiat volutpat pell</p>
        </header>

        <div class="attorneys__grid">
            <?php foreach ($attorneys as $attorney) : ?>
                <article class="attorney">
                    <div class="attorney__media">
                        <?php counsel_image($attorney['image'], $attorney['name'], 'attorney__image', 'silhouette'); ?>
                    </div>
                    <h3 class="attorney__name"><?php echo esc_html($attorney['name']); ?></h3>
                    <p class="attorney__role"><?php echo esc_html($attorney['role']); ?></p>
                    <?php counsel_social_links('social attorney__social'); ?>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
