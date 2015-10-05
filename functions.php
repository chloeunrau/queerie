<?php

/* Register widget areas */
register_sidebar( array(
    'id'          => 'homeothertop',
    'name'        => 'Home Other Top',
    'description' => 'The Widget area for additional content for the Home page. Appears below the about box, and above the rest of the Home page content.'
) );
register_sidebar( array(
    'id'          => 'homenexttime',
    'name'        => 'Home Next Time',
    'description' => 'Home page content under the title "Next Time on Gender Queeries"'
) );
register_sidebar( array(
    'id'          => 'homelasttime',
    'name'        => 'Home Last Time',
    'description' => 'Home page content under the title "Previously on Gender Queeries"'
) );
register_sidebar( array(
    'id'          => 'homeaboutleft',
    'name'        => 'Home About Left',
    'description' => 'The Widget area for the left side of the Home page About box.'
) );
register_sidebar( array(
    'id'          => 'homeaboutright',
    'name'        => 'Home About Right',
    'description' => 'The Widget area for the right side of the Home page About box.'
) );
register_sidebar( array(
    'id'          => 'homeotherbottom',
    'name'        => 'Home Other Bottom',
    'description' => 'The Widget area for additional content for the Home page. Appears below all other Home page content.'
) );
register_sidebar( array(
    'id'          => 'archivecontrols',
    'name'        => 'Archive Controls',
    'description' => 'The Widget area for the Archive pages. Appears above all other content on the page.'
) );




/* Surround images with <div> tags instead of <p> tags */
function filter_ptags_on_images($content) {
  return preg_replace('/<p[^>]*>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\/p>/', '<div class="radius_fix">$1</div>', $content);
}
add_filter('the_content', 'filter_ptags_on_images');




/* Change the 'Read More' text */
add_filter( 'the_content_more_link', 'my_more_link', 10, 2 );

function my_more_link( $more_link, $more_link_text ) {
  return str_replace( $more_link_text,
                      '<div class="morelink">Continue reading...</div>',
                      $more_link );
}




/* Filter the Image Captions for Responsiveness */
add_filter( 'img_caption_shortcode', 'bs_responsive_img_caption_filter', 10, 3 );
function bs_responsive_img_caption_filter( $val, $attr, $content = null ) {
  extract( shortcode_atts( array(
    'id' => '',
    'align' => '',
    'width' => '',
    'caption' => ''
    ), $attr
  ) );

  if ( 1 > (int) $width || empty( $caption ) )
    return $val;

  $new_caption = sprintf( '<div id="%1$s" class="wp-caption %2$s" style="max-width:100%% !important;height:auto;width:auto;">%4$s<p class="wp-caption-text">%5$s</p></div>',
    esc_attr( $id ),
    esc_attr( $align ),
    '', //( 10 + (int) $width ),
    do_shortcode( $content ),
    $caption
  );
  return $new_caption;
}




?>
