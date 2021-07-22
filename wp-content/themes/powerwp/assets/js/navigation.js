/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
    var powerwp_primary_container, powerwp_primary_button, powerwp_primary_menu, powerwp_primary_links, powerwp_primary_i, powerwp_primary_len;

    powerwp_primary_container = document.getElementById( 'powerwp-primary-navigation' );
    if ( ! powerwp_primary_container ) {
        return;
    }

    powerwp_primary_button = powerwp_primary_container.getElementsByTagName( 'button' )[0];
    if ( 'undefined' === typeof powerwp_primary_button ) {
        return;
    }

    powerwp_primary_menu = powerwp_primary_container.getElementsByTagName( 'ul' )[0];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof powerwp_primary_menu ) {
        powerwp_primary_button.style.display = 'none';
        return;
    }

    powerwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
    if ( -1 === powerwp_primary_menu.className.indexOf( 'nav-menu' ) ) {
        powerwp_primary_menu.className += ' nav-menu';
    }

    powerwp_primary_button.onclick = function() {
        if ( -1 !== powerwp_primary_container.className.indexOf( 'powerwp-toggled' ) ) {
            powerwp_primary_container.className = powerwp_primary_container.className.replace( ' powerwp-toggled', '' );
            powerwp_primary_button.setAttribute( 'aria-expanded', 'false' );
            powerwp_primary_menu.setAttribute( 'aria-expanded', 'false' );
        } else {
            powerwp_primary_container.className += ' powerwp-toggled';
            powerwp_primary_button.setAttribute( 'aria-expanded', 'true' );
            powerwp_primary_menu.setAttribute( 'aria-expanded', 'true' );
        }
    };

    // Get all the link elements within the menu.
    powerwp_primary_links    = powerwp_primary_menu.getElementsByTagName( 'a' );

    // Each time a menu link is focused or blurred, toggle focus.
    for ( powerwp_primary_i = 0, powerwp_primary_len = powerwp_primary_links.length; powerwp_primary_i < powerwp_primary_len; powerwp_primary_i++ ) {
        powerwp_primary_links[powerwp_primary_i].addEventListener( 'focus', powerwp_primary_toggleFocus, true );
        powerwp_primary_links[powerwp_primary_i].addEventListener( 'blur', powerwp_primary_toggleFocus, true );
    }

    /**
     * Sets or removes .focus class on an element.
     */
    function powerwp_primary_toggleFocus() {
        var self = this;

        // Move up through the ancestors of the current link until we hit .nav-menu.
        while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

            // On li elements toggle the class .focus.
            if ( 'li' === self.tagName.toLowerCase() ) {
                if ( -1 !== self.className.indexOf( 'powerwp-focus' ) ) {
                    self.className = self.className.replace( ' powerwp-focus', '' );
                } else {
                    self.className += ' powerwp-focus';
                }
            }

            self = self.parentElement;
        }
    }

    /**
     * Toggles `focus` class to allow submenu access on tablets.
     */
    ( function( powerwp_primary_container ) {
        var touchStartFn, powerwp_primary_i,
            parentLink = powerwp_primary_container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

        if ( 'ontouchstart' in window ) {
            touchStartFn = function( e ) {
                var menuItem = this.parentNode, powerwp_primary_i;

                if ( ! menuItem.classList.contains( 'powerwp-focus' ) ) {
                    e.preventDefault();
                    for ( powerwp_primary_i = 0; powerwp_primary_i < menuItem.parentNode.children.length; ++powerwp_primary_i ) {
                        if ( menuItem === menuItem.parentNode.children[powerwp_primary_i] ) {
                            continue;
                        }
                        menuItem.parentNode.children[powerwp_primary_i].classList.remove( 'powerwp-focus' );
                    }
                    menuItem.classList.add( 'powerwp-focus' );
                } else {
                    menuItem.classList.remove( 'powerwp-focus' );
                }
            };

            for ( powerwp_primary_i = 0; powerwp_primary_i < parentLink.length; ++powerwp_primary_i ) {
                parentLink[powerwp_primary_i].addEventListener( 'touchstart', touchStartFn, false );
            }
        }
    }( powerwp_primary_container ) );
} )();