<?php
/*
* Template Name: home
  UPDATED ON Jan 2020
*/
?>
<?php include("header.php"); ?>
<div>
    	<div class="container-fluid">
           <div class="row-fluid">
           
              <!-- banner --> 
           	<?php include("nav.php"); ?>
              <!-- end banner --> 
              
              <!-- contact -->
               <div id="contact-us" class="contact">
               	<div class="span12">
                		<div class="span6">
                        <?php
                                $page = get_post(19);
                                echo $page->post_content;
                           ?>
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
							<h3>Restaurant Hours:</h3>
							<ul><?php echo get_post_meta(19, 'hours', true); ?></ul></p>
												<?php }
												else { 
													echo ' ';
												}?>
                        
                        <div class="social-media">
                        		<ul>
                                <li>Follow us:</li>
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
               
               <!-- menu -->
               <div id="menu" class="our-menu">
               	<div class="menu-header">
                    <h2>Our<span>Menu</span></h2>
                    <div class="span12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu-principal">Menu</a></li>
                            <li><a data-toggle="tab" href="#menu-midi">Menu Midi</a></li>  
							<li><a data-toggle="tab" href="#menu-végétarien">Menu Végétarien</a></li>
                            <li><a data-toggle="tab" href="#dessert">Desserts</a></li>
                            <li><a data-toggle="tab" href="#drink">Drinks</a></li>
                            </ul>
                       </div>
                  </div>
                  <div class="span12">
                        <div class="tab-content">
                        	<div id="menu-principal" class="tab-pane fade in active">
                            <!--<php echo get_post_meta(11, 'menu-principal', true); ?>-->
						    <div class="clear">
							<h2>Hors D'oeuvre</h2>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Rouleaux frits Thaï aux crevettes (3p)</h3>
										 <p>Fried Thai rolls with shrimp</p>
										 <div class="price">6,80€</div>
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Pâtes de crevettes frites Thaï (3p)</h3>
										 <p>Thai deep-fried shrimps pasta</p>
										 <div class="price">7,50€</div>
									</div>
									<div class="span1">
										 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Papiers farcies (3p)</h3>
										 <p>Stuffed buttered papers</p>
										 <div class="price">6,50€</div>
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Raviolis de crevettes à la vapeur (4p)</h3>
										 <p>Steamed ravioli with shrimps</p>
										 <div class="price">6,50€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Raviolis de poulet à la vapeur (6p)</h3>
										 <p>Steamed Ravioli with Chicken</p>
										 <div class="price">6,50€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Déllcieux poulet au sésame (3p)</h3>
										 <p>Delicious chicken prepared with sesame</p>
										 <div class="price">6,90€</div> 
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Rouleaux frits au poulet (Ném 4p)</h3>
										 <p>Deep-fired chicken rolls</p>
										 <div class="price">6,80€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Néms aux légumes (4p)</h3>
										  <p>Deep-fried vegetable rolls</p>
										 <div class="price">5,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Assortiment de beignets Thaï (8p)</h3>
										  <p>Mix Thai fritters</p>
										 <div class="price">15,90€</div> 
									</div>
								</div>
							</div>
								
								
							<div class="clear">
							<h2>Salades</h2>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Salade de vermicelles aux crvettes & à la citronnell</h3>
										<p>Glass noodles salad with strimps & lemongrass</p>
										 <div class="price">8,80€</div>
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Salade de papaye verte</h3>
										 <p>Green papaya salad</p>
										 <div class="price">8,60€</div>
									</div>
									<div class="span1">
										 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Salade de boeuf hachè à la citronnell</h3>
										<p>Minced beef salad with lemongrass</p>
										 <div class="price">8,80€</div>
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Salad d'ananas frais aux crevettes et noix de caj</h3>
										<p>Fresh pineapple salad with shrimps and cashews nuts</p>
										 <div class="price">10,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Salade de boeuf èminicè grillè</h3>
										<p>Sliced & grilled beef salad</p>
										 <div class="price">8,80€</div> 
									</div>
									
								</div>
								
							</div>
							
							<div class="clear">
							<h2>Soupes</h2>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Soupe de poulet au lait de co</h3>
										  <p>Chicken soup with coconut Milk</p>
										 <div class="price">7,80€</div>
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Soupe piquante de poisson à la citronnelle (Tum yam pla)</h3>
										<p>Spicy fish soup with lemongrass</p>
										 <div class="price">7,80€</div>
									</div>
									<div class="span1">
										 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Soupe piquante de crevettes à la citronnele (Tum yam kung)</h3>
										<p>Spicy shrimp soup with lemongrass</p>
										 <div class="price">8,80€</div>
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Soupe piquante de gros gambas à la citronnel</h3>
											<p>King prawn spizy soup with limongrass</p>
										 <div class="price">13,90€</div> 
									</div>
									
								</div>
								
							</div>
							
							<div class="clear">
							<h2>Volaille & Boeuf</h2>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Poulet sauté à la noix de cajou</h3>
											<p>Chicken stir-fry with cashews nuts</p>
										 <div class="price">11,90€</div>
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Cuisse de poulet grellé à la citronnelle</h3>
											<p>Grilled chicken leg with lemongrass</p>
										 <div class="price">10,50€</div>
									</div>
									<div class="span1">
										 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Emincé de poulet sauté au basilic Thaï</h3>
										 <p>Thin slices of chicken stir-fry with Thai basil</p>
										 <div class="price">11,90€</div>
									</div>
								</div>
								
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Poulet sauté à l'ananas frais</h3>
											<p>Chicken stir-fry with fresh pineapple</p>
										 <div class="price">11,50€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de canard laqué nappé d'une sauce de tamari</h3>
											<p>Roasted duck fillet topped with tamarind sauce</p>
										 <div class="price">13,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de canard sauté aux pousses de bambou et lait de coc</h3>
											<p>Roasted Duck fillet stir-fry with bamboo shoots and coconut milk</p>
										 <div class="price">13,90€</div> 
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de canard laqué sauté à l'ananas frais</h3>
											<p>Roasted duck fillet stir-fry with fresh pineapple</p>
										 <div class="price">13,50€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de canard laqué sauté au basilic Thaï</h3>
											<p>Roasted duck fillet sauteed with Thai basil</p>
										 <div class="price">13,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Boeuf sauté au piment frais</h3>
											<p>Beef stir-fry with fresh chilli</p>
										 <div class="price">12,90€</div> 
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Boeuf Sauté au basilic frais</h3>
											<p>Beef stir-fry with Thai basil</p>
										 <div class="price">12,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Boeuf sauté au pousse de bambou et lait de coco</h3>
											<p>Beef stir-fry with bamboo shoot and coconut milk</p>
										 <div class="price">12,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Brochettes de boeuf à la citronnelle</h3>
											<p>Beef Skewers with Lemongrass</p>
										 <div class="price">11,90€</div> 
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Assortiment de brochette (2 bouets + 2 bouets)</h3>
											<p>Mixed skewers</p>
										 <div class="price">11,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Brochettes de filet de poulet à la
