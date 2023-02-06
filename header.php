<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>?v=0.0.0">
	<script src="<?php echo get_template_directory_uri().'/js/jquery.js'?>" type="text/javascript"></script>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri().'/img/sitio-web.svg'?>" />
    <?php wp_head(); ?>
</head>
    <body id="body">
        <header>
        
        <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); //Esto te permite insertar el menu, el nombre debe coincidir con el que registras  en function.php
        ?>		
        </header>
