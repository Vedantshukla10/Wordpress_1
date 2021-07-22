<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package PowerWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function powerwp_widgets_init() {

register_sidebar(array(
    'id' => 'powerwp-header-banner',
    'name' => esc_html__( 'Header Banner', 'powerwp' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'powerwp-left-sidebar',
    'name' => esc_html__( 'Sidebar 1', 'powerwp' ),
    'description' => esc_html__( 'This sidebar is located on the left-hand side of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-side-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-right-sidebar',
    'name' => esc_html__( 'Sidebar 2', 'powerwp' ),
    'description' => esc_html__( 'This sidebar is located on the right-hand side of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-side-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-1',
    'name' => esc_html__( 'Footer 1', 'powerwp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-2',
    'name' => esc_html__( 'Footer 2', 'powerwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-3',
    'name' => esc_html__( 'Footer 3', 'powerwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'powerwp-footer-4',
    'name' => esc_html__( 'Footer 4', 'powerwp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'powerwp' ),
    'before_widget' => '<div id="%1$s" class="powerwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="powerwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'powerwp_widgets_init' );