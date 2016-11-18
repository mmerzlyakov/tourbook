<?php
/*VER 1.0.1*/
/* @var $this yii\web\View */
$this->title = 'TourBook.Biz';
?>
<div id="main">
    <div class="search">
        <form method="post">
            <div class="input-group search-group col-xs-11 col-sm-9 col-md-8">
                <h1 class="title-main">Поиск экскурсий и мероприятий</h1>
                <input type="text" class="form-control search"  value="" placeholder="Быстрый и легкий способ бронирования досуга по всему миру" name="search">
                            <span class="input-group-btn">
                                <button type="button" class="btn blue ">Поиск</button>
                            </span>
                <div class="prompt">
                   <div class="panel-block">
                      <div class="col-xs-3 title-main">Пункт назначения</div>
                       <div class="col-xs-9">Названия</div>
                       <div class="clear"></div>
                   </div>
                    <table class="table-search">
                        <tbody>
                        <tr>
                            <td><span class="name">HK &amp; MACAU :</span></td>
                            <td>
                                <span class="name"><a class="name-a" href="/city/2-hong-kong/">Hong Kong</a></span>
                                <span class="name"><a class="name-a" href="/city/3-macau/">Macau</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="name">TAIWAN :</span></td>
                            <td>
                                <span class="name"><a class="name-a" href="/city/19-taipei/">Taipei</a></span>
                                <span class="name"><a class="name-a" href="/city/25-taichung/">Taichung</a></span>
                                <span class="name"><a class="name-a" href="/city/22-kaohsiung/">Kaohsiung</a></span>
                                <span class="name"><a class="name-a" href="/city/23-kenting/">Kenting</a></span>
                                <span class="name"><a class="name-a" href="/city/42-yilan/">Yilan</a></span>
                                <span class="name"><a class="name-a" href="/city/20-hualien/">Hualien</a></span>
                                <span class="name"><a class="name-a" href="/city/47-taitung/">Taitung</a></span>
                                <span class="name"><a class="name-a" href="/city/43-penghu/">Penghu</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="name">JAPAN :</span></td>
                            <td>
                                <span class="name"><a class="name-a" href="/city/28-tokyo/">Tokyo</a></span>
                                <span class="name"><a class="name-a" href="/city/29-osaka/">Osaka</a></span>
                                <span class="name"><a class="name-a" href="/city/30-kyoto/">Kyoto</a></span>
                                <span class="name"><a class="name-a" href="/city/32-hokkaido/">Hokkaido</a></span>
                                <span class="name"><a class="name-a" href="/city/36-fukuoka-kumamoto/">Fukuoka &amp; Kumamoto</a></span>
                                <span class="name"><a class="name-a" href="/city/15-okinawa/">Okinawa</a></span>
                                <span class="name"><a class="name-a" href="/city/71-nagoya/">Nagoya</a></span>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="name">THAILAND :</span></td>
                            <td>
                                <span class="name"><a class="name-a" href="/city/4-bangkok/">Bangkok</a></span>
                                <span class="name"><a class="name-a" href="/city/17-pattaya/">Pattaya</a></span>
                                <span class="name"><a class="name-a" href="/city/5-chiang-mai/">Chiang Mai</a></span>
                                <span class="name"><a class="name-a" href="/city/7-phuket/">Phuket</a></span>
                                <span class="name"><a class="name-a" href="/city/16-koh-samui/">Koh Samui</a></span>
                                <span class="name"><a class="name-a" href="/city/63-krabi/">Krabi</a></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- /input-group -->

        </form>
        <div class="slider">
            <div class="items">
                <div class="item"><img src="/files/slider/slider1.png" alt="" class="rad" /> </div>
                <div class="item"><img src="/files/slider/slider2.png" alt="" class="rad" /> </div>
                <div class="item"><img src="/files/slider/slider3.png" alt="" class="rad" /> </div>
                <div class="item"><img src="/files/slider/slider4.png" alt="" class="rad" /> </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="br-hr hidden-xs"></div>

    <div class="advantages hidden-xs">
        <div class="row center-block">
            <div class="col-xs-3">
                <div class="image-wrapper">
                    <img src="/images/payment.png" alt="">
                </div>
                БЕЗОПАСНАЯ<br>ОПЛАТА
            </div>
            <div class="col-xs-3">
                <div class="image-wrapper">
                    <img src="/images/checkout.png" alt="">
                </div>
                мгновенное<br>подтверждение брони
            </div>
            <div class="col-xs-3">
                <div class="image-wrapper">
                    <img src="/images/support.png" alt="">
                </div>
                КРУГЛОСУТОЧНАЯ<br>ПОДДЕРЖКА
            </div>
            <div class="col-xs-3">
                <div class="image-wrapper">
                    <img src="/images/bestprice.png" alt="">
                </div>
                гарантия<br>лучшей цены
            </div>
        </div>
            <div class="clear"></div>
    </div>
    <h2 class="title-main text-center">ПОПУЛЯРНЫЕ НАПРАВЛЕНИЯ</h2>
    <div class="container md">
        <div class="col-xs-6 col-sm-6 col-md-4 box__max">
            <a class="no-border" href="#">
                <div class="item">
                   <div class="image" style="background: url('/files/sity/1.jpg') no-repeat;">
                      <div class="name"><div class="name-box">Китай</div></div>
                   </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 box__max">
            <a class="no-border" href="#">
                <div class="item">
                    <div class="image" style="background: url('/files/sity/1.jpg') no-repeat;">
                        <div class="name"><div class="name-box">Китай</div></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 box__max">
            <a class="no-border" href="#">
                <div class="item">
                    <div class="image" style="background: url('/files/sity/1.jpg') no-repeat;">
                        <div class="name"><div class="name-box">Китай</div></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 box__max">
            <a class="no-border" href="#">
                <div class="item">
                    <div class="image" style="background: url('/files/sity/1.jpg') no-repeat;">
                        <div class="name"><div class="name-box">Китай</div></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 box__max">
            <a class="no-border" href="#">
                <div class="item">
                    <div class="image" style="background: url('/files/sity/1.jpg') no-repeat;">
                        <div class="name"><div class="name-box">Китай</div></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 box__max">
            <a class="no-border" href="#">
                <div class="item">
                    <div class="image" style="background: url('/files/sity/1.jpg') no-repeat;">
                        <div class="name"><div class="name-box">Китай</div></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clear"></div>
    </div>
      <div class="container md">

        <div class="col-xs-12 col-sm-4 info-box">
            <div class="info br">
                <div class="icon-fast icon"></div>
                <div class="text-min">Мгновеное подтверждения брони</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 info-box ">
            <div class="info pay">
                <div class="icon-sec icon"></div>
                <div class="text-min">О безопасности платежей</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 info-box">
            <div class="info br margin-right">
                <div class="icon-pay icon"></div>
                <div class="text-min">О гарантии лучшей цены</div>
            </div>
        </div>
      </div>
    <div class="clear"></div>

   <h2 class="title-main text-center">РЕКОМЕНДУЕМЫЕ</h2>
    <div class="container md">
        <div class="masonry grid__m ">
            <div class="item col-md-4 col-sm-6 ">
                <div class="content-item">
                    <div class="image"><img src="/files/1.jpg" alt="">
                        <div class="icon-like like"></div>
                        <div class="money">
                            <div>US</div>
                            <div>55 $</div>
                        </div>
                    </div>
                    <div class="content-text">
                        <div class="title">S.E.A. Aquarium™</div>
                        <div class="text-min">Discover the wonders of the sea world</div>
                        <div class="rating"><div class="rating-icon rating-1"></div></div>
                        <div class="view icon-view">1.6 k Booked</div>
                    </div>
                </div>
            </div>
            <div class="item col-md-4 col-sm-6">
                <div class="content-item">
                    <div class="image"><img src="/files/1.jpg" alt="">
                        <div class="icon-like like"></div>
                        <div class="money">
                            <div>US</div>
                            <div>55 $</div>
                        </div>
                    </div>
                    <div class="content-text">
                        <div class="title">S.E.A. Aquarium™</div>
                        <div class="text-min">Discover the wonders of the sea world</div>
                        <div class="rating"><div class="rating-icon rating-1"></div></div>
                        <div class="view icon-view">1.6 k Booked</div>
                    </div>
                </div>
            </div>
            <div class="item col-md-4 col-sm-6">
                <div class="content-item">
                    <div class="image"><img src="/files/1.jpg" alt="">
                        <div class="icon-like like"></div>
                        <div class="money">
                            <div>US</div>
                            <div>55 $</div>
                        </div>
                    </div>
                    <div class="content-text">
                        <div class="title">S.E.A. Aquarium™</div>
                        <div class="text-min">Discover the wonders of the sea world</div>
                        <div class="rating"><div class="rating-icon rating-1"></div></div>
                        <div class="view icon-view">1.6 k Booked</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
