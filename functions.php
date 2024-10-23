<?php

/**
 * load_template_specific_styles
 *
 * @return void
 */
function load_template_specific_styles()
{
  $template_styles = array(
    // Add the mapping of template and corresponding CSS file here
    // You can add multiple CSS files by using semicolon (;) as separator.
    // VD: 'template-example.php' => 'example.css;example2.css',
  );

  $template = get_page_template_slug();

  if (isset($template_styles[$template])) {
    $css_files = explode(';', $template_styles[$template]);
    foreach ($css_files as $css_file) {
      if (!$css_file) {
        continue;
      }
      wp_enqueue_style($css_file, get_template_directory_uri() . '/assets/css/' . $css_file, array(), '1.0.1', 'all');
    }
  }

}