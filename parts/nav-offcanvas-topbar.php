<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
  <div class="top-bar-left float-left">
    <img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/src/nav-logo.svg"  />
    <ul class="menu">
    </ul>
  </div>
  <div class="top-bar-right show-for-medium">
    <?php joints_top_nav(); ?>
  </div>
  <div class="top-bar-right float-right show-for-small-only">
    <ul class="menu">
      <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
    </ul>
   
  </div>
  <iframe class="nav-social" src="<?php echo get_template_directory_uri(); ?>/assets/images/src/social-media.svg" frameBorder="0"></iframe>
</div>

