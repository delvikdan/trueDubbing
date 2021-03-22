<?php
/**
 * Template Name: Контакты
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


		<?php while (have_posts()) : the_post(); ?>
			<div class="about-us">
			
			
			
				<div class="container box">

					<div class="row contact-padding">
						<div class="span6">
							<h1><?php the_field('contacts_headline') ?></h1>
							<br/>
							<?php the_field('contacts_text') ?>
							<div class="contacts-full">

								<p><strong><a href="tel:<?php the_field('contacts_phone') ?>"><?php the_field('contacts_phone') ?></a></strong></p>
								<p><strong><a href="mailto:<?php the_field('contacts_email') ?>"><?php the_field('contacts_email') ?></a> </strong></p>
								<p><strong><?php the_field('contacts_adress') ?></strong></p>
							</div>

						</div>

						<div class="span6">
							<div class="contacts-feedback">
								<?php echo do_shortcode( '[contact-form-7 id="304" title="Contacs"] ' ); ?>
							</div>
						</div>
					</div>

				</div>



				<div id="on_map">
						
					<?php the_field('contacts_map') ?>

			
				</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				<?php // the_content(); ?>
				
			</div>
		  <?php endwhile; // end of the loop. ?>
		
    <?php get_footer(); ?>