<?php

require_once 'controller.php';


function v_main_inf($param) {
    $var = new C_maininf();
    $main_inf = $var->get_main_inf();
    echo $main_inf[$param];
}

function v_comments_count() {
    $var = new C_maininf();
    $comments_count = $var->get_comments_count();
    return $comments_count;
}

function v_benefits_main() {
    $var = new C_benefits_main();
    $banefits_main_inf = $var->get_benefits_main();
    for ($i = 0; $i < count($banefits_main_inf); $i=$i+2) {

        $title = $banefits_main_inf[$i]['title'];
        $text = $banefits_main_inf[$i]['text'];
        $icon = $banefits_main_inf[$i]['icon'];

        if ( isset($banefits_main_inf[$i+1]['id']) ) {
            $title2 = $banefits_main_inf[$i+1]['title'];
            $text2 = $banefits_main_inf[$i+1]['text'];
            $icon2 = $banefits_main_inf[$i+1]['icon'];

            print <<<HERE
                <div class="row">

                    <div class="col-xs-12 col-sm-6 div_benefits">
                        <div style="float: left; margin-right: 1em; width: 70px;"><i class="fa $icon fa-4x"></i></div>
                        <div class="font_size_large">$title</div>
                        <div>$text</div>
                    </div>

                    <div class="col-xs-12 col-sm-6 div_benefits">
                        <div style="float: left; margin-right: 1em; width: 70px;"><i class="fa $icon2 fa-4x"></i></div>
                        <div class="font_size_large">$title2</div>
                        <div>$text2</div>
                    </div>

                </div>
HERE;

        } else {
            print <<<HERE
                <div class="row">

                    <div class="col-xs-12 col-sm-6 div_benefits">
                        <div style="float: left; margin-right: 1em; width: 70px;"><i class="fa $icon fa-4x"></i></div>
                        <div class="font_size_large">$title</div>
                        <div>$text</div>
                    </div>

                </div>
HERE;
        }



    }
}


function v_mark_title($mark) {
    $var = new C_marks();
    $title_mark = $var->get_mark_title($mark);
    echo $title_mark['title'];
}

function v_model_title($model) {
    $var = new C_marks();
    $title_model = $var->get_model_title($model);
    echo $title_model['title'];
}

function v_model_title_min($model) {
    $var = new C_marks();
    $title_model_min = $var->get_model_title_min($model);
    echo $title_model_min['model_name'];
}

function v_mark_title_rus($mark) {
    $var = new C_marks();
    $mark_title_rus = $var->get_mark_title_rus($mark);
    echo $mark_title_rus['title_rus'];
}

function v_mark_title_list_for_input() {
    $var = new C_marks();
    $marks_list = $var->get_marks_visible_list();

    for ($i = 0; $i < count($marks_list); $i ++) {
        echo '<option>';
        echo $marks_list[$i]['title'];
        echo '</option>';
    }
}

function v_marks_logo_list() {

    $var = new C_marks();
    $marks = $var->get_marks_visible_list();
    for ($i = 0; $i < count($marks); $i++) {
        echo '<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">';
        echo '<a href="?page=catalog&mark='.$marks[$i]['name'].'">';
        echo '<img src="'.$marks[$i]['img'].'" class="img-responsive center-block div_catalog_list_logo_img">';
        echo '</a>';
        echo '</div>';
    }

}


function v_marks_title_list() {

    $var = new C_marks();
    $marks = $var->get_marks_visible_list();
    $half = intval(count($marks)/2);
    $s_old = null;



    echo '<div class="col-md-6">';

        for ($i = 0; $i < $half; $i++) {
            $s = mb_substr($marks[$i]['title'], 0, 1);

            if ($s_old != $s) {
                echo '<div class="font_size_large">';
                echo $s;
                echo '</div>';
            }

            echo '<a href="?page=catalog&mark='.$marks[$i]['name'].'">';
            echo $marks[$i]['title'];
            echo '</a>';
            echo '<br>';

            if ( null !== mb_substr($marks[$i+1]['title'], 0, 1) && $s !=  mb_substr($marks[$i+1]['title'], 0, 1) ) {
                echo '<br>';
            }

            if ( $i+1 == $half && $s == mb_substr($marks[$i+1]['title'], 0, 1) ) {
                $half ++;
            }

            $s_old = $s;
        }

    echo '</div>';





    echo '<div class="col-md-6">';

        for ($i = $half; $i < count($marks); $i++) {
            $s = mb_substr($marks[$i]['title'], 0, 1);

            if ($s_old != $s) {
                echo '<div class="font_size_large">';
                echo $s;
                echo '</div>';
            }

            echo '<a href="?page=catalog&mark='.$marks[$i]['name'].'">';
            echo $marks[$i]['title'];
            echo '</a>';
            echo '<br>';

            if ( isset($marks[$i+1]['title']) ) {
                if ( null !== mb_substr($marks[$i+1]['title'], 0, 1) && $s !=  mb_substr($marks[$i+1]['title'], 0, 1) ) {
                    echo '<br>';
                }
            }



            $s_old = $s;
        }

    echo '</div>';

}



