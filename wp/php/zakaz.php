<?php
if (isset($_POST['zakaz_value_standart'])) {$zakaz_value_standart = $_POST['zakaz_value_standart'];}
if (isset($_POST['zakaz_value_comfort'])) {$zakaz_value_comfort = $_POST['zakaz_value_comfort'];}
if (isset($_POST['zakaz_summa'])) {$zakaz_summa = $_POST['zakaz_summa'];}
if (isset($_POST['zakaz_form_fio'])) {$zakaz_form_fio = $_POST['zakaz_form_fio'];}
if (isset($_POST['zakaz_form_adress'])) {$zakaz_form_adress = $_POST['zakaz_form_adress'];}
if (isset($_POST['zakaz_form_phone'])) {$zakaz_form_phone = $_POST['zakaz_form_phone'];}
if (isset($_POST['zakaz_form_email'])) {$zakaz_form_email = $_POST['zakaz_form_email'];}
if (isset($_POST['zakaz_form_city'])) {$zakaz_form_city = $_POST['zakaz_form_city'];}
if (isset($_POST['sposob_oplaty'])) {$sposob_oplaty = $_POST['sposob_oplaty'];}
	$to = "Porofix@yandex.ru";
	$headers = "Content-type: text/plain; charset =utf-8";
	$subject = "samozdrav1.ru [ЗАКАЗ]";
	$message = "ЗАКАЗ реквизиты:
				Заказчик - $zakaz_form_fio
				Адрес заказчика - $zakaz_form_adress
				Телефон заказчика - $zakaz_form_phone
				E-mail заказчика - $zakaz_form_email
				Город доставки - $zakaz_form_city
				-------------------------------------------------------
				Заказ состоит из:
				Комплекс 'Самоздрав-STANDART' - $zakaz_value_standart штук
				Комплекс 'Самоздрав-COMFORT' - $zakaz_value_comfort штук
				на сумму $zakaz_summa
				Выбранный способ оплаты - $sposob_oplaty";
	$send = mail($to, $subject, $message, $headers);
	if ($send == 'true'){
		echo ("Спасибо! В ближайшее время с Вами свяжется наш специалист. Мы работаем с 9 до 21 по Мск.");
	} else {
		echo "<p><b>Ошибка. Сообщение не отправлено!";
	}
?>