sauce de cacahuète (4p)</h3>
											<p>Chicken fillet skewers
in peanut sauce</p>
										 <div class="price">11,50€</div> 
									</div>
									
								</div>
							</div>
								
							<div class="clear">
							<h2>Curry Thailandais</h2>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Crevettes au curry vert</h3>
											<p>Green curry with shrimps</p>
										 <div class="price">13,90€</div>
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Sole au curry vert au rouge</h3>
											<p>Green or red curry with sole</p>
										 <div class="price">12,90€</div>
									</div>
									<div class="span1">
										 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Poulet au curry vert</h3>
											<p>Green curry chicken</p>
										 <div class="price">11,90€</div>
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>36. Boeuf au curry vert</h3>
											<p>Green curry with beef</p>
										 <div class="price">12,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Tofu au curry vert ou rouge</h3>
											<p>Green or red curry Tofu</p>
										 <div class="price">11,50€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Poulet au curry rouge</h3>
											<p>Red curry with chicken</p>
										 <div class="price">11,90€</div> 
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Saumon au curry rouge</h3>
										 	<p>Red curry with salmon</p>
										 <div class="price">12,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Canard au curry rouge</h3>
										 	<p>Red curry with duck</p>
										 <div class="price">13,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Gros gambas au curry rouge</h3>
										 	<p>Red curry with King prawns</p>
										 <div class="price">15,50€</div> 
									</div>
								</div>
							</div>
							
							
							<div class="clear">
								<h2>Fruits de mar</h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Crevettes sautées à la noix de cajou</h3>
												<p>Shrimps stir-fry with cashew nuts</p>
											 <div class="price">13,90€</div>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Crevettes sautées au basilic Thaï</h3>
												<p>Shrimps stir-fry with Thai basil</p>
											 <div class="price">13,90€</div>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Crevettes frites sautées à l'ail et poivre vert</h3>
												<p>Fried shrimps stir-fry with garlic and & pepper</p>
											 <div class="price">13,90€</div>
										</div>
									</div>
								  <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Crevettes frites sautées au piment</h3>
												<p>Fried shrimps stir-fry with chil</p>
											 <div class="price">13,90€</div>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Coquille St-Jacques sautées au basilic Thaï</h3>
												<p>Scallop stir-fry with Thai basil</p>
											 <div class="price">16,90€</div>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Coquille St-Jacque fruits sautées
