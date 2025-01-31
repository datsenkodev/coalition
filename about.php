<?include('header.php');?>
<main class="main inner-page">
		<section class="about">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">О компании</li>
					</ol>
				</nav>
				<div class="about-top">
					<div class="about-top__left">
						<h2 class="title">Семейная фирма PEGAS GONDA </h2>
						<p class="about__text">основана в 1990 г. чешским инженером Йозефом Гондой. Название компании PEGAS по его замыслу расшифровывается с чешского языка как - PEpa Gonda A Synové (Папа Гонда и Сыновья).</p>
						<p class="about__text">В настоящее время, единственный завод фирмы <strong>PEGAS</strong> с площадью более 25000 м2 расположен в Чешской Республики, в городе Славков-у-Брна, где осуществляется производство свыше 25 моделей ленточнопильных станков в диапазоне реза от 200 до 2000 мм.
						</p>
						<p class="about__text">
							Завод располагает собственным парком механообрабатывающего, заготовительного, кузнечнопрессового и сварочного оборудования,
							а также имеет цех сварки ленточных полотен, склад станков и материалов, сборочные цеха малой, средней и крупной линейки станков.
						</p>
					</div>
					<div class="about-top__right">
						<img src="<?=$path?>img/pegas/image-1.jpg" alt="factory">
					</div>
				</div>
				<div class="about-bottom">
					<p class="about__text">На территорию Российской Федерации <strong>за последние 15 лет поставлено более 4000 единиц оборудования,</strong> которое имеет положительные отзывы и давно зарекомендовало себя как надежное в эксплуатации и простое в обслуживание.</p>
					
						
<div style="width: 95%;text-align: center">
<div style="float: left;"><img src="<?=$path?>img/pegas/image-7.jpg" alt="factory"></div>
<div style="float: right;"><img src="<?=$path?>img/pegas/veletrhy-pegas-gonda.jpg" alt="factory"></div>
</div>

						
						
						
						 
					
					
				</div>
			</div>
		</section>
		<section class="manufacturers">
			<div class="container">
				<h2 class="title">Производители основных комплектующих</h2>
				<div class="manufacturers-table__wrapper">
					<table class="table manufacturers-table">
						<thead>
							<tr>
								<th>Компонент</th>
								<th>Поставщик</th>
								<th>Страна</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Гидросистема</td>
								<td><img src="<?=$path?>img/manufacturer/argo.png" alt="argo"></td>
								<td>
									<p><img src="<?=$path?>img/flags/czech.png" alt="czech">Чехия</p>
								</td>
							</tr>
							<tr>
								<td>Редуктор</td>
								<td><img src="<?=$path?>img/manufacturer/varvel.png" alt="argo"></td>
								<td>
									<p><img src="<?=$path?>img/flags/italy.png" alt="italy">Италия</p>
								</td>
							</tr>
							<tr>
								<td>Главный электродвигатель</td>
								<td><img src="<?=$path?>img/manufacturer/cantoni.png" alt="argo"></td>
								<td>
									<p><img src="<?=$path?>img/flags/italy.png" alt="italy">Италия</p>
								</td>
							</tr>
							<tr>
								<td>Система управления (ПЛК, ЧПУ)</td>
								<td><img src="<?=$path?>img/manufacturer/mitsubishi.png" alt="argo"></td>
								<td>
									
									<p><img src="<?=$path?>img/flags/japan.png" alt="japan">Япония</p>
								</td>
							</tr>
							<tr>
								<td>Электрокомпоненты</td>
								<td><img src="<?=$path?>img/manufacturer/siemens.png" alt="argo"></td>
								<td>
									<p><img src="<?=$path?>img/flags/germany.png" alt="czech">Чехия</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
		<section class="main-catalog">
			<div class="container">
				<h2 class="title">Каталог оборудования</h2>
				<div class="owl-carousel main-catalog__slider catalog-slider">
				<?foreach ((new Post($this))->get_all(4,0,'id','desc',['parent'=>4]) as $post):?>
					<a href="/<?=$post['url']?>" class="catalog-slider__item">
						<p class="catalog-slider__image">
							<img src="/upload/<?=$post['img']?>" alt="catalog">
						</p>
						<p class="catalog-slider__title"><?=$post['name']?></p>
					</a>
				<?endforeach;?>
				 
				</div>
				<p class="text-center">
					<a href="/catalog" class="btn-secondary">Перейти в каталог</a>
				</p>
			</div>
		</section>
		<section class="clients">
			<div class="container">
				<h3 class="title">Наши станки выбирают крупнейшие производственные машиностроительные
					и металлургические предприятия страны, такие как:</h3>
				<div class="clients__wrapper">
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-1.png" alt="clients" class="clients-block__img">
					</div>
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-2.png" alt="clients" class="clients-block__img">
					</div>
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-3.png" alt="clients" class="clients-block__img">
					</div>
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-4.png" alt="clients" class="clients-block__img">
					</div>
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-5.png" alt="clients" class="clients-block__img">
					</div>
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-6.png" alt="clients" class="clients-block__img">
					</div>
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-7.png" alt="clients" class="clients-block__img">
					</div>
					<div class="clients-block">
						<img src="<?=$path?>img/clients/client-8.png" alt="clients" class="clients-block__img">
					</div>
				</div>
				<div class="text-center">
					<a href="javascript:"><button type="button" class="btn-secondary">Смотреть больше</button></a>
				</div>
			</div>
		</section>
		<section class="gallery">
			<div class="container">
				<h2 class="title">Галерея продукции</h2>
				<div class="gallery__wrapper">
					<div class="gallery-block">
						<a href="<?=$path?>img/gallery/image-1.jpg" data-fancybox="gallery">
							<img src="<?=$path?>img/gallery/image-1.jpg" alt="gallery" class="gallery-block__img">
						</a>
						<a href="<?=$path?>img/gallery/image-2.jpg" data-fancybox="gallery">
							<img src="<?=$path?>img/gallery/image-2.jpg" alt="gallery" class="gallery-block__img">
						</a>
					</div>
					<div class="gallery-block">
						<a href="<?=$path?>img/gallery/image-3.jpg" data-fancybox="gallery">
							<img src="<?=$path?>img/gallery/image-3.jpg" alt="gallery" class="gallery-block__img">
						</a>
						<a href="<?=$path?>img/gallery/image-4.jpg" data-fancybox="gallery">
							<img src="<?=$path?>img/gallery/image-4.jpg" alt="gallery" class="gallery-block__img">
						</a>
					</div>
					<div class="gallery-block">
						<a href="<?=$path?>img/gallery/image-5.jpg" data-fancybox="gallery">
							<img src="<?=$path?>img/gallery/image-5.jpg" alt="gallery" class="gallery-block__img">
						</a>
						<a href="<?=$path?>img/gallery/image-6.jpg" data-fancybox="gallery">
							<img src="<?=$path?>img/gallery/image-6.jpg" alt="gallery" class="gallery-block__img">
						</a>
						<a href="<?=$path?>img/gallery/image-7.jpg" data-fancybox="gallery">
							<img src="<?=$path?>img/gallery/image-7.jpg" alt="gallery" class="gallery-block__img">
						</a>
					</div>
				</div>
			</div>
		</section>
	</main> 		
<?include('footer.php');?>