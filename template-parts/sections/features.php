<?php
$text = 'Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volutpat pellentesque.Potenti porta mauris nec vulputate.';

$skills = [
    ['label' => 'Successful Cases',    'value' => 98],
    ['label' => 'Criminal Law',        'value' => 96],
    ['label' => 'Banking and Finance', 'value' => 95],
];
?>
<section class="features section--warm">
    <div class="container">
        <div class="feature">
            <div class="feature__content">
                <h2 class="section-title feature__title">Advocacy is a passion with proven results</h2>
                <p class="feature__text"><?php echo esc_html($text); ?></p>
                <a class="btn feature__button" href="<?php echo esc_url(counsel_page_url('contact')); ?>">Learn more</a>
            </div>
            <div class="feature__media">
                <?php counsel_image('advocacy.jpg', '', 'feature__image', 'dark'); ?>
            </div>
        </div>

        <div class="feature feature--reverse">
            <div class="feature__media">
                <?php counsel_image('ideas.jpg', '', 'feature__image', 'amber'); ?>
            </div>
            <div class="feature__content">
                <h2 class="section-title feature__title">You’ve got ideas.<br>We protect them.</h2>
                <p class="feature__text"><?php echo esc_html($text); ?></p>

                <ul class="skills">
                    <?php foreach ($skills as $skill) : ?>
                        <li class="skill">
                            <span class="skill__label"><?php echo esc_html($skill['label']); ?></span>
                            <span class="skill__bar" style="--value: <?php echo (int) $skill['value']; ?>%" aria-hidden="true"></span>
                            <span class="skill__value"><?php echo (int) $skill['value']; ?>%</span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
