jQuery(function($) {

    //Preloader
    var preloader = $('.preloader');
    $(window).load(function() {
        preloader.remove();
    });

    //#main-slider
    var slideHeight = $(window).height();
    $('#home-slider .item').css('height', slideHeight);

    $(window).resize(function() {
        'use strict',
        $('#home-slider .item').css('height', slideHeight);
    });

    //Scroll Menu
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > slideHeight) {
            $('.main-nav').addClass('navbar-fixed-top');
        } else {
            $('.main-nav').removeClass('navbar-fixed-top');
        }
    });

    // Navigation Scroll
    $(window).scroll(function(event) {
        Scroll();
    });

    $('.navbar-collapse ul li a').on('click', function() {
        $('html, body').animate({ scrollTop: $(this.hash).offset().top - 5 }, 1000);
        return false;
    });

    // User define function
    function Scroll() {
        var contentTop = [];
        var contentBottom = [];
        var winTop = $(window).scrollTop();
        var rangeTop = 200;
        var rangeBottom = 500;
        $('.navbar-collapse').find('.scroll a').each(function() {
            contentTop.push($($(this).attr('href')).offset().top);
            contentBottom.push($($(this).attr('href')).offset().top + $($(this).attr('href')).height());
        })
        $.each(contentTop, function(i) {
            if (winTop > contentTop[i] - rangeTop) {
                $('.navbar-collapse li.scroll')
                    .removeClass('active')
                    .eq(i).addClass('active');
            }
        })
    };

    $('#tohash').on('click', function() {
        $('html, body').animate({ scrollTop: $(this.hash).offset().top - 5 }, 1000);
        return false;
    });

    //Initiat WOW JS
    new WOW().init();
    //smoothScroll
    smoothScroll.init();

    // Progress Bar
    $('#about-us').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($('div.progress-bar'), function() {
                $(this).css('width', $(this).attr('aria-valuetransitiongoal') + '%');
            });
            $(this).unbind('inview');
        }
    });

    // Contact form
    var form = $('#main-contact-form');
    form.submit(function(event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');
        $.ajax({
            url: $(this).attr('action'),
            beforeSend: function() {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Enviando mensaje...</p>').fadeIn());
            }
        }).done(function(data) {
            form_status.html('<p class="text-success">Gracias por contactarnos, proto recibiras una respuesta.</p>').delay(3000).fadeOut();
        });
    });

});