<?php
/**
 * Singular Template
 *
 * WordPress currently supports custom post types displayed on the singular post level. This template
 * is a catchall template for the singular views of these posts. It should only be used as a backup or if
 * your custom post type doesn't require a custom structure. The template hierarchy for singular views
 * of post types is like so: $post_type-$template.php, $post_type-$slug.php, $post_type-$id.php,
 * $post_type.php, and singular.php.
 *
 * @package UBC Collab ISP Child Theme
 */

$content_class = ( empty( $content_class ) ) ? '' : $content_class;

get_header(); // Loads the header.php template. 
?>
	<div id="content" class="hfeed content <?php echo apply_filters('ubc_collab_content_class', $content_class, 'singular' ); ?>">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>">
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div><!-- .hentry -->
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>
		<?php endif; ?>
	</div><!-- .content .hfeed -->
<?php get_footer(); // Loads the footer.php template. ?>