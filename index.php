<?php get_header(); ?>

<main id="main">
    <?php get_template_part('template-parts/sections/hero', null, ['variant' => 'page']); ?>

    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p><?php esc_html_e('Nothing found.', 'counsel-yk'); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>