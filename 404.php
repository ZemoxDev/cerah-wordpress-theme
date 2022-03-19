<!-- Header-->
<?php
	get_header();
?>

<body <?php body_class(); ?> >

    <?php wp_body_open(); ?>

    <div class='error' id="content">

        <div class='error-code'>404</div>
        <div class='error-page'><?php _e('THE PAGE', 'cerah') ?></div>
        <div class='error-found'> <?php _e('WAS NOT FOUND', 'cerah') ?></div>
        <a class='error-btn' href="<?php echo get_home_url(); ?>"><?php _e('GO BACK', 'cerah') ?></a>

    </div>

</body>

<!-- FOOTER -->
<?php
	get_footer();
?>