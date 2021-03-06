<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>

<header role='banner' class='u-margin-bottom-40'>
    <div class='c-header'>
        <div class='o-container u-flex u-align-justify u-align-middle'>
            <div class='c-header__logo'>
                <a class='c-header__blogname' href="<?php echo esc_url( home_url('/'), '_themename_'); ?>"><?php esc_html( bloginfo('name') ) ;?></a>
            </div>
            <?php get_search_form( true ) ?>
        </div>
    </div>
    <div class='c-navigation'>
        <div class='o-container'>
            <nav class='header-nav' role='navigation' aria-label='<?php esc_html_e( "Main Navigation", '_themename_' ) ?>'>
                <?php wp_nav_menu( array('theme-location' => 'main-menu') ) ?>
            </nav>
        </div>
</div>
</header>

<div id='content'>