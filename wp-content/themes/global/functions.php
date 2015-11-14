<?php 

function theme_styles() {

  	wp_enqueue_style( 'screen_css', get_template_directory_uri() . '/css/screen.css' );
  	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'ionicons_css', get_template_directory_uri() . '/css/ionicons.min.css' );
    // wp_enqueue_style( 'tooltipster_css', get_template_directory_uri() . '/css/tooltipster.css' );
    wp_enqueue_style( 'gallery_css', get_template_directory_uri() . '/css/gallery.min.css' );
    wp_enqueue_style( 'awesome_css', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'fullpage_css', get_template_directory_uri() . '/css/jquery.fullPage.css' );
    wp_enqueue_style( 'fullpage_css', get_template_directory_uri() . '/css/gallery-nou.css' );
    
}
add_action('wp_enqueue_scripts',  'theme_styles');

function theme_js() {

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array('jquery'), '', true );

    wp_enqueue_script( 'fitvids_js', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '', true );

    wp_enqueue_script( 'index_js', get_template_directory_uri() . '/js/index.js', array('jquery'), '', true );
    
   wp_enqueue_script( 'classie_js', get_template_directory_uri() . '/js/classie.js', array('jquery'), '', true );

   wp_enqueue_script( 'off-canvas_js', get_template_directory_uri() . '/js/off-canvas.js', array('jquery'), '', true );

   wp_enqueue_script( 'typed_js', get_template_directory_uri() . '/js/typed.js', array('jquery'), '', true );

   wp_enqueue_script( 'viewportchecker_js', get_template_directory_uri() . '/js/viewportchecker.js', array('jquery'), '', true );

   wp_enqueue_script( 'smooth-scroll_js', get_template_directory_uri() . '/js/smooth-scroll.js', array('jquery'), '', true );

   wp_enqueue_script( 'fluidvids_js', get_template_directory_uri() . '/js/fluidvids.js', array('jquery'), '', true );

   wp_enqueue_script( 'jquery.tooltipster_js', get_template_directory_uri() . '/js/jquery.tooltipster.js', array('jquery'), '', true );

   wp_enqueue_script( 'slider_js', get_template_directory_uri() . '/js/slider.js', array('jquery'), '', true );

   wp_enqueue_script( 'gallery_js', get_template_directory_uri() . '/js/gallery.js', array('jquery'), '', true );

   wp_enqueue_script( 'bootsrap.min_js', get_template_directory_uri() . '/js/bootsrap.min.js', array('jquery'), '', true );

   wp_enqueue_script( 'easings_js', get_template_directory_uri() . '/js/jquery.easings.min.js', array('jquery'), '', true );

   wp_enqueue_script( 'slimscroll_js', get_template_directory_uri() . '/js/jquery.slimscroll.js', array('jquery'), '', true );

   wp_enqueue_script( 'fullpage_js', get_template_directory_uri() . '/js/jquery.fullPage.js', array('jquery'), '', true );

   wp_enqueue_script( 'unslider_js', get_template_directory_uri() . '/js/unslider.js', array('jquery'), '', true );

   wp_enqueue_script( 'jquery.form_js', get_template_directory_uri() . '/js/jquery.form.js', array('jquery'), '', true );

   wp_enqueue_script( 'jquery.vide_js', get_template_directory_uri() . '/js/jquery.vide.js', array('jquery'), '', true );

   wp_enqueue_script( 'jquery.tmpl.min', get_template_directory_uri() . '/js/jquery.tmpl.min.js', array('jquery'), '', true );

   wp_enqueue_script( 'jquery.elastislide', get_template_directory_uri() . '/js/jquery.elastislide.js', array('jquery'), '', true );

   // wp_enqueue_script( 'jquery.gallery-nou', get_template_directory_uri() . '/js/gallery-nou.js', array('jquery'), '', true );






}

add_action('wp_enqueue_scripts',  'theme_js');

add_theme_support('menus');

function register_theme_menus(){
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu')
        )
    );
}
add_action('init','register_theme_menus');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

?>
