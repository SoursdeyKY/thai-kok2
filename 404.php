<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Restaurant Soursdey theme
 * @since Restaurant Soursdey theme 1.0
 */

?>
<?php include("header.php"); ?>
<div>
    	<div class="container-fluid">
           <div class="row-fluid">
           
              <!-- banner --> 
           	<?php include("nav-sub.php"); ?>
              <!-- end banner --> 
              
              <!-- sitemap -->
              <div class="sitemap">  
              		<div class="span12">
                        
                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'nypizzeria' ); ?></p>
									<?php
									wp_nav_menu(
									array (
									'menu' => 'main menu',
									'menu_id' => 'main-menu-sitemap',
									'menu_class' => 'main-menu',
									'container' => false,
									)
									);
									?> 	
                       
                   </div>     
               </div>
               <!-- sitemap -->

<?php wp_footer(); ?>
<?php include("footer.php"); ?>