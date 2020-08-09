<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php if(is_front_page()) { echo bloginfo('name'); } else { wp_title(''); echo " "; } ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="URL OF IMAGE" />
    <meta name="keywords" content="restaurant" />
    
	 <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/thai-kok.ico" type="image/x-icon"/>
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/thai-kok.ico" type="image/x-icon"/>

	<!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    
    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css"><!--do not remove from head-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('stylesheet_directory'); ?>/css/print-style.css" />
    
<?php wp_head() ?>
    
</head>

<body>