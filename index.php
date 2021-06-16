<?php get_header();
//Template Name: Index
?>

<main>



<?php if ( have_rows( 'carte' ) ) : ?>
	<?php while ( have_rows( 'carte' ) ) : the_row(); ?>
		<?php if ( have_rows( 'cartes' ) ) : ?>
			<?php while ( have_rows( 'cartes' ) ) : the_row(); ?>

            <div class="carte">
				<?php $image = get_sub_field( 'image' ); ?>
				<?php $size = 'full'; ?>
				<?php if ( $image ) : ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
				<?php endif; ?>
				<?php the_sub_field( 'titre' ); ?>
				<?php the_sub_field( 'description' ); ?>
                </div>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>


</main>


<?php get_footer();?>