<?php
/**
 * Template part for displaying property post of related posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Home
 */

$enable_related_posts = get_theme_mod(
    'real_home_property_related_posts_enable',
    ['desktop'=>'true']
);

if ( $enable_related_posts && array_key_exists( 'desktop', $enable_related_posts ) ) {
    global $post;
    $posts_limit = get_theme_mod(
        'real_home_property_related_posts_limit',
        ['desktop' => 3]
    );
    $args = array(
        'post_type'             => 'property',
        'post__not_in'          => [absint($post->ID)],
        'meta_query'            => [
                [
                    'key'           => 'cre_featured',
                    'value'         => '1'
                ]
        ],
        'posts_per_page'        => absint($posts_limit['desktop']),
        'no_found_rows'         => true,
        'ignore_sticky_posts'   => true
    );

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) : ?>
        <div class="related-post-section single-property-section">
			<h4><?php esc_html_e( 'Feature Listings', 'crucial-real-estate' ); ?></h4>
			<div class="row columns" data-columns="1" data-columns-md="2" data-columns-lg="3">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php
                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    cre_get_template_part('property/content.php');
                    ?>
				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>
			</div>
        </div><!-- .related-post-section -->
    <?php endif;
}
