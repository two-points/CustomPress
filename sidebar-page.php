<?php
if ( ! is_active_sidebar( 'sidebar-page' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area column sidebar-width">
	<?php dynamic_sidebar( 'sidebar-page' ); ?>
</aside><!-- #secondary -->
