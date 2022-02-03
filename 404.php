    <!-- Header-->
    <?php
		get_header();
	?>

    <div class='error'>
    
        <div class='error-code'>404</div>
        <div class='error-page'>THE PAGE</div>
        <div class='error-found'>WAS NOT FOUND</div>
        <a class='error-btn' href="<?php echo get_home_url(); ?>">GO BACK</a>
    
    </div>

    <!-- FOOTER -->
	<?php
		get_footer();
	?>