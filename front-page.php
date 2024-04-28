<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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

$hero_title = get_field('hero_title');
if ($hero_title):
?>
<div class="hero-title">
  <img class="hero-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/src/hero-logo.svg"/>
  <?php echo $hero_title; ?>
</div>
<?php
endif;
?>


<div class="image-container secondary-hero">
 <?php if (have_rows('secondary_hero')): ?>
    <?php $i = 1; ?>
    <?php while (have_rows('secondary_hero')):
      the_row(); ?>
      <!-- Background image -->

      <div class="image-wrapper image-<?php echo $i; ?>">
        <?php
        $imageID = get_sub_field('hero_gallery');
        $size = 'full';
        echo wp_get_attachment_image($imageID, $size, false, array('class' => 'background-image'));
        ?>
        <div class="overlay-image">
        </div>
      </div>
      <?php $i++; ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

</body>

<div id="content" class="content">

  <div class="inner-content">

    <main id="main" class="main" role="main">
      
      <?php get_template_part('parts/content-blocks/dial'); ?>
      <?php get_template_part('parts/content-blocks/content_grid'); ?>
      <?php get_template_part('parts/content-blocks/content_slider'); ?>
      
    </main> <!-- end #main -->
    <?php get_template_part('parts/content-blocks/light-reading-block'); ?>

  </div> <!-- end #inner-content -->

  <?php $footerText = get_field('footer_text') ?>
  <?php get_footer(null, $footerText); ?>

</div> <!-- end #content -->

<?php wp_link_pages(); ?>
<div id="logo-footer">
  <?php get_template_part('parts/content-blocks/logo-footer'); ?>
</div>
