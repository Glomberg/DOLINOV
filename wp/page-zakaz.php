<?php
/*
*Template Name: Для "ЗАКАЗ"
*/
get_header(); ?>
			<h2>Оформить заказ</h2>
				<section style="padding: 35px 45px;" id="zakaz">
					<table width="100%">
						<tr>
							<th width="45%">Выбор товара:</th>
							<th width="17%">Кол-во:</th>
							<th width="18%">Цена за 1 шт:</th>
							<th width="20%">Общая сумма:</th>
						</tr>
						<tr>
							<td>								
								<input type="checkbox" id="trenager" />
								<label for="trenager" class="trenager"></label>
								<img src="" alt="" />
								<span><label for="trenager">Тренажер<br>Долинова "Похудей"<br>подарочный набор</label></span>
							</td>
							<td>
								<input class="zakaz-value" type="text" disabled />
							</td>
							<td><span style="text-decoration: line-through;">7000 руб.</span> <span style="color: red;"> 2990</span> руб.</td>
							<td class="zakaz-summa"></td>
						</tr>
					</table>
					<div class="bonus">Акция <?php echo(date('d.m.Y')); ?> - бесплатная доставка по всей России!</div>
					<div class="hr"></div>
					Подарочный набор включает:
					<ul>	
						<li>Инструкция и DVD-диск с комплексом упражнений для ног, живота, рук и всех мышц;</li>
						<li>Тренажер-массажер «Пневмоподушка»;</li>
						<li>Крючок для крепления, измерительная лента, чехол,</li>
						<li>Магнитный активатор воды «Экотрон»;</li>
						<li>Дорожный (уменьшенный) вариант тренажера Долинова «Похудей»;</li>
						<li>Книга «Легкий способ похудеть»;</li>
						<li>Скидка 500р. на следующую покупку;</li>
					</ul>
					<br>
					<!-- FORM -->
					<div class="zakaz-form">
						<label for="zakaz-form-fio">ФИО:</label>
						<input type="text" id="zakaz-form-fio" name="zakaz-form-fio" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-adress">Адрес:</label>
						<input type="text" id="zakaz-form-adress" name="zakaz-form-adress" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-phone">Телефон:</label>
						<input type="text" id="zakaz-form-phone" name="zakaz-form-phone" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-email">E-mail:</label>
						<input type="text" id="zakaz-form-email" name="zakaz-form-email" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-city">Город:</label>
						<input type="text" id="zakaz-form-city" name="zakaz-form-city" />
					</div>
					<!-- /FORM -->
					<div class="options">Доставка во все города России</div>
					<div class="options">Возможность самостоятельного забора из <a href="#" target="_blank">пунктов выдачи заказов</a></div>
					<div class="options">Время доставки от 1 дня</div>
					<div class="options">* Точную дату доставки Вам назовет оператор</div>
					<br>
					
					<div class="bonus">Способ оплаты:</div>
					<input type="radio" name="sposob-oplaty" id="sposob-oplaty-nal" value="Наличными" />
						<label class="sposob-oplaty" for="sposob-oplaty-nal">Наличными при получении</label>
					<input type="radio" name="sposob-oplaty" id="sposob-oplaty-kard" value="Безналично" />	
						<label class="sposob-oplaty" for="sposob-oplaty-kard">Безналичной оплатой</label>
						
					<a href="javascript:void(0);" id="zakaz-submit">Оформить</a>
					<div class="zakaz-result"></div>
	<?php iinclude_page(33); ?>
<script>
	$(document).ready(function(){
		$("header li.menu6").addClass("active");
	});
</script>
<?php get_footer(); ?>