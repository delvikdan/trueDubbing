<?php
/**
 * Template Name: Портфолио
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
<div class="about-us">
				<?php // the_content(); ?>
				
	<div class="container box">
		<h1><?php the_field("bestworks_title") ?></h1>
		<div class="row pf-row">
		<?php while( have_rows('bestworks') ): the_row(); ?>
			<div class="span4">
				<div class="card" style="background: rgba(0, 0, 0, 0) url('<?php the_sub_field('bestworks_bg'); ?>') no-repeat scroll center center; -webkit-background-size: cover; background-size: cover;">
					<div class="overlay"> 
						<a class="bw-name" href="<?php the_sub_field("bestworks_link") ?>">
							<p><?php the_sub_field("bestworks_name") ?></p>
						</a>
					</div>
				</div>		
			</div>
		<?php endwhile; ?>
		</div>
		

		<hr>


		<h2><?php the_field("portfolio_title") ?></h2>

		<?php the_field("portfolio_text") ?>
		<br/>
		<div class="row">
			<div class="span6">
				<div class="card" style="background: rgba(0, 0, 0, 0) url('<?php the_field('portfolio_left_bg'); ?>') no-repeat scroll center center; -webkit-background-size: cover; background-size: cover;">
					<div class="overlay">
						<a class="pf-name" href="#portfolio-movies">
							<p><?php the_field("portfolio_left_hl") ?></p>
						</a>
					</div>		
				</div>		
			</div>
			<div class="span6">
				<div class="card" style="background: rgba(0, 0, 0, 0) url('<?php the_field('portfolio_right_bg'); ?>') no-repeat scroll center center; -webkit-background-size: cover; background-size: cover;">
					<div class="overlay">
						<a class="pf-name" href="#portfolio-games">
							<p><?php the_field("portfolio_right_hl") ?></p>
						</a>
					</div>
				</div>
			</div>
		</div>

		<hr/>

		<h2 id="portfolio-movies"><?php the_field("shows_headline") ?></h2>
		
		<?php while( have_rows('shows_rep') ): the_row(); ?>
		<div class="portfolio-list">
			<h3 id="for-<?php the_sub_field("shows-id") ?>"><?php the_sub_field("shows_company") ?></h3>
				<ul>
				<?php while( have_rows('shows_rep2') ): the_row(); ?>
					
					
					<?php $link = get_sub_field( "shows_link" );
						if( $link ) : ?>
							<li><a href="<?php the_sub_field("shows_link") ?>" target="_blank"><?php the_sub_field("shows_title") ?></a></li>
					<?php else : ?>
						<li><?php the_sub_field("shows_title") ?></li>
					<?php endif; ?>
					
				<?php endwhile; ?>
				</ul>	
		</div>
		<?php endwhile; ?>
		
		<hr/>

		<h2 id="portfolio-games"><?php the_field("games_headline") ?></h2>
		
		<?php while( have_rows('games_rep') ): the_row(); ?>
		<div class="portfolio-list">
			<h3 id="for-<?php the_sub_field("games-id") ?>"><?php the_sub_field("games_company") ?></h3>
				<ul>
				<?php while( have_rows('games_rep2') ): the_row(); ?>
					
					
					<?php $link2 = get_sub_field( "games_link" );
						if( $link2 ) : ?>
						<li><a href="<?php the_sub_field("games_link") ?>" target="_blank"><?php the_sub_field("games_title") ?></a></li>
					<?php else : ?>
						<li><?php the_sub_field("games_title") ?></li>
					<?php endif; ?>
					
				<?php endwhile; ?>
				</ul>	
		</div>
		<?php endwhile; ?>	
		
		



	</div>
				
				
						
				
				
</div>
 <?php endwhile; // end of the loop. ?>
		
    <?php get_footer(); ?>