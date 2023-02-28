

<?php $container_options = get_field("container_options", $post->ID); ?> 
<?php $additional_classes = get_field("additional_classes", $post->ID);  ?>


<?php if( $container_options && in_array('full-width', $container_options) ) { ?>
</div>
</div>
</div>
</div>

<?php } ?>





<div class="showcase-section <?php if ($additional_classes) { ?><?php echo $additional_classes;?><?php } ?>">

    <div class="container">
    <?php /* ?> <?php if (is_page(11)) { ?>
        <?php $additional_home_callout = get_field("additional_home_callout");  ?>
    <?php if ($additional_home_callout) { ?>
            <div class="top_content_callout">
                <?php echo $additional_home_callout; ?>
            </div>
    <?php } ?>
    <?php } ?><?php */ ?>
        <?php if( have_rows('sevice_callouts') ): ?>
        <div class="row">
            <?php while( have_rows('sevice_callouts') ): the_row(); ?>
                <?php $link = get_sub_field('link'); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="showcase" style="background-image: url('<?php the_sub_field('image'); ?>')">
                        <h4><?php if ($link) { ?><a href="<?php the_sub_field('link'); ?>"><?php } ?>
                            <?php the_sub_field('title'); ?>
                        <?php if ($link) { ?></a><?php } ?></h4>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>   
        <?php endif; ?>
    </div>
</div>

<div class="pagebreak_fix"><div class="container"><div class="row"><div class="col-md-12">

