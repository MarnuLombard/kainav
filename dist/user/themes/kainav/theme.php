<?php
if( !defined( 'HABARI_PATH' ) ) {
  die('No direct access');
}

// While in development
define(DEBUG, TRUE);



/**
* The main theme class.
* using this means I can add functions to the
* default theme functions/methods
* found in /system/classses/theme.php
*
* see http://wiki.habariproject.org/en/Dev:Creating_A_Theme#theme.php
*/
class Kainav extends Theme
{

  //  Make the theme configurable
  public function filter_theme_config($configurable)
  {
    $configurable = true;
    return $configurable;
  }

  // other templates registered, and other initialization
  public function action_init() {
    $this->add_template( 'block.nav', dirname(__FILE__) . '/block.nav.php' );
  }

  // The filter_block_list() takes a paramenter of an associative array of the internal names and display names of blocks called $block_list. This array should be updated with internal and display name of your block and returned.
  public function filter_block_list( $blocklist ) {
    $blocklist[ 'nav' ] = _t( 'Navigation' );
    return $blocklist;
  }

  // This method is used to create a configuration form for the nav block

  // Define some theme-specific vars
  function action_add_template_vars($theme) {
    $theme->assetsDir = Site::get_url('theme').'/assets';
  }




}// kainav.class


?>
