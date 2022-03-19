<!-- Header-->
<?php
	get_header();
?>

<body <?php body_class(); ?> >

	<?php wp_body_open(); ?>
	
	<div class="post-section container" id="content">
		<?php
			if(have_posts() ) {
				while( have_posts() ) {
					the_post();
					
					get_template_part('template-parts/content', 'archive');
				}
			}
		?>

		<?php wp_link_pages( array('before' => '<div class="page-link-next-prev">', 
		'after' => '</div>', 'next_or_number' => 'next', 'previouspagelink' => _e('Previous', 'cerah'),
		'nextpagelink' => _e('Next', 'cerah') ) ); ?>

	</div>

</body>

<!-- FOOTER -->
<?php
	get_footer();
?>