
<div class="why-us-section">
  <div class="container">
       <div class="text-center">
            <h2>WHY CHOOSE US?</h2>
            <hr>
        </div>
    <div class="row">

      <?php if( have_rows('wu_items') ): ?>
      <?php while( have_rows('wu_items') ): the_row(); ?>
      <div class="col-lg-3 col-md-6">
        <div class="why-us-wrap"> <img src="<?php the_sub_field('image');?>">
          <h4>
            <?php the_sub_field('title');?>
          </h4>
          <p>
            <?php the_sub_field('text');?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
        <div class="max-width-container">
        <div class="text-center">
        <hr>
        
        <p><?php the_field('why_us_content');?></p>
        </div> 
        </div>
    </div>
  </div>
</div>

