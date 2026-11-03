<section class="about section--warm">
    <div class="container">
        <div class="about__card">
            <div class="about__content">
                <h2 class="section-title">Trusted Legal Partnerships</h2>
                <p>Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volutpat pellentesque. Potenti porta mauris nec vulputate.</p>
                <?php if (file_exists(get_theme_file_path('assets/images/signature.png'))) : ?>
                    <?php counsel_image('signature.png', 'Julio Jefferson signature', 'about__signature'); ?>
                <?php else : ?>
                    <span class="about__signature about__signature--text" aria-hidden="true">J.Jefferson</span>
                <?php endif; ?>
            </div>

            <figure class="about__media">
                <?php counsel_image('partner.jpg', 'Julio Jefferson', 'about__image', 'slate'); ?>
                <figcaption class="about__caption">Julio Jefferson</figcaption>
            </figure>
        </div>
    </div>
</section>
