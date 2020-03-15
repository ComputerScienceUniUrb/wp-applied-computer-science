jQuery(document).ready(function() {
    // Scrolling
    jQuery(window).scroll(function() {
        const isScrolling = jQuery(window).scrollTop() > 100;
        jQuery('#page').toggleClass("scrolling", isScrolling);
    });

    // Sidemenu opening
    jQuery('header.site-header div.menu-toggler').on("click", function (event) {
        event.stopPropagation();

        console.log('Opening sidebar');
        jQuery('header.site-header>.sidebar').addClass('open');

        setTimeout(function() {
            jQuery('body').addClass('blocked'); // disable scroll
        }, 300);
    });
    jQuery('header.site-header div.sidebar div.menu-toggler').on("click", function (event) {
        event.stopPropagation();

        console.log('Closing sidebar');
        jQuery('header.site-header>.sidebar').removeClass('open');
        setTimeout(function() {
            jQuery('body').removeClass('blocked'); // enable scroll
        }, 300);
    });

    // Menu toggles for first level
    jQuery('ul > li.menu-item-has-children > a').on("click", function (event) {
        event.preventDefault();

        // Hover
        jQuery('ul > li.menu-item-has-children').removeClass('open');
        jQuery(this).parents('li').addClass('open');

        // Submenu
        jQuery('ul > li:not(.open) ul.sub-menu').slideUp('fast');
        jQuery(this).parent().children('ul.sub-menu').slideDown();
    });
});
