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

add_action( 'widgets_init', '_themename__sidebar_widgets');