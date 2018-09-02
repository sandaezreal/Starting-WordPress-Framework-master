<?php
/**
 * Frontend Ajax Requests
 */

// Front End Ajax Request - Localize Variable For Ajax URL
function frontend_ajax_request()
{
  wp_localize_script(
    'scripts_js',
    'ajax_obj',
    array('ajaxurl' => admin_url('admin-ajax.php'))
  );
}
add_action('wp_enqueue_scripts', 'frontend_ajax_request');

// This will take the path of the ajax url and output the content in the php file in the template-parts/module/ folder
function ajax_request()
{

  // The $_REQUEST contains all the data sent via ajax
  if (isset($_REQUEST)) {

    $ajax_path = $_REQUEST['ajax_path'];

    // Let's take the data that was sent and do something with it
    if ($ajax_path != '') {
      get_template_part( 'template-parts/modules/forms/'.$ajax_path );
    }

    // If you're debugging, it might be useful to see what was sent in the $_REQUEST
    // print_r($_REQUEST);

  }

  // Always die in functions echoing ajax content
  die();
}

// Allows logged in and non-loggedin users to access content
add_action('wp_ajax_ajax_request', 'ajax_request');
add_action('wp_ajax_nopriv_ajax_request', 'ajax_request');
