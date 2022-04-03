<?php 

function _themename__assets(){
    wp_enqueue_style('_themename_-stylesheet', get_template_directory_uri() .
    '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
    wp_enqueue_script( '_themename_-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', ['jquery'], '1.0.0', true);
    
}
add_action('wp_enqueue_scripts', '_themename__assets');

function _themename__admin_assets()
{
    wp_enqueue_style('_themename_-admin-stylesheet', get_template_directory_uri() .
    '/dist/assets/css/admin.css', array(), '1.0.0', 'all');
     wp_enqueue_script('fisrstheme-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true);

}
add_action('admin_enqueue_scripts', '_themename__admin_assets');

function _themename__customize_preview_js(){
    wp_enqueue_script( '_themename__customize_preview_js', get_template_directory_uri(  ) . '/dist/assets/js/customize-preview.js',array('customize-preview', 'jquery'),'1.0.0',true );
}


add_action( 'customize_preview_init', '_themename__customize_preview_js');

?>

