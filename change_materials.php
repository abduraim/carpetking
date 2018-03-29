<?php

if ( isset($_POST['add_mark']) ) {
    //Добавление марки




    if ($_POST['title'] != null && $_POST['title_rus'] != null && $_POST['name'] != null && $_FILES['img']) {



        if ( isset($_POST['visible']) )
            $visible = 1;
        else
            $visible = 0;




        $types = array('image/gif', 'image/png', 'image/jpeg');
        $size = 1024000;
        if (!in_array($_FILES['img']['type'], $types))
            die('Запрещённый тип файла');
        if ($_FILES['img']['size'] > $size)
            die('Слишком большой размер файла');
        $file_extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $pathToImg = 'uploads/marks/' . $_POST['name'] . '.' . $file_extension;
        if (!@copy($_FILES['img']['tmp_name'], $pathToImg))
            {echo 'Что-то пошло не так';}
        else
            {
                echo 'Загрузка удачна';
            }



        require_once 'model.php';
        $var = new M_marks();
        $var->add_mark($_POST['title'], $_POST['title_rus'], $_POST['name'], $pathToImg, $visible);
    }


}

if ( isset($_POST['change_materials']) ) {
    //Сохранение информации об определенном материале

/*    echo ($_POST['id']);
    $id = $_POST['id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $density_pile = $_POST['density_pile'];
    $dept_canvas = $_POST['dept_canvas'];
    $type_pile = $_POST['type_pile'];
    $colors = $_POST['colors'];
    $description = $_POST['description'];*/

    //$_POST['visible'];
    //$img_01 = $_POST['img_1'];
    //$img_02 = $_POST['img_2'];

//$id, $title, $name, $cost, $density_pile, $dept_canvas, $type_pile, $colors, $description;

    if ( isset($_POST['visible']) )
        $visible = 1;
    else
        $visible = 0;

    require_once 'model.php';
    $var = new M_mats();
    $var->update_materials_inf($_POST['id'], $_POST['title'], $_POST['name'], $_POST['cost'], $_POST['density_pile'], $_POST['dept_canvas'], $_POST['type_pile'], $_POST['colors'], $_POST['description'], $_POST['position'], $visible);








    die();


    if ( isset($_POST['visible']) )
        $visible = 1;
    else
        $visible = 0;


    $pathToImg=$_POST['img'];

    if ( $_FILES['img']['error'] == 0 ) {
        $types = array('image/gif', 'image/png', 'image/jpeg');
        $size = 1024000;
        if (!in_array($_FILES['img']['type'], $types))
            die('Запрещённый тип файла');
        if ($_FILES['img']['size'] > $size)
            die('Слишком большой размер файла');
        $file_extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $pathToImg = 'uploads/marks/' . $_POST['name'] . '.' . $file_extension;
        if (!@copy($_FILES['img']['tmp_name'], $pathToImg))
            {echo 'Что-то пошло не так';}
        else
            {
                echo 'Загрузка удачна';
            }
    }





    require_once 'model.php';
    $var = new M_mats();
    $var->update_mark_inf($_POST['id'], $_POST['title'], $_POST['title_rus'], $_POST['name'], $pathToImg, $visible);
}

if ( isset($_GET['id']) ) {
    echo $_GET['id'];
    die();
}

if ( isset($_GET['del_id']) )
{
    require_once 'model.php';
    $var = new M_marks();
    $var->delete_mark($_GET['del_id']);
    unlink($_GET['del_img']);
}

?>

<script type="text/javascript">
    location.replace("index.php?page=admin&section=materials");
</script>
