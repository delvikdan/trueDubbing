<?php 

$number = 4 /* Количество отзывов в слайдере (начиная с нуля) */;

?> 

<?php if (get_locale() == 'en_GB') :     /* English */  ?> 
 
			<div class="sixth grey-bg">
			
			<div id="myCarousel3" class="carousel slide" data-ride="carousel">
				<br/>
				<h2>Co-workers' Opinions:</h2>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
		  
					<?php 
						$n = 0;
						while( have_rows('testimonials', 197) ): the_row(); ?>
						<div class="item <?php if ($n==0) { echo 'active';} ?>">				
							<div class="row">
								<div class="span revfoto" style="background: rgba(0, 0, 0, 0) url('<?php the_sub_field('testim_foto', 197); ?>') no-repeat scroll center center;"></div>
								<div class="span revhead"><h3><?php the_sub_field('testim_name', 197); ?></h3> <?php the_sub_field('testim_post', 197); ?></div>
							</div>
							<br/>
							<?php the_sub_field('testim_txt', 197); ?>			
								
						</div>
					<?php 
					
					if($n>=$number) break; /*Количество отзывов на главной*/
					$n++;
							endwhile; ?>
					<!--Конец блока отзыва-->		
		  

				</div>
		  
    	 
				<div class="all-testim">
					<a href="/en/testimonials/">Other opinions</a>
				</div>
		  
				<!-- Left and right controls -->
				<div class="vcontrol">
				  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev"> </a>
					 <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next"> </a>
				</div>
		  

			</div>
			
		 </div>
		 
		 
<?php else :  /* Russian */  ?>


		<div class="sixth grey-bg">
			
			<div id="myCarousel3" class="carousel slide" data-ride="carousel">
				<br/>
				<h2>Отзывы наших клиентов:</h2>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
		  
					<?php 
						$n = 0;
						while( have_rows('testimonials', 195) ): the_row(); ?>
						<div class="item <?php if ($n==0) { echo 'active';} ?>">				
							<div class="row">
								<div class="span revfoto" style="background: rgba(0, 0, 0, 0) url('<?php the_sub_field('testim_foto', 195); ?>') no-repeat scroll center center;"></div>
								<div class="span revhead"><h3><?php the_sub_field('testim_name', 195); ?></h3> <?php the_sub_field('testim_post', 195); ?></div>
							</div>
							<br/>
							<?php the_sub_field('testim_txt', 195); ?>			
								
						</div>
					<?php 
					
					if($n>=$number) break; /*Количество отзывов на главной*/
					$n++;
							endwhile; ?>
					<!--Конец блока отзыва-->		
		  

				</div>
		  
    	 
				<div class="all-testim">
					<a href="/otzyvy/">Все отзывы</a>
				</div>
		  
				<!-- Left and right controls -->
				<div class="vcontrol">
				  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev"> </a>
					 <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next"> </a>
				</div>
		  

			</div>
			
		 </div>
		 
<?php endif;  ?>
 



