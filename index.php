<?php
require_once("./config.php")
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- 
<head>
<!-- Yandex.Metrika couter -->

<noscript><div><img src="https://mc.yandex.ru/watch/61682032" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<title>Главная | <?=$config['site_name']?></title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="crsf-token" content="3c304bf61d5868b1acbffc49f75181597e1144296b634d1c5387a996d4a32bfd">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	 <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.html">
	 <link href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<link href="css/pipui3769.css?23" rel="stylesheet">
	<link href="css/pipui-responsive8f14.css?7" rel="stylesheet">
	<script src="js/jquery.loading.min.js"></script>
	<script src="js/maine4da.js?5"></script>
	<script src="js/pipui.js"></script>
	<script src="js/notify.js"></script>
	<!--<script src="js/form.js"></script>-->

	<link rel="stylesheet" href="css/positionsc9f0.css?8">
	<link rel="stylesheet" href="css/animationsa87f.css?4">
	<link rel="stylesheet" href="css/style3769.css?23">
	<link rel="stylesheet" href="css/style-responsiveeccb.css?3">
</head>
<body>

<div class="navbar">
	<div class="container">
		<div class="navbar-wrapper">
			<div class="nav-left">
				<a class="nav-brand" href="#"><?= $config['site_name'] ?></a>
				<a href="/" class="nav-mobile"><i class="fa fa-bars">≡</i></a>
			</div>

			<div class="nav-center"></div>

			<div class="nav-right">
				<ul class="navbar-menu">
					<li class="nav-li">
						<a class="nav-link" href="<?=$config['vk_group']?>" target="_blank">Группа ВК</a>
					</li>

					<li class="nav-li">
						<a class="nav-link" href="<?=$config['vk_support']?>" target="_blank">Поддержка</a>
					</li>
					
					<!-- <li class="nav-li">
						<a class="nav-link" href="bans/index.html" target="_blank">Баны</a>
					</li>-->

					<li class="nav-li">
						<a class="nav-link" href="https://vk.com/topic-212568965_48754005" target="_blank">Правила сервера</a>
					</li>

					<li class="nav-li">
						<a class="nav-link" data-modal="contacts" href="#">Контакты</a>
					</li>

					<li class="nav-li">
						<a class="nav-link" data-modal="donate" href="#">Описание привилегий</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--<div class="container">
	<div class="header">
		<div class="header-content">
   <div class="title">❗ Скидки до 60% ❗ <br> До 20 июня!</div>
   <div class="text">🔔 Скидки до 60% на <b>кредиты и весь ассортиментов предметов!</b><br>
   🔔 Скидки до 60% на <b>кредиты и весь ассортиментов предметов!</b><br>

 </div>
  </div>
	</div> -->

 <div class="container">
	<div class="header">
		<div class="left">
			<div class="header-content">
				<div class="title">Добро пожаловать!</div>
				<div class="text">Хочешь купить какую-то привилегию, чтобы получить дополнительные плюшки? Тогда переходи в наш магазин и приобретай всё, что только душе угодно!</div>
			</div>

			<div class="header-footer">
				<a href="#" class="link-arrow slide-to-shop">Перейти в магазин</a>
			</div>
		</div>
		<div class="right">
			<div class="astronaut"></div>
			<div class="earth"></div>
		</div>
	</div>

	<div class="shop-head">
		<div id="shop" class="title-block">Покупка привилегий</div>
	</div>
	
	<div class="tabs tabs-horizontal">
		<ul class="tab-links">
		  <?php
                foreach ($config["categories1"] as $key1 => $value1):
          ?>
          <li>
          <a href="#" data-id="#<?= $key1 ?>" class="tab-link <?= ($value1['default'] ? 'active' : '') ?>"><?= $value1['title'] ?></a>
          </li>
          <?php
               endforeach;
          ?>
      </ul>

		<div class="tab-list">
			<!-- Auto-generated tabs list -->
          <?php
                foreach ($config["categories"] as $key2 => $value2):
            ?>
          <div class="tab-id <?= ($value2['default'] ? 'active' : '') ?>" id="<?=$key2?>"><div class="items">
            <?php
                foreach ($value2["products"] as $key => $value):
            ?>
            <div class="item-id" data-id="<?=$key?>" price="<?=$value["price"]?>" donate="<?=$key?>" data-positions="{&quot;1&quot;:{&quot;name&quot;:&quot;1 \u043c\u0435\u0441\u044f\u0446&quot;,&quot;price&quot;:1076,&quot;rubins&quot;:800,&quot;description&quot;:[&quot;&lt;b&gt;+800 \u043e\u0441\u043a\u043e\u043b\u043a\u043e\u0432&lt;\/b&gt;\u043a\u044d\u0448\u0431\u0435\u043a&quot;],&quot;currency&quot;:&quot;\u20bd&quot;},&quot;2&quot;:{&quot;name&quot;:&quot;3 \u043c\u0435\u0441\u044f\u0446\u0430&quot;,&quot;price&quot;:1999,&quot;rubins&quot;:2000,&quot;description&quot;:[&quot;&lt;b&gt;+2000 \u043e\u0441\u043a\u043e\u043b\u043a\u043e\u0432&lt;\/b&gt;\u043a\u044d\u0448\u0431\u0435\u043a&quot;,&quot;&lt;b&gt;\u0423\u043d\u0438\u043a\u0430\u043b\u044c\u043d\u044b\u0439 \u0442\u0438\u0442\u0443\u043b&lt;\/b&gt;\u0432 \u043f\u043e\u0434\u0430\u0440\u043e\u043a&quot;],&quot;currency&quot;:&quot;\u20bd&quot;},&quot;3&quot;:{&quot;name&quot;:&quot;\u043d\u0430\u0432\u0441\u0435\u0433\u0434\u0430&quot;,&quot;price&quot;:3899,&quot;rubins&quot;:3500,&quot;description&quot;:[&quot;&lt;b&gt;+3500 \u043e\u0441\u043a\u043e\u043b\u043a\u043e\u0432&lt;\/b&gt;\u043a\u044d\u0448\u0431\u0435\u043a&quot;,&quot;&lt;b&gt;\u0423\u043d\u0438\u043a\u0430\u043b\u044c\u043d\u044b\u0439 \u0442\u0438\u0442\u0443\u043b&lt;\/b&gt;\u0432 \u043f\u043e\u0434\u0430\u0440\u043e\u043a&quot;],&quot;currency&quot;:&quot;\u20bd&quot;}}">
						<div class="item-image" style="background-image: url('<?=$value["image"]?>');">
							<button class="btn" data-modal="item-model">Купить</button>
						</div>
						<div class="item-title"><?=$value["title"]?></div>
						<div class="item-price"><?=$value["price"]?> ₽</div>
					</div>
            <?php
               endforeach;
            ?>
            </div>
          </div>
          <?php
               endforeach;
            ?>
	</div>
