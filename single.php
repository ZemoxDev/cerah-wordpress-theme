<!-- Header-->
<?php
	get_header();
?>

<body <?php body_class(); ?> >

	<?php wp_body_open(); ?>

	<div class="container" id="content">

		<div class="row">

			<?php
				if(have_posts() ) {
					while( have_posts() ) {
						the_post();
						
						get_template_part('template-parts/content', 'article');
					}
				}
			?>

		</div>

	</div>

</body>	

<!-- FOOTER -->
<?php
	get_footer();
?>