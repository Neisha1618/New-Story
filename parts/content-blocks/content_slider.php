<?php
$size = 'thumbnail';
?>

<div class="content-slider content-block">
	<div class="grid-container">
		<?php if (have_rows('slide')): ?>
			<div class="content-slider-container">
				<?php while (have_rows('slide')):
					the_row(); ?>
					<div class="slide grid-x grid-padding-x">
						<div class="small-12 cell">
							<?php $content = get_sub_field('content'); ?>
							<?php echo $content ?>
						</div>
					</div>
				<?php endwhile ?>
			</div>
		<?php endif ?>
	</div>
</div>


<div class="sponsor-slider">
	<?php if (have_rows('sponsors')): ?>
		<div class="swiper">
			<?php while (have_rows('sponsors')):
				the_row();
				$sponsorTitle = get_sub_field('sponsor_title');
				$image = get_sub_field('sponsor_logo')
					?>
				<h2><?php echo $sponsorTitle ?></h2>
				<div class="swiper-wrapper">
					<!-- Slides -->
					<?php foreach ($image as $imageID): ?>
						<div class="swiper-slide">
							<?php echo wp_get_attachment_image($imageID . $size) ?>
						</div>
					<?php endforeach ?>
				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>


			<?php endwhile ?>
		</div>
	<?php endif; ?>
</div>

<div class="endorsers-slider">
	<?php if (have_rows('endorsers')): ?>
		<div class="swiper">
			<?php while (have_rows('endorsers')):
				the_row();
				$endorserTitle = get_sub_field('endorser_title');
				$image = get_sub_field('endorser_logo');
				?>
				<h2>
					<?php echo $endorserTitle ?>
				</h2>
				<div class="swiper-wrapper">
					<!-- Slides -->
					<?php foreach ($image as $imageID): ?>
						<div class="swiper-slide">
							<?php echo wp_get_attachment_image($imageID, $size); ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endwhile ?>
		</div>
	<?php endif; ?>
</div>