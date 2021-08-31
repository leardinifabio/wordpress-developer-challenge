<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/reset.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/footer.css' ?>">
</head>

<body <?php body_class(); ?>>
<header class="header-play">
    <div class="container-menu">
        <?php
        the_custom_logo();
        ?>
        <nav class="menu-link">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'play-menu'
                )
            );
            ?>
        </nav>
    </div>
    <div class="main-header">
        <?php
        ?>
    </div>
</header>