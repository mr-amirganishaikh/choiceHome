/*Add/remove class on scroll*/
var fixScrollNav = function (options) {
    // Target declaration
    var target = options.target;

    // offset and offsetHeight declaration
    var offset = options.offset;
    var offsetHeight = 0;

    if (isNaN(offset)) {
        offsetHeight = $(offset).outerHeight();
    } else {
        offsetHeight = offset;
    }

    if (options.minusHeader === true) {
        offsetHeight = offsetHeight - $(target).outerHeight();
    } else {
        return true;
    }

    if ($(window).scrollTop() > offsetHeight) {
        $(target).addClass("scrollFixed");
    } else {
        $(target).removeClass("scrollFixed");
    }
};

/* Initiation of function on window scroll */
$(window).scroll(function () {
    // Add class on scroll
    fixScrollNav({
        target: 'header',
        offset: '.banner-gap',
        minusHeader: true
    });
});

$(document).ready(function () {
    $("#navigation-toggle").on("click", function () {
        if ($(this).hasClass("closeMenu")) {
            $(this).toggleClass("closeMenu openMenu");
            $(this).find(".sortIcon").addClass("hidden");
            $(this).find(".clearIcon").removeClass("hidden");
            $("#main-navigation").addClass("active");
            $("body").addClass("active");
        } else {
            $(this).toggleClass("closeMenu openMenu");
            $(this).find(".sortIcon").removeClass("hidden");
            $(this).find(".clearIcon").addClass("hidden");
            $("#main-navigation").removeClass("active");
            $("body").removeClass("active");
        }
    });

    $(function () {
        var body = $('#home-banner');
        var backgrounds =new Array(
        'url(http://grandetest.com/theme/agra-html/images/sliders/img01.jpg)',
        'url(http://grandetest.com/theme/agra-html/images/sliders/img02.jpg)',
        'url(http://grandetest.com/theme/agra-html/images/sliders/img04.jpg)');
        var current = 0;

        function nextBackground() {
            body.css('background-image',
                backgrounds[current = ++current % backgrounds.length]
            );

            setTimeout(nextBackground, 7000);
        }
        setTimeout(nextBackground, 10000);
        body.css('background-image', backgrounds[0]);
    });
});

