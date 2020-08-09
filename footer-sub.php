				<!-- footer -->
               <div class="footer">
               	 			<nav>
                                    <?php
												wp_nav_menu(
												array (
												'menu' => 'sub menu',
												'menu_id' => 'sub-menu-footer',
												'menu_class' => 'sub-menu',
												'container' => false,
												)
												);
												?> 
                             </nav>
                	  
                    <p>&copy;2019 SoursdeyWebDesign</p>
               
               
               </div>
               <!-- end footer -->
               
           </div>
       </div>
   </div>

<?php include("script.php"); ?>


</body>
</html>