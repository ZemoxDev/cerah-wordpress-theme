
<?php
    $tag_status = get_theme_mod('blog_tags_section', 'yes');
    $category_status = get_theme_mod('blog_categories_section', 'yes');
?>
    
<article class="content px-5 py-5">

    <div class="article-section container">

        <div class="background-image-title mb-3">

            <img aria-hidden="true" src="<?php the_post_thumbnail_url('large'); ?>" style="width:50%;">

        </div>

        <h1 class="title"> <?php the_title(); ?> </h1>

        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <header class="content-header">

            <div class="meta mb-3">

                <span> <?php _e('Written by', 'cerah') ?> </span><span> <?php the_author(); ?> </span>
                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
                <br />

                <span class="date"> <?php the_date(); ?> </span>
                
                <?php if($tag_status == 'yes'): ?>
                    <span class="tags"> <?php the_tags(); ?> </span>
                <?php endif; ?>
                
                <span class="comment"><a href="#comments"><i class="fa fa-comment"></i> <?php comments_number(); ?> </a></span>
            </div>

            </header>

            <?php
            the_content();
            ?>
            <?php if($category_status == 'yes'): ?> 
            <span class="category"> <?php the_category(); ?> </span>
            <?php endif; ?>

        </div>

        <?php
            comments_template();
        ?>

        <?php 
            paginate_comments_links();
        ?>
    </div>

</article>