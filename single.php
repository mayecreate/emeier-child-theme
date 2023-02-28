<?php
/**
 * The single file.
 *
 * This page template is setup so that you can modify the number of columns and there widths.  There are 12 available columns.
 * For example if you want to have them setup 2/3 you will set it up with two divs one
 * with the class of span8 and one with a class of span4
*/
get_header(); ?>
 
 <?php $project_client = get_field("project_client"); ?>
 <?php $project_client_link = get_field("project_client_link"); ?>
 <?php $project_partner = get_field("project_partner"); ?>
 <?php $project_partner_link = get_field("project_partner_link"); ?>
 <?php $project_partner_2 = get_field("project_partner_2"); ?>
 <?php $project_partner_link_2 = get_field("project_partner_link_2"); ?>
 <?php $gallery = get_field("gallery"); ?>
 <?php $video = get_field("video"); ?>	

        <div class="row">
            <div class="col-md-12">
    
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
				
                <h2><?php the_title(); ?></h2>
                <div class="minidiv"></div>
                <div class="client-info">
                    <div class="row">
						<?php if ($project_client) { ?>
                            <div class="col-md-6">
							    <p class="client">Project Client: <a href="<?php echo $project_client_link; ?>"><?php echo $project_client; ?></a></p>
                            </div>
						<?php } ?>				
				  
						<?php if ($project_partner) { ?>
							<div class="col-md-6">
							    <p class="client">Project Partner<?php if ($project_partner_2) { ?>s<?php } ?>: <a href="<?php echo $project_partner_link; ?>"><?php echo $project_partner; ?></a> <?php if ($project_partner_2) { ?> , <a href="<?php echo $project_partner_link_2; ?>"><?php echo $project_partner_2; ?></a><?php } ?></p>
                            </div>
						<?php } ?>
                        </div>
			        </div>

                    <?php the_content(); ?>
                
                <?php endwhile; ?>
                                            
                <?php endif; ?>
            
            </div><!-- 8 -->

        </div>
        </div>
    </div>
<?php get_footer(); ?>