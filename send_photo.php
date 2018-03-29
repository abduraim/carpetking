<?php

// если была нажата кнопка "Отправить"
//if(isset($_POST['submit']))
//{
$title = mb_substr(htmlspecialchars(trim('Запрос фото - '.$_POST['name'].' '.$_POST['telephone'])), 0, 1000, 'UTF-8');
//substr(htmlspecialchars(trim($_POST['name'].' '.$_POST['tell'])), 0, 1000);
$mess =  $_POST['comment'].' - '.$_POST['telephone'].' - '.$_POST['mail'];
// mb_substr(htmlspecialchars(trim($_POST['comm'])), 0, 1000000, 'UTF-8')
// $to - кому отправляем
$to = 'abduraim.t@gmail.com, isakovaleksandr6@gmail.com';
// $from - от кого
$from='LUCKYCAR';
// функция, которая отправляет наше письмо
$send = mail($to, $title, $mess, 'Content-type: text/plain; charset=utf-8' . "\r\n" . 'From:'.$from);

/*if ($send == 'true')
{
    header("Location: index.php?page=main&call_me=ok"); exit();
}*/
?>

<script type="text/javascript">
    location.replace("index.php?page=main&call_me=ok");
</script>
