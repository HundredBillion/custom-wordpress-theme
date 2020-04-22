<?php
  /**
   * Register styles.
   */
  function register_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  }
  add_action( 'wp_enqueue_scripts', 'register_styles' );
  /**
   * Register navigation menus uses wp_nav_menu in five places.
   */
  function customtheme_menus() {

    $locations = array(
      'primary'  => __( 'Desktop Horizontal Menu', 'customtheme' ),
      'expanded' => __( 'Desktop Expanded Menu', 'customtheme' ),
      'mobile'   => __( 'Mobile Menu', 'customtheme' ),
      'footer'   => __( 'Footer Menu', 'customtheme' ),
      'social'   => __( 'Social Menu', 'customtheme' ),
    );

    register_nav_menus( $locations );
  }
  add_action( 'init', 'customtheme_menus' );
