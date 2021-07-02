/* AVIS CLIENTS */
$('.owl-carousel').owlCarousel({
    loop:true,
    center: true,
    items: 3,
    slideBy: 3,
    nav:false,
    dots: true,
    responsiveClass:true,
    navText : ['<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>','<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'],
    responsive:{
        0:{
            items:1
        },
        640:{
            items:1
        },
        960:{
            items:1
        },
        1000:{
            items:3
        },
        1200:{
            items:3
        },
    }
});
