<?php 

/**
 * Creates the functionality for custom blocks using Advanced Custom Fields Pro
 *
 */  

// THIS FUNCTION ALLOWS YOU TO SET THE COLOR SWATCHES IN THE COLOR PICKER ON THE PAGEBREAK BLOCK
function my_acf_collor_pallete_script() {
    ?>
    <script type="text/javascript">
    (function($){
        
        acf.add_filter('color_picker_args', function( args, $field ){

            // ADD THE HEX CODES FOR YOUR THEMES COLORS HERE
            args.palettes = ['#fff', '#ccc', '#707070', '#000', '#f542e6', '#1E2773', '#F5B813']
            
            console.log(args);
            // return
            return args;
        });
        
    })(jQuery);
    </script>
    <?php
}

add_action('acf/input/admin_footer', 'my_acf_collor_pallete_script');


function register_acf_block_types() {

    // register a simple pagebreak block.
    acf_register_block_type(
		array(
			'name'              => 'heroslide',
			'title'             => __('Hero Slider'),
			'description'       => __('Add a simple slider to your page.'),
			'render_template'   => 'blocks/header-slider.php',
			'category'          => 'formatting',
			'icon'              => 'editor-embed-photo',
			'keywords'          => array( 'hero', 'slider' ),
		)
	);
    
        // register a simple pagebreak block.
    acf_register_block_type(
		array(
			'name'              => 'CTA',
			'title'             => __('Custom CTA'),
			'description'       => __('Add a simple CTA'),
			'render_template'   => 'blocks/cta-block.php',
			'category'          => 'formatting',
			'icon'              => 'editor-embed-photo',
			'keywords'          => array( 'CTA' ),
		)
	);
    
    // project slider
        acf_register_block_type(
		array(
			'name'              => 'project-slider',
			'title'             => __('Project Slider'),
			'description'       => __('Add a simple peoject slider'),
			'render_template'   => 'blocks/project-slider.php',
			'category'          => 'formatting',
			'icon'              => 'editor-embed-photo',
			'keywords'          => array( 'project', 'slider' ),
		)
	);
    // why us section
        acf_register_block_type(
		array(
			'name'              => 'why-us',
			'title'             => __('Why Us'),
			'description'       => __('Add a simple service showcase.'),
			'render_template'   => 'blocks/why-us.php',
			'category'          => 'formatting',
			'icon'              => 'editor-embed-photo',
			'keywords'          => array( 'why', 'us'),
		)
	);
	
    // register a partial pagebreak block.
    acf_register_block_type(
		array(
			'name'              => 'pagebreak-start',
			'title'             => __('Page Break'),
			'description'       => __('Add a opening pagebreak block to your page. PLEASE NOTE: If this pagebreak is the last one on the page you DO NOT need the End Break block after. If this is not the last element on the page the you NEED to put the End Break block after.'),
			'render_template'   => 'blocks/pagebreak-complex.php',
			'category'          => 'formatting',
			'icon'              => 'editor-insertmore',
			'keywords'          => array( 'page', 'break', 'pagebreak' ),
		)
	);
	
    // register a endbreak block.
    acf_register_block_type(
		array(
			'name'              => 'endbreak',
			'title'             => __('End Break'),
			'description'       => __('Close a pagebreak block on your page.'),
			'render_template'   => 'blocks/endbreak.php',
			'category'          => 'formatting',
			'icon'              => 'editor-insertmore',
			'keywords'          => array( 'page', 'break', 'pagebreak' ),
		)
	);

    // register a button block.
    acf_register_block_type(
		array(
			'name'              => 'mc-button',
			'title'             => __('MC Button'),
			'description'       => __('Add a button to your page.'),
			'render_template'   => 'blocks/mc_button.php',
			'category'          => 'formatting',
			'icon'              => 'admin-links',
			'keywords'          => array( 'button' ),
		)
	);

    // register a featured posts block.
    acf_register_block_type(
		array(
			'name'              => 'featured-posts',
			'title'             => __('Featured Posts'),
			'description'       => __('Add a featured posts block to your page.'),
			'render_template'   => 'blocks/featured-posts.php',
			'category'          => 'formatting',
			'icon'              => 'admin-post',
			'keywords'          => array( 'featured', 'posts' ),
		)
	);
}

// Check if function exists and hook into setup.
add_action('acf/init', 'register_acf_block_types');