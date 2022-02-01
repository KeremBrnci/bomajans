<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>BOM AJANS</title>
    <meta name="description" content="Bom Ajans - Aday Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favico.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<!-- preloader -->
<div id="preloader">
    <!-- <div class="book"> -->
    <div class="inner">
        <p class="loader_text">Bom Ajans</p>
    </div>
</div>
<!-- site wrapper -->
<div class="site-wrapper">
    <div class="main-overlay"></div>
    <!-- header -->

    <header class="header-personal">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xl">
                <div class="collapse navbar-collapse justify-content-center centered-nav">
                    <!-- menus -->
                  <?php wp_nav_menu(array( 'theme_location'=>'menu','menu_class'=>'navbar-nav mr-auto'));   ?>

                </div>
            </div>
        </nav>
    </header>