</div>

<div class="modal" data-id="item-model" data-loading>
	<div class="wrapper" style="max-width: 650px;">
		<form method="post" class="modal-content" action="anypay.php" base-token="3c304bf61d5868b1acbffc49f75181597e1144296b634d1c5387a996d4a32bfd">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header order-title"></div>

			<input type="hidden" name="d-id" value="0">
			<input type="hidden" name="position" id="position">
            <input type="hidden" name="price" value="0">
            <input type="hidden" name="donate" value="0">
            

			<div class="modal-body" style="
    display: flex;
	padding: 30px 45px;
    justify-content: space-around;
	position: relative;
    overflow: hidden;
">

				<div id="enter-nick" style="overflow: hidden; max-width: 380px; padding: 20px 25px;" class="list-data-i">
					<input type="text" name="username" value="" placeholder="Введите ваш ник">
					<input type="text" name="promo" placeholder="Введите промокод (если есть)">
					<p name="promo-show" style="
		color: gray;
		padding-bottom: 15px;
		text-align: center;
		cursor: pointer;
		text-decoration: underline;
	">У меня есть промокод</p>
					<button class="btn block w-100 order-submit" type="submit">Оплатить</button><br><br>
	        <small style="color: gray">При нажатии на кнопку "Оплатить" Вы принимаете наше <a href="#" data-modal="accept">Лицензионное соглашение</a> и даёте согласие на <a href="#" data-modal="privacy">обработку личных данных</a></small>
				</div>
				<div id="select-method" animation="switch" modal-mode="big-modal" class="hidden list-data-i">
                            <div class="item">
                                <h1>Выберите способ оплаты</h1>
								<h1>• Россия</h1>
                                <div class="list-methods-aval">
                                    <div class="item" id="card">
                                        <img src="img/cardRussia.png" alt="">
                                    </div>
                                    <div class="item" id="qiwi">
                                        <img src="img/qiwi.png" alt="">
                                    </div>
                                    <!--<div class="item" id="ym">
                                        <img src="img/umoney.png" alt="">
                                    </div>-->
                                    <!--                                <div class="item" id="mts">
                                    <img src="img/mtc.png" alt="">
                                </div> -->
