<?php
/*
* Template Name: sub-page
  UPDATED ON Jan 2020
*/
?>
<?php include("header.php"); ?>
<div id="subpage">
    	<div class="container-fluid">
           <div class="row-fluid">
           
              <!-- banner --> 
              	<div id="banner">
            				<?php if ( has_post_thumbnail() ) {
                                 the_post_thumbnail();
                               } ?>
            		
                   <div class="navigation">
                   	<div class="span12">
                       <!-- logo, navigation, order now --> 
							<?php include("nav-sub.php"); ?>
                       <!-- end logo, navigation, order now --> 
                          
                      </div>
                      
                      
                   </div>
                   <div class="menu-header">
                    <div class="span12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#appetizers">Appetizers</a></li>
                              <li><a data-toggle="tab" href="#food">Foods</a></li>
                              <li><a data-toggle="tab" href="#dessert">Desserts</a></li>
                              <li><a data-toggle="tab" href="#drink">Drinks</a></li>
                            </ul>
                       </div>
                  </div>
            	</div>
              <!-- end banner --> 
              
              <!-- sub content -->
              <div>               
              <div id="menu" class="our-menu">
               	
                  <div class="span12">
                        <div class="tab-content">
                        	<div id="appetizers" class="tab-pane fade in active">
                            <?php echo get_post_meta(10, 'appetizers', true); ?>
                          </div>
                          <div id="food" class="tab-pane fade">
                            <?php echo get_post_meta(10, 'foods', true); ?>
                          </div>
                          <div id="dessert" class="tab-pane fade">
                            <?php echo get_post_meta(10, 'desserts', true); ?>
                          </div>
                          <div id="drink" class="tab-pane fade">
                            <?php echo get_post_meta(10, 'drinks', true); ?>
                          </div>
                        </div>               	
                     </div>
               </div>
               </div>
               <!-- end sub content -->

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
          
            
<?php wp_footer(); ?>
<?php include("footer.php"); ?>