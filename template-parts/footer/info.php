<?php 
$footer_bg = _themename__sanitize_footer_bg(get_theme_mod( '_themename__footer_bg', 'dark' ));
$widget_theme = '';
$site_info = get_theme_mod('_themename__site_info', '')
 ?>

<?php if($site_info){ ?>
<div class='c-site-info c-site-info--<?php echo $footer_bg;?>'>
<div class='o-container'>
  <div class="o-row">
      <div class="o-row__column o-row__column--span-12 c-site__info__text">
          <?php 
              $allowed = array(
            'a' => array(
            'href' =>array(),
            'title' =>array(),
        )
        );

          echo wp_kses( $site_info, $allowed ); ?>
      </div>
    </div>
            </div>
            </div>

<?php }?>