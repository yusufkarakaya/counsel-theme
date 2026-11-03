<section class="consultation section--dark" id="consultation" <?php echo counsel_bg('consultation.jpg'); ?>>
    <div class="container consultation__inner">
        <div class="consultation__intro">
            <div class="badge">
                <span class="badge__label">Lawyer</span>
                <?php echo counsel_icon('logo'); ?>
            </div>
            <h2 class="consultation__title">Request A Free Consultation</h2>
            <p>Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volutpat pellentesque.Potenti porta mauris nec vulputate.</p>
        </div>

        <?php get_template_part('template-parts/components/consultation-form', null, ['id' => 'cf', 'class' => 'consultation__form']); ?>
    </div>
</section>