<!--                                     <div class="item" id="beeline">
                                        <img src="img/beeline.png" alt="">
                                    </div>
                                    <div class="item" id="beeline">
                                        <img src="img/mega.png" alt="">
                                    </div> -->
                                    <!--                                <div class="item" id="tele2">
                                    <img src="img/tele.png" alt="">
                                </div> -->
                                    <!--<div class="item" id="freekassa">
                                        <img src="img/free-kassa.png" alt="">
                                    </div> -->
                                    <div class="item" id="tinkoff">
                                        <img src="img/tinkoff.png" alt="">
                                    </div>
                                </div>
                                <input type="hidden" name="plat" id="plat">
								<br>
								<h1>• Украина</h1>
								<div class="list-methods-aval">
                                    <div class="item" id="interkassa">
                                        <img src="img/cardUkraine.png" alt="">
                                    </div>
                                    <div class="item" id="interkassa">
                                        <img src="img/am.png" alt="">
                                    </div>
                                    <div class="item" id="interkassa">
                                        <img src="img/perf.png" alt="">
                                    </div>
								</div>

								<br>
								<h1>• Другие страны</h1>
								<div class="list-methods-aval">
								    <div class="item" id="paybox">
                                        <img src="img/cardWorld.png" alt="">
                                    </div>
                                <!--    <div class="item" id="qiwi">
                                        <img src="img/qiwi.png" alt="">
                                    </div>
                                    <div class="item" id="ym">
                                        <img src="img/umoney.png" alt="">
                                    </div>
                                    <div class="item" id="interkassa">
                                        <img src="img/am.png" alt="">
                                    </div>
                                    <div class="item" id="interkassa">
                                        <img src="img/perf.png" alt="">
                                    </div>-->
								</div>
                            </div>
                            <div class="item email" style="display: none">
                                <h1>Электронная почта</h1>
                                <div class="email-body">
                                    <input class="default-input" style="margin-bottom: 0" type="email" name="mail" placeholder="test@mail.ru">
                                    <br>
                                    <button type="submit" class="btn block w-100 order-submit modal-type" style="width: 100%;">Купить за 0 У.Е</button>
                                    <small class="order-comission" style="width: 100%;color: #afafaf;text-align: center;display: flex;padding-top: 5px;justify-content: space-around;"></small>
                                </div>
                            </div>
                            <a href="#" id="mail" data-reveal=".email" class="gray-link">Указать электронную почту</a>
                            <a href="#" onclick="$(this).submit();" class="gray-link" data-next="#enter-nick">... вернуться назад</a>
                        </div>
			</div>
		</form>
	</div>
</div>

