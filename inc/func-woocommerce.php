<?php
/**
 * Soportamos o woocommerce
 **/
function laulo_add_woocommerce_support() {

  add_theme_support( 'wc-product-gallery-zoom' );
//  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'laulo_add_woocommerce_support' );

/**
 * Quitamos o sidebar
 **/
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

?>
