
<footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <a href="<?php echo get_home_url(); ?>"><h5 class="h1 "> <?php echo get_bloginfo('name'); ?> </h5></a>
                    <p class="small text-muted"> <?php echo get_theme_mod('about_small_section', 'About Us') ?> </p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-3">Legal</h5>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'footer-legal',
                                'container' => '',
                                'menu_class' => 'list-unstyled',
                                'theme_location' => 'footer-legal'
                            )
                        );
                    ?>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="mb-3">Quick links</h5>
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'footer-links',
                                'container' => '',
                                'menu_class' => 'list-unstyled',
                                'theme_location' => 'footer-links'
                            )
                        );
                    ?>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="mb-3">Social Media</h5>
                    <a href="<?php echo get_theme_mod('social_facebook_section', 'https://www.facebook.com/') ?>" id="social-media" class="fa fa-facebook"></a>
                    <a href="<?php echo get_theme_mod('social_twitter_section', 'https://www.twitter.com/') ?>" id="social-media" class="fa fa-twitter"></a>
                    <a href="<?php echo get_theme_mod('social_linkedin_section', 'https://www.linkedin.com/') ?>" id="social-media" class="fa fa-linkedin"></a>
                </div>
            </div>
        </div>

    </footer>

    <div class="footer-bottom">
        <div class="copyright container pt-3 pb-1">
            <p> Copyright © 2022 Sleware | Powered by Cerah WordPress Theme </p>
        </div>
    </div>

	
	<?php
		wp_footer();
	?>
</html>