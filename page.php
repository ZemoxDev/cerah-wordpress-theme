<!-- Header-->
<?php
	get_header();
?>

<body <?php body_class(); ?> >

	<?php wp_body_open(); ?>
	
	<div class="container" id="content">

		<article class="content px-2 py-5 p-md-5">
			<?php
				if(have_posts() ) {
					while( have_posts() ) {
						the_post();
						the_content();
					}
				}
			?>
		</article>

	</div>

</body>

<!-- FOOTER -->
<?php
	get_footer();
?>