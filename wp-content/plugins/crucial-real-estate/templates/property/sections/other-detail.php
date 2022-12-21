<?php
/**
 * Template part for displaying property post of other detail section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Home
 */

$property_id        = get_post_meta( get_the_ID(), 'cre_property_id', true );
$lot_size           = get_post_meta( get_the_ID(), 'cre_property_lot_size', true );
$build_year         = get_post_meta( get_the_ID(), 'cre_property_year_built', true );
$additional_details = get_post_meta( get_the_ID(), 'cre_additional_details_list', true );

/* Property Price */
$property_price = null;
$property_price = cre_get_property_price( get_the_ID(), true );
if ( $property_id || $lot_size || $build_year || $additional_details || $property_price ) :
?>
<div class="property-other-detail single-property-section entry-content">

    <h4><?php esc_html_e( 'Others Detail', 'crucial-real-estate' ); ?></h4>

    <ul>
        <?php if ( $property_id ) : ?>
            <li>
                <span class="other-detail-heading"><?php esc_html_e( 'property Id:', 'crucial-real-estate' ); ?></span>
                <span class="other-detail-info"><?php echo esc_html( $property_id ); ?></span>
            </li>
        <?php endif; ?>

        <?php if ( $property_price ) : ?>
            <li>
                <span class="other-detail-heading"><?php esc_html_e( 'Price:', 'crucial-real-estate' ); ?></span>
                <span class="other-detail-info">
                    <?php
                        echo wp_kses( $property_price, array(
                            'span' => array( 'class' => array() ),
                            'ins'  => array( 'class' => array() ),
                            'del'  => array( 'class' => array() ),
                        ) );
                    ?></span>
            </li>
        <?php endif; ?>

        <?php if ( $lot_size ) :
            $property_lot_size = $lot_size;
            if ( $lot_size_suffix = get_post_meta( get_the_ID(), 'cre_property_lot_size_postfix', true ) ) {
                $property_lot_size .= ' ' . $lot_size_suffix;
            }
            ?>
            <li>
                <span class="other-detail-heading"><?php esc_html_e( 'Property Lot Size:', 'crucial-real-estate' ); ?></span>
                <span class="other-detail-info"><?php echo esc_html( $property_lot_size ); ?></span>
            </li>
        <?php endif; ?>

        <?php if ( $build_year ) : ?>
            <li>
                <span class="other-detail-heading"><?php esc_html_e( 'year built:', 'crucial-real-estate' ); ?></span>
                <span class="other-detail-info"><?php echo esc_html( $build_year ); ?></span>
            </li>
        <?php endif; ?>

        <?php if ( $additional_details ) : ?>

            <?php foreach ( $additional_details as $detail ) : ?>
                <li>
                    <span class="other-detail-heading"><?php echo esc_html( $detail[0] ); ?>:</span>
                    <span class="other-detail-info"><?php echo esc_html( $detail[1] ); ?></span>
                </li>
            <?php endforeach; ?>

        <?php endif; ?>
    </ul>
</div><!-- .property-other-detail -->
<?php endif;