<?php

if(!isset($_SESSION['login'])) {die();}

?>

<div class="panel panel-primary" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading">Основные настройки сайта</div>
    <div class="panel-body">

        <div class="panel panel-primary">
            <div class="panel-body">
                
                Основные настройки<br><br>

                <form action="change_main.php" method="post" name="main">
                    <input type="hidden" name="main_inf">
                    <div class="form-group">
                        <label for="site_title">Заголовок сайта:</label>
                        <input type="text" class="form-control" id="site_title" name="site_title" value="<?php v_main_inf('site_title'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес:</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php v_main_inf('address'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Телефон:</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="<?php v_main_inf('telephone'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="schedule">Время работы:</label>
                        <input type="text" class="form-control" id="schedule" name="schedule" value="<?php v_main_inf('schedule'); ?>">
                    </div>

                    <input type="submit" class="btn btn-success" value="Сохранить">

                </form>



            </div>
        </div>




        <div class="panel panel-primary">
            <div class="panel-body">

                Блок преимуществ<br><br>

                <form action="change_main.php" method="post" name="benefit_main_inf">

                    <input type="hidden" name="benefit_main">

                    <?php v_benefit_main_admin(); ?>

                    <input type="submit" class="btn btn-success" value="Сохранить">

                </form>

            </div>
        </div>





    </div>
</div>