a l'ail et poivre vert</h3>
												<p>Fried scallops Stir-fry with
garlic & green pepper</p>
											 <div class="price">16,90€</div>
										</div>
									</div>
									<div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Calamars sautés au basilic Thaï</h3>
												<p>Calamari stir-fry with Thai basil</p>
											 <div class="price">12,90€</div>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Calamars frits sautés à L'ail et poivre vert</h3>
												<p>Fried calamari stir-fry with
garlic and green pepp</p>
											 <div class="price">12,90€</div>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Soupe piquante de fruits de mer
servie dans coco frais</h3>
												<p>Spicy seafood soup served in fresh coconut</p>
											 <div class="price">15,90€</div>
										</div>
										
									</div>
									<div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Filet de poisson épicé cuit a la
vapeur (ho Mok pa</h3>
												<p>Spicy steamed fish fillet</p>
											 <div class="price">12,90€</div>
										</div>
										
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Filet de saumon grillé à la sauce de coco</h3>
												<p>Grilled Salmon fillet with coconut sauce</p>
											 <div class="price">13,90€</div> 
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Bar à la vapeur au gingembre</h3>
											  <p>Steamed seabass with ginger</p>
											 <div class="price">14,90€</div> 
										</div>
										
									</div>
									<div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Cuisses de grenouilles sautées au
basilic, piment et gingembre</h3>
												<p>Frog legs stir-fry with Thai basil, chilli and ginger</p>
											 <div class="price">12,90€</div> 
										</div>
										
									</div>
								</div>
                           
                          </div>
						  <div id="menu-midi" class="tab-pane fade">
                            <!--<php echo get_post_meta(11, 'menu-midi', true); ?>-->
							 <div class="deals">
							  	<p>1 entrée + 1 plat + 1 dessert : 15,00€ <span>(Boisson non comprise)</span></p>
								<p>1 entrée + 1 plat : 13,50€ <span>(Boisson non comprise)</span></p>
								<p>1 plat + 1 dessert: 13,50€ <span>(Boisson non comprise)</span></p>
							  </div>
							  <div class="clear">
							  <h2>Entrée au choix</h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Rouleaux frits au poulet (3 pièces)</h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Raviolis aux crevettes à la vapeur</h3>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Salade de boeuf haché à la citronnelle</h3>
										</div>
								  </div>
									<div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Salade de vermicelles au poulet</h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Soupe de poulet au lait de coco</h3>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Soupe tom yum poulet & citronnelle</h3>
										</div>
									</div>
								  </div>
								<div class="clear">
							 	<h2>Plat au choix</h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Poulet au curry- vert ou rouge</h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Poulet sauté au basilic thaï</h3>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Bœuf sauté au basilic thaï e</h3>
										</div>
									</div>
									<div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Poulet sauté à l’ananas fraist</h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Cuisse de poulet à la citronnelle </h3>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Curry de boeuf massaman</h3>
										</div>
									</div>
									<div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Bo bun</h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Pad thaï de poulet au légumes </h3>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Mijoté de porc au caramel</h3>
										</div>
									</div>
								</div>
								<div class="clear">
							 		<h2>Accompaniment </h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Riz nature</h3>
										</div>
									</div>
										
								  </div>
							  	<div class="clear">
							 		<h2>Dessert au choix </h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Flan Thaï </h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Perle de coco Thaï</h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Nougat</h3>
										</div>
									</div>
									<div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Lychees au sirop</h3>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Café ou thé</h3>
										</div>
										
									</div>
							  </div>		
                          </div>
					      <div id="menu-végétarien" class="tab-pane fade">
                            <!--php echo get_post_meta(11, 'menu-végétarien', true); ?-->
							   <div class="deals">
							  	<p>1 entrée + 1 plat + 1 dessert : 15,00€ <span>(Boisson non comprise)</span></p>
								<p>1 entrée + 1 plat : 13,50€ <span>(Boisson non comprise)</span></p>
								<p>1 plat + 1 dessert: 13,50€ <span>(Boisson non comprise)</span></p>
							  </div>
							  <div class="clear">
							  <h2>Entrée au choix</h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Nêms aux légume</h3>
												<p>Deep-fried vegetable rolls </p>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Soupe de légumes au lait de coco</h3>
												<p>Vegetable soup with coconut milk </p>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Soupe Tom Yum légumes à la citronnelle</h3>
												<p>Spicy vegetable soup with lemon grass</p>
										</div>
								  	</div>
								  </div>
								<div class="clear">
							 	<h2>Plat au choix</h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Tofu au curry vert ou rouge</h3>
												<p>Green or red curry with Tofu </p>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Bo Bun au Tofu légumes</h3>
												<p>Bo Bun vegetarian</p>
										</div>
										<div class="span1">
											 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
											 <h3>Pads Thaï au légumes</h3>
												<p>Pad thaï vegetarian</p>
										</div>
									</div>
								</div>
								
							  	<div class="clear">
							 		<h2>Dessert au choix </h2>
								    <div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/perles-de-coco-vertes.jpg" alt="perles-de-coco-vertes" width="350" height="350"/>
											 <h3>Perle de coco thaï</h3>
												<p>Green perles of coconut </p>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/nougat-mou.jpg" alt="nougat-mou" width="350" height="350"/>
											 <h3>Nougat</h3>
												<p>Loose nougat</p>
										</div>
										<div class="span1">
											<img src="https://thai-kok.com/wp-content/uploads/2020/01/banane-au-lait-de-coco-et-tapioca.jpg" alt="banane-au-lait-de-coco-et-tapioca" width="350" height="350"/>
											 <h3>Bananes au lait de coco</h3>
												<p>Banana with coconut milk</p>
										</div>
									</div>
										<div>
											<div class="span1">
												<img src="https://thai-kok.com/wp-content/uploads/2020/01/lychee-au-sirop.jpg" alt="lychee-au-sirop" width="350" height="350"/>
												 <h3>Lychees au sirop</h3>
													<p>Lychee in syrup </p>
											</div>
											<div class="span1">
												<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
												 <h3>Café au Thé</h3>
													<p>Coffee or tea</p>
											</div>
										</div>
							  </div>	
                          </div>
                          <div id="dessert" class="tab-pane fade">
                            <!--php echo get_post_meta(11, 'desserts', true); ?-->
							  <div class="clear">
							<h2>Dessert</h2>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/perles-de-coco-vertes.jpg" alt="perles-de-coco-verte" width="350" height="350"/>
										 <h3>Perles de coco vertes </h3>
										 	<p>Green perles of coconut</p>
										 <div class="price">4,90€</div>
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/nougat-mou.jpg" alt="nougat-mou" width="350" height="350"/>
										 <h3>Nougat mou</h3>
											<p>Loose nougat</p>
										 <div class="price">4,00€</div>
									</div>
									<div class="span1">
										 <img src="https://thai-kok.com/wp-content/uploads/2020/01/lychee-au-sirop.jpg" alt="lychee-au-sirop" width="350" height="350"/>
										 <h3>Lychee au sirop</h3>
											<p>Lychee in sirup </p>
										 <div class="price">3,90€</div>
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/banane-au-lait-de-coco-et-tapioca.jpg" alt="banane-au-lait-de-coco-et-tapioca" width="350" height="350"/>
										 <h3>Banane au lait de coco et tapioca</h3>
											<p>Banana with coconut milk & tapioca</p>
										 <div class="price">4,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/mangue-fraiche.jpg" alt="mangue-fraîche" width="350" height="350"/>
										 <h3>Mangue fraîche </h3>
											<p>Fresh mango</p>
										 <div class="price">6,10€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/gingembre-confit.jpg" alt="gingembre-confit" width="350" height="350"/>
										
										 <h3>Gingembre confit </h3>
											<p>Candied ginger</p>
										 <div class="price">4,00€</div> 
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/ananas-frais.jpg" alt="ananas-frais" width="350" height="350"/>
										 <h3>Flan Thaï </h3>
											<p>Thaï flan</p>
										 <div class="price">4,30€</div> 
									</div>
									
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/mangue-fraiche-et-riz-gluant-au-lait-de-coco-sesames.jpg" alt="mangue-fraîche-et-riz-gluant-au-lait-de-coco-sésames" width="350" height="350"/>
										 <h3>Mangue fraîche et riz gluant au lait de coco & sésames </h3>
											<p>Fresh mango & sticky rice  with coconut milk</p>
										 <div class="price">7,50€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/trois-tresors.jpg" alt="trois-trésors" width="350" height="350"/>
										 <h3>Trois Trésors</h3>
											<p>Three treasures</p>
										 <div class="price">7,10€</div> 
									</div>
								</div>
							</div>
                          </div>
                          <div id="drink" class="tab-pane fade">
                            <!--php echo get_post_meta(11, 'drinks', true); ?-->
							  <div class="clear">
							<h2>Fruits de mar</h2>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Saumon au curry rouge</h3>
										 <div class="price">12,00€</div>
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Poulet sauté à l’ananas frais</h3>
										 <div class="price">12,00€</div>
									</div>
									<div class="span1">
										 <img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Gros gambas au curry rouge</h3>
										 <div class="price">15,50€</div>
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de poisson épicé cuit à la vapeur Ho Mok Pa</h3>
										 <div class="price">12,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de poisson épicé cuit à la vapeur Ho Mok Pa</h3>
										 <div class="price">12,90€</div> 
									</div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de poisson épicé cuit à la vapeur Ho Mok Pa</h3>
										 <div class="price">12,90€</div> 
									</div>
								</div>
								<div>
									<div class="span1">
										<img src="https://thai-kok.com/wp-content/uploads/2020/01/image-coming-soon.jpg" alt="Poulet-sauté-à-l’ananas-frais" width="350" height="350"/>
										 <h3>Filet de poisson épicé cuit à la vapeur Ho Mok Pa</h3>
										 <div class="price">12,90€</div> 
									</div>
								</div>
							</div>
                          </div>
                        </div>               	
                     </div>
               </div>
               <!-- end menu -->
               
               <!-- event -->
               
               <!-- end event -->
               
               
               
               <!-- order now -->
               <div id="order-now" class="order-now">
               	<div class="span6">
                    <?php
                                $page = get_post(9);
                                echo $page->post_content;
                           ?>
                           
                      <?php echo do_shortcode( '[ninja_form id=2]' ); ?>
    			 	</div>
                
               </div>
			   
			   
          
               
               <!-- newsletter -->
               <!--<div class="newsletter">
                		Get our newslater <php echo do_shortcode( '[email-subscribers-form id="1"]' ); ?>
               </div>-->
               <!-- end newsletter -->
               
               <!-- start back to top--> 
               <a id="goTop" title="Back to top">
                     <div class="goTop-bg"><i class="demo-icon icon-up-circle">&#xe80b;</i></div>
               </a> 
               <!-- end back to top--> 
            
            
<?php wp_footer(); ?>
<?php include("footer.php"); ?>