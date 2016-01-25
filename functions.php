<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
    'lib/wp_bootstrap_navwalker.php', // bootstrap nav walker
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function add_menuclass($ulclass) {
  return preg_replace('/<a /', '<i class="fa fa-star fa-rotate-180 hidden-xs"></i> <a ', $ulclass);
}
// add_filter('wp_nav_menu','add_menuclass');

/*  Function to show the slider if needed  */
function show_gallery( $post_id ) {
  $args = array(
    'post_type' => 'attachment',
    'numberposts' => null,
    'post_status' => null,
    'post_parent' => $post_id
  );
  $attachments = get_posts( $args );
  $is_images = false;
  // make sure the attachment(s) are image(s). otherwise, ignore them
  foreach( $attachments as $item ) {
    $mime_types = explode( "/", get_post_mime_type( $item->ID ) );
    if ( in_array( 'image', $mime_types ) ) {
      $is_images = true;
      break;
    }
  }

  if ( $is_images )
    echo do_shortcode ('[gallery royalslider="2"]'); 
  
    
}