<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	<div id="content" class="content">
	
		<div class="inner-content">
	
		    <main id="main" class="main" role="main">

			<?php
				$imageID = get_field('pattern_pdf');
				if( $imageID ): 
					echo wp_get_attachment_image($imageID, 'full'); ?>
				<?php endif; ?>
									
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>