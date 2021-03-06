<?php
/**
* Author bio box
*
* @package PowerWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function powerwp_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="powerwp-author-bio">
            <div class="powerwp-author-bio-top">
            <div class="powerwp-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </div>
            <div class="powerwp-author-bio-text">
                <h4>'.__( 'Author: ', 'powerwp' ).'<span>'. get_the_author_link() .'</span></h4>'. get_the_author_meta('description',get_query_var('author') ) .'
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}