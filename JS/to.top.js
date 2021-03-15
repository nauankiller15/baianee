jQuery(document).ready(function() {

    jQuery(".botaobottom").hide();

    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 300) {
            jQuery('.botaobottom').fadeIn('200');
        } else {
            jQuery('.botaobottom').fadeOut('100');
        }
    });
});

// Animacao Click

$('#socialBotao').on('click', function() {
    $('.social-medias').slideToggle('slow');

})