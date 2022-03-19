<!-- Header-->
<?php
	get_header();
?>

<body <?php body_class(); ?> >

	<?php wp_body_open(); ?>
	
	<div class="post-section container" id="content">
		
		<div class="row">

			<?php if(is_active_sidebar('blog_sidebar') ): ?>

				<div class="col-2">
					<div class="pt-3">
						<?php dynamic_sidebar('blog_sidebar'); ?>
					</div>
				</div>

				<div class="col-10">
					<?php
						if(have_posts() ) {
							while( have_posts() ) {
								the_post();
								
								get_template_part('template-parts/content', 'archive');
							}
						}
					?>
				</div>

			<?php endif; ?>

			<?php if(!is_active_sidebar('blog_sidebar') ): ?>
				
				<?php
					if(have_posts() ) {
						while( have_posts() ) {
							the_post();
							
							get_template_part('template-parts/content', 'archive');
						}
					}
				?>

			<?php endif; ?>

		</div>
		
		<?php
			the_posts_pagination();
		?>
	</div>
</body>

<!-- FOOTER -->
<?php
	get_footer();
?>