<section class="contact">
    <div class="container contact__inner">
        <div class="contact__intro">
            <h2 class="contact__title">Have Any Questions?<br>Feel Free To Contact Us!</h2>
            <p class="contact__text">Adipiscing nam neque hendrerit nec pellentesque diam a. Varius quisque odio mauris lectus consequat sed. Pretium purus feugiat volutpat</p>

            <div class="contact__info">
                <div class="info">
                    <?php echo counsel_icon('phone'); ?>
                    <h3 class="info__title">Phone Numbers</h3>
                    <ul class="info__list">
                        <li><a href="tel:+12573886895">(257) 388-6895</a></li>
                        <li><a href="tel:+12573886895">(257) 388-6895</a></li>
                    </ul>
                </div>
                <div class="info">
                    <?php echo counsel_icon('pin'); ?>
                    <h3 class="info__title">Physical Address</h3>
                    <address class="info__list info__list--tight">43 W. Wellington Road<br>Fairhope AL 36532</address>
                </div>
                <div class="info">
                    <?php echo counsel_icon('mail'); ?>
                    <h3 class="info__title">Email Address</h3>
                    <ul class="info__list info__list--tight">
                        <li><a href="mailto:temmink@outlook.com">temmink@outlook.com</a></li>
                        <li><a href="mailto:mallanmba@msn.com">mallanmba@msn.com</a></li>
                    </ul>
                </div>
                <div class="info">
                    <?php echo counsel_icon('clock'); ?>
                    <h3 class="info__title">Opening Hours</h3>
                    <ul class="info__list info__list--tight">
                        <li>Mon-Fri 08:00AM - 08:00PM</li>
                        <li>Sat-Sun 10:00 AM - 02:00PM</li>
                    </ul>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/components/consultation-form', null, ['id' => 'contact', 'class' => 'form--lg contact__form']); ?>
    </div>
</section>
