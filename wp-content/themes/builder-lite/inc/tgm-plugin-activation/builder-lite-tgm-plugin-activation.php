<?php
require_once get_template_directory() . '/inc/tgm-plugin-activation/class-tgm-plugin-activation.php';

/**
 *plugins Required
 */
add_action('tgmpa_register', 'builder_lite_register_required_plugins');

function builder_lite_register_required_plugins()
{

    $plugins = array(
        array(
            'name'      => 'WPForms',
            'slug'      => 'wpforms-lite',
            'required'  => false,
        ),
        array(
            'name'      => 'Google Adsense',
            'slug'      => 'simple-google-adsense',
            'required'  => false,
        ),
        array(
            'name'      => 'Mailoptin - Email Newsletters',
            'slug'      => 'mailoptin',
            'required'  => false,
        ),
        array(
            'name' => esc_html__('Elementor Page Builder', 'builder-lite'),
            'slug' => 'elementor',
            'source' => '',
            'required' => false,
            'force_activation' => false,
        ), array(
            'name' => esc_html__('Themeegg ToolKit', 'builder-lite'),
            'slug' => 'themeegg-toolkit',
            'source' => '',
            'required' => false,
            'force_activation' => false,
        ),

    );

    $config = array(
        'id' => 'builder-lite',
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => false,
        'message' => '',
        'strings' => array()
    );

    tgmpa($plugins, $config);

}