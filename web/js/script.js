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

    //Dinamika window resize standart boostrap;
    var currentWidth = 1200;
    $(window).resize(function() {
        var winWidth = $(window).width();
        var conWidth;
        var col = '';
        if(winWidth < 540) {
            col = 1
            conWidth = 320;
        } else if(winWidth < 768) {
            conWidth = 540;
            col = 2
        } else if(winWidth < 992) {
            conWidth = 768;
            col = 3
        }else if(winWidth < 1200) {
            conWidth = 992;
            col = 4
        }
        if(conWidth != currentWidth) {
            currentWidth = conWidth;
            //
            console.log(conWidth + ' ++');
            console.log(col + ' col');
            //script
            if(col == 3 || col == 2 || col == 1) {
                $(".masonry div.item").removeClass('max');
            }else{
                $(".masonry div.item.js-grid").addClass('max');
            }
        }
    });
    // Static;
    var winWidth = $(window).width();
    var conWidth;
    var col = '';
    if(winWidth < 540) {
        col = 1
        conWidth = 320;
    } else if(winWidth < 768) {
        conWidth = 540;
        col = 2
    } else if(winWidth < 992) {
        conWidth = 768;
        col = 3
    }else if(winWidth < 1200) {
        conWidth = 992;
        col = 4
    }
    if(conWidth != currentWidth) {
        currentWidth = conWidth;
        //script
        if(col == 3 || col == 2 || col == 1) {
            $(".masonry div.item").removeClass('max');
        }else{
            $(".masonry div.item.js-grid").addClass('max');
        }
    }
    $('.masonry').masonry({
        itemSelector: '.item',
        //   columnWidth: '.col-sm-6',
        //  percentPosition: true,
    });
});
