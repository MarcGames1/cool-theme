<?php
function _themename__post_meta()
{
    printf(
        esc_html__(  "Posted on %s", '_themename_' ),
        '<a href="'. esc_url( get_permalink() )  . '">' .
        '<time datetime="' . esc_attr( get_the_date("c") ) . '"> ' .  esc_html( get_the_date()  ). '</time>' .
         '</a>'
    );
    printf(
        esc_html__( ' By %s', '_themename_' ),
        '<a href="' . esc_url( get_author_posts_url(get_the_author_meta("ID"))) . '"> ' . esc_html( get_the_author() ) . '</a>'
    );
   
}

function _themename__readmore_link(){
    echo '<a class="c-post__readmore" href="' . esc_url( get_permalink() )  . '"  title= "' .  the_title_attribute(['echo'=> false]) .'">';
    printf(
        wp_kses( 
        __( 'Read More <span class="U-screen-reader-text">About %s</span>', '_themename_' ),
            [
                'span' => [
                    'class' => []
                ]
            ]
                ),
        get_the_title( )
    );
    
}
?>