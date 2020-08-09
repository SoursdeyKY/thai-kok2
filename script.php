<!-- START JAVASCRIPT -->
	<!-- SlidesJS Required: LINK TO jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    
    
    <!-- TWITTER BOOTSTRAP SCRIPT -->
  	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    
    <!-- STICKY NAVIGATION-->
    <script type="text/javascript">
	$(function() {

		// grab the initial top offset of the navigation 
		var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
		
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function(){
			var scroll_top = $(window).scrollTop(); // our current vertical position from the top
			
			// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
			if (scroll_top > sticky_navigation_offset_top) { 
				$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0, 'z-index': 1000 });
				$('.logo').css({ 'top': '45px'});
			} else {
				$('#sticky_navigation').css({ 'position': 'relative' }); 
				$('.logo').css({'top':'45px'});
				$('.main-nav ul').css({ 'margin-top': '80px', });
				$('#cssmenu li ul').css({ 'margin-top': '10px', 'top': '25px', });
			}   
		};
		
		// run our function on load
		sticky_navigation();
		
		// and run it again every time you scroll
		$(window).scroll(function() {
			 sticky_navigation();
		});
		
		// NOT required:
		// for this demo disable all links that point to "#"
		$('a[href="#"]').click(function(event){ 
			event.preventDefault(); 
		});
		
	});
	</script>
    
    <!-- TO TOP BUTTON -->
    <script type="text/javascript">
		$(document).ready(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() > 100){
				$('#goTop').stop().animate({
					bottom: '100px'    
					}, 500);
			}
			else{
				$('#goTop').stop().animate({
				   bottom: '-100px'    
				}, 500);
			}
		});
		$('#goTop').click(function() {
			$('html, body').stop().animate({
			   scrollTop: 0
			}, 500, function() {
			   $('#goTop').stop().animate({
				   bottom: '-100px'    
			   }, 500);
			});
		});
	});    
	</script>

    <!-- COLLAPSE EXPEND -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.collapse.js"></script>
    <script type="text/javascript">
        new jQueryCollapse($("#custom-show-hide"), {
          open: function() {
            this.slideDown(500);
          },
          close: function() {
            this.slideUp(500);
          }
        });
      </script>
      
      <script type="text/javascript">
        new jQueryCollapse($("#custom-show-hide2"), {
          open: function() {
            this.slideDown(500);
          },
          close: function() {
            this.slideUp(500);
          }
        });
      </script>
     
    
    <!-- SMOOTH SCROLL -->
    <script type="text/javascript">
        	var sections = $('section')
			  , nav = $('nav')
			  , nav_height = 120; //height from top
			
			$(window).on('scroll', function () {
			  var cur_pos = $(this).scrollTop();
			  
			  sections.each(function() {
				var top = $(this).offset().top - nav_height,
					bottom = top + $(this).outerHeight();
				
				if (cur_pos >= top && cur_pos <= bottom) {
				  nav.find('a').removeClass('active');
				  sections.removeClass('active');
				  
				  $(this).addClass('active');
				  nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
				}
			  });
			});
			
			nav.find('a').on('click', function () {
			  var $el = $(this)
				, id = $el.attr('href');
			  
			  $('html, body').animate({
				scrollTop: $(id).offset().top - nav_height
			  }, 500);
			  
			  return false;
			});
	</script>
    
    <!-- FONT ICON -->
    <script type="text/javascript">
      function toggleCodes(on) {
        var obj = document.getElementById('icons');
      
        if (on) {
          obj.className += ' codesOn';
        } else {
          obj.className = obj.className.replace(' codesOn', '');
        }
      }
      
    </script>
	


<!-- END JAVASCRIPT -->