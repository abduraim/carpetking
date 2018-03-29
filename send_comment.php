<?php

// если была нажата кнопка "Отправить"
//if(isset($_POST['submit']))
//{
//substr(htmlspecialchars(trim($_POST['name'].' '.$_POST['tell'])), 0, 1000);
$mess =  $_POST['name'].'<br>'.$_POST['comment'];
// mb_substr(htmlspecialchars(trim($_POST['comm'])), 0, 1000000, 'UTF-8')
// $to - кому отправляем
$to = 'abduraim.t@gmail.com, isakovaleksandr6@gmail.com';
// $from - от кого
$from='LUCKYCAR';
// функция, которая отправляет наше письмо
$send = mail($to, 'Новый отзыв на сайте', $mess, 'Content-type: text/html; charset=utf-8' . "\r\n" . 'From:'.$from);

/*if ($send == 'true')
{
    header("Location: index.php?page=main&call_me=ok"); exit();
}*/

require_once 'model.php';
$var = new M_comments();
$var->add_comment($_POST['name'], $_POST['comment']);

?>

<script type="text/javascript">
    location.replace("index.php?page=main&comment=ok");
</script>
