
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title><?php echo get_bloginfo('name');?></title>
    <?php wp_head(); ?> <!-- function récupérant des éléments de plugin -->
</head>

<body>
<div class="container">
<header>

    <nav>
<?php
    
wp_nav_menu(array(
    'theme_location' => 'header',
    'container' => '',
    'container-class' => 'menu-principal'
));?>
    </nav>
</header>