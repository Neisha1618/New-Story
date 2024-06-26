<?php
// Related Posts Function, matches posts by tags - call using joints_related_posts(); )
function joints_related_posts() {
	global $post;
	$tag_arr = '';
	$tags = wp_get_post_tags( $post->ID );
	$cats = get_the_category( $post->ID );
	$cat_arr = '';
	if($tags) {
		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 3, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
		echo __( '<h2>Read More</h2>', 'jointswp' );
		echo '<ul class="joints-related-posts">';
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<li class="related_post">
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<?php get_template_part( 'parts/content', 'byline' ); ?>
				</li>
			<?php endforeach; }
		echo '</ul>';
	} else {
		foreach( $cats as $cat ) {
			$cat_arr .= $cat->slug . ',';
		}
		$args = array(
			'category_name' => $cat_arr,
			'numberposts' => 3, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
		echo __( '<h2>Read More</h2>', 'jointswp' );
		echo '<ul class="joints-related-posts">';
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<li class="related_post">
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<?php get_template_part( 'parts/content', 'byline' ); ?>
				</li>
			<?php endforeach; }
		echo '</ul>';
		}
	wp_reset_postdata();
} /* end joints related posts function */