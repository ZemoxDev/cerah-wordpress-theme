
<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <?php
                $tag_status = get_theme_mod('blog_tags_section', 'yes');
                $category_status = get_theme_mod('blog_categories_section', 'yes');
            ?>
            <span class="date"> <?php the_date(); ?> </span>

            <?php if($tag_status == 'yes'): ?>
                <span class="tags"> <?php the_tags(); ?> </span>
            <?php endif; ?>
            
            <span class="comment"><a href="#comments"><i class="fa fa-comment"></i> <?php comments_number(); ?> </a></span>

            <?php if($category_status == 'yes'): ?>
                <span class="category"> <?php the_category(); ?> </span>
            <?php endif; ?>

        </div>
    </header>
    <?php
        the_content();
    ?>

    <?php
        comments_template();
    ?>

</div>