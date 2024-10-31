<?php /** 
* Plugin Name: Remove Product Image Links from WooCommerce
* Description: This plugin will automatically remove image links from the main product images in WooCommerce.
* Author: Worcester Web Studio
* Author URI: https://www.worcesterwebstudio.com/
* Version: 2.1.2 */ 


add_filter('woocommerce_single_product_image_thumbnail_html','wws_wooremove_prodimg' );
 
function wws_wooremove_prodimg( $html ) {
     return strip_tags( $html,'<div><img>' );
}
?>