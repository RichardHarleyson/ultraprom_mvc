<div class="PageType_Index"></div>
<div class="gapper"></div>

<div class='container'>
	<div id="HCarousel" class="carousel slide border d-none d-md-block" data-ride="carousel">
		<div class="carousel-inner">
			<?php foreach ($slides as $s): ?>
				<div class="carousel-item">
					<a href="<?=$s['s_url']; ?>"><img src="/public/media/uploads/<?=$s['s_image'] ?>" class="d-block w-100"></a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class='gapper'></div>

<div class="container">
	<div class="text-center">
		<h2><span class="text-danger">УЛЬТРА</span><span class="text-primary">ПРОМ</span> - Добро пожаловать в мир инжереных сетей</h2>
	</div>
	<p>Предприятие Ультрапром - современная, динамично развивающаяся компания, которая оказывает весь комплекс услуг по монтажу внутренних и внешних инженерных коммуникаций и систем, начиная от квартир, частных домов, магазинов и офисных помещений до крупных промышленных объектов.</p>
	<div class="text-center py-3 px-4" style="background: #E6E6FA"><span class="font-weight-bold">Одним из основных и приоритетных направлений деятельности предприятия является оформление и монтаж <a href=""><strong><span style="color:#0000CD">АВТОНОМНОГО ОТОПЛЕНИЯ В ДНЕПРЕ</span></strong></a>.</span></div>
	<div class="text-center mt-3">
		<p>
			<span class="text-danger"><strong>ИНТЕРЕСУЕТ АВТОНОМНОЕ ОТОПЛЕНИЕ, НО НЕ ЗНАЕТЕ, С ЧЕГО НАЧАТЬ?</strong></span>
		</p>
		<p>
			Позвоните нам для получения консультации или запишитесь на бесплатный просчет проекта для вашей квартиры <a href="/top_menu/contacts">оставив заявку на сайте</a>
		</p>
	</div>
</div>

<hr class="w-50">

<div class="gapper"></div>

