<!-- ANCHOR header start -->
<?php get_header();
// Template Name: Blog
?>

<!-- ANCHOR main start -->
<main id="blog">
    <h2>Blog</h2>
    <?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=3');
    ?>
    <div id="articles">
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
        <article>
            <div class="content">
                <h3><a href='<?php the_permalink() ?>' rel='bookmark'><?php the_title(); ?></a></h3>            
                <?php the_post_thumbnail(); ?>
                <div class=“categorie”><?php the_category(); ?></div>
                <span><?php the_excerpt(); ?></span>
            </div>
            <div class="infos">
                <div class=“auteur”><?php the_author(); ?></div>
                <span class='date'>
                    <?php the_time('l, jS F, Y');?>
                </span>
            </div>
        </article>
    <?php endwhile;
    ?>
    </div>
    <a href="http://localhost/labyrinthe/archives/" id="button-archives">Voir les archives</a>
</main>
<!-- main end -->

<!-- ANCHOR footer start -->
<?php get_footer();?>
<!-- footer end -->
