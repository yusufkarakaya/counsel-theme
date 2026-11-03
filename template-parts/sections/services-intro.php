<?php
$steps = [
    ['icon' => 'calendar',   'title' => '1.Schedule a time',     'text' => 'Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volut'],
    ['icon' => 'consultant', 'title' => '2.Meet a consultant',   'text' => 'Sit at consectetur nam velit sollicitudin id aliquam fusce. In urna vestibulum ac eleifend quis'],
    ['icon' => 'handshake',  'title' => '3.Successful planning', 'text' => 'In urna vestibulum ac eleifend quis turpis quisque arcu arcu. Ultrices varius sed quam lectus interdum'],
    ['icon' => 'gavel',      'title' => '4.Successful case',     'text' => 'Ultrices varius sed quam lectus interdum. Viverra enim massa commodo in sed'],
];
?>
<section class="services-intro section--warm">
    <div class="container">
        <div class="services-intro__head">
            <h2 class="section-title services-intro__title">Tailored Legal Solutions, Exceptional Results</h2>
            <div class="services-intro__text">
                <p>Tellus aliquet volutpat diam nulla consectetur. Sit at consectetur nam velit sollicitudin id aliquam fusce. In urna vestibulum ac eleifend quis turpis quisque arcu arcu. Ultrices varius sed quam lectus interdum. Viverra enim massa commodo in sed ipsum.</p>
                <p>Lorem ipsum dolor sit amet consectetur. Nunc porttitor porttitor velit dictumst id morbi in aliquet velit.</p>
                <a class="link-more" href="<?php echo esc_url(counsel_page_url('about')); ?>">Learn more <?php echo counsel_icon('arrow'); ?></a>
            </div>
        </div>

        <ol class="steps">
            <?php foreach ($steps as $step) : ?>
                <li class="step">
                    <div class="step__content">
                        <h3 class="step__title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="step__text"><?php echo esc_html($step['text']); ?></p>
                    </div>
                    <span class="step__icon"><?php echo counsel_icon($step['icon']); ?></span>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
