<?php
$posts = get_posts([
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => true,
]);

$cards = array_map(fn($post) => [
    'title'     => get_the_title($post),
    'url'       => get_permalink($post),
    'date'      => get_the_date('F j, Y', $post),
    'datetime'  => get_the_date('c', $post),
    'thumbnail' => get_the_post_thumbnail($post, 'large', ['class' => 'post-card__image']),
], $posts);

// Pad with sample cards until there are posts to show.
$samples = [
    'Legal Consultation and Advice',
    'Law and Justice in Modern Business',
    'Crime, civil law, justice and rights',
];
foreach (array_slice($samples, count($cards)) as $title) {
    $cards[] = [
        'title'     => $title,
        'url'       => '#',
        'date'      => 'November 9, 2023',
        'datetime'  => '2023-11-09',
        'thumbnail' => '',
    ];
}
?>
<section class="blog section--warm">
    <div class="container">
        <header class="section-head section-head--lg">
            <h2 class="section-title">Our Blog</h2>
            <p class="section-head__text">Adipiscing nam neque hendrerit nec pellentesque diamarius quisque odio</p>
        </header>

        <div class="blog__grid">
            <?php foreach ($cards as $i => $card) : ?>
                <article class="post-card">
                    <a class="post-card__media" href="<?php echo esc_url($card['url']); ?>" tabindex="-1" aria-hidden="true">
                        <?php
                        if ($card['thumbnail']) {
                            echo $card['thumbnail'];
                        } else {
                            counsel_image('blog-' . ($i + 1) . '.jpg', '', 'post-card__image', 'warm-' . ($i + 1));
                        }
                        ?>
                    </a>
                    <time class="post-card__date" datetime="<?php echo esc_attr($card['datetime']); ?>"><?php echo esc_html($card['date']); ?></time>
                    <h3 class="post-card__title"><a href="<?php echo esc_url($card['url']); ?>"><?php echo esc_html($card['title']); ?></a></h3>
                    <a class="post-card__more" href="<?php echo esc_url($card['url']); ?>">Read more <?php echo counsel_icon('arrow'); ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
