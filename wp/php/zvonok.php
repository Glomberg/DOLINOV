<?php
if (isset($_POST['cb-name'])) {$cb_name = $_POST['cb-name'];}
if (isset($_POST['cb-phone'])) {$cb_phone = $_POST['cb-phone'];}
if (isset($_POST['cb-city'])) {$cb_city = $_POST['cb-city'];}
if (isset($_POST['cb-message'])) {$cb_message = $_POST['cb-message'];}
	$to = "Porofix@yandex.ru";
	$headers = "Content-type: text/plain; charset =utf-8";
	$subject = "samozdrav1.ru [ОБРАТНЫЙ ЗВОНОК]";
	$message = "Имя - $cb_name
				Телефон - $cb_phone
				Город - $cb_city
				Сообщение - $cb_message";
	$send = mail($to, $subject, $message, $headers);
	if ($send == 'true'){
		echo ("Спасибо! В ближайшее время с Вами свяжется наш специалист. Мы работаем с 9 до 21 по Мск.");
	} else {
		echo "<p><b>Ошибка. Сообщение не отправлено!";
	}
?>