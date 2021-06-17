<!-- ANCHOR header start -->
<?php get_header();
// Template Name: Infos
?>

<main id="infos">
    <h2>Infos pratiques</h2>
    <section id="infosContenu">
        <div id="infosContent">
            <div id="parc"><?php the_content(); ?></div>
        </div>
        <div id="infosImg">
            <?php if ( have_rows( 'event' ) ) : ?>
            <div id="event">
                <?php while ( have_rows( 'event' ) ) : the_row(); ?>
                    <h4><?php the_sub_field( 'event_title' ); ?></h4>
                    <p><?php the_sub_field( 'event_text' ); ?></p>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php $calendrier = get_field( 'calendrier' ); ?>
            <?php $size = "full"; ?>
            <?php if ( $calendrier ) : ?>
                <?php echo wp_get_attachment_image( $calendrier, $size); ?>
            <?php endif; ?>

            <img src="http://localhost/labyrinthe/wp-content/uploads/2021/06/oiseau.png" alt="un superbe oiseau avec un chapeau" id="mascotte">

            <?php $map_velo = get_field( 'map_velo' ); ?>
            <?php if ( $map_velo ) : ?>
                <?php echo wp_get_attachment_image( $map_velo, $size); ?>
            <?php endif; ?>
        </div>
    </section>
    <span class="toTop"><a href=""><i class="fas fa-arrow-circle-up"></i></a></span>
</main>

<!-- ANCHOR footer start -->
<?php get_footer();?>
<!-- footer end -->