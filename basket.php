<div class="container-fluid">
    <div class="container">
        <div class="row">
            <?php

            if ( count($_SESSION['basket']) > 0 )
            { ?>

                <h1 class="caption_title_all_n1">Оформление заказа</h1>

            <?php
                echo 'Позиций в корзине: '.count($_SESSION['basket']);
                echo '<br><br>';

                echo "<div class=\"hidden-xs hidden-sm\">";

                v_basket_table($_SESSION['basket']);

                echo "</div>";

                ?>


                <div class="col-xs-12 hidden-md hidden-lg">

                    <?php

                        v_basket_table_xs($_SESSION['basket']);

                    ?>

                </div>

                <br>

                <div class="col-xs-6 cent add_margin_top add_margin_bottom">
                    <a href="?page=buy" class="btn btn-success">Оформить заказ</a>
                </div>

                <div class="col-xs-6 cent add_margin_top add_margin_bottom">
                    <form method="post">
                        <button class="btn btn-danger" type="submit" name="btn_clear_basket" ">Очистить корзину</button>
                    </form>
                </div>


                <?php

            } else {
                ?>
                    <div class="caption_title_all_n1">Корзина пуста</div>
                    <div class="caption_title_all_n2"><a href="?page=catalog">Перейти в каталог товаров</a></div>

                    <br>
                <?php
            }
            ?>

        </div>
    </div>
</div>