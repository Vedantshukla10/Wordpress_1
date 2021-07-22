<?php
/**
* Footer options
*
* @package PowerWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function powerwp_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_powerwp_footer', array( 'title' => esc_html__( 'Footer', 'powerwp' ), 'panel' => 'powerwp_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'powerwp_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'powerwp_sanitize_html', ) );

    $wp_customize->add_control( 'powerwp_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'powerwp' ), 'section' => 'sc_powerwp_footer', 'settings' => 'powerwp_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'powerwp_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'powerwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'powerwp_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'powerwp' ), 'section' => 'sc_powerwp_footer', 'settings' => 'powerwp_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

    $wp_customize->add_section( 'sc_powerwp_other', array( 'title' => esc_html__( 'Other Options', 'powerwp' ), 'panel' => 'powerwp_main_options_panel', 'priority' => 860 ) );

    $wp_customize->add_setting( 'powerwp_options[enable_widgets_block_editor]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'powerwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'powerwp_enable_widgets_block_editor_control', array( 'label' => esc_html__( 'Enable Gutenberg Widget Block Editor', 'powerwp' ), 'section' => 'sc_powerwp_other', 'settings' => 'powerwp_options[enable_widgets_block_editor]', 'type' => 'checkbox', ) );
}