function v_marks_title_list_for_main() {
    $var = new C_marks();
    $marks = $var->get_marks_visible_list();
    $pts_cols = intval(count($marks)/3);
    $index = 0;


    for ($x = 1; $x <= 3; $x ++) {
        echo '<div class="col-xs-4">';

        for ($i = 0; $i < $pts_cols; $i ++) {
            echo '<a href="?page=catalog&mark='.$marks[$index]['name'].'">';
            echo $marks[$index]['title'];
            echo '</a>';
            echo '<br>';
            $index ++;
        }

        if ($x == 3 && $index < count($marks)) {
            for ($i = $index; $i < count($marks); $i ++) {
                echo '<a href="?page=catalog&mark='.$marks[$i]['name'].'">';
                echo $marks[$i]['title'];
                echo '</a>';
                echo '<br>';
            }
        }

        echo '</div>';
    }

}



function v_marks_list_for_settings() {
    $var = new C_marks();
    $marks = $var->get_marks_list();



    for ($i = 0; $i < count($marks); $i++) {
        $id = $marks[$i]['id'];
        $title = $marks[$i]['title'];
        $title_rus = $marks[$i]['title_rus'];
        $name = $marks[$i]['name'];
        $img = $marks[$i]['img'];
        if ($marks[$i]['visible'] == 1)
            $visible = 'checked';
        else
            $visible = '';

        print <<<HERE
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" style="padding: 0.2em">
            <div class="div_settings_marks_block">
                <form action="change_marks.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="change_mark" value="change_mark">
                        <input type="hidden" name="id" value="$id">
                        <input type="hidden" name="img" value="$img">
                    <a href="?page=admin&section=models&mark=$name"><img src="$img" class="img-responsive img-thumbnail"></a>
                    <br>
                    <br>
                    <a href="?page=admin&section=models&mark=$name" class="btn btn-primary btn-block">МОДЕЛИ >></a>
                    <br>
                    <div class="form-group">
                        <label for="title">Заголовок:</label>
                        <input type="text" class="form-control" id="title" name="title" value="$title">
                    </div>
                    <div class="form-group">
                        <label for="title_rus">Русский заголовок:</label>
                        <input type="text" class="form-control" id="title_rus" name="title_rus" value="$title_rus">
                    </div>
                    <div class="form-group">
                        <label for="name">Системное имя:</label>
                        <input type="text" class="form-control" id="name" name="name" value="$name">
                    </div>
                    <div class="form-group">
                        <label for="visible">Видимость:</label>
                        <input type="checkbox" id="visible" name="visible" $visible>
                    </div>
                    <div class="form-group">
                        <label for="img">Изменить логотип:</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">V</button>
                        <a href="change_marks.php?del_id=$id&del_img=$img" class="btn btn-danger">X</a>
                    </div>
                </form>
            </div>

        </div>
HERE;
    }








}



function v_models_names_list($mark)
{

    $var = new C_marks();
    $models_names = $var->get_models_names_list($mark);
    $result = '';

    for ($i=0; $i < count($models_names); $i ++) {
        $result = $result.'<option>'.$models_names[$i]['model_name'].'</option>';
    }

    return $result;

}



