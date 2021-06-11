<?php get_header();
?>

<article>
        
    <h2 itemprop="headline">
        <?php the_title(); ?>
    </h2>

    <?php the_post_thumbnail(); ?>
<!-- TODO -->
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

            <span itemprop="datePublished" class="date">
                <a href=""><?php the_time("l, jS F, Y"); ?></a>
            </span>

        <?php endwhile; ?>
<!-- FIXME -->
    <?php endif; ?>
</article>

<?php get_footer();?>