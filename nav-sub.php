 						<!-- logo -->
                        <div class="logo">
                                <a href="https://thai-kok.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/socheata-logo.png" width="306" height="120" alt="Socheata Logo"/></a>
                            </div>
                          <!-- end logo -->
                          
                          <!-- menu -->
                          <div class="cssmenu menu">
                            <nav>
                            			<?php
												wp_nav_menu(
												array (
												'menu' => 'sub menu',
												'menu_id' => 'sub-menu',
												'menu_class' => 'sub-menu',
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
												'menu' => 'sub menu',
												'menu_id' => 'sub-menu-mobile',
												'menu_class' => 'sub-menu',
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
                            <nav><a href="https://thai-kok.com/order-now/"> Order Now </a></nav>
                        	 </div>
                          <!-- end order now -->