<?php
/*
*Template Name: Для "CALL-BACK"
*/
get_header(); ?>
	<h2>ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</h2>
	<form id="callback">
		<label for="callback-name">ИМЯ:</label>
		<input type="text" id="callback-name" />
		<label for="callback-phone">ТЕЛЕФОН:</label>
		<input type="text" id="callback-phone" />
		<label for="callback-city">ГОРОД:</label>
		<input type="text" id="callback-city" />
		<label for="callback-msg">СООБЩЕНИЕ:</label>
		<textarea id="callback-msg"></textarea>
		<a href="javascript:void(0);">Отправить</a>
	</form>
	<?php iinclude_page(35); ?>
<?php get_footer(); ?>