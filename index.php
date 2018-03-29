<?php

session_start();

require_once 'view.php';



if ( isset($_POST['login']) && isset($_POST['password']) ) {
    if ($_POST['login'] == 123 && $_POST['password'] == 123 ) {
        $_SESSION['login'] = true;
        echo "<div class='alert alert-success'>Все ОК, Маладэц!</div>";
    } else {
        echo "<div class='alert alert-danger'>Не правильно)!</div>";
    }
}

if ( isset($_GET['page'])) {
    if ($_GET['page'] == 'logout') {
        unset($_SESSION['login']);
        $_GET['page'] = $_GET['from'];
    }
}

if ( isset($_POST['btn_clear_basket']) ) {
    unset($_SESSION['basket']);
}

if ( isset( $_GET['order']) ) {
    unset($_SESSION['basket']);
    echo    '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="glyphicon glyphicon-ok"></span>
                Заказ успешно оформлен! Ожидайте звонок от менеджера.
            </div>';
}

if ( isset( $_GET['call_me']) ) {
    unset($_SESSION['basket']);
    echo    '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="glyphicon glyphicon-ok"></span>
                Заявка успешно отправлена! Ожидайте звонок.
            </div>';
}

if ( isset( $_GET['comment']) ) {
    echo    '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <span class="glyphicon glyphicon-ok"></span>
                Спасибо за Ваш отзыв, мы обязательно учтем Ваше пожалание. Отзыв появится на сайте после модерации.
            </div>';
}

if ( !isset($_SESSION['basket']) ) {
    $_SESSION['basket'] = array();
}

if ( isset($_POST['pts']) ) {
    require_once 'add_to_basket.php';
}

if ( isset($_POST['mobile_mark_list']) ) {
    $var = new C_marks();
    $mark_name = $var->get_mark_name($_POST['mobile_mark_list']);

    $_GET['page'] = 'catalog';
    $_GET['mark'] = $mark_name['name'];
}


require_once 'header.php';

if ( isset($_GET['page']) ) {

    switch ($_GET['page']) {

        case 'call_me':
            require_once 'call_me.php';
            break;

        case 'add_comment':
            require_once 'add_comment.php';
            break;

        case 'main':
            require_once 'main.php';
            break;


        case 'catalog':

            if ( isset($_GET['mark']) ) {

                if ( isset($_GET['model']) ) {

                    if ( isset($_GET['product']) ) {
                        require_once 'item.php';
                        break;
                    }

                    require_once 'product.php';
                    break;
                }

                require_once 'models.php';
                break;
            }

            require_once 'catalog.php';
            break;


        case 'about':
            require_once 'about.php';
            break;

        case 'gallery':
            require_once 'gallery.php';
            break;


        case 'howtobuy':
            require_once 'howtobuy.php';
            break;


        case 'delivery':
            require_once 'delivery.php';
            break;


        case 'comments':
            require_once 'comments.php';
            break;


        case 'contacts':
            require_once 'contacts.php';
            break;


        case 'basket':
            require_once 'basket.php';
            break;

        case 'admin':
            require_once 'admin.php';
            break;

        case 'login':
            require_once 'login.php';
            break;

        case 'buy':
            require_once 'buy.php';
            break;

        default:
            require_once 'main.php';
            break;
    }

} else {require_once 'main.php';}

require_once 'footer.php';

?>