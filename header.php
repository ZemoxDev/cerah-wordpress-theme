<!doctype html>
<html <?php language_attributes(); ?>>
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

    <?php
        $title_status = get_theme_mod('header_title_section', 'yes');
        $image_status = get_theme_mod('header_image_section', 'yes');
        $home_url = get_home_url();
        $name = get_bloginfo('name');
    ?>

    <header role="banner" class="header">

        <a class="skip-link screen-reader-text" href="#content">
        <?php _e( 'Skip to content', 'cerah'); ?></a>

        <nav role="navigation" class="navbar navbar-expand-lg fixed-top py-3">

            <?php if($title_status == 'yes'): ?>
                <div class="container"><a href="<?php echo esc_url( $home_url ); ?>" class="brand"> <?php echo esc_html( $name ); ?> </a>
            <?php endif; ?>

            <?php
                if(function_exists('the_custom_logo')){
                    ?><div><a href="<?php echo esc_url( $home_url ); ?>"> <?php the_custom_logo(); ?> </a></div> <?php
                }
            ?>

            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'menu_class' => 'navbar-nav ml-auto',
                            'theme_location' => 'primary'
                        )
                    );
                ?>

            </div>

        </nav>

    </header>

    <body <?php body_class(); ?> >