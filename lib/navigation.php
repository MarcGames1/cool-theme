<?php
function _themename__register_menus(){
    register_nav_menus( array(
        'main-menu' => esc_html__( 'Main Menu', '_themename_' ),
        'footer-menu' => esc_html__( 'Footer Menu', '_themename_' )
    ) );
}

add_action( 'init', '_themename__register_menus' );

function _themename__dropdown_icon($title, $item, $args, $depth) {
    if($args->theme_location =='main-menu'){
        if(in_array('menu-item-has-children', $item->classes)){
            if($depth == 0){
                $title .= '<i class"fa fa-angle-down" aria-hidden="true"></i> ';
            } else{
                $title .= '<i class"fa fa-angle-right" aria-hidden="true"></i> ';

            }
        }
    }

    return $title;
}

add_filter( 'nav_menu_item_title', '_themename__dropdown_icon', 10, 4 )
?>