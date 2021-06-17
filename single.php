<?php get_header();
?>

<main id="single">
    <article>
        <div class="center">
            <h2 itemprop="headline">
                <?php the_title(); ?>
            </h2>

            <?php the_post_thumbnail(); ?>
        </div>
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>
                <div class="categorie"><i class="fas fa-tags"></i><?php $category = get_the_category(); 
                            echo $category[0]->cat_name;?></div>
                <?php the_content(); ?>
                <div class="auteur"><i class="fas fa-user"></i><?php the_author(); ?></div>
                <span itemprop="datePublished" class="date">
                    <i class="fas fa-calendar"></i>
                    <?php the_time("l, jS F, Y"); ?>
                </span>

            <?php endwhile; ?>
        <?php endif; ?>
    </article>
    <div class="site__navigation">
        <div class="site__navigation__next">
            <?php next_post_link( '&laquo; %link' ); ?>
        </div>

        <div class="site__navigation__prev">
            <?php previous_post_link( '%link &raquo;' ); ?>
        </div>
    </div>
    <span class="toTop"><a href=""><i class="fas fa-arrow-circle-up"></i></a></span>
</main>

<?php get_footer();?>