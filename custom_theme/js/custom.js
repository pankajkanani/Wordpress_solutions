
jQuery(document).ready(function () {
    //console.log( "document ready!" );

    var jQuerysticky = jQuery('.sticky');
    var jQuerystickyrStopper = jQuery('.sticky-stopper');
    if (!!jQuerysticky.offset()) { // make sure ".sticky" element exists

        var generalSidebarHeight = jQuerysticky.innerHeight();
        var stickyTop = jQuerysticky.offset().top;
        var startpoint = jQuery('.tsorro_app_middle').offset().top;
        var stickOffset = 0;
        var banner = jQuery('.tsorro_app_banner').offset().top;
        var stickyStopperPosition = jQuerystickyrStopper.offset().top;
        var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
        var diff = stopPoint + stickOffset;

        jQuery(window).scroll(function () { // scroll event
            var windowTop = jQuery(window).scrollTop(); // returns number

            if (stopPoint < windowTop) {
                jQuerysticky.removeClass('active');
            } else if (startpoint < windowTop) {
                //jQuerysticky.css({ position: 'fixed',opacity: '1',visibility: 'visible',top: stickOffset });
                jQuerysticky.addClass('active');
            } else {
                //jQuerysticky.css({position: 'absolute', top: 'initial'});
                jQuerysticky.removeClass('active');
            }
        });

    }
});


jQuery(document).ready(function () {

    //our_team_box
    jQuery(".first").click(function () {
        jQuery(".our_team_box").removeClass("active");
        jQuery(this).closest(".our_team_box").addClass("active");
    });
    jQuery(".close_info").click(function () {
        jQuery(".our_team_box").removeClass("active");
    });
    //our_team_box


    jQuery(".app_row_sub .go_work_btn a").click(function () {
        jQuery(this).parents('.container').siblings(".app_video_open").slideDown();
        //jQuery(".app_video_open").slideDown();
        return false;
    });
    jQuery(".back_app a").click(function () {
        jQuery(this).parents('.app_video_open').slideUp();
        //jQuery(".app_video_open").slideUp();
        return false;
    });


    // next div target
    jQuery('a').click(function () {
        var targetDiv = jQuery(this).attr('href');
        if (targetDiv.charAt(0) == '#') {
            jQuery('html, body').animate({
                scrollTop: jQuery(targetDiv).offset().top - 0
            }, 800);
            return false;
        }
    });

    jQuery(".registration_cv #cv_click").click(function () {
        jQuery(".registration_form").show();
    });


    jQuery('.contact_btn').click(function () {
        jQuery('body').addClass('overflow_body_menu');
        jQuery('.contactform_overlay').addClass('contactform_show');

    });
    jQuery('.close_form').click(function () {
        jQuery('body').removeClass('overflow_body_menu');
        jQuery('.contactform_overlay').removeClass('contactform_show');
    });

    var owl = jQuery(".costumers_logos");
    owl.owlCarousel({
        items: 6, //10 items above 1000px browser width
        nav: false,
        navigation: false,
        pagination: false,
        touchDrag: true,
        paginationSpeed: 500,
        dots: false,
        margin: 20,
        loop: true,
        mouseDrag: true,
        autoplay: true,
        navText: false,
        responsive: {
            1200: {
                items: 6
            },
            768: {
                items: 5
            },
            640: {
                items: 4
            },
            300: {
                items: 3
            }
        }
    });

    jQuery('.list_tag h3').click(function (e) {
        e.preventDefault();

        var jQuerythis = jQuery(this);
        if (jQuerythis.parent().find('.list_info').hasClass('active')) {
            jQuerythis.toggleClass('active').parent().find('.list_info').removeClass('active');
            //jQuerythis.parent().find('.toggle_footer_menu').removeClass('show');
            jQuerythis.parent().find('.list_info').slideUp(350);

        } else {
            jQuery('.list_tag h3').removeClass('active');
            jQuery('.list_info').slideUp(350).removeClass('active');
            jQuerythis.parent().parent().find('li .inner').removeClass('active');
            jQuerythis.toggleClass('active').parent().parent().find('li .inner').removeClass('active');
            jQuerythis.parent().parent().find('li .inner').slideUp(350);
            jQuerythis.parent().find('.list_info').toggleClass('active');
            jQuerythis.parent().find('.list_info').slideToggle(350);
        }
    });

    jQuery('.list_tag h4').click(function (e) {
        e.preventDefault();

        var jQuerythis = jQuery(this);
        if (jQuerythis.parent().find('.list_info_sub').hasClass('active')) {
            jQuerythis.toggleClass('active').parent().find('.list_info_sub').removeClass('active');
            //jQuerythis.parent().find('.toggle_footer_menu').removeClass('show');
            jQuerythis.parent().find('.list_info_sub').slideUp(350);

        } else {
            jQuery('.list_tag h4').removeClass('active');
            jQuery('.list_info_sub').slideUp(350).removeClass('active');
            jQuerythis.parent().parent().find('li .inner').removeClass('active');
            jQuerythis.toggleClass('active').parent().parent().find('li .inner').removeClass('active');
            jQuerythis.parent().parent().find('li .inner').slideUp(350);
            jQuerythis.parent().find('.list_info_sub').toggleClass('active');
            jQuerythis.parent().find('.list_info_sub').slideToggle(350);
        }
    });
//    counter
    jQuery('.counter').counterUp({
        delay: 10,
        time: 1000
    });

});
//menu
jQuery("body").click(function (e) {
    if (jQuery(e.target).parents(".respo_btn").length || jQuery(e.target).parents(".head_menu.show-menu").length) {
        //console.log('open');
    } else {
        jQuery('body').removeClass('overflow_body');
        jQuery('.head_menu').removeClass('show-menu');
        //console.log('close');
    }
});

