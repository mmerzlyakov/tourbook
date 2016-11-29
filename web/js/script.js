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
    // Карусель;
    $('div.gallery div.items').slick({
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
   /// $('#basket-modal').modal('show');
});

// plus;
$(document).on('click','.counts__m .plus',function(){
    var  count =  $(this).siblings(".count").val();
    count ++;
    if(count >= 0 && count <= 99) {
        $(this).siblings(".count").val(count);
    }
});
// minus
$(document).on('click','.counts__m .minus',function(){
    var  count =  $(this).siblings(".count").val();
    count --;
    if(count >= 0) {
        $(this).siblings(".count").val(count);
    }
});

$(document).on('click','.booking-button-m',function(){
    $(".sidebar,.br-shadow").fadeIn();
    $(".booking-button-m").fadeOut();

    $(".sidebar").css('top',$(window).scrollTop());
    console.log($(window).scrollTop());
});
$(document).on('click','.br-shadow',function(){
    $(".sidebar").hide().add(this).hide();
    $(".booking-button-m").fadeIn();
});
$(document).on('click','.sidebar .close',function(){
    $(".sidebar,.br-shadow").hide();
    $(".booking-button-m").fadeIn();


});

$(document).on('click','#BOOKNOW',function() {
    $.ajax({
        url: "/booking/addbook?booking_id=2",
        type: "GET",
        data: {},
        dataType: "JSON",
        success: function(response) {
            //console.log(response);
            if(response) {
                // Окрываем мини корзина;
                modalBasket(response)
              //  alert('Успешно добавлено в корзину!');
               // window.location.reload();
            }
            else
                console.error('Error adding book to basket');
        }
    });

});

// Модальная окно корзины;
function modalBasket(response){
    $('#basket-modal .modal-body').html(response);
    $('#basket-modal').modal();
}