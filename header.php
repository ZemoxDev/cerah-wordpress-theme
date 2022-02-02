<!doctype html>
<html lang="en">
    <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Sleware Theme">
		<meta name="author" content="https://sleware.com/">

		<?php
			wp_head();
		?>
    </head>

    <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <?php
                $title_status = get_theme_mod('header_title_section', 'yes');
                $image_status = get_theme_mod('header_image_section', 'yes');
            ?>
            <?php if($title_status == 'yes'): ?>
            <div class="container"><a href="<?php echo get_home_url(); ?>" class="brand"> <?php echo get_bloginfo('name'); ?> </a>
            <?php endif; ?>

                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <?php
                    if(function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                ?>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">

                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'menu_class' => 'navbar-nav ml-auto',
                                'theme_location' => 'primary'
                            )
                        );
                    ?>
                </div>
            </div>
        </nav>

        <?php if($image_status == 'yes'): ?>
        <div class="image-big bg-cover">
            <div class="image-title container text-center">
                <h1 class="display-4 font-weight-bold text-white"><?php the_title(); ?></h1>
            </div>
        </div>
        <?php endif; ?>

    </header>