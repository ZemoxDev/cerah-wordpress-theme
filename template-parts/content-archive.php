
<div class="post-section container">

    <?php
        $date_status = get_theme_mod('blog_date_section', 'yes');
        $image_status = get_theme_mod('blog_image_section', 'yes');
    ?>

    <div class="row">

        <div class="col">

            <?php if($image_status == 'yes'): ?>

                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('medium'); ?>"></a>

            <?php endif; ?>

        </div>
        
        <div class="col-8">

            <div class="blog-body">

                <a href="<?php the_permalink(); ?>"><h3 class="blog-title"> <?php the_title(); ?> </h3></a>

                <?php if($date_status == 'yes'): ?>
                    <p class="blog-meta"> <span id="date"> <?php the_date(); ?> </span> <span id="comments"> <?php comments_number(); ?> </span></p>
                <?php endif; ?>

                <?php
                    the_excerpt();
                ?>
                <a class="read-more" href="<?php the_permalink(); ?>"> Read More &rarr;</a>
            </div>

        </div>

    </div>

</div>