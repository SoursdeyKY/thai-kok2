<?php
/*
* Template Name: order-now-page
  UPDATED ON Jan 2020
*/

?>
<?php include("header.php"); ?>
<div>
    	<div class="container-fluid">
           <div class="row-fluid">
           
              <!-- banner --> 
              	<div id="banner">
                   <div class="navigation">
                   	<div class="span12">
                       <!-- logo, navigation, order now --> 
							<?php include("nav-sub.php"); ?>
                       <!-- end logo, navigation, order now --> 
                          
                      </div>
                      
                      
                   </div>
            	</div>
              <!-- end banner --> 
              
              <!-- order now -->
               <div id="order-now" class="order-now">
               	<div class="span6">
                    <?php
                                $page = get_post(56);
                                echo $page->post_content;
                           ?>
                           
                      <?php echo do_shortcode( '[ninja_form id=5]' ); ?>
    			 	</div>
                
               </div>
               <!-- end order now -->
            
<?php wp_footer(); ?>
<?php include("footer-sub.php"); ?>