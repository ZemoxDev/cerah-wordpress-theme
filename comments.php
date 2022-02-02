    
    
    <div class="comments">

        <?php
            if(comments_open()){
                comment_form(
                    array(
                        'class_form' => 'form-group',
                        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                        'title_reply_after' => '</h2>'
                    )
                );
            }
        ?>


        <div class="comments-inner" id="comments">
            <h2>
                <?php
                    if(!have_comments()){
                        echo "Comments";
                    }
                    else{
                        echo get_comments_number(). " Comments";
                    }
                ?>
            </h2>

            <?php
                wp_list_comments(
                    array(
                        'avatar_size' => 120,
                        'style' => 'div',
                    )

                );
            ?>
        </div>
    </div>

