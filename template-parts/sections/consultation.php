<?php
$services = ['Civil Law', 'Banking and Finance', 'Family Law', 'Business Law', 'Real Estate', 'Corporate Law'];
?>
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

        <form class="form consultation__form" action="#" method="post">
            <div class="form__field">
                <label for="cf-name">Name</label>
                <input id="cf-name" name="name" type="text" placeholder="Your Name" autocomplete="name" required>
            </div>
            <div class="form__field">
                <label for="cf-phone">Phone</label>
                <input id="cf-phone" name="phone" type="tel" placeholder="Your Phone" autocomplete="tel">
            </div>
            <div class="form__field">
                <label for="cf-email">Email</label>
                <input id="cf-email" name="email" type="email" placeholder="Your Email" autocomplete="email" required>
            </div>
            <div class="form__field">
                <label for="cf-service">Service</label>
                <div class="form__select">
                    <select id="cf-service" name="service">
                        <?php foreach ($services as $service) : ?>
                            <option><?php echo esc_html($service); ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo counsel_icon('chevron'); ?>
                </div>
            </div>
            <div class="form__field form__field--full">
                <label for="cf-subject">Subject</label>
                <input id="cf-subject" name="subject" type="text" placeholder="Subject">
            </div>
            <div class="form__field form__field--full">
                <label for="cf-message">Message</label>
                <textarea id="cf-message" name="message" placeholder="Message"></textarea>
            </div>
            <button class="btn btn--block form__field--full" type="submit">Request consultation</button>
        </form>
    </div>
</section>
