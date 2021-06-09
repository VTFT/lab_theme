<html lang="fr">

<head <?php language_attributes(); ?>>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>

</head>

<body>

   <header role="banner">
        <div id="navtel"></div>
    <div id="couverture" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"> <img src="http://localhost:8888/lab+instal/wp-content/uploads/2021/06/logo.png" alt=""></div>
    
    <nav>
    <div class="l-triangle-top"></div>
   <div class="l-triangle-bottom"></div>
        <?php 
        wp_nav_menu(array(
          'menu' => 'Menu principal',
          'container' => true,
          'menu_class' => 'header-nav'
        ));
        ?>
         <div class="r-triangle-top"></div>
         <div class="r-triangle-bottom"></div>
      </nav>
       
    </header>