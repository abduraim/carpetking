<div class="container-fluid">
    <div class="container">

        <div class="row">
            <h1 class="caption_title_all_n1">Оформление заказа</h1>

            <div class="hidden-xs col-sm-2 col-md-3"></div>
            <div class="col-xs-12 col-sm-8 col-md-6">


                <form method="post" action="send_order.php" class="div_order_form">
                    <div class="form-group">
                        <label for="name">Ваше имя <span class="font_redstar">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Телефон <span class="font_redstar">*</span></label>
                        <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Введите номер телефона">
                    </div>
                    <div class="form-group">
                        <label for="comment">Комментарий</label>
                        <textarea name="comment" id="comment" class="form-control"  placeholder="Если необходимо, укажите дополнительный комментарий к заказу..." rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Готово!">
                </form>

            </div>
            <div class="hidden-xs col-sm-2 col-md-3"></div>


        </div>

        <div class="row">
            <?php
                echo 'Позиций в корзине: '.count($_SESSION['basket']);
                echo '<br><br>';
                echo "<div class=\"hidden-xs hidden-sm\">";
                v_basket_table($_SESSION['basket']);
                echo "</div>";
            ?>
            <div class="col-xs-12 hidden-md hidden-lg">
            <?php v_basket_table_xs($_SESSION['basket']); ?>
        </div>
        <div class="row">&nbsp;</div>

    </div>
</div>