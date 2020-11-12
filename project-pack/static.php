<?php 
/**
 * Static
 */

function pp_enqueue_scripts() {
  wp_enqueue_style( 'pp-style', PP_URI . '/dist/pp.css', false, PP_VER );
  wp_enqueue_script( 'pp-script', PP_URI . '/dist/pp.js', [ 'jquery' ], PP_VER, true );
  wp_localize_script( 'pp-script', 'php_data', [
    'ajax_url' => admin_url( 'admin-ajax.php' ),
  ] );
}

add_action( 'wp_enqueue_scripts', 'pp_enqueue_scripts' );