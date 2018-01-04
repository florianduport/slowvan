<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');
add_filter('jpeg_quality', function($arg){return 100;});
function jce_remove_attachment_comments( $open, $post_id ) {
  $post = get_post( $post_id );
    if ( 'attachment' == $post->post_type ) {
      return false;
    }
    return $open;
  }
add_filter( 'comments_open', 'jce_remove_attachment_comments', 10 , 2 );
function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
}

$content_width = 1110;
