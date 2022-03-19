
<?php
    $about_us = get_theme_mod('about_small_section', 'About Us');
?>

<footer role="contentinfo" class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h2><?php echo get_bloginfo('name'); ?> </h2>
                    <p class="small text-muted"> <?php echo $about_us; ?> </p>
                </div>

                <div class="col-lg-2 col-md-6 list-unstyled">

                    <?php if(is_active_sidebar('footer_first_section') ): ?>

                        <?php dynamic_sidebar('footer_first_section'); ?>

                    <?php endif; ?>
                
                </div>

                <div class="col-lg-2 col-md-6 list-unstyled">

                    <?php if(is_active_sidebar('footer_second_section') ): ?>

                        <?php dynamic_sidebar('footer_second_section'); ?>

                    <?php endif; ?>
                    
                </div>

                <div class="col-lg-4 col-md-6">

                    <?php if(is_active_sidebar('footer_third_section') ): ?>

                        <?php dynamic_sidebar('footer_third_section'); ?>

                    <?php endif; ?>
                    
                </div>
            </div>
        </div>

    </footer>

    <div class="footer-bottom">
        <div class="copyright container pt-3 pb-1">
            <p> <?php _e('Copyright © 2022 Sleware | Powered by Cerah WordPress Theme', 'cerah'); ?> </p>
        </div>
    </div>

	
	<?php
		wp_footer();
	?>
</html>