function v_models_title_list($mark)
{

    $var = new C_marks();
    $models = $var->get_models_visible_list($mark);
    $unique = $var->get_models_unique_list($mark);


    for ($i = 0; $i < count($models); $i++) {

        $need = $models[$i]['model_name'];
        $result = false;
        foreach ($unique as $key => $val) {
            if ($val['model_name'] == $need) {
                $result = $val['count_m'];
                break;
            }
        }

        if ($result < 2) {
            $mod = $models[$i]['name'];
            echo "<a href='?page=catalog&mark=$mark&model=$mod&product=pile_salon' class='btn btn-default'>";
            echo $models[$i]['model_name'];
            echo '</a>';
        } else {
            echo "<div class='btn-group'>";
            echo "<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown'>";
            echo $models[$i]['model_name'];
            echo " <span class='caret'></span>";
            echo "</button>";
            echo "<ul class='dropdown-menu'>";

            for ($n = 0; $n < $result; $n++) {
                $mod = $models[$i + $n]['name'];
                echo "<li><a href='?page=catalog&mark=$mark&model=$mod&product=pile_salon'>";
                echo $models[$i + $n]['title'];
                echo '</a></li>';
            }

            $i = $i + $result-1;

            echo "</ul>";
            echo "</div>";
        }

    }

}



function v_models_img_list($mark) {

    $var = new C_marks();
    $models = $var->get_models_visible_list($mark);

    for ($i = 0; $i < count($models); $i++) {
        $mod = $models[$i]['name'];

        echo '<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">';
        echo "<a href='?page=catalog&mark=$mark&model=$mod&product=pile_salon'>"; // есть еще одна страница с выбором наименования товара, надо просто убрать &product=pile_salon
        echo '<div class="div_models_imgblock">';
        echo "<img src='".$models[$i]['img']."' class='img-responsive div_models_imgblock_img'>";
        echo '<div class="cent div_models_imgblock_img_caption">';
        echo $models[$i]['title'];
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';

    }

}



function v_models_list_for_settings($mark) {

    $var = new C_marks();
    $models = $var->get_models_list($mark);
    $models_names_list = v_models_names_list($mark);

    for ($i = 0; $i < count($models); $i++) {
        $id = $models[$i]['id'];
        $model_name = $models[$i]['model_name'];
        $title = $models[$i]['title'];
        $name = $models[$i]['name'];
        $img = $models[$i]['img'];


        $visible = $models[$i]['visible'];
        $visible ? $color='' : $color='#e4e4e4';
        $visible ? $visible = 'checked' : $visible = '';




        print <<<HERE
        <div class="col-xs-6 col-md-4 col-lg-3 panel panel-primary" style="padding: 0.2em; background-color: $color;">
            <div class="panel-body">
                <form action="./change_models.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="change_model" value="change_model">
                        <input type="hidden" name="mark" value="$mark">
                        <input type="hidden" name="id" value="$id">
                        <input type="hidden" name="img" value="$img">
                    <img src="$img" class="img-responsive img-thumbnail">
                    <div class="form-group">
                        <label for="img">Изменить изображение (16:9):</label>
                        <input type="file" class="form-control" id="img" name="img" title="Соотношение сторон должно быть 16:9. Оптимально: 640х360, ~ 50 Кб">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="title">Заголовок:</label>
                        <input type="text" class="form-control" id="title" name="title" value="$title" title="То, как будет отображаться в каталоге">
                    </div>
                    <div class="form-group">
                        <label for="model_name">Серия:</label>
                        <input type="text" class="form-control" list="model_name" name="model_name" value="$model_name" title="Чтобы увидеть список доступных: удалить текущее значение">
                        <datalist id="model_name">
                            $models_names_list
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label for="name">Системное имя:</label>
                        <input type="text" class="form-control" id="name" name="name" value="$name" title="На латинеце, без пробелов. Желательно: имя_марки_модель">
                    </div>
                    <div class="form-group">
                        <label for="visible">Видимость:</label>
                        <input type="checkbox" id="visible" name="visible" $visible title="Отображать ли для клиентов?">
                    </div>
                    <a href="?page=admin&section=models_gallery&model=$name" class="btn btn-info btn-block">Галерея...</a>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">V</button>
                        <a href="change_models.php?del_id=$id&del_img=$img&mark=$mark" class="btn btn-danger">X</a>
                    </div>
                </form>
            </div>
        </div>
HERE;

    }

}



