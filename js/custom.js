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

function getCurentFileName() {

}
var setActive = function (className) {
    var path = window.location.pathname,
        page = path.substring(path.lastIndexOf("/") + 1).split(".")[0];
    $("#page_" + page).addClass(className);

}


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
        var backgrounds = new Array(
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

    setActive("active");

    $(".gallery-contents").on("click", "a", function (e) {
        e.preventDefault();
        var $modal = $("#gallery-modal"),
            $this = $(this);
        $modal.find(".modal-dialog").css("margin-top", $("header").height());
        $modal.find(".modal-title").text($this.attr("data-title"));

        if ($this.attr("data-target") == "image") {
            $modal.find(".modal-body").html("<img width='100%' src='" + $this.attr('data-file') + "' alt='" + $this.attr('data-alt') + "' title='" + $this.attr('data-alt') + "' />");
        } else if ($this.attr("data-target") == 'video') {
            $modal.find(".modal-body").html("<iframe width='100%' height='320' src='" + $this.attr('data-file') + "'></iframe>");
        }

        $modal.modal("show");
    });

    $("#gallery-modal").on('hidden.bs.modal', function () {
        $(this).find(".modal-title").text("");
        $(this).find(".modal-body").empty();
    });

    $(".gallery-filters").find("li:first-child a").addClass("active");
    
    $(".gallery-filters").on("click", "a", function (e) {
        e.preventDefault();
        $this = $(this);
        
        $(".filter-nav").each(function(){
            $(this).removeClass("active");
        });
        $this.addClass("active");
        
        $(".gallery-content").each(function () {
            $(this).hide();
        });
        if ($this.attr("data-filters") == "all") {
            $(".gallery-content").each(function () {
                $(this).fadeIn("slow");
            });
        } else {
            $(".gallery-content." + $this.attr("data-filters")).fadeIn("slow");
        }
    });
});

var app = angular.module('galleryPage', []);
app.controller('galleryFilters', function ($scope) {
    $scope.galleryTypes = [{
        name: 'All',
        value: 'all'
           }, {
        name: 'Videos',
        value: 'video'
           }, {
        name: 'Images',
        value: 'image'
           }];
});
app.controller('galleryContents', function ($scope) {
    $scope.galleryContents = [{
        name: 'first',
        type: 'image',
        file: 'img/project-img/project-05.jpg',
        thumbnail: 'img/project-img/project-05.jpg',
        title: 'First Image',
        alt: 'Alt information for First Image'
    }, {
        name: 'second',
        type: 'video',
        file: 'https://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1',
        thumbnail: 'img/project-img/project-02.jpg',
        title: 'First Video',
        alt: 'Alt information for First Video'
    }, {
        name: 'first',
        type: 'image',
        file: 'img/project-img/project-05.jpg',
        thumbnail: 'img/project-img/project-05.jpg',
        title: 'First Image',
        alt: 'Alt information for First Image'
    }, {
        name: 'second',
        type: 'video',
        file: 'https://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1',
        thumbnail: 'img/project-img/project-02.jpg',
        title: 'First Video',
        alt: 'Alt information for First Video'
    }, {
        name: 'first',
        type: 'image',
        file: 'img/project-img/project-05.jpg',
        thumbnail: 'img/project-img/project-05.jpg',
        title: 'First Image',
        alt: 'Alt information for First Image'
    }, {
        name: 'second',
        type: 'video',
        file: 'https://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1',
        thumbnail: 'img/project-img/project-02.jpg',
        title: 'First Video',
        alt: 'Alt information for First Video'
    }, {
        name: 'first',
        type: 'image',
        file: 'img/project-img/project-05.jpg',
        thumbnail: 'img/project-img/project-05.jpg',
        title: 'First Image',
        alt: 'Alt information for First Image'
    }, {
        name: 'second',
        type: 'video',
        file: 'https://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1',
        thumbnail: 'img/project-img/project-02.jpg',
        title: 'First Video',
        alt: 'Alt information for First Video'
    }, {
        name: 'first',
        type: 'image',
        file: 'img/project-img/project-05.jpg',
        thumbnail: 'img/project-img/project-05.jpg',
        title: 'First Image',
        alt: 'Alt information for First Image'
    }];
});
