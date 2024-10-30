<?php

/*

Plugin Name: iOS Icon Renderer
Plugin URI: http://kashiv.com/projects/wordpress/ios-icon-renderer-plugin/
Description: Add a [ios_icon] shortcode to make it easier to display iOS icons without rendering them first in a graphical application. Uses CSS3.
Author: Adrian Kashivskyy
Version: 1.0
Author URI: http://kashiv.com/

*/

add_shortcode('ios_icon', 'ios_icon_render');

function ios_icon_render($atts, $content = null) {

    extract(shortcode_atts(array(
        'size' => 57,
        'shadow_color' => '#000',
        'style' => '',
        'url' => ''
    ),$atts));
        
    $radius = 0;
    $wh = 0;
    $shadow = '';
    
    switch($size) {
        case '57': case 'iphone':
            $radius = 10;
            $wh = 57;
            $shadow = "0 2px 6px {$shadow_color}";
            break;
        case '72': case 'ipad':
            $radius = 12;
            $wh = 72;
            $shadow = "0 2px 8px {$shadow_color}";
            break;
        case '114': case 'iphone4': case 'iphone-retina':
            $radius = 20;
            $wh = 114;
            $shadow = "0 4px 12px {$shadow_color}";
            break;
        case '512': case 'full': case 'itunes':
            $radius = 90;
            $wh = 512;
            $shadow = "0 10px 30px {$shadow_color}";
            break;
    }
   
    
    $div = sprintf('<div style="background-image:url(%1$s)!important;display:inline-block;-moz-border-radius:%2$spx;-webkit-border-radius:%2$spx;border-radius:%2$spx;width:%3$spx;height:%3$spx;-moz-box-shadow:%4$s;-webkit-box-shadow:%4$s;box-shadow:%4$s;%5$s"></div>', $url, $radius, $wh, $shadow, $style);
    
    return $div;
    
}

?>