<?php
/**
 * Template Name: Отзывы
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<div class="about-us">
		
					
					
		<div class="container box">
		<h1><?php the_field('testim_title'); ?></h1>
		<br/>

			<div id="wrapper"> 
				<div class="contents">


				<!--Блок отзыва-->
				<?php while( have_rows('testimonials') ): the_row(); ?>
					<div class="revitem">				
						<div class="row">
							<div class="span revfoto" style="background: rgba(0, 0, 0, 0) url('<?php the_sub_field('testim_foto'); ?>') no-repeat scroll center center;"></div>
							<div class="span revhead"><h3><?php the_sub_field('testim_name'); ?></h3> <?php the_sub_field('testim_post'); ?></div>
						</div>
						<br/>
						<?php the_sub_field('testim_txt'); ?>			
							
					</div>
				<?php endwhile; ?>
				<!--Конец блока отзыва-->


				</div>
			</div>
		</div>	
		<?php // the_content(); ?>
	</div>
<?php endwhile; // end of the loop. ?>
		
    <?php get_footer(); ?>