function v_mats_list_block() {

    $var = new C_mats();
    $mats = $var->get_mats_list();

    $xs = $sm = 6;
    $md = 4;
    $xs_add = $sm_add = $md_add = 0;

    switch (count($mats)) {
        case 1:
            $md_add = 4;
            break;
        case 2:
            $md_add = 2;
            break;
        case 3:
            $md = 4;
            break;
        case 4:
            $md = 3;
            break;
    }


    for ($i = 0; $i < count($mats); $i++) {

        echo "<div class='col-xs-push-".$xs_add." col-xs-".$xs." col-sm-push-".$sm_add." col-sm-".$sm." col-md-push-".$md_add." col-md-".$md."'>";
        echo "<a href='?page=catalog&mark=".$_GET['mark']."&model=".$_GET['model']."&product=".$mats[$i]['name']."'>";
        echo "<div class='div_product_block'>";
        echo "<div class='caption_title_all_n2'>".$mats[$i]['title']."</div>";
        echo "<img src='img/mats/".$mats[$i]['name'].".jpg' alt='".$mats[$i]['title']."' class='img-responsive'>";
        echo '</div>';
        echo '</a>';
        echo '</div>';


    }

}


function v_mat_title($mat) {

    $var = new C_mats();
    $mat = $var->get_mat_title($mat);
    echo $mat['title'];

}


function v_materials_inf_block() {

    $var = new C_mats();
    $materials = $var->get_materials_list();

    for ($i = 0; $i < count($materials); $i++) {
        if ($materials[$i]['visible'] == true) {

            $title = $materials[$i]['title'];
            $name = $materials[$i]['name'];
            $cost = $materials[$i]['cost'];
            $height_pile = $materials[$i]['height_pile'];
            $density_pile = $materials[$i]['density_pile'];
            $dept_canvas = $materials[$i]['dept_canvas'];
            $type_pile = $materials[$i]['type_pile'];
            $colors = $materials[$i]['colors'];
            $description = $materials[$i]['description'];
            $img_1 = $materials[$i]['img_1'];
            $img_1_min = $materials[$i]['img_1_min'];
            $img_2 = $materials[$i]['img_2'];
            $img_2_min = $materials[$i]['img_2_min'];

            print <<<HERE
        <h3>$title</h3>

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a class="fancyimage" data-fancybox-group="group_$name" href="$img_1">
                    <img class="img-responsive thumbnail center-block" src="$img_1_min">
                </a>
            </div>

            <div class="col-xs-6 col-md-3 col-md-push-6">
                <a class="fancyimage" data-fancybox-group="group_$name" href="$img_2">
                    <img class="img-responsive thumbnail center-block" src="$img_2_min">
                </a>
            </div>

            <div class="col-xs-12 col-md-6 col-md-pull-3">

                <div><b>Цена:</b> $cost руб.</div>
                <div><b>Высота автоковролина:</b> $dept_canvas мм.</div>
                <div><b>Плотность ворса:</b> $density_pile гр./м2</div>
                <div><b>Тип ворса:</b> $type_pile</div>
                <div><b>Цвет:</b> $colors</div>
                <div class="text_div_about_benefits">$description</div>
            </div>
        </div>
    </div>



    <div class="row">&nbsp;</div>
HERE;
        }
    }

}


function v_materials_list_block() {





  $dir    = 'uploads/examples/';
  $files = scandir($dir);

  $count_files = 0;
  foreach ($files as $value)
  {

    if ($value !='.' and $value !='..' )
      {
        $count_files ++;
        if ($count_files == 1) {
          echo "<div class='row'>";
            echo "<div id='label_material'>Примеры:</div>";
            echo "<a id='link_img' class='fancyimage' href='".$dir.$value."'>";
              echo "<div class='div_item_img_main_zoom'>Увеличить <span class='glyphicon glyphicon-zoom-in'></span></div>";
              echo "<img src='".$dir.$value."' name='example_img' class='div_item_img_main'>";
            echo '</a>';
          echo '</div>';

          echo "<div class='row'>";
        }
        echo "<div class='col-xs-4 col-sm-3 col-md-6 col-lg-4 div_item_img_min_block'>";
          echo "<a href=\"javascript:l_image ('".$dir.$value."')\">";
            echo "<img src='".$dir.$value."' class='img-responsive div_item_img_min'>";
          echo '</a>';
        echo '</div>';
      }
    else{}
  }
  echo '</div>';

}



