<?php
$answer = 'Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volutpat pellentesque.Potenti porta mauris nec vulputate.';

$questions = [
    '1.How we can help you?',
    '2. How to get started?',
    '2. How to get started?',
    '3. Nulla morbi viverra odio egestas interdum integer metus puru?',
    '4. Tempus tempor sodales viverra magna lacus lacus id?',
    '5. Tincidunt sit risus ultricies pharetra?',
];
?>
<section class="faq section--dark">
    <div class="container">
        <h2 class="faq__title">Frequently Asked Question</h2>

        <div class="faq__list">
            <?php foreach ($questions as $i => $question) : ?>
                <details class="faq__item" name="faq" <?php echo $i === 0 ? 'open' : ''; ?>>
                    <summary class="faq__question">
                        <?php echo esc_html($question); ?>
                        <?php echo counsel_icon('chevron'); ?>
                    </summary>
                    <p class="faq__answer"><?php echo esc_html($answer); ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
