// 
// 
// 
// ---------------------------------------
// ANIMAÇÃO MENU TOPO
// ----------------------------------------
// 
// Animação Inicio Abrir
// 
$('#inicioAbrir').on('click', function() {
    $(window).scrollTop(0);
    $("#inicio").fadeIn('600');
    $('#contato').fadeOut('600');
    $('#time').fadeOut("700");
    $('#contato').fadeOut('600');
    $('#sobre').fadeOut('600');
    AOS.init();

})

// 
// 
// 
// 
// 
// Animação Sobre Abrir
// 
$('#sobreAbrir').on('click', function() {
    $(window).scrollTop(0);
    $('#sobre').fadeIn('600');
    $("#inicio").fadeOut('600');
    $('#contato').fadeOut('600');
    $('#time').fadeOut("700");
    AOS.init();
})

// 
// 
// 
// Animação Time Abrir
$('#timeAbrir').on('click', function() {
    $(window).scrollTop(0);
    $('#time').fadeIn("700");
    $('#sobre').fadeOut('600');
    $("#inicio").fadeOut('600');
    $('#contato').fadeOut('600');
    AOS.init();
})

// 
// 
// --------------------------------
// ANIMAÇÃO FOOTER
// --------------------------------
//
// 
// 
// Animação Inicio Abrir
// 
$('#inicioAbrirBottom').on('click', function() {
    $('#inicioAbrir').trigger('click');

})

// 
// 
// 
// 
// 
// Animação Sobre Abrir
// 
$('#sobreAbrirBottom').on('click', function() {
    $('#sobreAbrir').trigger('click');
})

// 
// 
// 
// Animação Time Abrir
$('#timeAbrirBottom').on('click', function() {
    $('#timeAbrir').trigger('click');
})

//
// 
// 
// 
// ---------------------------------------
// ANIMAÇÃO MENU RESPONSIVO
// ----------------------------------------
// 
// Animação Inicio Abrir
// 
$('#inicioAbrirResponsv').on('click', function() {
    $(window).scrollTop(0);
    $("#inicio").fadeIn('600');
    $('#contato').fadeOut('600');
    $('#time').fadeOut("700");
    $('#contato').fadeOut('600');
    $('#sobre').fadeOut('600');
    AOS.init();

})

// 
// 
// 
// 
// 
// Animação Sobre Abrir
// 
$('#sobreAbrirResponsv').on('click', function() {
    $(window).scrollTop(0);
    $('#sobre').fadeIn('600');
    $("#inicio").fadeOut('600');
    $('#contato').fadeOut('600');
    $('#time').fadeOut("700");
    AOS.init();
})

// 
// 
// 
// Animação Time Abrir
$('#timeAbrirResponsv').on('click', function() {
    $(window).scrollTop(0);
    $('#time').fadeIn("700");
    $('#sobre').fadeOut('600');
    $("#inicio").fadeOut('600');
    $('#contato').fadeOut('600');
    AOS.init();
})

// 
//