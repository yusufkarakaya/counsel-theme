<?php
$stats = [
    ['value' => '1200', 'label' => 'Satisfied Clients'],
    ['value' => '98%',  'label' => 'Successful Cases'],
    ['value' => '32',   'label' => 'Years of Experince'],
    ['value' => '1800', 'label' => 'Case Closed'],
];
?>
<section class="showcase section--warm">
    <div class="container">
        <div class="showcase__video section--dark" <?php echo counsel_bg('showcase.jpg'); ?>>
            <a class="showcase__play" href="#" aria-label="Play video"><?php echo counsel_icon('play'); ?></a>
            <h2 class="showcase__title">We Provide Best Solutions</h2>
            <p class="showcase__text">Potenti porta mauris nec vulputate. Massa sagittis lectus montes vel sit</p>
        </div>

        <ul class="stats">
            <?php foreach ($stats as $stat) : ?>
                <li class="stat">
                    <strong class="stat__value"><?php echo esc_html($stat['value']); ?></strong>
                    <span class="stat__label"><?php echo esc_html($stat['label']); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
