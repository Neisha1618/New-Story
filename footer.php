<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x">

		    				<div class="small-12 medium-4 cell">
								<div class="sm-links">
									<?php $fb = get_field('facebook_link', 'options'); $twitter = get_field('twitter_link', 'options'); $insta = get_field('instagram_link', 'options'); $linkedin = get_field('linkedin_link', 'options'); ?>
									<?php if($linkedin) : ?>
										<a href="<?php echo $linkedin ?>" title="linkedin" target="_blank">LinkedIn</a>
									<?php endif; ?>
									<?php if($twitter) : ?>
										<a href="<?php echo $twitter ?>" title="twitter" target="_blank">Twitter</a>
									<?php endif; ?>
									<?php if($fb) : ?>
										<a href="<?php echo $fb ?>" title="facebook" target="_blank">Facebook</a>
									<?php endif; ?>
									<?php if($insta) : ?>
										<a href="<?php echo $insta ?>" title="instagram" target="_blank">Instagram</a>
									<?php endif; ?>
								</div>
								
		    				</div>
							
							<div class="small-12 medium-12 large-12 cell">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
							</div>
						
						</div> <!-- end #inner-footer -->
					</div>
					<div>
						<?php $footerText= get_field('footer_text', 'option'); 
						 echo $footerText;
						?>
					</div>
					<button id="openPopupBtn">Signup</button>
					
					<div class="reveal" id="exampleModal1" data-reveal>
 
		<div id="form-container">
			
				<div id="gravityFormPopup">
					<?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
				</div>
			
		</div>

		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>

<p><button class="button" data-open="exampleModal1">Click me for a modal</button></p>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->