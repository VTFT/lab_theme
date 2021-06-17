<!-- ANCHOR header start -->
<?php get_header();
// Template Name: Archives
?>

<!-- ANCHOR main start -->
<main id="archives">
    <h2>Archives</h2>
    <div id="buttons">
        <button onclick="selectorAll()">Tous</button><button onclick="selectorNonClasse()">Non Classés</button><button onclick="selectorLabyrinthe()">Labyrinthe</button>
    </div>
    <?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts');
    ?>
    <section id="articles">
        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <article class="<?php $category = get_the_category(); 
                            echo $category[0]->cat_name;?> all">
            
                <div class="content">
                    <h3><a href='<?php the_permalink() ?>' rel='bookmark'><?php the_title(); ?></a></h3>            
                    <?php the_post_thumbnail(); ?>
                    <div class="categorie"><?php $category = get_the_category(); 
                            echo $category[0]->cat_name;?></div>
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