function v_materials_inf_settings() {

    $var = new C_mats();
    $materials = $var->get_materials_inf();

    for ($i = 0; $i < count($materials); $i++) {

            $id = $materials[$i]['id'];
            $title = $materials[$i]['title'];
            $name = $materials[$i]['name'];
            $cost = $materials[$i]['cost'];
            $height_pile = $materials[$i]['height_pile'];
            $density_pile = $materials[$i]['density_pile'];
            $dept_canvas = $materials[$i]['dept_canvas'];
            $type_pile = $materials[$i]['type_pile'];
            $colors = $materials[$i]['colors'];
            $description = $materials[$i]['description'];
            $position = $materials[$i]['position'];

            $visible = $materials[$i]['visible'];
            $visible ? $color = '' : $color = '#e4e4e4';
            $visible ? $visible = 'checked' : $visible = '';

            $img_01 = $name.'_01.jpg';
            $img_01_min = $name.'_01_min.jpg';
            $img_02 = $name.'_02.jpg';
            $img_02_min = $name.'_02_min.jpg';

            $img_01 = $materials[$i]['img_1'];
            $img_02 = $materials[$i]['img_2'];

            print <<<HERE
<div class="col-xs-12 panel panel-primary" style="padding: 0.2em; background-color: $color;">
    <div class="panel-body">
        <h1>$title</h1>
        <form method="post" action="./change_materials.php" enctype="multipart/form-data">

                    <input type="hidden" name="change_materials">
                    <input type="hidden" name="id" value="$id">

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="title">Заголовок:</label>
                            <input type="text" class="form-control" name="title" id="title" value="$title">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="cost">Цена (руб.):</label>
                            <input type="number" class="form-control" name="cost" id="cost" value="$cost">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="colors">Цвета:</label>
                            <input type="text" class="form-control" name="colors" id="colors" value="$colors">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="density_pile">Плотность ворса (гр./м2):</label>
                            <input type="text" class="form-control" name="density_pile" id="density_pile" value="$density_pile">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="dept_canvas">Высота автоковролина (мм):</label>
                            <input type="text" class="form-control" name="dept_canvas" id="dept_canvas" value="$dept_canvas">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="type_pile">Тип ворса:</label>
                            <input type="text" class="form-control" name="type_pile" id="type_pile" value="$type_pile">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <textarea class="form-control" name="description" id="description">$description</textarea>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="name">Name (Системное):</label>
                            <input type="text" class="form-control" name="name" id="name" value="$name">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="position">Позиция (в списке):</label>
                            <input type="number" class="form-control" name="position" id="position" value="$position">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group">
                            <label for="visible">Видимость (на сайте):</label>
                            <input type="checkbox" class="form-control" id="visible" name="visible" $visible>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="picture">Изобр. 1 (лев.):</label>
                            <img src="$img_01" class="img-responsive img-thumbnail">
                            <input type="file" class="form-control" name="picture" id="picture">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="picture">Изобр. 2 (прав.):</label>
                            <img src="$img_02" class="img-responsive img-thumbnail">
                            <input type="file" class="form-control" name="picture" id="picture">
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-6">
                        <input type="submit" class="btn btn-success btn-block" value="Сохранить">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="btn btn-danger btn-block">Удалить</a>
                    </div>

            </form>
       </div>
   </div>
HERE;
    }

}



function v_materials_list() {
    $var = new C_mats();
    $materials = $var->get_materials_list();

    for ($i = 0; $i < count($materials); $i++) {
        echo'<option value="'.$materials[$i]['id'].'">'.$materials[$i]['title'].'</option>';
    }
}

function v_materials_property($prop) {
    $var = new C_mats();
    $materials = $var->get_materials_list();
    echo $materials[0][$prop];
}

function v_materials_count() {
    $var = new C_mats();
    $materials = $var->get_materials_list();
    echo count($materials);
}

function v_materials_array_json() {
    $var = new C_mats();
    $materials = $var->get_materials_to_json();
    $json = json_encode($materials);
    echo $json;
}

function v_materials_array_json_all() {
    $var = new C_mats();
    $materials = $var->get_materials_inf();
    $json = json_encode($materials);
    echo $json;
}

function v_material_cost($material_id) {
    $var = new C_mats();
    $material_cost = $var->get_material_cost($material_id);
    return $material_cost['cost'];
}


function v_edgings_list() {
    $var = new C_mats();
    $edgings = $var->get_edgings_list();

    for ($i = 0; $i < count($edgings); $i++) {
        echo'<option value="'.$edgings[$i]['id'].'">'.$edgings[$i]['title'].'</option>';
    }
}

