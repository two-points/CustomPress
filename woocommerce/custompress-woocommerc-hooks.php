<?php
/**
 * Woocommerce custom hooks
 *
 *
 */


/**
add_action( 'my_footer_hook', 'my_footer_echo' );
function my_footer_echo(){
    echo 'hello world';
}

*/

/**
 * Opening div for our content wrapper  
 */
add_action('woocommerce_before_main_content', 'custompress_woocommerce_open_div', 5);
 
function custompress_woocommerce_open_div() {
    echo '<div class="column content-width">';
}


 
add_action('woocommerce_after_main_content', 'custompress_woocommerce_close_div', 50);
 
function custompress_woocommerce_close_div() {
    echo '</div>';
}





















?>