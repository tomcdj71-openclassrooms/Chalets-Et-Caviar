<?php
/**
 * Template part for displaying property post of Gallery section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Home
 */

$images_id = get_post_meta( get_the_ID(), 'cre_property_images' );
if ( $images_id ) :
    ?>
    <div class="property-gallery single-property-section entry-content">
        <h4><?php esc_html_e( 'Gallery', 'crucial-real-estate' ); ?></h4>
        <div class="property-gallery-slider">
            <?php foreach ( $images_id as $img_id ) : $img_attr = wp_get_attachment_image_src( $img_id, 'full' ); ?>
                <figure>
                    <img src="<?php echo esc_url( $img_attr[0] ) ?>" alt="<?php esc_html_e( 'Gallery Image', 'crucial-real-estate' ); ?>">
                </figure>
            <?php endforeach; ?>
        </div>
    </div><!-- .property-gallery -->
<?php
endif;
