<html lang="fr">

<head <?php language_attributes(); ?>>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@100;300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title><?php the_title(); ?></title>

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