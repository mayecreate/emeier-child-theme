<div class="col-sm-12 col-md-6 col-lg-4">
	<a href="<?php the_permalink(); ?>" class="post_link_wrapper project-box projects-page">
		<span class="img_wrapper">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php $image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id,'projects-alt', true); ?>
				<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
			<?php } else { ?>
				<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/05/deafult-projects.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
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
</div>