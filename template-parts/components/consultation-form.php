<?php
$args = wp_parse_args($args, [
    'id'    => 'cf',
    'class' => '',
]);

$id       = $args['id'];
$services = ['Civil Law', 'Banking and Finance', 'Family Law', 'Business Law', 'Real Estate', 'Corporate Law'];
?>
<form class="form <?php echo esc_attr($args['class']); ?>" action="#" method="post">
    <div class="form__field">
        <label for="<?php echo esc_attr($id); ?>-name">Name</label>
        <input id="<?php echo esc_attr($id); ?>-name" name="name" type="text" placeholder="Your Name" autocomplete="name" required>
    </div>
    <div class="form__field">
        <label for="<?php echo esc_attr($id); ?>-phone">Phone</label>
        <input id="<?php echo esc_attr($id); ?>-phone" name="phone" type="tel" placeholder="Your Phone" autocomplete="tel">
    </div>
    <div class="form__field">
        <label for="<?php echo esc_attr($id); ?>-email">Email</label>
        <input id="<?php echo esc_attr($id); ?>-email" name="email" type="email" placeholder="Your Email" autocomplete="email" required>
    </div>
    <div class="form__field">
        <label for="<?php echo esc_attr($id); ?>-service">Service</label>
        <div class="form__select">
            <select id="<?php echo esc_attr($id); ?>-service" name="service">
                <?php foreach ($services as $service) : ?>
                    <option><?php echo esc_html($service); ?></option>
                <?php endforeach; ?>
            </select>
            <?php echo counsel_icon('chevron'); ?>
        </div>
    </div>
    <div class="form__field form__field--full">
        <label for="<?php echo esc_attr($id); ?>-subject">Subject</label>
        <input id="<?php echo esc_attr($id); ?>-subject" name="subject" type="text" placeholder="Subject">
    </div>
    <div class="form__field form__field--full">
        <label for="<?php echo esc_attr($id); ?>-message">Message</label>
        <textarea id="<?php echo esc_attr($id); ?>-message" name="message" placeholder="Message"></textarea>
    </div>
    <button class="btn btn--block form__field--full" type="submit">Request consultation</button>
</form>
