    <!-- Header-->
	<?php
		get_header();
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				
				<article class="content px-2 py-5 p-md-5">

					<?php
						if(have_posts() ) {
							while( have_posts() ) {
								the_post();
								
								get_template_part('template-parts/content', 'archive');
							}
						}
					?>

				</article>

			</div>
		</div>
	</div>

    <!-- FOOTER -->
	<?php
		get_footer();
	?>