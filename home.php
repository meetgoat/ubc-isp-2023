<?php
/**
 * Archive Template
 *
 * The archive template is basically a placeholder for archives that don't have a template file.
 * Ideally, all archives would be handled by a more appropriate template according to the current
 * page context.
 *
 *
 */

get_header(); // Loads the header.php template.

$content_class = ( isset( $content_class ) ) ? $content_class : '';

?>

	<div id="content" class="hfeed content <?php echo apply_filters('ubc_collab_content_class', $content_class, 'archive' ); ?>">

		<?php do_atomic( 'before_content' ); // hybrid_before_content ?>

        <?php $blogPage = get_option('page_for_posts'); ?>
        <?php $blogPageContent = get_post($blogPage); ?>
        <?php $blogPageContent = apply_filters('the_content', $blogPageContent->post_content); ?>
        <?php echo $blogPageContent; ?>
		
<?php get_footer(); // Loads the footer.php template. ?>