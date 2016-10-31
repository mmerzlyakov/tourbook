$(document).ready(function(){

    // Карусель;
    $('div.slider div.items').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000
    });
    $("#main input.search").on('click',function(){
        $("#main .search-group .prompt").toggle();
    });
});
