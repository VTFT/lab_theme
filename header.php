<<<<<<< HEAD
<html lang="fr">
<title><?php the_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>

</head>
<body onload="showSlides(slideIndex)">

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
      <div id="all">
    <input type="checkbox" id="menu-checkbox" class="menu-checkbox">
    <label for="menu-checkbox" class="fas fa-bars"></label>
    <?php 
    wp_nav_menu(array(
      'menu' => 'Menu principal',
      'container' => true,
      'menu_class' => 'header-nav'
    ));
    ?>
    </div>
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
=======
<html lang="fr">

<head <?php language_attributes(); ?>>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body>
    <header>
        <nav>
        <?php wp_nav_menu(array(
                "menu" => "Menu principal",
            )); ?>
        </nav>
    </header>
>>>>>>> 23c602105a93e99fbdf04219fcf796ed9565c767
