jQuery(document).ready(function($) {

    if(powerwp_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var powerwpstickyNavTop = $('.powerwp-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var powerwpstickyNav = function(){
        var powerwpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative

        if(window.innerWidth > 1112) {
            if (powerwpscrollTop > powerwpstickyNavTop) {
                $('.powerwp-primary-menu-container').addClass('powerwp-fixed');
            } else {
                $('.powerwp-primary-menu-container').removeClass('powerwp-fixed'); 
            }
        }
    };

    powerwpstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        powerwpstickyNav();
    });
    }

    $(".powerwp-nav-primary .powerwp-primary-nav-menu").addClass("powerwp-primary-responsive-menu");

    $(".powerwp-primary-responsive-menu-icon").click(function(){
        $(this).next(".powerwp-nav-primary .powerwp-primary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".powerwp-nav-primary .powerwp-primary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".powerwp-primary-responsive-menu > li").removeClass("powerwp-primary-menu-open");
        }
    });

    $(".powerwp-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").toggleClass('powerwp-submenu-toggle').parent().toggleClass("powerwp-primary-menu-open");
        $(this).find(".children:first").toggleClass('powerwp-submenu-toggle').parent().toggleClass("powerwp-primary-menu-open");
    });

    $("div.powerwp-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").toggleClass('powerwp-submenu-toggle').parent().toggleClass("powerwp-primary-menu-open");
    });

    $(".post").fitVids();

    var scrollButtonEl = $( '.powerwp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.powerwp-scroll-top' ).fadeOut();
        } else {
            $( '.powerwp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );


    $('.powerwp-main-wrapper, .powerwp-sidebar-one-wrapper, .powerwp-sidebar-two-wrapper').theiaStickySidebar({
        containerSelector: ".powerwp-content-inner-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 1107,
    });

});