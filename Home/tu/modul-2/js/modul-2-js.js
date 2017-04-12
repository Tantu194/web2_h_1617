$(document).ready(function () {
    $(window).bind("scroll", function () {
        paralax(".m2-grip-background");
    });
    
    function paralax(element) {
        var scrollTop = $(window).scrollTop();
        $(element).css("transform", "translateY(" +(-320 + (0.2 * scrollTop)) + "px)");
    }
});