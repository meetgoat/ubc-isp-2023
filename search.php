<?php
/**
 * Search Template
 *
 * The search template is loaded when a visitor uses the search form to search for something
 * on the site.
 *
 * @package UBC Collab ISP Child Theme
 */

get_header(); // Loads the header.php template.
$content_class = ( isset( $content_class ) ) ? $content_class : '';
?>
<div class="isp-search-header">
	<div class="isp-search-header__inner">
		<div class="isp-search__background">
			<div class="isp-search__background__container">
				<div class="isp-search__background__inner"
					style="background:linear-gradient(275deg,rgb(248,244,238) 0%,rgb(252,251,249) 100%)"></div>
			</div>
		</div>
		<div class="isp-search__container wp-block-columns is-layout-flex wp-container-8">
			<div class="wp-block-column is-layout-flow">

				<div class="breadcrumb expand" itemprop="breadcrumb">
					<span class="trail-begin">
						<a href="<?php esc_url( site_url() ); ?>" 
							title="<?php echo esc_attr( __( 'Home', 'ubc_collab' ) ); ?>">
							<?php esc_html( __( 'Home', 'ubc_collab' ) ); ?>
						</a>
					</span>
					<span class="divider">/</span>
					<span class="trail-end">Search</span>
				</div>

				<div class="wp-block-group isp-header--content is-layout-constrained wp-container-4">
					<h1 class="wp-block-heading has-isp-bistre-color has-text-color has-x-large-font-size">Search</h1>
					<p class="has-isp-bistre-color has-text-color"
						style="font-size:18px;font-style:normal;font-weight:500">Lorem ipsum dolor sit amet consectetur.
						Posuere pulvinar elit at amet tincidunt velit amet volutpat.</p>
				</div>
				<form role="search" method="get" action="" class="wp-block-search__button-inside wp-block-search__text-button wp-block-search"><label
						for="wp-block-search__input-5" class="wp-block-search__label screen-reader-text">Search</label>
					<div class="wp-block-search__inside-wrapper " style="width: 100%">
						<input type="search" id="wp-block-search__input-5" class="wp-block-search__input" name="s"
							value="<?php the_search_query(); ?>" placeholder="Search by Keyword" required="">
						<button type="submit" class="wp-block-search__button wp-element-button">Search</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="content" class="isp-search-results">
	<div class="isp-search__container wp-block-columns is-layout-flex wp-container-8">
		<div class="wp-block-column is-layout-flow">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<a class="isp-search-result" id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"
						title="<?php the_title_attribute(); ?>">
						<h5 class="isp-search-result__title">
							<?php the_title(); ?>
						</h5>
						<?php
						global $post;
						$post_obj = $post;
						$crumbs   = array();
						?>

						<?php
						while ( $post_obj->post_parent > 0 ) :
							$post_obj = get_post( $post_obj->post_parent );
							$crumbs[] = get_the_title( $post_obj->ID );
							array_reverse( $crumbs );
							?>
						<?php endwhile; ?>

						<div class="breadcrumb expand" itemprop="breadcrumb">
							<?php foreach ( $crumbs as $crumb ) : ?>
								<span class="trail-begin">
									<span>
										<?php echo esc_html( $crumb ); ?>
									</span>
								</span>
								<span class="divider">/</span>
							<?php endforeach; ?>
							<!-- <span class="trail-end"><?php the_title(); ?></span> -->
						</div>
						<div class="isp-search-result__text">
							<?php the_excerpt(); ?>
						</div>
					</a>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'loop-error' ); ?>
			<?php endif; ?>
			<?php do_atomic( 'after_content' ); ?>
		</div>
	</div>
</div><!-- .content .hfeed -->
<?php get_footer(); ?>
