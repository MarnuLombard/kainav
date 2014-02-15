<?php
if ( !defined( 'HABARI_PATH' ) ) { die('No direct access');}

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

  // Define some theme-specific vars
  function action_add_template_vars($theme) {
    $theme->assetsDir = Site::get_url('theme').'/assets';
  }




}// kainav.class


?>
