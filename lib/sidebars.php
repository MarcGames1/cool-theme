<?php 
function _themename__sidebar_widgets(){
    register_sidebar( array(
        'id' =>'primary-sidebar',
        'name' => esc_html__( 'Primary Sidebar', '_themename_' ),
        'description' => esc_html__( 'This sidebar appears in the blog posts page.','_themename_'),
        'before_widget' => '<section id="%1$s" class="c-sidebar-widget u-margin-bottom-20 %2$s">',
        'after_widget' => '</section>',
        'before_title'  => '<span class="widget-title">',
        'after_title'   => '</span>',

    ) );
}

$footer_layout ='3,3,3,3';
$columns = explode(',', $footer_layout);
$footer_bg = 'dark';
$widget_theme = '';
if($footer_bg == 'light'){
    $widget_theme = 'c-footer-widget--dark';
} else{
    $widget_theme = 'c-footer-widget--light';
}

foreach ($columns as $i =>$column ){
    register_sidebar(array(
        'id' =>'footer-sidebar-'. ($i +1),
        'name' => sprintf(esc_html__('Footer Widgets Column %s', '_themename_'), $i+1),
        'description' => esc_html__('Footer Widgets', '_themename_'),
        'before_widget' => '<section id="%1$s"' . $widget_theme . '%2$s">',
        'after_widget' => '</section>',
        'before_title'  => '<span class="widget-title">',
        'after_title'   => '</span>',

    ));

}

add_action( 'widgets_init', '_themename__sidebar_widgets');