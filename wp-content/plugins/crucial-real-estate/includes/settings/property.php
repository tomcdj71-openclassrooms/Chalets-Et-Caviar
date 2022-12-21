<?php
/**
 * Property settings
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$cre_auto_property_id_check   = $this->get_option('cre_auto_property_id_check', 'true');
$cre_auto_property_id_pattern = $this->get_option('cre_auto_property_id_pattern', 'CRE-{ID}');

if (isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'cre_settings')) {
    update_option('cre_auto_property_id_check', sanitize_text_field($cre_auto_property_id_check));
    update_option('cre_auto_property_id_pattern', sanitize_text_field($cre_auto_property_id_pattern));
    $this->notice();
}
?>
<div class="cre-admin-page-content">
    <form method="post" action="" novalidate="novalidate">
        <table class="form-table">
            <tbody>
            <tr>
                <th scope="row"><?php esc_html_e('Enable Auto-Generated Property ID', 'crucial-real-estate'); ?></th>
                <td>
                    <fieldset>
                        <label>
                            <input type="radio" name="cre_auto_property_id_check" value="true" <?php checked($cre_auto_property_id_check, 'true') ?>>
                            <span><?php esc_html_e('Enable', 'crucial-real-estate'); ?></span>
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="cre_auto_property_id_check" value="false" <?php checked($cre_auto_property_id_check, 'false') ?>>
                            <span><?php esc_html_e('Disable', 'crucial-real-estate'); ?></span>
                        </label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="cre_auto_property_id_pattern"><?php esc_html_e('Auto-Generated Property ID Pattern', 'crucial-real-estate') ?></label>
                </th>
                <td>
                    <input name="cre_auto_property_id_pattern" type="text" id="cre_auto_property_id_pattern" value="<?php echo esc_attr($cre_auto_property_id_pattern); ?>" class="regular-text code">
                    <p class="description">
                        <strong><?php esc_html_e('Important: ', 'crucial-real-estate') ?></strong><?php esc_html_e('Please use {ID} in your pattern as it will be replaced by the Property ID.', 'crucial-real-estate'); ?>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="submit">
            <?php wp_nonce_field('cre_settings'); ?>
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php esc_attr_e('Save Changes', 'crucial-real-estate'); ?>">
        </div>
    </form>
</div>