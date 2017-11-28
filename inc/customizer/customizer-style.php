<?php


function custompress_customizer_style() {
    ?>

    <style type="text/css">

        <?php if ( get_theme_mod( 'header_align' ) == 'center' ) : ?>
          .main-navigation li { float: none; display: inline-block; }
          #primary-menu { text-align: center; }
       <?php endif; ?>

    </style>

    <?php
}
add_action( 'wp_head', 'custompress_customizer_style' );
