$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        centeredSlides: true,
        grabCursor: true,

        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});