<?php
function _themename__theme_support(){
    add_theme_support( 'title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery, caption'));
    add_theme_support( 'customize-selective-refresh-widgets');


}


add_action('after_setup_theme','_themename__theme_support' )
?>