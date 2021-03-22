<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); 



?>



<?php while (have_posts()) : the_post(); ?>

<div class="container article-box">
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div><!--/.span12 -->
    </div><!--/.row -->
 
 
     <header class="post-title">
        <h1><?php the_title();?></h1>
    </header>

	 <?php the_content(); ?>
	
		<?php endwhile; // end of the loop. ?>
 
 
 
	 <hr class="related-line"/>
	<h4 class="heading"> Читайте также:</h4>
	<div class="row">
	<?php $related = hu_related_posts(); ?>
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
		
		
			<div class="span4">
				<div class="article-card">
					
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
					<div class="article-title"><?php the_title(); ?></div>
					<?php if ( has_post_thumbnail() ): ?>
						<div class="article-img"><?php hu_the_post_thumbnail('thumb-medium'); ?></div>
					<?php else : ?>
						<div class="article-img"><img src="http://td.ouspen.bget.ru/wp-content/themes/truedubbing/img/post_placeholder.jpg"></div>
					<?php endif; ?>
					</a>
				</div>
				<p class="article-excerpt"><?php the_excerpt(); ?></p>
			</div>
		
	
	<?php endwhile; ?>


<?php wp_reset_postdata(); ?>
	</div>
<?php wp_reset_query(); ?>

</div>


    <?php get_footer(); ?>