<?php
if ( ! is_active_sidebar( 'sidebar-ads' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area advertisment-sidebar">
	<?php dynamic_sidebar( 'sidebar-ads' ); ?>
</aside><!-- #secondary -->
