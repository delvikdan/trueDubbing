<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

	<div class="container page-box">
	
			<h1><?php single_cat_title() ?></h1>
		
		<?php $i = 1; echo '<div class="row">'; while ( have_posts() ): the_post(); ?>

			<div class="span4">
				<div class="article-card">
					
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
					<div class="article-title"><?php the_title(); ?></div>
					<?php if ( has_post_thumbnail() ): ?>
						<div class="article-img"><?php hu_the_post_thumbnail('thumb-medium'); ?></div>
					<?php else : ?>
						<div class="article-img"><img src="/wp-content/themes/truedubbing/img/post_placeholder.jpg"></div>
					<?php endif; ?>
					</a>
				</div>
				<p class="article-excerpt"><?php the_excerpt(); ?></p>
			</div>

		 <?php if($i % 3 == 0) { echo '</div><div class="row">'; } $i++; endwhile; echo '</div>'; ?>
		 
		 <nav class="pagination group">
	<?php if ( function_exists('wp_pagenavi') ): ?>
		<?php wp_pagenavi(); ?>
	<?php else: ?>
		<ul class="group">
			<li class="prev left"><?php previous_posts_link(); ?></li>
			<li class="next right"><?php next_posts_link(); ?></li>
		</ul>
	<?php endif; ?>
</nav><!--/.pagination-->
		 
		</div>
    <?php get_footer(); ?>