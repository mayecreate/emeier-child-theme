</div>
</div>
</div>
</div>
		

<div class="project-slider">
  <div class="container">
      <div class="row">

<?php $title = get_field("title"); ?>
<?php $content_section = get_field("content_section"); ?>
<?php $project_section_category = get_field("project_section_category"); ?>

<?php if ($project_section_category) { ?>
	<?php 	
/*
*
*	This is a featured slider.  It displays featured images and titles of posts from a specified category, 
*	custom post type, or whatever else you can query for using the new WP_Query object in WordPress.
*
*/

$sliderArgs =  array(
    'post_type' => 'projects',
		'posts_per_page' => -1, 
		'tax_query' => array(
		'relation' => 'OR',
					array (
					'taxonomy'  => 'projectcategory',
					'field'     => 'term_id',
					'terms'     => $project_section_category,
					)
					)
				);

                $sliderQuery = new WP_Query($sliderArgs); ?>
<?php } else { ?>	
	<?php 	
/*
*
*	This is a featured slider.  It displays featured images and titles of posts from a specified category, 
*	custom post type, or whatever else you can query for using the new WP_Query object in WordPress.
*
*/

$sliderArgs =  array(
    'post_type' => 'projects',
		'posts_per_page' => -1, 
	);

$sliderQuery = new WP_Query($sliderArgs); ?>
<?php } ?>	
	


<?php // query
				
        if( $sliderQuery->have_posts() )
        { ?>
				
               
        <div class="col-lg-3"> 
            <?php if ($title) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } else { ?>
                <h2>FEATURED<br>PROJECTS</h2>
            <?php } ?>
                <hr class="left-it">
                    <?php the_field('content_section');?>
                        <div class="text-left">
                            <a href="/projects" class="btn-mayecreate left">VIEW OUR WORK</a>
                        </div>
        </div>
        <div class="col-lg-9 ">
            <div class="row lightSlider_outer_wrapper">
                <ul id="lightSlider">
                    <?php	while( $sliderQuery->have_posts() )
                    {
                        $sliderQuery->the_post();

                    ?>
                            
                    <li>
                        <a href="<?php the_permalink(); ?>" class="post_link_wrapper project-box">
                            <span class="img_wrapper">
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <?php $image_id = get_post_thumbnail_id();
                                    $image_url = wp_get_attachment_image_src($image_id,'projects', true); ?>
                                    <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                <?php } else { ?>
                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/11/mike-enerio-pe7h-dCPT4k-unsplash.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                <?php } ?> 
                                <span class="hidden-readmore">READ MORE</span> 
                            </span>
                            <span class="project-content">
                            <h2 class="blog_title h3"><?php the_title(); ?></h2>
                            <?php $terms = get_the_terms( $event->ID , 'projectcategory' ); ?>
                            <span class="cats"><?php foreach ( $terms as $term ) { ?>
                            <?php if (($term->slug == 'featured') || ($term->slug == 'top-featured')) { ?><?php } else { ?><span><span class="category"><?php echo $term->name; ?><span>,</span></span></span><?php } ?><?php } //END FOR EACH ?></span><br>
                            <span class="view_btn">View Project <svg xmlns="http://www.w3.org/2000/svg" width="13.083" height="13.083" viewBox="0 0 13.083 13.083">
                            <path id="arrow-right-regular" d="M6.369,34.69l-.578.585a.358.358,0,0,0,0,.5l4.53,4.583H.35a.353.353,0,0,0-.35.355v.827a.353.353,0,0,0,.35.355h9.971l-4.53,4.583a.358.358,0,0,0,0,.5l.578.585a.348.348,0,0,0,.5,0l6.116-6.187a.358.358,0,0,0,0-.5L6.865,34.69A.348.348,0,0,0,6.369,34.69Z" transform="translate(0 -34.586)"/>
                            </svg></span>
                            </span>
                        </a>
                    </li>

                    <?php } // end the loop ?>
                    <!--Reset Query-->
                    <?php wp_reset_query();?> 
                </ul>

                <button type="button" id="goToPrevSlide">Prev</button>
                <button type="button" id="goToNextSlide">Next</button>
            </div>
            </div>
            <?php } else { // end if ?>
                <div class="col-lg-12">
                <h2 class="center">View our Work</h2>
                    <a href="/projects" class="btn-mayecreate center">Projects</a>
            </div>
			<?php } ?>

        </div>
    </div>
</div>





<div><div class="container"><div class="row"><div class="col-md-12">
