<?php
//wp_set_password( 'password', 1 );

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );



function header_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú header' ),
      'navegation_movil' => __( 'Menú movil' ),
    )
  );
}
add_action( 'init', 'header_menus' );

/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */


function sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        )
      );
    /* Repeat register_sidebar() code for additional sidebars. */
}
function sidebars2() {
  /* Register the 'primary' sidebar. */
  register_sidebar(
      array(
          'id'            => 'primary2',
          'name'          => __( 'Primary2 Sidebar' ),
          'description'   => __( 'A short description of the sidebar.' ),
          'before_widget' => '',
          'after_widget'  => '',
          'before_title'  => '<h4>',
          'after_title'   => '</h4>',
      )
    );
  /* Repeat register_sidebar() code for additional sidebars. */
} 
add_action( 'widgets_init', 'sidebars' );
add_action( 'widgets_init', 'sidebars2' );

