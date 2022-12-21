<?php
/**
 * Template part for displaying custom post property archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Home
 */

// Meta Data
$image_size = get_theme_mod(
    'real_home_property_archive_posts_image_size',
    ['desktop' => 'large']
);
$size = esc_html( $image_size['desktop'] );
?>

<div class="column">
    <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

        <div class="featured-image-wrapper">
            <?php cre_post_thumbnail( $size ); ?>
            <?php cre_display_property_label(); ?>
        </div><!-- .featured-image-wrapper -->

        <div class="post-detail-wrap">

            <?php
            $status_terms   = wp_get_post_terms( get_the_ID(), 'property-status', [ 'orderby' => 'term_order' ] );
            $type_terms     = wp_get_post_terms( get_the_ID(), 'property-type', [ 'orderby' => 'term_order' ] );
            if ( $status_terms || $type_terms ) : ?>
                <div class="post-tags-wrap">

                    <?php if ( $type_terms ) : ?>
                        <?php foreach ( $type_terms as $type_term ) : ?>
                            <a href="<?php echo esc_url( get_term_link( $type_term->slug, 'property-type' ) ); ?>" class="post-tags property-type-<?php echo esc_attr( $type_term->term_id ); ?>"><?php echo esc_html( $type_term->name ); ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if ( $status_terms ) : ?>
                        <?php foreach ( $status_terms as $status_term ) : ?>
                            <a href="<?php echo esc_url( get_term_link( $status_term->slug, 'property-status' ) ); ?>" class="post-tags property-status-<?php echo esc_attr( $status_term->term_id ); ?>"><?php echo esc_html( $status_term->name ); ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div><!-- .post-tags-wrap -->
            <?php endif; ?>

            <header class="entry-header">
				<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php cre_post_excerpt(); ?>
            </div><!-- .entry-content -->

            <div class="property-meta entry-meta">

                <?php if ( $bedrooms = get_post_meta( get_the_ID(), 'cre_property_bedrooms', true ) ) : ?>
                    <div class="meta-wrapper">
                    <span class="meta-icon">
                        <i class="fas fa-bed"></i>
                    </span>
                        <span class="meta-value"><?php echo esc_html( $bedrooms ); ?></span>
                        <span class="meta-unit"><?php esc_html_e( 'bedroom', 'crucial-real-estate' ); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ( $bathrooms = get_post_meta( get_the_ID(), 'cre_property_bathrooms', true ) ) : ?>
                    <div class="meta-wrapper">
                    <span class="meta-icon">
                        <i class="fas fa-bath"></i>
                    </span>
                        <span class="meta-value"><?php echo esc_html( $bathrooms ); ?></span>
                        <span class="meta-unit"><?php esc_html_e( 'bathroom', 'crucial-real-estate' ); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ( $garage = get_post_meta( get_the_ID(), 'cre_property_garage', true ) ) : ?>
                    <div class="meta-wrapper">
                    <span class="meta-icon">
                        <i class="fas fa-home"></i>
                    </span>
                        <span class="meta-value"><?php echo esc_html( $garage ); ?></span>
                        <span class="meta-unit"><?php esc_html_e( 'garage', 'crucial-real-estate' ); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ( $area_size = get_post_meta( get_the_ID(), 'cre_property_size', true ) ) : ?>
                    <div class="meta-wrapper">
                    <span class="meta-icon">
                        <i class="fas fa-chart-area"></i>
                    </span>
                        <span class="meta-value"><?php echo esc_html( $area_size ); ?></span>
                        <?php if ( $area_size_suffix = get_post_meta( get_the_ID(), 'cre_property_size_postfix', true ) ) : ?>
                            <span class="meta-unit"><?php echo esc_html( $area_size_suffix ); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div><!-- .entry-meta -->

            <div class="property-meta-info">
                <div class="properties-price">
                    <?php cre_property_price(); ?>
                </div>
                <div class="share-section">
                    <a href="javascript:void(0);" target="_self">
                        <i class="fa fa-share-alt"></i>
                    </a>
                    <div class="block-social-icons social-links">
						<?php cre_social_share(); ?>
                    </div>
                </div>
            </div><!-- .property-meta-info -->

        </div><!-- .post-detail-wrap -->

    </article><!-- #post-<?php the_ID(); ?> -->
</div>
