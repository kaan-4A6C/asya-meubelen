jQuery(function($) {
    'use strict';
    $('.tile-progress .tile-header').matchHeight();
    var footerHeight = jQuery('#footer-wrapper').outerHeight();
    jQuery('#content-wrapper').css('margin-bottom', footerHeight);
    var windowsHeight = jQuery(window).height();
    var navHeight = jQuery('navbar-fixed-top').outerHeight();
    var newHeight = windowsHeight - navHeight + 30;
    jQuery('#main-slider').css('height', newHeight + 'px');
    jQuery('#single-page-slider').css('min-height', windowsHeight / 3 + 'px');
    $('.gototop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false,
        theme: 'light_square'
    });
    jQuery('.prevbg').click(function(x) {
        x.preventDefault();
        jQuery('body').data('backstretch').prev();
    });
    jQuery('.nextbg').click(function(x) {
        x.preventDefault();
        jQuery('body').data('backstretch').prev();
    });
});
$(window).scroll(function() {
    'use strict';
    var scroll_pos = 0;
    $(document).scroll(function() {
        var windowsHeight = $(window).height();
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > windowsHeight) {
            $('.navbar-fixed-top').removeClass('opaqued');
        } else {
            $('.navbar-fixed-top').addClass('opaqued');
        }
    });
    if (($(document).height() - $(window).height()) - $(window).scrollTop() < 1000) {
        $('#footer-wrapper').css('z-index', '4');
    } else {
        $('#footer-wrapper').css('z-index', '1');
    }
});
jQuery(document).ready(function($) {
    'use strict';
    var windowsHeight = $(window).height();
    scroll_pos = $(this).scrollTop();
    if (scroll_pos > windowsHeight) {
        $('.navbar-fixed-top').removeClass('opaqued');
    } else {
        $('.navbar-fixed-top').addClass('opaqued');
    }
    if (($(document).height() - $(window).height()) - $(window).scrollTop() < 1000) {
        $('#footer-wrapper').css('z-index', '4');
    } else {
        $('#footer-wrapper').css('z-index', '1');
    }
});
jQuery(document).ready(function($) {
    'use strict';
    jQuery('.fade-up, .fade-down, .bounce-in, .flip-in').addClass('no-display');
    jQuery('.bounce-in').one('inview', function() {
        jQuery(this).addClass('animated bounceIn appear');
    });
    jQuery('.flip-in').one('inview', function() {
        jQuery(this).addClass('animated flipInY appear');
    });
    jQuery('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    jQuery('.fade-up').one('inview', function() {
        jQuery(this).addClass('animated fadeInUp appear');
    });
    jQuery('.fade-down').one('inview', function() {
        jQuery(this).addClass('animated fadeInDown appear');
    });
});
$(document).ready(function() {
    'use strict';
    $('#quote-carousel').carousel({
        pause: true,
        interval: 8000,
    });
    $('#scroller').carousel({
        pause: true,
        interval: 8000,
    });
});
jQuery(document).ready(function($) {
    'use strict';
    $('#contactform').submit(function() {
        var action = $(this).attr('action');
        $("#message").slideUp(750, function() {
            $('#message').hide();
            $('#submit').attr('disabled', 'disabled');
            $.post(action, {
                name: $('#name').val(),
                email: $('#email').val(),
                telefoonnummer: $('#telefoonnummer').val(),
                comments: $('#comments').val()
            }, function(data) {
                document.getElementById('message').innerHTML = data;
                $('#message').slideDown('slow');
                $('#submit').removeAttr('disabled');
                if (data.match('success') != null) $('#contactform').slideUp('slow');
                $(window).trigger('resize');
            });
        });
        return false;
    });
    $('#reviewForm').submit(function() {
        var action = $(this).attr('action');
        $("#message").slideUp(750, function() {
            $('#reviewMessage').hide();
            $('#submit').attr('disabled', 'disabled');
            $.post(action, {
                name: $('#reviewName').val(),
                message: $('#reviewMessageInput').val()
            }, function(data) {
                document.getElementById('reviewMessage').innerHTML = data;
                $('#reviewMessage').slideDown('slow');
                $('#submit').removeAttr('disabled');
                if (data.match('success') != null) $('#reviewForm').slideUp('slow');
                $(window).trigger('resize');
            });
        });
        return false;
    });
});
jQuery(document).ready(function($) {
    'use strict';
    $(window).load(function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
    });
});