<!-- Популярные товары -->
<div class="container">
	<div class="my-3">
		<div class="row">
			<div class="col-8 text-left mb-4">
				<h3>Популярные товары</h3>
			</div>
			<div class="col-4 text-right mb-4">
				<a class="btn btn-primary text-white" id="pop_btn_prev"><i class="fa fa-lg fa-chevron-left"></i></a>
				<a class="btn btn-primary text-white" id="pop_btn_next"><i class="fa fa-lg fa-chevron-right"></i></a>
			</div>
		</div>
		<div class="" id="pop_products_carousel">
			<?php foreach ($popular as $product): ?>
				<div class="col col-12 col-xl col-lg-3 col-md-4 col-sm-12 text-center mt-4">
					<div class="card text-center mx-auto">
						<?php if($product['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
						<a href="product/<?php echo $product['eng_name']; ?>">
							<img src="/public/media/uploads/<?php echo $product['image']; ?>" class="mx-auto d-block" alt="Product Thumbnail">
						</a>
					<!-- <img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail"> -->
						<div class="card-body">
							<div class="card-title align-self-center my-0" data-toggle="tooltip" data-placement="top" title="<?=$product['title'] ?>">
								<a href="/product/<?php echo $product['eng_name']; ?>" class=""><span class="font-title"><?php echo $product['title']; ?></span></a>
							</div>
							<p class="card-text border-top text-warning rating" rating="<?php echo $product['rating']; ?>" style="font-size: 20px;"></p>
							<div class="row card-buttons">
								<div class="col col-9">
									<p class="border rounded price_tablet"><b><?php echo number_format($product['price_uah'], 0, ',', ' '); ?> грн</b></p>
								</div>
								<div class="col col-3">
									<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product['id']; ?>" data-title="<?php echo $product['title']; ?>" data-eng_name="<?php echo $product['eng_name'];?>" data-price="<?php echo $product['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="gapper"></div>

<!-- Акционные товары -->
<div class="container">
	<div class="my-3">
		<div class="row">
			<div class="col-8 text-left mb-4">
				<h3>Акционные товары</h3>
			</div>
			<div class="col-4 text-right mb-4">
				<a class="btn btn-primary text-white" id="onsale_btn_prev"><i class="fa fa-lg fa-chevron-left"></i></a>
				<a class="btn btn-primary text-white" id="onsale_btn_next"><i class="fa fa-lg fa-chevron-right"></i></a>
			</div>
		</div>
		<div class="" id="onsale_products_carousel">
			<?php foreach ($onsale as $product): ?>
				<div class="col col-12 col-xl col-lg-3 col-md-4 col-sm-12 text-center mt-4">
					<div class="card text-center mx-auto">
					<?php if($product['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
						<a href="/product/<?php echo $product['eng_name']; ?>">
							<img src="/public/media/uploads/<?php echo $product['image']; ?>" class="mx-auto d-block" alt="Product Thumbnail">
						</a>
					<!-- <img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail"> -->
						<div class="card-body">
							<div class="card-title align-self-center my-0" data-toggle="tooltip" data-placement="top" title="<?=$product['title'] ?>">
								<a href="/product/<?php echo $product['eng_name']; ?>" class=""><span class="font-title"><?php echo $product['title']; ?></span></a>
							</div>
							<p class="card-text border-top text-warning rating" rating="<?php echo $product['rating']; ?>" style="font-size: 20px;"></p>
							<div class="row card-buttons">
								<div class="col col-9">
									<p class="border rounded price_tablet"><b><?php echo number_format($product['price_uah'], 0, ',', ' '); ?> грн</b></p>
								</div>
								<div class="col col-3">
									<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product['id']; ?>" data-title="<?php echo $product['title']; ?>" data-eng_name="<?php echo $product['eng_name'];?>" data-price="<?php echo $product['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<hr class="w-50">

<div class="container">
	<div class="text-center text-primary my-1">
		<h4>Сфера применения наших услуг по монтажу внутренних и внешних инженерных коммуникаций и систем огромна: от квартир, частных домов, магазинов и офисных помещений до крупных промышленных объектов.</h4>
	</div>

	<h5>Направления нашей деятельности:</h5>
	<ul class="list-group list-group-flush mb-1">
		<li class="py-1 list-group-item">
			<span class="text-primary">Все виды автономного отопления!</span>
		</li>
		<li class="py-1 list-group-item">Газификация</li>
		<li class="py-1 list-group-item">Установка систем водоснабжения, канализации и все виды сантехнических работ</li>
		<li class="py-1 list-group-item">Электрификация</li>
		<li class="py-1 list-group-item">Кондиционирование</li>
		<li class="py-1 list-group-item">Комплексный Ремонт</li>
		<li class="py-1 list-group-item">Обслуживание/Сервис</li>
		<li class="py-1 list-group-item">Оформление/Согласование разрешительной и исполнительно-технической документации</li>
		<li class="py-1 list-group-item">Инженерное проектирование</li>
		<li class="py-1 list-group-item">Продажа сертифицированных материалов и оборудования</li>
	</ul>

	<p>Таким образом, сотрудничая с нашим предприятием, вы получаете полный объем высококвалифицированных услуг <strong>&laquo;ПОД КЛЮЧ&raquo;</strong>.</p>

	<p><em><span style="font-size:11px">* - Из-за постоянного изменения курса валют, актуальность цен на оборудование и материалы уточняйте у менеджера.</span></em></p>

</div>

</div>

<!-- <div class="opros d-none d-lg-block border " id="opros">
	<div class="opros_in">
		<form class="">
			<div class="form-group">
				<label>Какой вид автономного отопления вы используете?</label>
				<input type="radio" aria-label="Radio button for following text input">
				<input type="radio" aria-label="Radio button for following text input">
			</div>
		</form>
	</div>
</div> -->

<!-- Вывод товаров
Текстовка -->
