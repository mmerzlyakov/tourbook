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
    // Карусель;
    $('div.carousel div.items').slick({
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true,
        arrows:true,
        prevArrow: '<div class="prev"></div>',
        nextArrow:'<div class="next"></div>',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    //arrows: false
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 2,
                    // arrows: false
                }
            },

        ]
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
    //Выпадашка и подсказака;
    $('#header .dropdown-toggle').tooltip();
    $('#header .dropdown').on('show.bs.dropdown', function () {
        $('#header .dropdown-toggle').tooltip('hide');
    });
    $('.parallax-window').parallax({}); /* Parallax modal*/
    /*
    $(document).on('mouseenter','#header .dropdown-toggle',function() {
        // Удаляем интервал;
        clearTimeout($.data(this, 'timer'));
        $(this).parent('.dropdown').addClass('open');
        $(this).attr('aria-expanded',true);
    }).on('mouseleave','.dropdown',function() {
        // Интервал закрытия блок;
        $.data(this, 'timer', setTimeout($.proxy(function () {
            $(this).removeClass('open');
            $(this).children('.dropdown-toggle').attr('aria-expanded',false);
        }, this), 1600));
    });*/
});
/*Плагины*/
$(function () {
    'use strict';
    $('.parallax-window').parallax({}); /* Parallax modal*/
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

$(document).on('click','#MAKEWISH',function() {

    var id = $('#BOOKID').val();

 //   alert(id);

    $.ajax({
        url: "/booking/addwish?booking_id="+id,
        type: "GET",
        data: {},
        dataType: "JSON",
        success: function(response) {
            //console.log(response);
            if(response) {
                alert('Успешно добавлено в WishList!');
                // Окрываем мини корзина;
               // modalBasket(response);
                //  alert('Успешно добавлено в корзину!');
                // window.location.reload();
            }
            else
                console.error('Error adding book to basket');
        }
    });

});


$(document).on('click','#BOOKNOW',function() {

    var id = $('#BOOKID').val();

  //  alert(id);

    $.ajax({
        url: "/booking/addbook?booking_id="+id,
        type: "GET",
        data: {},
        dataType: "JSON",
        success: function(response) {
            //console.log(response);
            if(response) {
                // Окрываем мини корзина;
                modalBasket(response);
                //alert('Успешно добавлено в WishList!');
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
    //$('#basket-modal .modal-body').append(' Тут данные из корзины чувачка');
    $('#basket-modal').modal();
}


$(document).on("keyup", ".tags-input", function() {

    var tag = $('.tags-input').val();

    if (tag.length >= 3) {
        $("div.load", input.parents("div.options")).show();
        // - - > Evgeniy
        $.post(baseAjaxPath+'/ajax/get-tags-groups-value-list', {
            // < - - Evgeniy
            'tag_group': tag_group,
            'tag': tag
        }, function (data) {
            //console.log(data);
            $("div.values", input.parents("div.options")).html('').show();
            if (data.length) {
                for (var i in data) {
                    $("div.values", input.parents("div.options")).append('<div onclick="tag_add(\'' + index + '\', \'' + tag_group + '\', \'' + data[i].id + '\', \'' + data[i].value + '\','+tag_check+');">' + data[i].value + '</div>');
                }
                $("div.values", input.parents("div.options")).append('<div onclick="tag_new(\'' + index + '\', \'' + tag_group + '\', \'' + tag + '\');">добавить</div>');
            } else {
                // - - > Evgeniy
                if(tag_check == false){
                    // < - - Evgeniy
                    $("div.values", input.parents("div.options")).append('<div onclick="tag_new(\'' + index + '\', \'' + tag_group + '\', \'' + tag + '\');">добавить</div>');
                }
            }
            $("div.load", input.parents("div.options")).hide();
        }, 'JSON');
    } else {
        $("div.values", input.parents("div.options")).hide();
        $("div.load", input.parents("div.options")).hide();
    }
}).on("click", "input", function() {
    if ($(this).val() != '') {
        $("div.values", $(this).parents("div.options")).toggle();
    }
});

// Создание тега;
function tag_new(index, tag_group, tag_name) {

    $.post(baseAjaxPath+'/ajax/set-new-tag-variant', {
        'tag_group': tag_group,
        'tag_name': tag_name
    }, function (tag_id) {
        tag_add(index, tag_group, tag_id, tag_name);
    });
}

// Добавление тега;
function tag_add(index, tag_group, tag_id, tag_name,check) {
    if(check == true){
        $('.gl_good_list').append('<option value="' + tag_id +'">' + tag_name +'</option>');
        $('#hidden_lb_tags').append('<input type = "hidden" name = "lb[tag][' + tag_id + ']" value = "' + tag_id +'">');

        $("div.values", $("div.variation").eq(index)).hide();
    }else{
        var variation_id = $("tr.variation").eq(index).attr("variation");
        var variationForOwner = false;

        if($("tr.variation").eq(index).length > 0){
            variationForOwner = $("tr.variation").eq(index);
            variationForOwner = variationForOwner.data('variationforowner');
        }
        if($('.variants[data-key]').eq(index).length > 0){
            variationForOwner = $('.variants').eq(index).data('key');
            //variationForOwner = variationForOwner.data('variationforowner');
        }

        if (variation_id) {
            var variation = 'variations[' + variation_id + ']';
        }else if(variationForOwner){
            var variation = 'variations_add[' + variationForOwner + ']';
        } else {
            var variation = 'variations_add[0]';
        }
        $("div.value-" + tag_group, $("div.variation").eq(index)).append('<span class="tag"><input type="hidden" name="' + variation + '[tags][' + tag_id + ']" value="' + tag_name + '" /> ' + tag_name + ' <a href="/" title="Удалить тег" onclick="$(this).parent().remove(); return false;">X</a></span>');
        $("div.values", $("div.variation").eq(index)).hide();
    }
}

// Добавить бук в избранное;
$(document).on('click','.grid__m .like',function(){
    var id = $(this).data("id");
    $(this).addClass('open').add(".grid__m .like").not(this).removeClass('open');
    //
    $.post(window.document.href, {
        'favorite' : true,
        'id': id
    }, function(data) {
        //
    },'JSON');
});