function v_edgings_array_json() {
    $var = new C_mats();
    $edgings = $var->get_edgings_list();
    $json = json_encode($edgings);
    echo $json;
}

function v_logos_list() {
    $var = new C_mats();
    $logos = $var->get_logos_list();

    for ($i = 0; $i < count($logos); $i++) {
        echo'<option value="'.$logos[$i]['id'].'">'.$logos[$i]['title'].'</option>';
    }
}

function v_logos_array_json() {
    $var = new C_mats();
    $logos = $var->get_logos_list();
    $json = json_encode($logos);
    echo $json;
}

function v_logo_cost($logo_id) {
    $var = new C_mats();
    $logo_cost = $var->get_logo_cost($logo_id);
    return $logo_cost['cost'];
}

function v_basket_badge($basket) {
    if (count($basket) > 0) {
        echo '<span class=\'badge\'>';
        echo count($basket);
        echo '</span>';
    }
}

function v_basket_table($basket) {

/*    echo '<pre>';
    print_r($basket);
    echo '</pre>';*/

    $var = new C_marks();
    $var_mat = new C_mats();

    $summary = 0;

    echo '<table width=\'100%\' border=\'1\'>';
    echo '<tr>';
    echo '<th>№</th>';
    echo '<th>Наименование</th>';
    echo '<th>Материал</th>';
    echo '<th>Окантовка</th>';
    echo '<th>Логотипы</th>';
    echo '<th>Стоимость</th>';
    echo '<th>Кол-во</th>';
    echo '<th>Сумма</th>';
    echo '</tr>';

    for ($i = 0; $i < count($basket); $i ++) {
        $n = $i+1;

        $mark = $var->get_mark_title($basket[$i]['mark']);
        $model = $var->get_model_title($basket[$i]['model']);
        $mat = $var_mat->get_mat_title($basket[$i]['product']);
        $material = $var_mat->get_material_title($basket[$i]['material']);
        $logo = $var_mat->get_logo_title($basket[$i]['logo']);

        echo '<tr>';
        echo '<td align=\'center\'>'.$n.'</td>';
        echo '<td>'.$mat['title'].' для '.$mark['title'].' '.$model['title'].'</td>';
        echo '<td>'.$material['title'].'</td>';
        echo '<td>'.$basket[$i]['edging'].'</td>';
        echo '<td>'.$logo['title'];
        if ($basket[$i]['logo_pts'] > 0) { echo ' (x'.$basket[$i]['logo_pts'].')'; }
        echo '</td>';
        echo '<td align=\'right\'>'.$basket[$i]['cost'].' руб.</td>';
        echo '<td align=\'center\'>'.$basket[$i]['pts'].'</td>';
        echo '<td align=\'right\'>'.$basket[$i]['cost']*$basket[$i]['pts'].' руб.</td>';
        echo '</tr>';

        $summary += $basket[$i]['cost']*$basket[$i]['pts'];

    }

    echo '<tr>';
    echo '<td colspan=\'7\'>Итого</td>';
    echo '<td align=\'right\'>'.$summary.' руб.</td>';
    echo '</tr>';
    echo '</table>';

}


function v_basket_table_xs($basket) {

    $var = new C_marks();
    $var_mat = new C_mats();

    $summary = 0;

    for ($i = 0; $i < count($basket); $i ++) {
        $n = $i+1;

        $mark = $var->get_mark_title($basket[$i]['mark']);
        $model = $var->get_model_title($basket[$i]['model']);
        $mat = $var_mat->get_mat_title($basket[$i]['product']);
        $material = $var_mat->get_material_title($basket[$i]['material']);
        $logo = $var_mat->get_logo_title($basket[$i]['logo']);

        echo '<div class="row div_basket_block_order_xs add_margin_bottom">';
        echo '<div class="col-xs-12">';
        echo $n.'. '.$mat['title'].' для '.$mark['title'].' '.$model['title'].', материал "'.$material['title'].'", цвет окантовки "'.$basket[$i]['edging'].'"';

        if ($basket[$i]['logo'] == 1) {
            echo '. '.$logo['title'].'.';
        } else {
            echo ' + '.$logo['title'].' (х'.$basket[$i]['logo_pts'].')';
        }

        echo '</div>';
        echo '<div class="col-xs-4"><strong>х'.$basket[$i]['pts'].'</strong></div>';
        echo '<div class="col-xs-8 right">Стоимость: '.$basket[$i]['cost']*$basket[$i]['pts'].' руб.</div>';
        echo '</div>';

        $summary += $basket[$i]['cost']*$basket[$i]['pts'];

    }

    echo '<div class="col-xs-12 right"><strong>ИТОГО: '.$summary.' руб.</strong></div>';

}



