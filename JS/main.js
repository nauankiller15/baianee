// // 
// // 
// // 
// // TELA DE CARREGAMENTO


// $(window).on("load", function() {
//     $(".loader-wrapper").fadeOut("slow");

// });


// // 
// // ---------------

//<![CDATA[
$(window).on('load', function() {
        $('.loader-wrapper .spinner').fadeOut();
        $('.loader-wrapper').delay(950).fadeOut('slow');
        $('body').delay(950).css({ 'overflow': 'visible' });
    })
    //]]>