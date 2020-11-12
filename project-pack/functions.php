<?php 
/**
 * Project Pack - Functions
 */

{
  /**
   * Define
   */
  define( 'PP_VER', '1.0.0' );
  define( 'PP_DIR', get_template_directory() . '/project-pack/' );
  define( 'PP_URI', get_template_directory_uri() . '/project-pack/' );
}

{
  /**
   * Include
   */
  require( PP_DIR . '/static.php' );
  require( PP_DIR . '/helpers.php' );
  require( PP_DIR . '/hooks.php' );
}