<?php
/**
 * Property Basic Information Meta Fields
 *
 */

// Exit if accessed directly.
if ( ! defined('ABSPATH') ) {
    exit;
}

class Cre_Property_Basic_Fields {

    public static $_instance;

    public function __construct() {

        add_action('rwmb_meta_boxes', array($this, 'meta_boxes'));
    }

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Contains property related meta box declarations
     *
     * @param array $meta_boxes
     *
     * @return array
     */
    public function meta_boxes($meta_boxes) {

        $fields = [
            [
                'id'      => 'cre_property_price',
                'name'    => esc_html__('Sale or Rent Price ( Only digits )', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 12500', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_old_price",
                'name'    => esc_html__('Old Price If Any ( Only digits )', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 14500', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => 'cre_property_price_prefix',
                'name'    => esc_html__('Price Prefix', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: From', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_price_postfix",
                'name'    => esc_html__('Price Postfix', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: Monthly or Per Night', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_size",
                'name'    => esc_html__('Area Size ( Only digits )', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 2500', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_size_postfix",
                'name'    => esc_html__('Area Size Postfix', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: sq ft', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_lot_size",
                'name'    => esc_html__('Lot Size ( Only digits )', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 3000', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_lot_size_postfix",
                'name'    => esc_html__('Lot Size Postfix', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: sq ft', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_bedrooms",
                'name'    => esc_html__('Bedrooms', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 4', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_bathrooms",
                'name'    => esc_html__('Bathrooms', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 2', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'      => "cre_property_garage",
                'name'    => esc_html__('Garages or Parking Spaces', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 1', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ],
            [
                'id'         => "cre_property_id",
                'name'       => esc_html__('Property ID', 'crucial-real-estate'),
                'desc'       => esc_html__('It will help you search a property directly.', 'crucial-real-estate'),
                'type'       => 'text',
                'std'        => ('true' === get_option('cre_auto_property_id_check')) ? esc_html(get_option('cre_auto_property_id_pattern')) : '',
                'attributes' => array(
                    'readonly' => ('true' === get_option('cre_auto_property_id_check')) ? true : false,
                )
            ],
            [
                'id'      => "cre_property_year_built",
                'name'    => esc_html__('Year Built', 'crucial-real-estate'),
                'desc'    => esc_html__('Example: 2017', 'crucial-real-estate'),
                'type'    => 'text',
                'std'     => ''
            ]
        ];

        if ( in_array( get_option( 'template' ), cre_get_core_supported_themes(), true ) ) {

            $fields = array_merge( $fields,
                [
                    [
                        'name'    => esc_html__('Mark this property as featured ?', 'crucial-real-estate'),
                        'id'      => "cre_featured",
                        'type'    => 'radio',
                        'std'     => '0',
                        'options' => array(
                            '1' => esc_html__('Yes', 'crucial-real-estate'),
                            '0' => esc_html__('No', 'crucial-real-estate'),
                        )
                    ]
                ]

            );
        }

        $fields = array_merge( $fields,
            [
                [
                    'id'         => 'cre_additional_details_list',
                    'name'       => esc_html__('Additional Details', 'crucial-real-estate'),
                    'type'       => 'text_list',
                    'desc'      => wp_kses(__('To add more field, please use our official <a href="https://aarambhathemes.com/themes/real-home-pro/" target="_blank">Real Home Pro</a> theme offer by <a href="https://aarambhathemes.com/" target="_blank">Aarambhathemes</a>', 'crucial-real-estate'), array(
                        'a' => array(
                            'href'   => array(),
                            'target' => array(),
                        ),
                    )),
                    'max_clone'  => 4,
                    'clone'      => true,
                    'sort_clone' => true,
                    'options'    => array(
                        esc_html__('Title', 'crucial-real-estate') => esc_html__('Title', 'crucial-real-estate'),
                        esc_html__('Value', 'crucial-real-estate') => esc_html__('Value', 'crucial-real-estate'),
                    ),
                ]
            ]

        );

        // Property meta boxes
        $meta_boxes[] = array(
            'id'            => 'property-basic-information',
            'title'         => esc_html__('Basic Information', 'crucial-real-estate'),
            'post_types'    => ['property'],
            'context'       => 'normal',
            'priority'      => 'high',
            'fields'        => $fields,
        );

        return apply_filters('cre_property_basic_fields', $meta_boxes);
    }
}

/**
 * Initialize cre property basic fields class.
 */
function cre_property_basic_fields() {
    return Cre_Property_Basic_Fields::instance();
}
cre_property_basic_fields();