<div class="modal" data-id="contacts">
	<div class="wrapper">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Контакты</div>

			<div class="modal-body">
				<div><i class="icon-con-mail"></i>&nbsp;&nbsp;&nbsp;<a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="9cefe9ececf3eee8dcd4e5ecf9eed1dfb2eceef3">[email&#160;protected]</a></div>
				<div><i class="icon-con-vk"></i>&nbsp;&nbsp;&nbsp;vk.com/hyperspacemc</div>
			</div>
		</form>
	</div>
</div>

<div class="modal" data-id="accept">
	<div class="wrapper" style="width: 100%">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Соглашение</div>

			<div class="modal-body">
<b>Данное пользовательское соглашение устанавливает взаимоотношения между пользователями ресурса HyperMC.pro и администрацией сайта HyperMC.pro, a также игрового проекта HyperSpace.</b><br>
<br>
<b>1.0. Предмет соглашения.</b> <br>
1.1. Настоящее соглашение является документом, обязательным к ознакомлению каждому игроку, обратившегося к донат услугам. <br>
1.2. Администрация HyperSpace предоставляет бесплатный доступ к игровым серверам и сайту. <br>
1.3. Пользователь, игрок – физическое лицо, прошедшее регистрацию на сервере HyperSpace. <br>
1.4. Акцепт настоящего соглашения, а также правил сервера между игроком и администрацией заключается в момент регистрации на сервере. <br>
1.5. Администрация сервера предоставляет полный доступ и свободу игры на сервере на бесплатной основе. <br>
1.6. Покупка товаров и донат привилегий на сайте HyperMC.pro является добровольным пожертвованием на развитие проекта HyperSpace. <br>
1.7. Покупка товаров и донат привилегий не является обязательным требованием или условием для игры на сервере. <br>
1.8. Все товары, приобретенные на сайте HyperMC.pro выдаются пользователю на сервере в течении 7 рабочих дней. <br>
1.9. Сроки действия данного соглашения не ограничены. Изменения данного соглашения вступают в силу с момента публикации его на сайте. <br>
1.10. Если пользователь не согласен с каким-либо положением настоящего соглашение или ощущает вероятность негативных для себя последствий, ему рекомендуется отказаться от донат услуг. <br>
1.11. Приобретая донат услуги, игрок автоматически подтверждает ознакомление и согласие с положениями данного соглашения. <br>
<br>
<b>2.0. Общие положения.</b> <br>
2.1. Собственники проекта не несут никакой ответственности за ущерб морального, либо материального характера, который может нанести прямо, либо опосредованно, предлагаемый игровой сервер, а также за любые неточности, ошибки, дефекты и сбои работы сайта или игрового сервера, вне зависимости от причин их вызвавших. <br>
2.2. Приобретая донат услуги, игрок подтверждает свое согласие не возлагать ответственность, возможные убытки и ущерб, связанные с пользованием сайтом, либо игровым сервером, на его владельцев и администрацию.<br>
2.3. В случае нанесение игроком ущерба проекту, администрация и собственники проекта имеют право требовать возмещения ущерба и выплаты соответствующих компенсаций. <br>
2.4. В случае несоответствия какого-либо положения настоящих правил требованиям действующего законодательства оно считается замененным, близким по содержанию, положением действующего законодательства. При этом все остальные положения настоящих правил сохраняют свою силу. <br>
2.5. Администрация не возвращает денежные средства в случае нарушения того, или иного правила игроком, повлекшим за собой снятие привилегии. <br>
<br>
<b>3.0. Исключение гарантий.</b> <br>
3.1. Услуги предоставляются «как есть» и представители проекта не предоставляют никаких гарантий в отношении их предоставления. <br>
3.2. Администрация имеет право забрать привилегию без объяснения и без возвращения денежных средств. <br>
3.3. В случае нарушения правил сервера возврат привилегии и денежных средств не производится. <br>
<br>
			</div>
		</form>
	</div>
</div>

<div class="modal" data-id="conf">
	<div class="wrapper" style="width: 100%">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Политика обработки персональных данных</div>

			<div class="modal-body">
<br>
Персональные данные Пользователя/Покупателя обрабатываются в соответствии с ФЗ «О персональных данных» № 152-ФЗ.<br>
<br>
<br>
Я (Покупатель) принимаю условия политику обработки персональных данных.<br>
<br>
<br>1. При покупки на Сайте Пользователь предоставляет следующую информацию: Никнейм.
<br>2. Предоставляя свои персональные данные Продавцу, Посетитель Сайта / Пользователь / Покупатель соглашается на их обработку Продавцом, в том числе в целях выполнения Продавцом обязательств перед Посетителем Сайта/Пользователем/Покупателем в рамках настоящей Публичной оферты, продвижения Продавцом товаров и услуг, проведения электронных и sms опросов, контроля результатов маркетинговых акций, клиентской поддержки, организации доставки товара Покупателям, проведение розыгрышей призов среди Посетителей Сайта/Пользователей/ Покупателей, контроля удовлетворенности Посетителя Сайта/Пользователя/Покупателя, а также качества услуг, оказываемых Продавцом
<br>3. Под обработкой персональных данных понимается любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение) извлечение, использование, передачу (в том числе передачу третьим лицам, не исключая трансграничную передачу, если необходимость в ней возникла в ходе исполнения обязательств), обезличивание, блокирование, удаление, уничтожение персональных данных.
<br>4. Продавец вправе использовать технологию «cookies». «Cookies» не содержат конфиденциальную информацию. Посетитель / Пользователь / Покупатель настоящим дает согласие на сбор, анализ и использование cookies, в том числе третьими лицами для целей формирования статистики и оптимизации рекламных сообщений.
<br>5. Продавец получает информацию об ip-адресе посетителя Сайта www.HyperMC.pro. Данная информация не используется для установления личности посетителя.
<br>6. Продавец не несет ответственности за сведения, предоставленные Пользователем/Покупателем на Сайте в общедоступной форме.
<br>7. Продавец вправе осуществлять записи телефонных разговоров с Пользователем/Покупателем. При этом Продавец обязуется: предотвращать попытки несанкционированного доступа к информации, полученной в ходе телефонных переговоров, и/или передачу ее третьим лицам, не имеющим непосредственного отношения к исполнению Заказов, в соответствии с п. 4 ст. 16 Федерального закона «Об информации, информационных технологиях и о защите информации».
<br>8. Оплатить заказ можно банковскими картами Visa, Master Card, «Мир» или через платежные системы Apple Pay, Яндекс.Деньги, QIWI или PayPal (последняя — только для покупателей из-за пределов Российской Федерации). Чтобы оплатить покупку, вы будете перенаправлены на сервер платежной системы Unitpay, на котором нужно ввести необходимые данные. При оплате банковской картой безопасность платежей гарантирует процессинговый центр Unitpay. Платежная система Unitpay обладает подтвержденным сертификатом соответствия требованиям стандарта PCI DSS в части хранения, обработки и передачи данных держателей карт. Стандарт безопасности банковских карт PCI DSS поддерживается международными платежными системами, включая MasterCard и Visa, Inc. Система Unitpay также является участником программы непрерывного соответствия Compliance Control PCI DSS Compliance Process (P.D.C.P.). Ваши конфиденциальные данные, необходимые для оплаты (реквизиты карты, регистрационные данные и др.), не поступают в интернет-магазин — их обработка производится на стороне процессингового центра Unitpay и полностью защищена. Никто, в том числе наш интернет-магазин «www.HyperMC.pro», не может получить данные вашей банковской карты или иные данные, необходимые для осуществления платежа.
<br>
<br>
			</div>
		</form>
	</div>
