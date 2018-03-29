<?php

if(!isset($_SESSION['login'])) {die();}

$mark = $_GET['mark'];

?>

<div class="panel panel-primary" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading">Настройки моделей для <?php v_mark_title($mark); ?></div>
    <div class="panel-body">

        <div class="panel panel-primary">
            <div class="panel-body">

                Добавить новую модель:<br><br>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4">
                    <form action="change_models.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="add_model" value="add_model">
                        <input type="hidden" name="mark" value="<?php echo $mark; ?>">
                        <div class="form-group">
                            <label for="title">Заголовок:</label>
                            <input type="text" class="form-control" id="title" name="title" title="То, как будет отображаться в каталоге">
                        </div>
                        <div class="form-group">
                            <label for="model_name">Серия:</label>
                            <input type="text" class="form-control" list="model_name" name="model_name" value="" title="Выбрать из доступных, либо написать новую">
                            <datalist id="model_name">
                                <?php echo v_models_names_list($mark); ?>
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label for="name">Системное имя:</label>
                            <input type="text" class="form-control" id="name" name="name" title="На латинеце, без пробелов. Желательно: имя_марки_модель">
                        </div>
                        <div class="form-group">
                            <label for="visible">Видимость:</label>
                            <input type="checkbox" id="visible" name="visible" value="true" title="Отображать ли для клиентов?">
                        </div>
                        <div class="form-group">
                            <label for="img">Изображение для каталога (соотн. 16:9):</label>
                            <input type="file" class="form-control" id="img" name="img" title="Соотношение сторон должно быть 16:9. Оптимально: 640х360, ~ 50 Кб">
                        </div>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <button class="btn btn-success btn-block" type="submit">Добавить</button>
                </div>
                    </form>


            </div>
        </div>


        <?php v_models_list_for_settings($mark); ?>


    </div>
</div>