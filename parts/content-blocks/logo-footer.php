
<?php if( have_rows('footer') ): ?>
    <?php while( have_rows('footer') ): the_row(); ?>
            <?php the_sub_field('footer_images'); ?>
<div class="grid-container">
    <div class="grid-x grid-padding-x align-center">
        <div class="small-6 cell">
            <img>
                <?php $logo = get_sub_field('new_story_logo'); 
                echo wp_get_attachment_image( $logo, 'thumbnail' );?>
            </img>
        </div>                   
    <div class="small-6 cell">                    
        <img>
            <?php $sbpf_logo = get_sub_field('sbpf_logo'); 
            echo wp_get_attachment_image( $sbpf_logo, 'thumbnail' );?>
        </img>
    </div>
    <div class="medium-12">
        <?php $footer_main_text = get_sub_field('footer_main_text'); 
        echo $footer_main_text
        ?>
    </div>

    <div class="medium-12">
        <?php $footer_subtext = get_sub_field('footer_subtext'); 
        echo $footer_subtext; ?>
    </div>        

    </div>
</div>
 
    <?php endwhile; ?>
<?php endif; ?>