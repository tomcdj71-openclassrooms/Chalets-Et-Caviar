<?php
/**
 * Template part for displaying property post of video section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Real_Home
 */

$video_group = get_post_meta( get_the_ID(), 'cre_video_group', true );

if ( $video_group && !empty($video_group[0]['cre_video_group_url']) ) : ?>
    <div class="video-section entry-content">
        <h4><?php esc_html_e( 'Video', 'crucial-real-estate' ); ?></h4>
        <?php foreach ( $video_group as $video ) : ?>
            <div class="video-container">
                <?php if ( isset( $video['cre_video_group_title'] ) ) : ?>
                    <span class="video-heading"><?php echo esc_html( $video['cre_video_group_title'] ); ?></span>
                <?php endif; ?>
                <?php if ( isset( $video['cre_video_group_url'] ) ) :
                    CRE_Video::get_video( $video['cre_video_group_url'] );
                endif; ?>
            </div>
        <?php endforeach; ?>
    </div><!-- .video-section -->
<?php endif;
