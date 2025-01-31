<?include('header.php');?>
<main class="main inner-page">
		<section class="services">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">Обслуживание</li>
					</ol>
				</nav>
				<h2 class="title">Обслуживание</h2>

				 
				<form  action="javascript:void(null);" class="services-form" method="post" OnSubmit="ajax_post('request2',this,'#res2');" class="consultation-form">
					<div id="res2"></div>
					<fieldset>
						<legend class="services-form__title">Контактные данные</legend>
						<p class="services-form__desc">Заполните данные в поля ниже</p>
						<div class="services-form__wrapper">
							<input type="text" class="site-field" name="Компания" placeholder="Компания">
							<input type="text" class="site-field" name="Улица" placeholder="Улица">
							<input type="text" class="site-field" name="Город" placeholder="Город">
							<input type="text" class="site-field" name="Контактное лицо"  placeholder="Контактное лицо">
							<input type="email" class="site-field" name="E-mail" placeholder="E-mail">
							<input type="tel" class="site-field phone" name="Номер телефона"  placeholder="Номер телефона">
						</div>
					</fieldset>
					<fieldset>
						<legend class="services-form__title">Описание неисправности</legend>
						<p class="services-form__desc">Заполните данные в поля ниже</p>
						<div class="services-form__wrapper--big">
							<div class="services-form__wrapper services-form__wrapper--short">
								<input type="text" class="site-field" name="Наименование машины"  placeholder="Наименование машины">
								<input type="text" class="site-field" name="Серийный номер"  placeholder="Серийный номер">
								<div class="site-field__wrapper">
									<input type="text" class="site-field" name="Начало работы"  id="datetimepicker1" data-toggle="datetimepicker" data-target="#datetimepicker1" placeholder="Начало работы">
									<div class="field-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
										<span class="icon-calendar-2"></span>
									</div>
								</div>
								<div class="site-field__wrapper">
									<input type="text" class="site-field" id="datetimepicker2" name="Дата подачи заявки"  data-toggle="datetimepicker" data-target="#datetimepicker2" placeholder="Дата подачи заявки">
									<div class="field-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
										<span class="icon-calendar-2"></span>
									</div>
								</div>
							</div>
							<textarea class="site-textarea"  name="Опишите свою ситуацию" placeholder="Опишите свою ситуацию"></textarea>
						</div>
						<?/*
						<label for="file-1" class="site-file__label">
							<input type="file" id="file-1">
							Выберите файл <img src="img/icons/attach.png" alt="icon">
						</label>
						*/?>
					</fieldset>
					<fieldset>
						<legend class="services-form__title">Адрес доставки</legend>
						<p class="services-form__desc">Заполните данные в поля ниже</p>
						<div class="services-form__wrapper">
							<select name="Город" class="site-select">
							<?foreach ($this->db->order_by('name','asc')->get('city')->result_array() as $city):?>
								<option value="<?=$city['name']?>"><?=$city['name']?></option>
							<?endforeach;?>
							</select>
							<input type="text" class="site-field" name="Адрес" placeholder="Введите адрес">
						</div>
					</fieldset>
					<fieldset>
						<legend class="services-form__title">Заказать деталь</legend>
						<p class="services-form__desc">Заполните данные в поля ниже</p>
						<div class="services-form__wrapper">
							<input type="text" class="site-field"  name="Запчасть" placeholder="Запчасть">
							<input type="text" class="site-field"  name="Код" placeholder="Код">
							<input type="text" class="site-field"  name="Количество" placeholder="Количество">
							<input type="text" class="site-field"  name="Счет" placeholder="Счет">
							<input type="submit" class="btn-primary btn-primary__big" value="Отправить">
						</div>
					</fieldset>
				</form>
			</div>
		</section>
		<section class="products">
			<div class="container">
				<h2 class="title">Пильные полотна</h2>
				<?foreach ($this->db->limit(3)->get_where('post',['catalog'=>10])->result_array() as $p):?>
				<div class="products-block">
					<div class="products-block__left">
						<p class="products-block__title"><?=$p['name']?></p>
						<img src="/upload/<?=$p['img']?>" alt="product" class="products-block__img"> 
					</div>
					<div class="products-block__right">
						<?=$p['text']?>
					</div>
				</div>
				<?endforeach;?>
				 
				<div class="text-center">
					<a href="/catalog?catalog=10"><button type="button" class="btn-primary btn-primary__big">Смотреть больше</button></a>
				</div>
			</div>
		</section>
		 
		<section class="recommendations">
			<div class="container">
				<h2 class="title">Рекомендации</h2>
				<div class="recommendations-slider__controls">
					
				</div>
				<div class="owl-carousel recommendations-slider">
					<div class="recommendations-slider__item">
						<div class="recommendations-slider__top">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/iXVcleg03ss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<p class="recommendations-slider__title">Износ боковых роликов ленточнопильного станка</p>
						<p class="recommendations-slider__subtitle">Проблема:</p>
						<p class="recommendations-slider__text">Слишком маленький зазор между роликами или изношенные боковые ролики могут привести к разрыву полотна.</p>
						<p class="recommendations-slider__subtitle">Решение:</p>
						<p class="recommendations-slider__text">Уменьшить контактное напряжение так, чтобы ролики смогли вращаться с минимальными усилиями в пассивном состоянии. Замените изношенные боковые ролики.</p>
					</div>
					<div class="recommendations-slider__item">
						<div class="recommendations-slider__top">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZFGf_Auvphc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<p class="recommendations-slider__title">Трещины на задней кромке ленточного полотна</p>
						<p class="recommendations-slider__subtitle">Проблема:</p>
						<p class="recommendations-slider__text">Трещины в результате износа верхних направляющих. Задняя кромка полотна становится хрупкой.</p>
						<p class="recommendations-slider__subtitle">Решение:</p>
						<p class="recommendations-slider__text">Замените верхние направляющие.</p>
					</div>
					<div class="recommendations-slider__item">
						<div class="recommendations-slider__top">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/rwTYzO6gPIM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<p class="recommendations-slider__title">Износ боковых направляющих ленточнопильного станка</p>
						<p class="recommendations-slider__subtitle">Проблема:</p>
						<p class="recommendations-slider__text">Слишком сильно зажаты или повреждены боковые направляющие, в результате чего образуются трещины и возможен разрыв полотна.</p>
						<p class="recommendations-slider__subtitle">Решение:</p>
						<p class="recommendations-slider__text">Уменьшите давление направляющих. Почистите боковые направляющие.</p>
					</div>
					<div class="recommendations-slider__item">
						<div class="recommendations-slider__top">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/rwTYzO6gPIM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<p class="recommendations-slider__title">Износ боковых направляющих ленточнопильного станка</p>
						<p class="recommendations-slider__subtitle">Проблема:</p>
						<p class="recommendations-slider__text">Слишком сильно зажаты или повреждены боковые направляющие, в результате чего образуются трещины и возможен разрыв полотна.</p>
						<p class="recommendations-slider__subtitle">Решение:</p>
						<p class="recommendations-slider__text">Уменьшите давление направляющих. Почистите боковые направляющие.</p>
					</div>
				</div>
			</div>
		</section>
		 
	</main>
<?include('footer.php');?>