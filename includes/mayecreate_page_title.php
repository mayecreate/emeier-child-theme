<?php 
/*
==========================================================
PAGE TITLE
==========================================================
*/
function mayecreate_page_title() {
	global $post;
	
	if (! is_front_page()) {
		
		echo '<div class="row">';
		echo  '<div class="col-md-12 page-header"><h1 class="entry-title">';
		the_title();
		echo '</h1></div>';
		echo '</div>';

		$heroBtn = get_field('hero_button');
		$heroBtnID = get_field('hero_button_id');
		if($heroBtn) {
			$heroBtn_url = $heroBtn['url'];
			$heroBtn_title = $heroBtn['title'];
			$heroBtn_target = $heroBtn['target'] ? $heroBtn['target'] : '_self';
			?>
			<div class="row">
				<div class="col-md-12"><div class="buttons-wrapper">
					<a class="btn-mayecreate yellow-border" id="<?php if($heroBtnID){ echo $heroBtnID;} ?>" href="<?php echo esc_url( $heroBtn_url ); ?>" target="<?php echo esc_attr( $heroBtn_target ); ?>"><?php echo esc_html( $heroBtn_title ); ?></a>
                </div></div>
			</div>
            <style>
                .pagehead .page-header .entry-title {
                    bottom: 0;
                }
                .pagehead .page-header {
                    min-height: 300px;
                    height: auto;
                }
                .container .row .buttons-wrapper {
                    text-align: left;
                    justify-content: flex-start;
                }
                .container .row .buttons-wrapper .btn-mayecreate {
                    padding: 15px 24px 12px 24px
                }
            </style>
		<?php    
		}          

	}
}
