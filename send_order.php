<?php

session_start();

require_once 'view.php';

// если была нажата кнопка "Отправить"
//if(isset($_POST['submit']))
//{
$title = mb_substr(htmlspecialchars(trim($_POST['name'].' '.$_POST['telephone'])), 0, 1000, 'UTF-8');
//substr(htmlspecialchars(trim($_POST['name'].' '.$_POST['tell'])), 0, 1000);
$mess =  $_POST['comment'].' - '.$_POST['telephone'];

$mess = '<strong>Поступил новый заказ:</strong>'.'<br>'.
		'Контактное лицо: '.$_POST['name'].'<br>'.
		'Телефон: '.$_POST['telephone'].'<br>'.
		'<strong>'.'Заказ: '.'</strong><br>';


		$basket = $_SESSION['basket'];
		$var = new C_marks();
		$var_mat = new C_mats();

		$summary = 0;

		$mess .= '<table width=\'100%\' border=\'1\'>';
		$mess .= '<tr>';
		$mess .= '<th>№</th>';
		$mess .= '<th>Наименование</th>';
		$mess .= '<th>Материал</th>';
		$mess .= '<th>Окантовка</th>';
		$mess .= '<th>Логотипы</th>';
		$mess .= '<th>Стоимость</th>';
		$mess .= '<th>Кол-во</th>';
		$mess .= '<th>Сумма</th>';
		$mess .= '</tr>';

		for ($i = 0; $i < count($basket); $i ++) {
			$n = $i+1;

			$mark = $var->get_mark_title($basket[$i]['mark']);
			$model = $var->get_model_title($basket[$i]['model']);
			$mat = $var_mat->get_mat_title($basket[$i]['product']);
			$material = $var_mat->get_material_title($basket[$i]['material']);
			$logo = $var_mat->get_logo_title($basket[$i]['logo']);

			$mess .= '<tr>';
			$mess .= '<td align=\'center\'>'.$n.'</td>';
			$mess .= '<td>'.$mat['title'].' для '.$mark['title'].' '.$model['title'].'</td>';
			$mess .= '<td>'.$material['title'].'</td>';
			$mess .= '<td>'.$basket[$i]['edging'].'</td>';
			$mess .= '<td>'.$logo['title'];
			if ($basket[$i]['logo_pts'] > 0) { $mess .= ' (x'.$basket[$i]['logo_pts'].')'; }
			$mess .= '</td>';
			$mess .= '<td align=\'right\'>'.$basket[$i]['cost'].' руб.</td>';
			$mess .= '<td align=\'center\'>'.$basket[$i]['pts'].'</td>';
			$mess .= '<td align=\'right\'>'.$basket[$i]['cost']*$basket[$i]['pts'].' руб.</td>';
			$mess .= '</tr>';

			$summary += $basket[$i]['cost']*$basket[$i]['pts'];

		}

		$mess .= '<tr>';
		$mess .= '<td colspan=\'7\'>Итого</td>';
		$mess .= '<td align=\'right\'>'.$summary.' руб.</td>';
		$mess .= '</tr>';
		$mess .= '</table><br><br>';

		$mess .= 'Комментарий к заказу: '.'<br>'.$_POST['comment'];


// mb_substr(htmlspecialchars(trim($_POST['comm'])), 0, 1000000, 'UTF-8')
// $to - кому отправляем
$to = 'abduraim.t@gmail.com, isakovaleksandr6@gmail.com';
// $from - от кого
$from='sale@luckycar24.ru';
// функция, которая отправляет наше письмо
$send = mail($to, $title, $mess, 'Content-type: text/html; charset=utf-8' . "\r\n" . 'From:'.$from);

/*if ($send == 'true')
	{
	header("Location: index.php?page=main&order=ok"); exit();
	}*/

?>

<script type="text/javascript">
	location.replace("index.php?page=main&order=ok");
</script>
