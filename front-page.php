<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<img src="<?php echo file_get_contents("assets/images/src/Group-34.png"); ?>"></img>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
<?php
$imageID = get_field('hero_image');
$size = 'full';

if ($imageID) {
    echo wp_get_attachment_image($imageID, $size);
}
?>





</body>








<div id="content" class="content">

    <div class="inner-content">

        <main id="main" class="main" role="main">
           <div class="hero">
                <div class="archive-wrapper">
					<div class="grid-container">
						<div class="grid-x align-center">
							<div class="medium-10 grid-x grid-padding-x align-middle">
								<div class="medium-6 cell">
                                <header>
                                   
                                   
                                </header>
							    </div>
                            </div>	
						</div>
					</div>
				</div>
           </div>
            

          
            <?php get_template_part('parts/content-blocks/dial'); ?>
            <?php get_template_part('parts/content-blocks/content_grid'); ?>

      

            <?php get_template_part('parts/content-blocks/content_slider'); ?>
<!-- Slider main container -->

  <!-- If we need pagination -->
  <!-- <div class="swiper-pagination"></div> -->

  <!-- If we need navigation buttons
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div> -->

  <!-- If we need scrollbar -->
  <!-- <div class="swiper-scrollbar"></div>
</div> -->



        </main> <!-- end #main -->

        <?php get_template_part('parts/content-blocks/light-reading-block'); ?>

<div id="form-container">
    <div id="gravityFormPopup">
        <?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
    </div>
</div>
        

    </div> <!-- end #inner-content -->
    <?php $footerText = get_field('footer_text') ?>

    <?php get_footer(null, $footerText); ?>

    
    </div> <!-- end #content -->
    <?php wp_link_pages(); ?>
    <div id="logo-footer">
        <?php get_template_part('parts/content-blocks/logo-footer'); ?>
</div>