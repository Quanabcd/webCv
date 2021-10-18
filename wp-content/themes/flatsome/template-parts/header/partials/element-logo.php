<!-- Header logo -->
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><?php echo get_bloginfo( 'name' ) && get_bloginfo( 'description' ) ? ' - ' : ''; ?><?php bloginfo( 'description' ); ?>" rel="home">
    <?php if(flatsome_option('site_logo')){
      $site_title = esc_attr( get_bloginfo( 'name', 'display' ) );
      if(get_theme_mod('site_logo_sticky')) echo '<img src="'.get_theme_mod('site_logo_sticky').'" class="img-fluid" alt="'.$site_title.'"/>';
      echo '<img src="'.flatsome_option('site_logo').'" class="img-fluid" alt="'.$site_title.'"/>';
      if(!get_theme_mod('site_logo_dark')) echo '<img src="'.flatsome_option('site_logo').'" class="img-fluid" alt="'.$site_title.'"/>';
      if(get_theme_mod('site_logo_dark')) echo '<img src="'.get_theme_mod('site_logo_dark').'" class="img-fluid" alt="'.$site_title.'"/>';
    } else {
    bloginfo( 'name' );
  	}
  ?>
</a>
<?php
if(get_theme_mod('site_logo_slogan')){
	echo '<p class="logo-tagline">'.get_bloginfo('description').'</p>';
}
?>
