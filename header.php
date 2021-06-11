<html lang="fr">
<title><?php the_title(); ?></title>
<?php wp_head(); ?>

</head>
<body>

<header role="banner">
<div id="navtel">
<div id="contnavtel">
<div id="icontel">
<?php if ( have_rows( 'tel', 'option' ) ) : ?>
  <?php while ( have_rows( 'tel', 'option' ) ) : the_row(); ?>
  <?php $icone = get_sub_field( 'icone' ); ?>
  <?php $size = 'full'; ?>
  <?php if ( $icone ) : ?>
    <?php echo wp_get_attachment_image( $icone, $size ); ?>
    <?php endif; ?>
    <a href="callto:06 14 12 74 33">	<?php the_sub_field( 'numero' ); ?></a>
    <?php endwhile; ?>
    <?php endif; ?></div>
    </div>
    </div>
    <div id="couverture" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"> <img src="http://localhost:8888/lab+instal/wp-content/uploads/2021/06/logo.png" alt=""></div>
    
    <nav class="ribbon">
    
    <?php 
    wp_nav_menu(array(
      'menu' => 'Menu principal',
      'container' => true,
      'menu_class' => 'header-nav'
    ));
    ?>
    <i></i>
    <i></i>
    <i></i>
    <i></i>
    </nav>
    </header>

    <div class="logos"<?php echo $i; ?>>
  <?php if (have_rows('logos')) : while (have_rows('logos')): the_row();?>
  <?php $image = get_field( 'image' ); ?>
<?php $size = 'full'; ?>
<?php if ( $image ) : ?>
	<?php echo wp_get_attachment_image( $image, $size ); ?>
<?php endif; ?>
      
    <?php endwhile; endif; ?>
</div>
>>>>>>> alex
