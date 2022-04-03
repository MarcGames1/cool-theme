<?php 
function _themename__customize_register($wp_customize){

     $wp_customize->get_setting('blogname')->transport = 'postMessage';

    $wp_customize->add_section('_themename__footer_options', array(
        'title' => esc_html__( 'Footer Options', '_themename_' ),
        'description' =>esc_html__( 'You can change footer Options from here', '_themename_' )
    ));

    $wp_customize->selective_refresh->add_partial('blogname',array(
        'selector' =>'.c-header__blogname',
        'container-inclusive' => false,
        'render_callback' => function(){
            bloginfo( 'name' );
        }
    ));

    $wp_customize->selective_refresh->add_partial('_themename__footer_partial', array(
        'settings' => array('_themename__site_info','_themename__footer_bg'),
        'selector' =>'#footer',
        'container-inclusive' => false,
        'render_callback' => function () {
            get_template_part('template-parts/footer/widgets');
            get_template_part('template-parts/footer/info');
        }
    ));


    $wp_customize->add_setting("_themename__site_info", array(
        'default' =>'',
        'sanitize_callback'=>'_themename_sanitize_site_info',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('_themename__site_info',array(
        'type' =>'text',
        'label'=> esc_html__( 'Site Info', '_themename_' ),
        'section' =>'_themename__footer_options'
    ));

    $wp_customize->add_setting('_themename__footer_bg',array(
        'default' => 'dark',
        'transport'=> 'postMessage',
        'sanitize_callback' =>'_themename__sanitize_footer_bg'
    ));

    $wp_customize->add_control('_themename__footer_bg', array(
        'type' => 'select',
        'label' => esc_html__( 'Footer Background', '_themename_' ),
        'choices' => array(
            'light' => esc_html__( 'Light', '_themename_' ),
            'dark' => esc_html__( 'Dark', '_themename_' ),
        ),
        'section' =>'_themename__footer_options'
    ));
}


add_action('customize_register' ,'_themename__customize_register'  );


function _themename__sanitize_footer_bg($input){
    $valid = array('light', 'dark');
    if(in_array($input, $valid, true)){
        return $input;
    }
    return 'dark';
}



function _themename_sanitize_site_info($input){
    $allowed = array(
        'a' => array(
            'href' =>array(),
            'title' =>array(),
        )
        );
        return wp_kses($input, $allowed);
    }
      



?>