<?php

namespace app\widgets;
use yii\base\Widget;

class WBasketModal extends Widget
{
    /*
    public function init() {

        parent::init();
    }*/
    public function run(){
        ?>
           <div class="table-responsive" id="modal-table">
                <table class="table table-hover table-striped basket-modal-goods">
                    <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Наименование</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <th>Удаления</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="/uploads/1.75457764.jpg" alt="" class="img-rounded img"> </td>
                            <td>Тайван</td>
                            <td>1</td>
                            <td><b>1666 р.</b></td>
                            <td><span onclick="return deleteBasket();" class="glyphicon glyphicon-remove del-item close text-danger" aria-hidden="true"></span></td>
                        </tr>
                    <tr>
                        <td colspan="4">Итого: </td>
                        <td><b>2</b></td>
                    </tr>
                    <tr>
                        <td colspan="4">На сумму: </td>
                        <td><b>1000 р.</b></td>
                    </tr>
                    </tbody>
        </div>
        <?php
    }
}
