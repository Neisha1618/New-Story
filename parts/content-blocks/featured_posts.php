<?php
echo '<div class="content-block featured-posts">';
    echo '<div class="grid-container">';
        echo '<div class="grid-x grid-margin-x">';
        if( have_rows ('featured_posts') ):
            while( have_rows ('featured_posts') ): the_row();
                $postObject = get_sub_field_object('posts');
                setup_postdata($postObject);
                $postObject = $postObject['value'];
                $postType = $postObject->post_type;
                $fp_title = $postObject->post_title;
                $post_type_obj = get_post_type_object( get_post_type($postObject) );
                $post_type_title = apply_filters('post_type_archive_title', $post_type_obj->labels->name);
                $categories = get_the_category($postObject); 
                $category = $categories[0]->name;
                $date = get_the_date('', $postObject->ID);

                if($post_type_title != 'Posts') :
                    $fp_archive_title = $post_type_title; 
                else :
                    $fp_archive_title = $category;
                endif; 
                if(has_excerpt($postObject)):
                    $fp_excerpt = get_the_excerpt($postObject);
                else :
                    $fp_excerpt = strip_shortcodes( $postObject->post_content );
                    $fp_excerpt = apply_filters( 'the_content', $fp_excerpt );
                    $fp_excerpt = str_replace(']]>', ']]&gt;', $fp_excerpt);
                    $excerpt_length = apply_filters( 'excerpt_length', 45 );
                    $fp_excerpt = wp_trim_words( $fp_excerpt, $excerpt_length);
                endif;
                $image_id = get_post_thumbnail_id($postObject);
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                $fp_img = get_the_post_thumbnail_url($postObject, 'featured-thumbnail');
                $link = get_the_permalink($postObject);
                echo '<div class="large-4 cell">';
                echo '<div class="post-card">';
                echo '<img class="featured-image" src="' . $fp_img . '" alt="'. $image_alt . '" />';
                echo '<p><span class="cat-title">' . $fp_archive_title . '</span></p>';
                echo '<h3>' . $fp_title . '</h3>';
                echo '<p>' . $fp_excerpt . '</p>';
                echo '<a class="read-more" href="' . $link . '" title="' . $fp_title . '">Read More</a>';
                echo '</div>';
                echo '</div>';
            endwhile;
        endif;
        echo '</div>';
    echo '</div>';
echo '</div>';
?>