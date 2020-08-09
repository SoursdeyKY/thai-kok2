			<div id="banner">
                   <div class="navigation">
                   	<div class="span12">
                    
                        <!-- logo -->
                        <div class="logo">
                                <a href="https://thai-kok.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Thai-Kok-logo.png" width="300" height="260" alt="Socheata Logo"/></a>
                            </div>
                          <!-- end logo -->
                          
                          <!-- menu -->
                          <div class="cssmenu menu">
                            <nav>
                            			<?php
												wp_nav_menu(
												array (
												'menu' => 'main menu',
												'menu_id' => 'main-menu',
												'menu_class' => 'main-menu',
												'container' => false,
												)
												);
												?> 
                                    
                             </nav>
                          </div>
                          <!-- end menu -->
                          
                          <!-- start mobile navigation -->
                          <div id="custom-show-hide" class="mobile-nav">
                                <h3><i class="demo-icon icon-menu">&#xf0c9;</i></h3>
                                <div>
                                		<nav>
                                        <?php
												wp_nav_menu(
												array (
												'menu' => 'main menu',
												'menu_id' => 'main-menu-mobile',
												'menu_class' => 'main-menu',
												'container' => false,
												)
												);
												?> 
                                 	</nav>
                                 </div>
                          </div>
                          <!-- end mobile navigation -->
                          
                          <!-- order now -->
                          <div class="top-button">
                            		<nav><a href="https://thai-kok.com/#order-now"> Order For Pickup </a></nav>
                        	 </div>
                          <!-- end order now -->
                          
                          <!-- order now -->
                          <div class="content-container">
                                <h1>Welcome <span>Thai Kok</span> <span>Spécialités Khmère - Thaïlandais</span></h1>    
                          </div>
                          <!-- end order now -->
                      </div>
                      
                      
                   </div>
            	</div>