<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <footer>
			 <div class="footer-inner">
            <div class="container">
				<div class="row">
					<div class="span6 footer-left">
						
						
						<?php wp_nav_menu(); ?>
						
					</div>
					
					<div class="span6 footer-right">
						
						<div class="footer-phones">
		
							<p><a href='tel:<?php the_field('contacts_phone', 20) ?>'><?php the_field('contacts_phone', 20) ?></a></p>
							<p><a href='mailto:<?php the_field('contacts_email', 20) ?>'><?php the_field('contacts_email', 20) ?></a></p>
						</div> 
						<div class="footer-adress">
							
							<?php if (get_locale() == 'en_GB') : ?>
							
								<p><img alt="adress" title=""  src="<?php echo get_stylesheet_directory_uri();?>/img/adress.png" /> <?php the_field('contacts_adress', 176) ?></p>
							
								<?php else : ?> 
							
								<p><img alt="adress" title=""  src="<?php echo get_stylesheet_directory_uri();?>/img/adress.png" /> <?php the_field('contacts_adress', 20) ?></p>
							
							<?php endif;  ?>
							
						
						</div>
						
					</div>
							
				</div>
			
                <p class="copyr">&copy; TrueDubbing Studio <?php the_time('Y') ?>.</p>
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-content");
                } ?>
            </div><!-- /container -->
			 </div>
        </footer>
		


<?php if (is_front_page())  : ?>
<script>

	jQuery(document).ready(function(){
    jQuery(".card-name").click(function(){
        jQuery( this ).next(".toggle-p").toggleClass("showcase");
		jQuery( this ).toggleClass( "highlight" );
    });
});

jQuery(document).ready(function(){
    jQuery(".services h3").click(function(){
        jQuery( this ).next("p").toggleClass("showp");
		jQuery( this ).toggleClass( "activeh3" );
    });
});

</script>
<script  type="text/javascript" src="/wp-content/themes/truedubbing/js/owl.carousel.min.js"></script>

<script>

  
jQuery('.owl-carousel').owlCarousel({
	navContainer: '#customNav',
    loop:true,
    margin:10,
	dots: false,
    nav:true,
	navText: [" "," "],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})


</script>

<?php endif; ?>	


	
	

<?php if (is_page(array(9,195)))  : ?>
		
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.tabpager.min.js"></script>
	  
	<script>
jQuery(document).ready(function() {
jQuery("#wrapper").tabpager({

//  maximum visible items
items: 5,


// transition speed
time: 300,

// text for previous button
previous: ' ',

// text for next button
next: ' ',


// top or bottom
position: 'bottom',

// scrollable
scroll: true
});
});
</script>
<?php endif; ?>


<?php if (is_page(20))  : ?>
<script>
jQuery(window).resize(function(){
var ref=jQuery('iframe:first').attr('src');
jQuery('iframe:first').attr('src',ref);
});
</script>
<?php endif; ?>	
		
		



<?php if (is_page(array(9,95)))  : ?>
<script>
jQuery(document).ready(function(){
    jQuery(".name").click(function(){
        jQuery( this ).nextAll("div.descr").toggleClass("showp");
		jQuery( this ).toggleClass( "activeh3" );
    });
});

</script>
<?php endif; ?>	


<?php if (is_page(13))  : ?>
<script> 
jQuery(document).ready(function(){
    jQuery(".portfolio-list h3").click(function(){
        jQuery( this ).next("ul").toggleClass("showp");
		jQuery( this ).toggleClass( "activeh3" );
    });
});

if (window.location.href.indexOf("#for-") > -1) {
     jQuery( ".portfolio-list h3" ).next("ul").toggleClass("showp");
}



</script>
<?php endif; ?>	

<script>
	jQuery( document ).ready(function() {
		jQuery( ".nav-collapse" ).append( "<div class='in-menu-bottom'><p><a href='tel:<?php the_field('contacts_phone', 20) ?>'><?php the_field('contacts_phone', 20) ?></a></p><p><a href='mailto:<?php the_field('contacts_email', 20) ?>'><?php the_field('contacts_email', 20) ?></a></p></div>" ).prepend( "<div class='in-menu-top'><a href='/'><img src='/wp-content/themes/truedubbing/img/logo_small.png'></a></div>" );
        });
		
jQuery('body').bind('click', function(e) {
    if(jQuery(e.target).closest('.nav-collapse').length == 0) {
        // click happened outside of .navbar, so hide
        var opened = jQuery('.nav-collapse').hasClass('collapse in');
        if ( opened === true ) {
            jQuery('.nav-collapse').collapse('hide');
        }
    }
});


</script>




		
        <?php wp_footer(); ?>
    </body>
</html>