</div>

<div class="modal" data-id="privacy">
	<div class="wrapper">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Политика безопасности</div>

			<div class="modal-body">
				При оплате заказа банковской картой, обработка платежа (включая ввод номера карты) происходит на защищенной странице процессинговой системы, которая прошла международную сертификацию.
				<br>
				Это значит, что Ваши конфиденциальные данные (реквизиты карты, регистрационные данные и др.) не поступают в интернет-магазин, их обработка полностью защищена и никто, в том числе наш интернет-магазин, не может получить персональные и банковские данные клиента.
				<br>
				При работе с карточными данными применяется стандарт защиты информации, разработанный международными платёжными системами Visa и Masterсard-Payment Card Industry Data Security Standard (PCI DSS), что обеспечивает безопасную обработку реквизитов Банковской карты Держателя.
				<br>
				Применяемая технология передачи данных гарантирует безопасность по сделкам с Банковскими картами путем использования протоколов Secure Sockets Layer (SSL), Verified by Visa, Secure Code, и закрытых банковских сетей, имеющих высшую степень защиты.
			</div>
		</form>
	</div>
</div>

<div class="modal" data-id="return-terms">
	<div class="wrapper">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Политика возвратов платежей</div>

			<div class="modal-body">
				Уважаемые Клиенты, информируем Вас о том, что при запросе возврата денежных средств при отказе от покупки, возврат производится исключительно на ту же банковскую карту, с которой была произведена оплата.
			</div>
		</form>
	</div>
