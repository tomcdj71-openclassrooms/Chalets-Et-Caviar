<?php
/**
 * Template part for displaying property post of feature section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Home
 */

$property_features = get_the_terms( get_the_ID(), 'property-feature');
if ( $property_features ) : ?>
    <div class="property-feature-detail single-property-section entry-content">
        <h4><?php esc_html_e( 'Features', 'crucial-real-estate' ); ?></h4>
        <ul>
            <?php foreach ( $property_features as $feature ) : ?>
                <li>
                    <?php echo esc_html( $feature->name ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div><!-- .property-feature-detail -->
<?php endif;