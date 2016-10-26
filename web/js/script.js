$(document).ready(function(){

    // Карусель для миниатюр;
    $('div.images-carousel div.items').owlCarousel({
        items: 3,
        responsive: true,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1]
    });


});