</div>

    <div data-id="success" class="modal">
		<div class="wrapper" >
			<form method="post" class="modal-content">
				<a href="#" class="modal-close" data-modal-close>&times;</a>
				
				<div class="modal-header">Спасибо за покупку!</div>

				<div class="modal-body">
						<p>Ваш заказ будет выдан в течении 15 минут!</p>
						<br>
						<div><i class="icon-con-mail"></i>&nbsp;&nbsp;&nbsp;<a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="196a6c6969766b6d595160697c6b545a37696b76">[email&#160;protected]</a></div>
						<div><i class="icon-con-vk"></i>&nbsp;&nbsp;&nbsp;vk.com/hyperspacemc</div>
				</div>
			</form>
		</div>
    </div>

<div class="modal" data-id="privacy-pay">
	<div class="wrapper" style="width: 100%">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Правила оплаты и безопасность платежей</div>

			<div class="modal-body">
					<p>Оплата осуществляется банковскими картами через АО КИВИ Банк ЦБ РФ № 2241.
                        К оплате принимаются карты VISA, MasterCard, МИР</p>
                    <div class="image-methods">
                        <img src="img/p-methods.png" alt="">
                    </div>
			</div>
		</form>
	</div>
</div>

<div class="modal" data-id="disign">
	<div class="wrapper">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Над сайтом также работали</div>

			<div class="modal-body">
				<div><i class="icon-con-vk"></i>&nbsp;&nbsp;&nbsp;Дизайн сайта - <a class="nav-link" href="https://vk.com/maksimkz">RasaSporT</a> <a class="nav-link" href="https://vk.com/maksimkiz" target="_blank"></a></div>
				<br>
				<div><i class="icon-con-vk"></i>&nbsp;&nbsp;&nbsp;Иллюстрации - <a class="nav-link" href="https://vk.com/rasasport" target="_blank">Яна</a></div>
				<br>
			</div>
		</form>
	</div>
</div>

<div class="modal" data-id="donate">
	<div class="wrapper">
		<form method="post" class="modal-content">
			<a href="#" class="modal-close" data-modal-close>&times;</a>

			<div class="modal-header">Описание привилегий</div>

			<div class="modal-body">
				<div class="donate-wrapper">
					<div class="donate-list scroll-styled">
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/general.png');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">GENERAL <span class="price">(Цена: 1 899 у.е)</span></div>

								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>- Подарить донат игроку - /grant</li>
										<li>- Сменить псевдоним в игре - /nick</li>
										<li>- Узнать реальный ник игрока - /realname</li>
										<li>- Улучшить снаряжение - /smithingtable</li>
										<li>- Ударить молнией - /lightning</li>
										<li>- Телепортация к игрокам - /rtp player</li>
										<li>- Возможность забанить игрока - /ban</li>
										<li>- Заблокировать игроку чат - /mute</li>
										<li>- Получить набор Генерала - kit general</li>
										<li>(Спавнер x2, Тотем x1, Яйцо коровы x1, </li>
										<li>Яйцо крипераx1, Яйцо визер-скелета x1,</li>
										<li>Яйцо магма куба x1, Зачарованное яблоко x1,</li>
										<li>Золотые блоки x2, Рамка энд. портала x1)</li>
										<br>
										<li>• Приватов во всех измерениях: 5</li>
										<li>• Точек дома: 5</li>
										<li>• Слотов на аукционе: 30</li>
										<li>• Множитель монет х2</li>
										<li>• Уменьшены задержки на команды</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/magister.png');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">MAGISTER <span class="price">(Цена: 1 076 у.е)</span></div>

								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>- Размутить игрока - /unmute</li>
										<li>- Открыть эндер-сунудук игрока - /ec (ник)</li>
										<li>- Выдать предупреждение игроку - /warn</li>
										<li>- Отключить сообщения - /msgtoggle</li>
										<li>- Найти игрока - /near</li>
										<li>- Починка и снятие чар - /grindstone</li>
										<li>- Возможность писать &mзачеркнутым§f</li>
										<li>- Возможность писать &lжирным§f</li>
										<li>- Получить набор Магистра:</li>
										<li>(Спавнер x1, Яйцо коровы x1, Яйцо магма-куба,</li>
										<li>Зачарованное яблоко x1, Золотой блок x1, Обсидиан x1</li>
										<br>
										<li>• Приватов во всех измерениях: 4</li>
										<li>• Точек дома: 4</li>
										<li>• Слотов на аукционе: 20</li>
										<li>• Множитель монет х1.75</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/volcano.png');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">VOLCANO <span class="price">(Цена: 789 у.е)</span></div>

								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>- Возможность писать объявление - /broadcast</li>
										<li>- Выдать бан игроку - /tempban</li>
										<li>- Доступ к чужому инвентарю - /invsee</li>
										<li>- Возможность редактирования книг - /book</li>
										<li>- Виртуальная мусорка - /trash</li>
										<li>- Автопринятие запросов на телепорт - /tpauto</li>
										<li>- Возможность писать (&n) подчеркнутым</li>
										<br>
										<li>• Приватов во всех измерениях: 4</li>
										<li>• Точек дома: 4</li>
										<li>• Слотов на аукционе: 15</li>
										<li>• Вход на заполненный сервер</li>
										<li>• Множитель монет х1.75</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/neo.png');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">NEO <span class="price">(Цена: 599 у.е)</span></div>

								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>- Починить все предметы - /fix all</li>
										<li>- Выдать мут игроку - /tempmute</li>
										<li>- Получить голову игрока - /head</li>
										<li>- Узнать идентификатор предмета - /dura</li>
										<li>- Узнать высоту над уровнем моря - /depth</li>
										<li>- Виртуальный камнерез - /stonecutter</li>
										<br>
										<li>• Приватов во всех измерениях: 3</li>
										<li>• Точек дома: 3</li>
										<li>• Слотов на аукционе: 12</li>
										<li>• Множитель монет х1.5</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/lord.png');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">LORD <span class="price">(Цена: 299 у.е)</span></div>
								
								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>- Вирутальный эндер-сунудук - /ec</li>
										<li>- Пополнить здоровье - /heal</li>
										<li>- Починить один предмет - /fix</li>
										<li>- Выгнать нарушителя с сервера - /kick</li>
										<li>- Установить личное время суток - /ptime</li>
										<li>- Виртуальный помощник по крафтам - /formula</li>
										<br>
										<li>• Приватов во всех измерениях: 3</li>
										<li>• Точек дома: 3</li>
										<li>• Слотов на аукционе: 9</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/astro.png');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">ASTRO <span class="price">(Цена: 139 у.е)</span></div>

								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>- Потушить себя - /stew</li>
										<li>- Очистить себе инвентарь - /clear</li>
										<li>- Игнорировать игрока - /ignore (ник)</li>
										<li>- Ткацкий станок - /loom</li>
										<br>
										<li>• Приватов во всех измерениях: 3</li>
										<li>• Точек дома: 2</li>
										<li>• Слотов на аукционе: 8</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/guariaan.html');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">GUARDIAN <span class="price">(Цена: 46 у.е)</span></div>

								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>- Сделать себя сытым - /feed</li>
										<li>- Узнать идентификатор предмета - /itemdb</li>
										<li>- Одеть блок на голову - /hat</li>
										<li>- Стол картографа - /cartographytable</li>
										<br>
										<li>• Приватов во всех измерениях: 2</li>
										<li>• Точек дома: 2</li>
										<li>• Слотов на аукционе: 7</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="donate-id">
							<div class="block-left">
								<div class="donate-image" style="background-image: url('img/perm/star.png');"></div>
							</div>

							<div class="block-right">
								<div class="donate-title">STAR <span class="price">(Цена: 15 у.е)</span></div>

								<div class="donate-server">✨ Анархия</div>

								<div class="donate-info">
									<ul>
										<li>Открыть виртуальный верстак - /craft</li>
										<li>Отключить телепортации - /tptoggle</li>
										<br>
										<li>• Приватов во всех измерениях: 2</li>
										<li>• Точек дома: 2</li>
										<li>• Слотов на аукционе: 6</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer" style="
    display: flex;
    grid-gap: 30px;
    background-color: var(--first-color);
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
">
<!--<div style="padding: 20px;padding-bottom: 0;color:gray">
<small>На странице для ввода данных банковской карты потребуется ввести: номер банковской карты, имя владельца карты, срок действия карты, трёхзначный код безопасности (CVV2 для Visa, CVC2 для MasterCard, Код Дополнительной Идентификации для МИР).
Все необходимые данные находятся на самой карте, CCV код безопасности — это три цифры, которые находятся на обратной стороне карты.
После чего вы будете направлены на страницу Вашего банка для введения кода безопасности, который вы получите в СМС. Если код не придет, вам следует обратиться в банк, в котором происходила выдача карты.</small>
</div>-->
<footer style="padding: 20px;">© 2022 RasaSporT | <a class="nav-link" data-modal="contacts" href="#">Контакты и Реквизиты</a> | <a class="nav-link" data-modal="disign" href="#">Дизайн</a> |<a class="nav-link" data-modal="accept" href="#">Соглашение</a> | <a class="nav-link" data-modal="privacy" href="#">Политика безопасности</a> <br> <a class="nav-link" data-modal="return-terms" href="#">Политика возврата платежей</a> | <a class="nav-link" data-modal="conf" href="#">Политика конфидициальности</a> <br> The RasaSporT | ИНН 000000000000 </footer>

</div>

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

<!-- Mirrored from hypermc.pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2022 10:42:05 GMT -->
</html>

