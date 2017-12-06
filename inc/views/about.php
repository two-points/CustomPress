<div class="wrap custompress-wrap">
    <h1><?php esc_html_e( 'CustomPress Help', 'custompress' ) ?></h1>

    <div class="welcome-panel">
        <div class="welcome-panel-content">
            <h2><?php esc_html_e( 'Thank you for using our theme!', 'custompress' ) ?>  </h2>
            <p class="about-description">
                <?php echo wp_kses_post( 'We are always here to help you. For any query or information, please visit <a href="https://wp-custompress.com/" target="_blank">our website.</a>', 'custompress' ) ?>
            </p>

            <div class="welcome-panel-column-container">
                <div class="welcome-panel-column">
                    <h3><?php esc_html_e( 'Get Started', 'custompress' ) ?></h3>
                    <div>
                        <a class="button button-primary button-hero" href="https://wp-custompress.com" target="_blank"><?php esc_html_e( 'Business Website Demo', 'custompress' ) ?></a>
                        <a class="button button-primary button-hero" href="https://demo.wp-custompress.com" target="_blank"><?php esc_html_e( 'Blog Demo', 'custompress' ) ?></a>
                        <a class="button button-hero" href="https://wp-custompress.com/report-a-problem/" target="_blank"><?php esc_html_e( 'Report a problem', 'custompress' ) ?></a>
                        <a class="button button-hero" href="https://wordpress.org/support/theme/custompress" target="_blank"><?php esc_html_e( 'Support Forum', 'custompress' ) ?></a>
                    </div>

                    <div class="cp-mb-2">
                        <h3><?php esc_html_e( 'Rate Us', 'custompress' ) ?></h3>
                        <p>
                            <?php esc_html_e( 'If you like our theme and support, please rate us 5 star on WordPress.org.', 'custompress') ?>
                        </p>
                        <a class="button button-primary" href="https://wordpress.org/support/theme/custompress/reviews/#new-post" target="_blank"><?php esc_html_e( 'Rate us 5 star', 'custompress' ) ?></a>

                        <h3><?php esc_html_e( 'Request a Feature', 'custompress' ) ?></h3>
                        <p>
                            <?php esc_html_e( 'Let\'s make this theme better together. You can ask us for a feature and we\'ll consider adding it to the theme in future updates.', 'custompress' ) ?>
                        </p>
                        <a class="button" href="https://wp-custompress.com/request-a-feature/" target="_blank"><?php esc_html_e( 'Request a Feature', 'custompress' ) ?></a>
                    </div>


                </div>
                <!-- /.welcome-panel-column -->

                <div class="welcome-panel-column welcome-panel-last">
                    <h3><?php esc_html_e( 'Create a well-designed page in less than 5 minutes?', 'custompress' ) ?></h3>
                    <div class="cp-mb-2">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/wOw39T_s_cg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="cp-mb-2">
                        <h4 style="margin-bottom: 0"><?php esc_html_e( 'More Tutorials:', 'custompress' ) ?></h4>
                        <a href="https://wp-custompress.com/2017/12/01/create-homepage-using-custompress/" target="_blank">How to create homepage using SiteOrigin Page Builder?</a>
                    </div>

                </div>
                <!-- /.welcome-panel-column welcome-panel-last -->
            </div>
            <!-- /.welcome-panel-column-container -->
        </div>
        <!-- /.welcome-panel-content -->
    </div>
    <!-- /.welcome-panel -->

    <div class="welcome-panel">
        <div class="welcome-panel-content cp-mb-2">
            <h2><?php esc_html_e( 'Upgrade to premium version!', 'custompress' ) ?>  </h2>
            <p class="about-description">
                <?php echo wp_kses_post( 'Let\'s make your website better with our premium membership. For more details, please visit <a href="https://wp-custompress.com/premium-wordpress-theme-custompress-pro/" target="_blank">our website.</a>', 'custompress' ) ?>
            </p>

            <?php
                echo wp_kses_post( __( '
                <ol>
                    <li><strong>Better Search Engine Optimization</strong> - Drive more traffic to your website organically with better on-page SEO and <a href="http://schema.org/" target="_blank">schema.org</a> metadata.</li>
                    <li><strong>Better Performance Optimization</strong> - Reduce your bounce rate with the optimized website. Reduce your overall page load time with our premium them and optimization tips.</li>
                    <li><strong>Premium Support</strong> - Anything related to our theme or your WordPress requirements, just reach out to us quickly using our ticketing system.</li>
                    <li><strong>More Customization Options</strong> - CustomPress\' free version is already one of the most customizable WordPress themes ever on wordpress.org library. Premium version takes it to the next level of customization.</li>
                    <li><strong>Remove Footer Credit Link</strong></li>
                    <li><strong>Premium Page Templates for Elementor Page Builder</strong></li>
                    <li>and much more...</li>
                </ol>
                ', 'custompress') );
            ?>

            <div style="text-align: center">
                <a class="button button-primary button-hero" href="https://wp-custompress.com/premium-wordpress-theme-custompress-pro/" target="_blank"><?php esc_html_e( 'Know More', 'custompress' ) ?></a>
            </div>

        </div>
        <!-- /.welcome-panel-content -->
    </div>
    <!-- /.welcome-panel -->
</div>
