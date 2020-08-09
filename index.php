<?php
/*
* License: © 2020 Soursdey Web Design
  UPDATED ON Dec 2020
*/
?>
<?php include("header.php"); ?>
<div>
    	<div class="container-fluid" id="landing">
           <div class="row-fluid">
				<!-- header -->
					<div id="header">
						<div class="span12">
							<h1>Restaurant Thai Kok</h1>
							<h2>Commencez Votre Commande</h2>
							<div class="landing-tab-buttons">
								<ul class="nav">
									<li><a data-toggle="tab" href="#pickup">Ramasser</a></li>
									<li class="between">ou</li>
									<li><a href="https://www.just-eat.fr/restaurant-livraison-a-domicile/restaurant/thai-kok">Livraison</a></li>  
								</ul>
							</div>
						</div>
							<div class="tab-content">
								<div id="pickup" class="tab-pane fade in">
									<div class="promotion">À la carte -10%</div>
									<p>Les menus ci-dessous sont pour le ramassage uniquement</p>
									<ul class="menu-buttons">
										<li><a href="https://thai-kok.com/la-carte/">
										La carte</a></li>
										<li><a href="https://thai-kok.com/menu-midi/">Menu Midi</a></li>  
										<li><a href="https://thai-kok.com/menu-vegetarien-midi/">Menu Végétarien Midi</a></li>
										<li><a href="https://thai-kok.com/desserts/">Desserts</a></li>
										<li><a href="https://thai-kok.com/les-boissons/">Les Boissons</a></li>
									</ul>
									
									
								</div>
						</div>
					</div>
			    <!-- end header --> 
              <!-- banner --> 
			  <div id="image-banner">
			 		 <?php if ( has_post_thumbnail() ) {
                                                              the_post_thumbnail();
                                                         } ?> 
                   
            </div>
              <!-- end banner --> 
              
              <!-- contact -->
               <div id="contact-us" class="contact">
               	<div class="span12">
                		<div class="span6">
                        <h2><span>Restaurant Thai Kok</span></h2>
						
                        <?php if ( get_post_meta(19, 'address', true)) {?>
													 <p><i class="demo-icon icon-location">&#xe803;</i><?php echo get_post_meta(19, 'address', true); ?></p>
												<?php }
												else { 
													echo ' ';
												}?> 
                        <?php if ( get_post_meta(19, 'tel', true)) {?>
													 <p><i class="demo-icon icon-phone">&#xe804;</i><?php echo get_post_meta(19, 'tel', true); ?></p>
												<?php }
												else { 
													echo ' ';
												}?>
                       
                        <?php if ( get_post_meta(19, 'email', true)) {?>
													 <p><i class="demo-icon icon-mail">&#xe800;</i><a href="mailto:<?php echo get_post_meta(19, 'email', true); ?>"><?php echo get_post_meta(19, 'email', true); ?></a></p>
												<?php }
												else { 
													echo ' ';
												}?>
					   <?php if ( get_post_meta(19, 'hours', true)) {?>
							<h3>Heures d'ouverture du restaurant:</h3>
							<ul><?php echo get_post_meta(19, 'hours', true); ?></ul></p>
												<?php }
												else { 
													echo ' ';
												}?>
                        
                        <div class="social-media">
                        		<ul>
                                <li>Suivez nous:</li>
                                <?php if ( get_post_meta(19, 'facebook', true)) {?>
													 <li><a href="<?php echo get_post_meta(19, 'facebook', true); ?>"><i class="demo-icon icon-facebook">&#xe80a;</i></a></li>
												<?php }
												else { 
													echo ' ';
												}?>
                             	<?php if ( get_post_meta(19, 'twitter', true)) {?>
													 <li><a href="<?php echo get_post_meta(19, 'twitter', true); ?>"><i class="demo-icon icon-twitter">&#xe809;</i></a></li>
												<?php }
												else { 
													echo ' ';
												}?>
                                
                                <?php if ( get_post_meta(19, 'instagram', true)) {?>
													 <li><a href="<?php echo get_post_meta(19, 'instagram', true); ?>"><i class="demo-icon icon-instagram">&#xe80c;</i></a></li>
												<?php }
												else { 
													echo ' ';
												}?>
                             </ul>
                        </div>
                       
                      </div>
                      <div class="span6">
                      <?php if ( get_post_meta(19, 'map_iframe', true)) {?>
											<?php echo get_post_meta(19, 'map_iframe', true); ?>
												<?php }
												else { 
													echo ' ';
												}?>
                      </div>
                	</div>
               </div>
               <!-- end contact -->

			   
							
                  </div>
			    </div>
			
               
               
               
            
            
<?php wp_footer(); ?>
<!-- footer -->
<div class="footer">
                	  
                    <p>&copy;2020 Restaurant Thai Kok</p>
               
               
               </div>
               <!-- end footer -->
               
           </div>
       </div>
   </div>

<?php include("script.php"); ?>

</body>
</html>