<?php 
function  customTheme_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header'); 
    
    
    }
    add_action('after_setup_theme', 'customTheme_theme_support');

function mytheme_register_styles(){
    wp_enqueue_style('mytheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
    wp_enqueue_style('mytheme-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css", array(), '1.7.2', 'all');
    
}

add_action('wp_enqueue_scripts', 'mytheme_register_styles');

function mytheme_register_scripts(){
    wp_enqueue_script('mytheme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous', array(), '5.1.3', true);
    wp_enqueue_script('mytheme-jquery',get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
    
}

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'leadspace' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
            )
        ));
    }
}


add_action('wp_enqueue_scripts', 'mytheme_register_scripts');
register_nav_menus(
     array('primary-menu'=>'Top Menu')
)


?>