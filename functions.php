<?php
/*
* Sets up the theme and provides some helper functions, which are used in the
* theme as custom template tags. Others are attached to action and filter
* hooks in WordPress to change core functionality.
*/
/*for setup and prepare theme*/
function thaikokrestauranttheme_setup()
{
           add_theme_support( 'post-thumbnails' ); 
			/*
            * Makes Angkor available for translation.
            *
            * Translations can be added to the /languages/ directory.
            * If you're building a theme based on nypizzeria theme, use a find and
            * replace to change 'angkor' to the name of your theme in all
            * template files.
            */
            /*support multi languages*/
             load_theme_textdomain( 'thaikokrestauranttheme', get_template_directory() . '/languages' );

            // This theme uses wp_nav_menu() in one location.
            register_nav_menu( 'primary', __( 'Navigation Menu', 'thaikokrestauranttheme' ) );
             add_post_type_support('page', 'excerpt');
            /*Naviation Menu is messageid, angkor is textdomain*/

        }
    add_action( 'after_setup_theme', 'thaikokrestauranttheme_setup' );
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>

