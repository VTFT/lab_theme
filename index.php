<?php get_header();
//Template Name: Index
?>

<main id="index">

<section id="caroussel"></section>

<!-- cartes activités -->
<section id="cartesactivités">
<div id="containeractivité">
<?php if ( have_rows( 'carte_activite' ) ) : ?>
    <?php while ( have_rows( 'carte_activite' ) ) : the_row(); ?>
    <?php if ( have_rows( 'carte' ) ) : ?>
        <?php while ( have_rows( 'carte' ) ) : the_row(); ?>
        <div class="cartesindex">
        <?php $icone = get_sub_field( 'icone' ); ?>
        <?php $size = 'full'; ?>
        <?php if ( $icone ) : ?>
            <?php echo wp_get_attachment_image( $icone, $size ); ?>
            <?php endif; ?>
            <h2><?php the_sub_field( 'cartetitre' ); ?></h2>
            <p><?php the_sub_field( 'descriptif' ); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
                <?php endif; ?>
                </div>
                </section>
                <!-- fin carte activités -->

                <section id="présentation">
                    <div id="containerprésentation">
                    <?php if ( have_rows( 'presentation' ) ) : ?>
	<?php while ( have_rows( 'presentation' ) ) : the_row(); ?>
                        <div id="texteprésentation">
		<h2><?php the_sub_field( 'titre_de_presentation' ); ?></h2>
	<p><?php the_sub_field( 'texte_de_presentation' ); ?></p>	
	<?php endwhile; ?>
<?php endif; ?>
                        </div>
                        <div id="imageprésentation">

                        </div>
                    </div>
                </section>
                </main>
                
                <?php get_footer();?>