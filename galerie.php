<?php get_header();
//Template Name: Galerie
?>

<main>
    <h2><?php the_title(); ?> </h2>

    <div id="galerie">

        <?php $galerie_ids = get_field( 'galerie' ); ?>
        <?php $size = '250'; ?>


    <?php if ( $galerie_ids ) :  ?>
	<?php foreach ( $galerie_ids as $galerie_id ): ?>

    <div class="singleimg">
		<?php echo wp_get_attachment_image( $galerie_id, $size ); ?>
    </div>
	<?php endforeach; ?>

<?php endif; ?>


</div>

</main>



<?php get_footer();?>