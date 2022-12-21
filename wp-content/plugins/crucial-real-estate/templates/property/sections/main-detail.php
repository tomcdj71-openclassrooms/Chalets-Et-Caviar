<?php
/**
 * Template part for displaying property post of main detail[property-meta] section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Home
 */

$bedrooms   = get_post_meta( get_the_ID(), 'cre_property_bedrooms', true );
$bathrooms  = get_post_meta( get_the_ID(), 'cre_property_bathrooms', true );
$garage     = get_post_meta( get_the_ID(), 'cre_property_garage', true );
$area_size  = get_post_meta( get_the_ID(), 'cre_property_size', true );
$build_year = get_post_meta( get_the_ID(), 'cre_property_year_built', true );

if ( $bedrooms || $bathrooms || $garage || $area_size || $build_year ) :
?>
<div class="property-meta entry-meta single-property-section entry-content">

    <h4><?php esc_html_e( 'Main Detail', 'crucial-real-estate' ); ?></h4>

    <?php if ( $bedrooms ) : ?>
        <div class="meta-wrapper">
                <span class="meta-icon">
                    <i class="fas fa-bed"></i>
                </span>
            <span class="meta-value"><?php echo esc_html( $bedrooms ); ?></span>
            <span class="meta-unit"><?php esc_html_e( 'bedroom', 'crucial-real-estate' ); ?></span>
        </div>
    <?php endif; ?>

    <?php if ( $bathrooms ) : ?>
        <div class="meta-wrapper">
                <span class="meta-icon">
                    <i class="fas fa-bath"></i>
                </span>
            <span class="meta-value"><?php echo esc_html( $bathrooms ); ?></span>
            <span class="meta-unit"><?php esc_html_e( 'bathroom', 'crucial-real-estate' ); ?></span>
        </div>
    <?php endif; ?>

    <?php if ( $garage ) : ?>
        <div class="meta-wrapper">
                <span class="meta-icon">
                    <i class="fas fa-home"></i>
                </span>
            <span class="meta-value"><?php echo esc_html( $garage ); ?></span>
            <span class="meta-unit"><?php esc_html_e( 'garage', 'crucial-real-estate' ); ?></span>
        </div>
    <?php endif; ?>

    <?php if ( $area_size ) : ?>
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

    <?php if ( $build_year ) : ?>
        <div class="meta-wrapper">
                <span class="meta-icon">
                    <i class="far fa-calendar-alt"></i>
                </span>
            <span class="meta-unit"><?php esc_html_e( 'year built', 'crucial-real-estate' ); ?></span>
            <span class="meta-value"><?php echo esc_html( $build_year ); ?></span>

        </div>
    <?php endif; ?>
</div><!-- .property-meta entry-meta -->
<?php endif;