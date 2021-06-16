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
    <section id="articles">
    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
        <article>
        
            <div class="content">
                <h3><a href='<?php the_permalink() ?>' rel='bookmark'><?php the_title(); ?></a></h3>            
                <?php the_post_thumbnail(); ?>
                <div class="categorie"><?php $category = get_the_category(); 
                            echo $category[0]->cat_name;?> </div>
                <span class="texte"><?php the_excerpt(); ?></span>
            </div>

            <div class="infos">
                <div class="auteur"><?php the_author(); ?></div>
                <span class='date'>
                    <?php the_time('l, jS F, Y');?>
                </span>
            </div>

        </article>
    <?php endwhile;
    ?>
    </section>

    <section id="recent">
        <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=5');
        ?>
        <div id="recentArticles">
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <article>
                
                    <div class="content">
                        <h3><a href='<?php the_permalink() ?>' rel='bookmark'><?php the_title(); ?></a></h3>            
                    </div>

                    <div class="infos">
                        <div class="auteur"><?php the_author(); ?></div>
                        <span class='date'>
                            <?php the_time('l, jS F, Y');?>
                        </span>
                    </div>

                </article>
            <?php endwhile;
            ?>
        </div>

        <a href="http://localhost/labyrinthe/archives/" id="button-archives">Voir les archives</a>
    </section>
    <span class="toTop"><a href=""><i class="fas fa-arrow-circle-up"></i></a></span>
</main>
<!-- main end -->

<!-- ANCHOR footer start -->
<?php get_footer();?>
<!-- footer end -->
