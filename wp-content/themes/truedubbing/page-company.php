<?php
/**
 * Template Name: О компании
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<div class="about-us">
		
					
					
		<div class="container box">
			<h1><?php the_field('aboutus_title') ?></h1>
				<?php the_field('aboutus_text') ?>
				<br/>
			</div>

			<div class="dark-bg">
			<div class="container">
			<h2><?php the_field('twothings_title') ?></h2>
				<?php the_field('twothings_text') ?>
			</div>
			</div>

			<div class="container box">
			<br/>
			<h2><?php the_field('aboutteam_title') ?></h2>
			<?php the_field('aboutteam_text') ?>
		
			<?php while( have_rows('translators') ): the_row(); ?>
			<div class="team-box">
			<div class="name"><?php the_sub_field('translators_name') ?></div>
			<div class="ava"><div class="foto-wrapper" style="background: rgba(0, 0, 0, 0) url('<?php the_sub_field('translators_foto'); ?>') no-repeat scroll center center;  -webkit-background-size: cover; background-size: cover;"></div></div>
			<div class="descr">
				<?php the_sub_field('translators_text'); ?>
			</div>
			<div class="clear"></div>
			</div>
			<?php endwhile; ?>
			

			<div class="topic"><?php the_field('actor_title') ?></div>
				<?php while( have_rows('actors') ): the_row(); ?>

					<div class="team-box">
					<div class="name"><?php the_sub_field('actors_name') ?></div>
					<div class="ava"><div class="foto-wrapper" style="background: rgba(0, 0, 0, 0) url('<?php the_sub_field('actors_foto'); ?>') no-repeat scroll center center; -webkit-background-size: cover; background-size: cover;"></div></div>
					<div class="descr">
					<p><?php the_sub_field('actors_text') ?></p>
					</div>
					<div class="clear"></div>
					</div>
				<?php endwhile; ?>
				

			<hr>

			<?php the_field('actors_after') ?>
			<br/>
			</div>


			<div class="dark-bg bottom-line">
			<div class="container">
			<h2><?php the_field('secret_title') ?></h2>
				<?php the_field('secret_text') ?>
				

			</div>
			</div>


			<?php // the_content(); ?>
	
	

	</div>
<?php endwhile; // end of the loop. ?>
		
    <?php get_footer(); ?>