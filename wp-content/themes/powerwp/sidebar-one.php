<?php
/**
* The file for displaying the left sidebar.
*
* @package PowerWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div class='powerwp-sidebar-one-wrapper' id='powerwp-sidebar-one-wrapper' itemscope='itemscope' itemtype='http://schema.org/WPSideBar' role='complementary'>
<div class='theiaStickySidebar'>
<div class='powerwp-sidebar-one-wrapper-inside clearfix'>
<div class='powerwp-sidebar-content' id='powerwp-left-sidebar'>
<?php dynamic_sidebar( 'powerwp-left-sidebar' ); ?>
</div>
</div>
</div>
</div>