
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
	<h3><?php the_title(); ?></h3>
        <div class="catgory-sl">Category<?php the_category();?></div>
 
	<span class="project-link">View Project <svg xmlns="http://www.w3.org/2000/svg" width="13.083" height="13.083" viewBox="0 0 13.083 13.083">
  <path id="arrow-right-regular" d="M6.369,34.69l-.578.585a.358.358,0,0,0,0,.5l4.53,4.583H.35a.353.353,0,0,0-.35.355v.827a.353.353,0,0,0,.35.355h9.971l-4.53,4.583a.358.358,0,0,0,0,.5l.578.585a.348.348,0,0,0,.5,0l6.116-6.187a.358.358,0,0,0,0-.5L6.865,34.69A.348.348,0,0,0,6.369,34.69Z" transform="translate(0 -34.586)"/>
</svg>
</span>
              
           
</a>