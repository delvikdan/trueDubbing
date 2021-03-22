<?php
/**
 * Template Name: Клиенты
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


		<?php while (have_posts()) : the_post(); ?>
			<div class="about-us">

				<div class="container box">
				
					<h1><?php the_field("clientspage_headline") ?></h1>
						
						<?php the_field("clientspage_text") ?>

					<br>
				</div>

			<div class="dark-bg">
				<div class="container">
					<div id="wrapper"> 
						<div class="contents">
							<?php while( have_rows('clientspage_rep') ): the_row(); ?>
								<div class="team-box">
									<div class="name"><?php the_sub_field("clients_name") ?></div>
									
										<?php $worklink = get_sub_field( "clients_works" );
										if( $worklink ) : ?>
										<div class="works-link">
											<a href="/portfolio/#for-<?php the_sub_field("clients_works") ?>">Работы для <?php the_sub_field("clients_name") ?></a>
										</div>
										<?php endif; ?>
										
										<div class="ava"><img src="<?php the_sub_field("clients_logo") ?>"></div>
										
										<div class="descr">
											<?php the_sub_field("clients_decr") ?>
										</div>
										<div class="clear"></div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>

					
				
				<?php include 'testimonials.php' ?>
				
				<?php // the_content(); ?>
			</div>
		  <?php endwhile; // end of the loop. ?>
		
    <?php get_footer(); ?>