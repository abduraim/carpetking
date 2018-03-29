<?php

if (
    isset($_POST['pts']) &&
    isset($_POST['material']) &&
    isset($_POST['edging']) &&
    isset($_POST['logo']) &&
    isset($_POST['mark']) &&
    isset($_POST['model']) &&
    isset($_POST['product']) )
{
    $i = count($_SESSION['basket']);

    $_SESSION['basket'][$i]['pts'] = $_POST['pts'];
    $_SESSION['basket'][$i]['material'] = $_POST['material'];
    $_SESSION['basket'][$i]['edging'] = $_POST['edging'];
    $_SESSION['basket'][$i]['logo'] = $_POST['logo'];
    $_SESSION['basket'][$i]['mark'] = $_POST['mark'];
    $_SESSION['basket'][$i]['model'] = $_POST['model'];
    $_SESSION['basket'][$i]['product'] = $_POST['product'];
    if ( isset($_POST['logo_pts']) ) {
        $_SESSION['basket'][$i]['logo_pts'] = $_POST['logo_pts'];
    } else {
        $_SESSION['basket'][$i]['logo_pts'] = 0;
    }
    $_SESSION['basket'][$i]['cost'] = v_material_cost($_SESSION['basket'][$i]['material']) + ( v_logo_cost($_SESSION['basket'][$i]['logo']) * $_SESSION['basket'][$i]['logo_pts'] );

/*    echo    '<div class=\'alert alert-success\'>
                <span class="glyphicon glyphicon-ok"></span>
                Товар добавлен в корзину.
                <a href="?page=basket">Перейти к оформлению заказа <span class="glyphicon glyphicon-new-window"></span></a>
            </div>';*/
}

?>

<script type="text/javascript">
    location.replace("index.php?page=buy");
</script>