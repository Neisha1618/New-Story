<div class="light-reading-container id="light-reading-container">

    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="small-6 cell">
                <?php
                $bookImage = get_field('book_image');
                $size = 'medium';
                if ($bookImage) {
                    echo wp_get_attachment_image($bookImage, $size);
                } ?>
            </div>
            <div class="small-6 cell right-row">
                <h1 class="reading-header" id="reading-header">
                    <? echo $header = get_field('light_reading_header'); ?>
                </h1>

                <?php if (have_rows('book_info')): ?>
                    <?php while (have_rows('book_info')):
                        the_row(); ?>
                        <div>
                            <h5 class="book-title">
                                <?php echo $bookTitle = the_sub_field('book_title'); ?>
                            </h5>
                            <h5 class="book-description">
                                <?php echo $bookDescription = the_sub_field('book_description'); ?>
                            </h5>
                            <h5>
                                <?php echo $bookstoreLink = get_field('auntie_book'); ?>
                            </h5>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>

    </div>
</div>