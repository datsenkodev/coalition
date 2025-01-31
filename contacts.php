<?include('header.php');?>
	<main class="main inner-page">
		<section class="contacts">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">Контакты</li>
					</ol>
				</nav>
				<h2 class="title">Свяжитесь с нами</h2>
				<div class="contacts-wrapper">
					<div class="contacts-block">
						<p class="contacts-block__title">Звоните</p>
						<p class="contacts-block__text">
							<strong>
								<a href="tel:<?=str_replace([' ','(',')'],'',vars('tel1'))?>" <?a_edit('options',8,'value')?> ><?=vars('tel1')?></a>
								<a href="tel:<?=str_replace([' ','(',')'],'',vars('tel2'))?>" <?a_edit('options',9,'value')?> ><?=vars('tel2')?></a>
							</strong>
						</p>
					</div>
					<div class="contacts-block">
						<p class="contacts-block__title">Пишите</p>
						<p class="contacts-block__text">
							<a href="<?=vars('email')?>"><?=vars('email')?></a>
						</p>
					</div>
					<div class="contacts-block">
						<p class="contacts-block__title">Офис</p>
						<p  <?a_edit('options',10,'value')?> class="contacts-block__text">
							<b>Адрес:</b> <?=vars('address')?>
							
							<br/><b>График работы офиса:</b> Пн.-Пт. 09:00-17:30
						</p>
					</div>
					<div class="contacts-block">
						<p class="contacts-block__title">Склад</p>
						<p  <?a_edit('options',11,'value')?> class="contacts-block__text">
							<b>Адрес:</b> <?=vars('sklad')?>
							
							<br/><b>График работы склада:</b> Пн.-Пт  09:00- 18:00 (обед 13:00-14:00)
						</p>
					</div>
				</div>
				<form  action="javascript:void(null);" class="callback-modal__form" method="post" OnSubmit="ajax_post('request',this,'#request1');" class="consultation-form">
			 
					<h3 class="contacts-form__title">Задавайте вопросы</h3>
					<div class="contacts-form__content">
						<p class="contacts-form__wrapper">
							<input type="text" name="name" class="site-field" placeholder="Ваше имя" required>
							<input type="email" name="email" class="site-field" placeholder="Электронная почта" required>
							<input type="text" name="company" class="site-field" placeholder="Название компании"  >
						</p>
						<textarea class="site-textarea" name="text" placeholder="Опишите суть вопроса"></textarea>
					</div>
					<input type="submit" class="btn-primary btn-primary__big" value="Отправить">
				</form>
			</div>
		</section>
		<section class="contacts-map">
			<h2 class="sr-only">Карта</h2>
			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acef9395eb20651b75e8e69b7d90abdc53d6fdba21b0de0fc79f2f49982d449cc&amp;source=constructor" width="100%" height="520" frameborder="0"></iframe>
		</section>
	</main>
				 	
<?include('footer.php');?>