jQuery('.respo_btn').click(function () {
    jQuery('body').addClass('overflow_body');
    jQuery('.head_menu').addClass('show-menu');

});

jQuery('.close_menu').click(function () {
    jQuery('.head_menu').removeClass('show-menu');
});

jQuery(".menu_links li a").each(function () {
    if (jQuery(this).next().length > 0) {
        jQuery(this).parent().addClass("parent");
        jQuery(this).after("<span class='parent_span icon fas fa-caret-right'>&nbsp;</span>");
    }
});
jQuery(".menu_links li").unbind('mouseenter mouseleave');
jQuery(".menu_links li span.parent_span").unbind('click').bind('click', function (e) {
    // must be attached to anchor element to prevent bubbling
    //e.preventDefault();

    jQuery(this).parent("li").toggleClass("hover");
    jQuery(this).parent("li").children("ul").slideToggle(300);
    jQuery(this).toggleClass("icon fas fa-caret-right");
    jQuery(this).toggleClass("icon fas fa-caret-down");
    jQuery(this).parent("li").siblings().children("ul").slideUp(300);
    jQuery(this).parent("li").siblings().children('.parent_span').addClass('fa-caret-right').removeClass('fa-caret-down');
});


jQuery(".right_sticky_menu  li a").click(function () {
    jQuery(".right_sticky_menu  li a").removeClass("active");
    jQuery(this).addClass('active'); // I also tried .parent().addClass
});   
    
jQuery(window).scroll(function() {
    var scrollDistance = jQuery(window).scrollTop()+5;

    jQuery('.app_row_sub').each(function(i) {
            if (jQuery(this).position().top <= scrollDistance) {

                    jQuery('.right_sticky_menu a.active').removeClass('active');
                    jQuery('.right_sticky_menu a').eq(i).addClass('active tessst');
            }
        });
}).scroll();

jQuery(".submit_form :checkbox").on('click', function(){
     jQuery('.submit_form .checkmark').toggleClass("checked");
});