<?php

if ( isset($_POST['add_mark']) ) {
    //Добавление марки




    if ($_POST['title'] != null && $_POST['title_rus'] != null && $_POST['name'] != null && $_FILES['img']) {



        isset($_POST['visible']) ? $visible = 1 : $visible = 0;




        $types = array('image/gif', 'image/png', 'image/jpeg');
        $size = 1024000;
        if (!in_array($_FILES['img']['type'], $types))
            die('Запрещённый тип файла');
        if ($_FILES['img']['size'] > $size)
            die('Слишком большой размер файла');
        $file_extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $old_pathToImg = $pathToImg;
        $pathToImg = 'uploads/marks/' . $_POST['name'] . '.' . $file_extension;
        if (!@copy($_FILES['img']['tmp_name'], $pathToImg))
            {echo 'Что-то пошло не так';}
        else
            {
                if ($pathToImg != $old_pathToImg) {
                    unlink ($old_pathToImg);
                }
                echo 'Загрузка удачна';
            }



        require_once 'model.php';
        $var = new M_marks();
        $var->add_mark($_POST['title'], $_POST['title_rus'], $_POST['name'], $pathToImg, $visible);
    }


}

if ( isset($_POST['change_mark']) ) {
    //Сохранение информации об определенной марке


    isset($_POST['visible']) ? $visible = 1 : $visible = 0;


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
    $var = new M_marks();
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
    location.replace("index.php?page=admin&section=marks");
</script>
