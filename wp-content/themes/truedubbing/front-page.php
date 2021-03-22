<?php
/**
 * Template Name: Главная
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 ?>



		<?php while (have_posts()) : the_post(); ?>
		
		<?php // if( have_rows('slider_ow') ): ?>		
		<?php //  endif; ?>
 

 

				
				
				
				
<!-- Section 1 -->
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
				 
	

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  
				<?php 
					$z = 0;
					while( have_rows('slider_1') ): the_row(); ?>

				<!--Блок слайда-->
					<div class="item slder-height <?php if ($z==0) { echo 'active';} ?>" style="background: rgba(0, 0, 0, 0) url('<?php the_sub_field('slide_bg'); ?>') no-repeat scroll center top; -webkit-background-size: cover; background-size: cover;">

							 
							<div class="carousel-caption-frame">
								<div class="carousel-caption">
								<h3><?php the_sub_field('slide_headline'); ?></h3>
								<p><?php the_sub_field('slide_txt'); ?></p>
								</div>
							</div>
							 
						</div>
					<!--Конец блока слайда-->



					<?php 
						$z++;
						endwhile; ?>  
			  </div>

				  <!-- Indicators -->
				<div class="indicators-wrapper">
				  <ol class="carousel-indicators">
				  
				  
					<?php 
						$i=0;
						while( have_rows('slider_1') ): the_row();
						if ($i == 0) {
						echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
						} else {
						echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
						}
						$i++;
						endwhile; ?>

				  </ol>
				</div>
			  
			  
			  <!-- Left and right controls -->
				<div class="ccontrol">
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					</a>
			   </div>
		</div>
		
<!-- /Section 1 -->
		
		
		
		
 <!-- Section 2 -->
	
	<div class="grey-bg">	
		<div class="container">
		
			<div class="row sec">
				<div class="span4">
					<div class="card card-studio" style="background: rgba(0, 0, 0, 0) url('<?php the_field('studio-bg'); ?>') no-repeat scroll center 0"></div>
					<div class="card-name"><?php the_field('studio-header'); ?></div>

					<div class="toggle-p"><p><?php the_field('studio-txt'); ?> <img alt="..." title="" src="/wp-content/themes/truedubbing/img/dots.png"></p></div>
				</div>
				<div class="span4">
					<div class="card card-stuff" style="background: rgba(0, 0, 0, 0) url('<?php the_field('stuff-bg'); ?>') no-repeat scroll center 0"></div>
					<div class="card-name"><?php the_field('stuff-header'); ?></div>

					<div class="toggle-p"><p><?php the_field('stuff-txt'); ?> <img alt="..." title="" src="/wp-content/themes/truedubbing/img/dots.png"></p></div>
				</div>
				<div class="span4">
					<div class="card card-team" style="background: rgba(0, 0, 0, 0) url('<?php the_field('team-bg'); ?>') no-repeat scroll center 0"></div>
					<div class="card-name"><?php the_field('team-header'); ?></div>
					<div class="toggle-p"><p><?php the_field('team-txt'); ?> <img alt="..." title="" src="/wp-content/themes/truedubbing/img/dots.png"></p></div>
					
				</div>
			</div>
		
		</div>
	</div>


	<div class="clear">	</div>
		
<!-- /Section 2 -->	
		
		
		
<!-- Section 3 -->		
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
<!-- /Section 3 -->		
		
		
		
		
		
		
<!-- Section 4 -->		

<div class="grey-bg">
	<div class="container fourth">
			<div class="about">
				<h2><?php the_field('about_title'); ?></h2>
				
					<?php the_field('about_txt'); ?>
				
			
			</div>
			
			<div class="services">
				<h2><?php the_field('services_title'); ?></h2>
					<div class="lorem">
						<?php if( get_field('services_subtitle1') ): ?>
						<h3><img alt="mike" title=""  src="/wp-content/themes/truedubbing/img/mike.png" /><?php the_field('services_subtitle1'); ?></h3>
						<?php endif; ?>
						<?php the_field('services_txt1'); ?>
					
					
						<?php if( get_field('services_subtitle2') ): ?>
						<h3><img alt="mike" title=""  src="/wp-content/themes/truedubbing/img/mike.png" /><?php the_field('services_subtitle2'); ?></h3>
						<?php endif; ?>
						<?php the_field('services_txt2'); ?>
						
					</div>	
					<div class="ipsum">
						<?php if( get_field('services_subtitle3') ): ?>
						<h3><img alt="mike" title=""  src="/wp-content/themes/truedubbing/img/mike.png" /><?php the_field('services_subtitle3'); ?></h3>
						<?php endif; ?>
						<?php the_field('services_txt3'); ?>
						
					</div>						
			</div>			
	</div>
</div>


<!-- /Section 4 -->		
	


<!-- Section 5 -->		
<?php 

$images = get_field('clients_logos');
if( $images ): ?>
<div class="kiwi">
	<div class="container">
		<h2><?php the_field('clients_headline'); ?></h2>	
		<div class="owl-carousel">
			<?php foreach( $images as $image ): ?>
			<div class="logo-item">
				<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<?php endforeach; ?>
		</div>
	</div>	
	<div id="customNav" class="owl-nav"></div>
</div>		
<?php endif; ?>

<!-- /Section 5 -->		




	
		
		
		
		 <?php // the_content(); ?>
		 <?php include 'testimonials.php' ?>

		  <?php endwhile; // end of the loop. ?>
		
    <?php get_footer(); ?>