function v_comments_list($comments_count) {
    $var = new C_comments();
    $mass = $var->get_comments_list($comments_count);

    for ($i = 0; $i < count($mass); $i ++) {
        echo '<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 div_comment_block">';
        echo '<img src="img/comments/'.$mass[$i]['img'].'" alt="" class="img_comment_photo">';
        echo '<div class="div_comment_name">'.$mass[$i]['name'].'</div>';
        echo $mass[$i]['comment'].'<br>';
        echo '<div class="div_comment_date">'.$mass[$i]['date'].'</div>';
        echo '</div>';
    }
}

function v_comments_admin_all() {
    $var = new C_comments();
    $mass = $var->get_comments_admin_list_all();

    for ($i = 0; $i < count($mass); $i ++) {
        $checked = '';
        $back = 'white';
        if ($mass[$i]['visible'] == 1) {
            $checked = 'checked';
            $back = '#ecb03d';
        }


        echo '<form method="post" action="change_comments.php">';

        echo '<input name="id" type="hidden" value="'.$mass[$i]['id'].'">';
        echo '<div class="col-xs-12 div_comment_block" style="background-color: '.$back.'">';
        echo '<img src="img/comments/'.$mass[$i]['img'].'" class="img_comment_photo">';
        echo '<input name="img" type="hidden" value="'.$mass[$i]['img'].'">';
        echo '<input name="name" type="text" value="'.$mass[$i]['name'].'" class="form-control"><br>';
        echo '<textarea name="comment" class="form-control" rows="5">'.$mass[$i]['comment'].'</textarea><br>';
        echo '<input name="date" type="datetime" value="'.$mass[$i]['date'].'"><br>';
        echo 'Видимость на сайте: <input name="visible" type="checkbox" '.$checked.'><br>';

        echo '<button class="btn btn-success" data-toggle="modal" data-target="#myModal_'.$mass[$i]['id'].'">Сохранить</button>';

        echo '</form>';

        echo '<button class="btn btn-danger" data-toggle="modal" data-target="#myModal_'.$mass[$i]['id'].'">Удалить</button>';
        echo '<div class="modal fade" id="myModal_'.$mass[$i]['id'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog">';
        echo '<div class="modal-content">';
        echo '<div class="modal-header">';
        echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
        echo '<h4 class="modal-title" id="myModalLabel">Удалить комментарий?'.$mass[$i]['id'].'</h4>';
        echo '</div>';
        echo '<div class="modal-footer">';
        echo '<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>';
        echo '<a href="change_comments.php?act=delete&id='.$mass[$i]['id'].'" class="btn btn-primary">Удалить</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';



/*        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal_3">Удалить</button>
        <div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Удалить комментарий?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                        <a href="change_comments.php?act=dalete&id=99" class="btn btn-primary">Удалить</a>
                    </div>
                </div>
            </div>
        </div>*/




        echo '</div>';
    }
}



function v_benefit_main_admin() {

    $var = new C_benefits_main();
    $benefit_main = $var->get_benefits_main();

    for ($i = 0; $i < count($benefit_main); $i++) {

        $title = $benefit_main[$i]['title'];
        $text = $benefit_main[$i]['text'];
        $icon = $benefit_main[$i]['icon'];
        $id = $benefit_main[$i]['id'];
        $count = count($benefit_main);

        print
<<<HERE
        <input type="hidden" name="id$i" value="$id">
        <input type="hidden" name="count" value="$count">
        <div class="form-group col-xs-12 col-sm-6">
            <label for="title">Заголовок преимущества:</label>
            <input type="text" class="form-control" id="title" name="title$i" value="$title">
        </div>
        <div class="form-group col-xs-12 col-sm-6">
            <label for="icon">Иконка:</label>
            <input type="text" class="form-control" id="icon" name="icon$i" value="$icon">
        </div>
        <div class="form-group col-xs-12">
            <label for="text">Текст преимущества:</label>
            <textarea class="form-control" id="text" name="text$i" rows="3">$text</textarea>
        </div>
        <div>------------------------------</div>
HERE;
    }

}













?>
