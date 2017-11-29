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
    
    if(options.minusHeader === true){
        offsetHeight = offsetHeight - $(target).outerHeight();
    }else{
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
        offset: '.dummy',
        minusHeader: true
    });
});
