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
    <span class="toTop"><a href=""><i class="fas fa-arrow-circle-up"></i></a></span>
</main>

<?php get_footer();?>