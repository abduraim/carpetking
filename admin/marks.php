<?php

if(!isset($_SESSION['login'])) {die();}

if ( isset($_GET['title']) ) {
    echo 'asdfasdf';
}

?>

<div class="panel panel-primary" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading">Настройки марок автомобилей</div>
    <div class="panel-body">

        <div class="panel panel-primary">
            <div class="panel-body">

                Добавить новую марку:<br><br>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4">
                    <form action="change_marks.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="add_mark" value="add_mark">
                        <div class="form-group">
                            <label for="title">Заголовок:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="title_rus">Русский заголовок:</label>
                            <input type="text" class="form-control" id="title_rus" name="title_rus">
                        </div>
                        <div class="form-group">
                            <label for="name">Системное имя:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="visible">Видимость:</label>
                            <input type="checkbox" id="visible" name="visible" value="true">
                        </div>
                        <div class="form-group">
                            <label for="img">Логотип (квадратное изображение):</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <button class="btn btn-success btn-block" type="submit">Добавить</button>
                </div>
                    </form>


            </div>
        </div>



        <?php v_marks_list_for_settings(); ?>


    </div>
</div>