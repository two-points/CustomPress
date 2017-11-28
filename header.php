<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'custompress' ); ?></a>

	<?php
	$custompress_header_align = 'left';
	if ( get_theme_mod( 'header_align' ) ) {
		$custompress_header_align = get_theme_mod( 'header_align' );
	}
   ?>

	<header id="masthead"  class="<?php if ( !get_theme_mod( 'header_in_container' ) ) : echo 'site-header'; endif; ?>" >

		<div class="container">
			<div class="row">
				<div class="column">
					<div class="main-header <?php if ( get_theme_mod( 'header_in_container' ) ) : echo 'site-header'; endif; ?>">

						<div class="row align-items-center site-header-pad">

							<?php if ( $custompress_header_align == 'right' ) : ?>

			                        <div class="column column-33">
										<?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
											<?php dynamic_sidebar( 'sidebar-header' ); ?>
										<?php endif; ?><!-- header sidebar -->
									</div>

                           <?php endif; ?>

							<div class="site-branding <?php if ( $custompress_header_align == 'right' ) : echo ' column column-33 column-offset-33';  elseif ( $custompress_header_align == 'center' ) : echo 'column column-33 column-offset-33'; elseif ( $custompress_header_align == 'left' ) : echo 'column column-33'; endif; ?>">
								<?php
								the_custom_logo();
								if ( is_front_page() && is_home() ) : ?>
                                    <?php if ( !get_theme_mod( 'hide_site_title' ) ) : ?>
									  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php endif; ?>
								<?php else : ?>
									 <?php if ( !get_theme_mod( 'hide_site_title' ) ) : ?>
									    <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
									    </h2>
									<?php endif; ?>
								<?php
								endif;

								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
								    <?php if ( !get_theme_mod( 'hide_site_description' ) ) : ?>
									    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?>
									    </p>
									<?php endif; ?>
								<?php
								endif; ?>
							</div><!-- .site-branding -->

							<?php if ( ( $custompress_header_align == 'left' ) || ( $custompress_header_align == 'center' ) ) : ?>

			                        <div class=" <?php if ( $custompress_header_align == 'right' ) : echo 'press-right';  elseif ( $custompress_header_align == 'center' ) : echo 'column column-33'; elseif ( $custompress_header_align == 'left' ) : echo 'column column-67'; endif; ?> text-right">
										<?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
											<?php dynamic_sidebar( 'sidebar-header' ); ?>
										<?php endif; ?><!-- header sidebar -->
									</div>

                           <?php endif; ?>

						</div>


					</div>
				</div>
			</div>

		</div>
		<!-- /.container -->

		<nav id="site-navigation" class="main-navigation <?php if ( !get_theme_mod( 'header_in_container' ) ) : echo 'site-navigation'; endif; ?>">
			<div class="container">
				<div class="row">
					<div class="column">
						<div class="<?php if ( get_theme_mod( 'header_in_container' ) ) : echo 'site-navigation'; endif; ?> main-header">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
							?>
						</div>
					</div>
				</div>
			</div>

		</nav><!-- #site-navigation -->

		<?php if ( get_theme_mod( 'hide_fixed_header' ) ) : ?>
						<div class="custompress-main-navbar appear-fixed-on-scroll">

								<nav id="site-navigation" class="main-navigation <?php if ( !get_theme_mod( 'header_in_container' ) ) : echo 'site-navigation'; endif; ?>">
										<div class="container">
											<div class="row">
												<div class="column">
													<div class="<?php if ( get_theme_mod( 'header_in_container' ) ) : echo 'site-navigation'; endif; ?>">
														<?php
															wp_nav_menu( array(
																'theme_location' => 'menu-1',
																'menu_id'        => 'primary-menu',
															) );
														?>
													</div>
												</div>
											</div>
										</div>

		                        </nav><!-- #site-navigation -->
						</div><!-- /.shreeja-main-navbar appear-fixed-on-scroll -->
		<?php endif; ?>

		<?php if (get_theme_mod( 'header_background_img' ) ) : ?>
					<style media="screen">
						.site-header {
							background-image: url('<?php echo esc_url( get_theme_mod( 'header_background_img' ) ); ?>');
							background-repeat: no-repeat  !important;
							background-position: 50% 50%;
							-webkit-background-size: cover;
							-moz-background-size:    cover;
							-o-background-size:      cover;
							background-size:         cover;
						}
					</style>
	            <?php endif; ?>

	</header><!-- #masthead -->
