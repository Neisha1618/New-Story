<div class="content-grid" id="content-grid">
    <div class="about-container" id="about-container">
        <?php if (have_rows('content_grid')): ?>
            <?php while (have_rows('content_grid')):
                the_row();

                if (have_rows('about_us_our_mission')):
                    while (have_rows('about_us_our_mission')):
                        the_row();
                        $missionImage = get_sub_field('mission_image');
                        $missionTitle = get_sub_field('our_mission_title');
                        $missionSubTitle = get_sub_field('our_mission_subtitle');
                        $missionBody = get_sub_field('our_mission_body'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('about_us_our_vision')): ?>
                    <?php while (have_rows('about_us_our_vision')):
                        the_row();
                        $visionTitle = get_sub_field('our_vision_title');
                        $visionSubTitle = get_sub_field('our_vision_subtitle');
                        $visionBody = get_sub_field('our_vision_body');
                        $visionImage = get_sub_field('vision_image');
                        ?>

                        <div class="grid-container">
                            <div id="our-mission" class="our-mission">
                                <div class="grid-x grid-padding-x align-center">
                                    <div class="small-6 cell">
                                        <?php echo wp_get_attachment_image($missionImage, 'small'); ?>
                                    </div>
                                    
                                    <div class="small-6 cell right-row">
                                        <?php echo $missionTitle; ?>
                                        <?php echo $missionSubTitle; ?>
                                        <?php echo $missionBody; ?>
                                        <button id="donate-button">
                                        Donate
                                        </button>
                                    </div>
                                </div>
                               
                            </div>

                        </div>


                        <div class="grid-container">
                            <div class='our-vision' id='our-vision'>
                                <div class="grid-x grid-padding-x align-center">
                                    <div class="small-6 cell">
                                        <?php echo $visionTitle; ?>
                                        <?php echo $visionSubTitle; ?>
                                        <?php echo $visionBody; ?>
                                        <button id="contact-button">Contact</button>
                                    </div>
                                    <div class="small-6 cell right-row">
                                        <?php echo wp_get_attachment_image($visionImage, 'small'); ?>
                                       
                                    </div>
                                </div>
                            
                               
                            </div>
                        </div>

    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>


</div>