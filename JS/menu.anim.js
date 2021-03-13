$(function() {
    $(document).scroll(function() {
        var $nav = $(".menu");
        $nav.toggleClass('menu-back', $(this).scrollTop() > $nav.height());
    });
});