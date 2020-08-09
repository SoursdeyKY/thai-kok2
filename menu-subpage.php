<?php
/*
* Template Name: menu subpage
  UPDATED ON Jan 2020
*/
?>
<?php include("header.php"); ?>
<div>
    	<div class="container-fluid">
           <div class="row-fluid">
			  	<div >
				  	<div class="span12 menu-subpage">
						<div class="menu-banner">
							<!-- logo -->
							<div class="logo">
									<a href="https://thai-kok.com/"><img src="https://thai-kok.com/wp-content/uploads/2020/04/Thai-Kok-logo-350x303-1.png" width="350" height="303" alt="Thai Kok Logo"/></a>
								</div>
							<!-- end logo -->
							<!-- menu --> 
							<?php
								wp_nav_menu(
								array (
								'menu' => 'menu types',
								'menu_id' => 'menu-types',
								'menu_class' => 'memu-type',
								'container' => false,
								)
								);
							?> 
							<!-- end menu -->
							
						</div>
						<div class="content-con">
							
							<?php
								the_content(); 
							?> 
						</div>
                        <!-- order now -->
                        <div class="top-button">
                            <nav><a href="tel:0148068882"> <img src="https://thai-kok.com/wp-content/uploads/2020/05/phone-icon.png" width="50" height="50" alt="phone"/>
Appelez pour commander le ramassage</a></nav>
                        </div>
                        <!-- end order now -->
                        
					</div>
                </div>
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