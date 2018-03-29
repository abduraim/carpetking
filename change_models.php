<?php

if ( isset($_POST['add_model']) ) {
    //Добавление модели



/*    print_r($_POST['mark']);
    die();*/


    if ($_POST['title'] != null && $_POST['model_name'] != null && $_POST['name'] != null && $_FILES['img']) 
    {

        isset($_POST['visible']) ? $visible = 1 : $visible = 0;

        $types = array('image/gif', 'image/png', 'image/jpeg');
        $size = 1024000;
        if (!in_array($_FILES['img']['type'], $types))
            die('Запрещённый тип файла');
        if ($_FILES['img']['size'] > $size)
            die('Слишком большой размер файла');
        $file_extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $pathToImg = 'uploads/models/' . $_POST['name'] . '.' . $file_extension;
        if (!@copy($_FILES['img']['tmp_name'], $pathToImg))
            {echo 'Что-то пошло не так';}
        else
            {
                echo 'Загрузка удачна';
            }


/*        print_r($_POST['mark']);
        die();*/



        require_once 'model.php';
        $var = new M_marks();
        $var->add_model($_POST['mark'], $_POST['title'], $_POST['model_name'], $_POST['name'], $pathToImg, $visible);
    }


}

if ( isset($_POST['change_model']) ) {
    //Сохранение информации об определенной моделе

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
        $old_pathToImg = $pathToImg;
        $pathToImg = 'uploads/models/' . $_POST['name'] . '.' . $file_extension;
        if (!@copy($_FILES['img']['tmp_name'], $pathToImg))
            {echo 'Что-то пошло не так';}
        else
            {
                if ($pathToImg != $old_pathToImg) {
                    unlink ($old_pathToImg);
                }
                echo 'Загрузка удачна';
            }
    }





    require_once 'model.php';
    $var = new M_marks();
    $var->update_model_inf($_POST['id'], $_POST['title'], $_POST['model_name'], $_POST['name'], $pathToImg, $visible);
}

if ( isset($_GET['id']) ) {
    echo $_GET['id'];
    die();
}

if ( isset($_GET['del_id']) )
{
    require_once 'model.php';
    $var = new M_marks();
    $var->delete_model($_GET['del_id']);
    unlink($_GET['del_img']);
    $_POST['mark'] = $_GET['mark'];
}

?>


<?php

echo '<script type="text/javascript">';
echo 'location.replace("index.php?page=admin&section=models&mark='.$_POST['mark'].'");';
echo '</script>';

?>
