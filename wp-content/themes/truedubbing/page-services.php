<?php
/**
 * Template Name: Услуги
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


		<?php while (have_posts()) : the_post(); ?>
			<div class="about-us">
				<div class="container box">
				
					<h1><?php the_field('services_headline') ?></h1>
						<div class="row">
						
							<div class="span4">
								<div class="card card-translate" style="background: rgba(0, 0, 0, 0) url('<?php the_field('services_left_bg'); ?>') no-repeat scroll center center; -webkit-background-size: cover; background-size: cover;">
									<div class="removing-overlay">
										<a href="#link-translate" class="serv-name"><p><?php the_field('services_left_title') ?></p></a>
									</div>
								</div>
							</div>
							
					
							
							<div class="span4">
								<div class="card card-tv" style="background: rgba(0, 0, 0, 0) url('<?php the_field('services_center_bg'); ?>') no-repeat scroll center center; -webkit-background-size: cover; background-size: cover;">
									<div class="removing-overlay">
										<a href="#link-redubbing-tv" class="serv-name"><p><?php the_field('services_center_title') ?></p></a>
									</div>
								</div>
							</div>
							
							
							<div class="span4">
								<div class="card card-games" style="background: rgba(0, 0, 0, 0) url('<?php the_field('services_right_bg'); ?>') no-repeat scroll center center; -webkit-background-size: cover; background-size: cover;">
									<div class="removing-overlay">
										<a href="#link-redubbing-games" class="serv-name"><p><?php the_field('services_right_title') ?></p></a>
									</div>
								</div>
							</div>
						</div>
						
					<div class="clear"></div>
					
					<br/>
					<br/>
					
					<h2 id="link-translate"><?php the_field('perevod_title') ?></h2>
					
					<?php the_field('perevod_text') ?>
					
				</div>



				<div class="dark-bg">
					<div class="container">
						<h2 id="link-redubbing-tv"><?php the_field('redubbing_title') ?></h2>
						<?php the_field('redubbing_text') ?>

						<hr/>

					</div>

					<div class="third">	
						<div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false">
							
							<h2><?php the_field('slider_ow_title'); ?></h2>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
							<?php $y = 0; 
									while( have_rows('slider_ow') ): the_row(); ?>

							<!--Блок слайда-->
								<div class="item <?php if ($y==0) { echo 'active';} ?>">
									<div class="work-text">
										<h3><?php the_sub_field('slide_ow_headline'); ?></h3>
										<p><?php the_sub_field('slide_ow_txt'); ?></p>
									</div>
										
									<div class="work-video"><?php the_sub_field('slide_ow_video'); ?></div>
								 </div>
								<!--Конец блока слайда-->


							<?php $y++;	endwhile; ?>  

							</div>
						
								  <!-- Indicators -->
							<div class="indicators-wrapper">
							  <ol class="carousel-indicators">
								<?php 
										$x=0;
										while( have_rows('slider_ow') ): the_row();
										if ($x == 0) {
										echo '<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>';
										} else {
										echo '<li data-target="#myCarousel2" data-slide-to="'.$x.'"></li>';
										}
										$x++;
										endwhile;
										?>

							  </ol>
							</div>

						  <!-- Left and right controls -->
						 <div class="vcontrol">
							  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
							  </a>
							  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
							  </a>
						  </div>
						 
						</div>
					</div>	


					<div class="container">
						<hr/>
						<br/>
						<?php the_field('redubbing_text2') ?>

					</div>

				</div>


				<div class="container box">
					<h2 id="link-redubbing-games"><?php the_field('redubbing2_title') ?></h2>
					<?php the_field('redubbing2_text') ?>

				</div>

			</div>
		<?php endwhile; // end of the loop. ?>
		
    <?php get_footer(); ?>