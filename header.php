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