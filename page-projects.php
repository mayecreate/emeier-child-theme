<?php
/*
* Template Name: Projects
*
*/
get_header(); ?>

<div class="row">
		    <?php get_template_part('partials/loop','standard'); ?>
		</div>
		<br>
<div class="row" id="main">
			
		
				
			<?php // args
					$args = array(
					'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
					'post_type' => 'projects'
						);
						$args['search_filter_id'] = 6020; ?>

				<?php // query
				$wp_query = new WP_Query( $args );

				// loop
				while( $wp_query->have_posts() )
				{
				$wp_query->the_post();

				?>
				
				<?php get_template_part('partials/loop','projects-alt'); ?>

				<?php } // end the loop ?>
				<!--Reset Query-->
				<?php wp_reset_query();?> 
        
    	</div><!-- / row -->
	</div><!-- / hfeed site container -->
</div><!-- / page -->


<?php get_footer(); ?>