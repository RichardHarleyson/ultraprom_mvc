<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
	<link href="/public/css/style.css" rel="stylesheet">


</head>

<body>

	<!-- 1st Menu -->
	<div class='container-fluid bg-primary d-none d-md-block'>
		<div class="container">
			<nav class="nav bg-primary justify-content-center nav-pills"  id='top_menu'>
				<li class="nav-item active">
					<a class="nav-link" href="/">Главная</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/about_us">О Нас</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/central_heating">Автономное отопление</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/services">Услуги</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/catalog">Каталог</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/prices">Прайсы</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/top_menu/contacts">Контакты</a>
				</li>
			</nav>
		</div>
	</div>
	<!-- 1st Menu mobile -->
	<div class="container-fluid d-md-none w-100" id="first_menu_mobile">
		<div class="navbar navbar-expand-md navbar-dark bg-primary">
			<button class="navbar-toggler ml-auto mr-1" data-toggle="collapse" data-target="#first_menu">
				<span class="text-light">
					<i class="fas fa-bars"></i>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="first_menu">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="/">Главная</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/about_us">О Нас</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/central_heating">Автономное отопление</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/services">Услуги</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/catalog">Каталог</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link border-bottom" href="/top_menu/prices">Прайсы</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/top_menu/contacts">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Header -->
	<div class='container d-none d-md-block' id='header_container'>
		<div class="row">
			<div class="col-xl-1 col-lg-2 col-md-2 align-self-center">
				<a href="/"><img class="img-fluid" src="/public/media/img/logo_compressed.jpg"></a>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-5 align-self-center">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Поиск Товаров" aria-label="Username" aria-describedby="basic-addon1">
					<div class="input-group-prepend">
						<button class="btn btn-primary rounded-right" id="basic-addon1"><i class="fas fa-search"></i></span>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-3 col-md-3 col-phone align-self-center text-center">
				<div class="row">
					<div class="col col-xl-6 col-md-12">
						<img src="/public/media/img/kyivstar.png"><span>+38(098) 037-77-11</span>
					</div>
					<div class="col col-xl-6 col-md-12">
						<img src="/public/media/img/mts.png"><span>+38(050) 881-04-49</span>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 d-none d-lg-block align-self-center">
				<button class="btn btn-danger" data-toggle="modal" data-target="#callback">Обратный Звонок</button>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-2 align-self-center">
				<a class="btn" href="/cart"><i class="text-danger fas fa-cart-arrow-down"></i></a>
			</div>
		</div>
	</div>
	<!-- Header mobile -->
	<div class="container d-md-none header_mobile">
		<div class="row justify-center">
			<div class="col col-3 col-sm-2 align-self-center">
				<a href="/"><img class="img-fluid" src="/public/media/img/logo_compressed.jpg"></a>
			</div>
			<div class="col col-6 col-sm-8 align-self-center text-center">
				<div class="row">
					<div class="col-sm-12">
						<img class="d-none d-md-block" src="/public/media/img/kyivstar.png"><span>+38(098) 037-77-11</span>
					</div>
					<div class="col-sm-12">
						<img class="d-none d-md-block" src="/public/media/img/mts.png"><span>+38(050) 881-04-49</span>
					</div>
				</div>
			</div>
			<div class="col col-3 col-sm-2 align-self-center pl-0">
				<a class="btn" href="/cart"><i class="text-danger fas fa-cart-arrow-down"></i></a>
			</div>
		</div>
		<div class="container">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Поиск Товаров" aria-label="Username" aria-describedby="basic-addon1">
				<div class="input-group-prepend">
					<button class="btn btn-primary rounded-right" id="basic-addon1"><i class="fas fa-search"></i></span>
				</div>
			</div>
		</div>
	</div>

	<!-- 2nd Menu -->
	<div class='container-fluid bg-primary d-none d-lg-block'>
		<div class="container" id='main_menu'>
			<nav class="nav bg-primary nav justify-content-center nav-pills">
						<li class="nav-item dropdown border-left">
							<a class="nav-link active dropdown-toggle active" data-toggle="dropdown" href="">Отопительная Техника</a>
								<div class="dropdown-menu">
									<div class="row">
										<div class="col col-sm-3 to_hover bg-primary">
											<ul>
												<li class="menu_link"><a class="text-light" id="11">Котлы Отопления</a></li>
												<li class="menu_link"><a class="text-light" id="12">Радиаторы Отопления</a></li>
												<li class="menu_link"><a class="text-light" id="13">Теплый Пол</a></li>
											</ul>
										</div>
										<div class="col col-sm-9">
											<div class="menu_items_11 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="/catalog">Настенные Газовые Котлы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="/catalog">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="/catalog">Напольные Газовые Котлы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="/catalog">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="/catalog">Конденсационные Газовые Котлы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="/catalog">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="/catalog">Электрические Котлы<br>&nbsp;</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="/catalog">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="menu_items_12 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Стальные Радиаторы<br>&nbsp;</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Алюминиевые Радиаторы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Биметаллические Радиаторы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Чугунные Радиаторы<br>&nbsp;</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Электрические Радиаторы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Дизайнерские Радиаторы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Комплектующие Для Радиаторов</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="menu_items_13 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Электрический Теплый Пол</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Труба Для Теплого Пола</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Инфракрасный Теплый Пол</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Водяной Теплый Пол<br>&nbsp;</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Коллекторные Шкафы<br>&nbsp;</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

						</li>
						<li class="nav-item dropdown border-left">
							<a class="nav-link active dropdown-toggle active" data-toggle="dropdown" href="">Водоснабжение</a>
								<div class="dropdown-menu">
									<div class="row">
										<div class="col col-sm-3 to_hover bg-primary">
											<ul>
												<li class="menu_link"><a class="text-light" id="21">Водопровод</a></li>
												<li class="menu_link"><a class="text-light" id="22">Канализация</a></li>
											</ul>
										</div>
										<div class="col col-sm-9">
											<div class="menu_items_21 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">ППР Трубы и Фитинги</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Обжимные Фитинги</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Изоляция для Труб</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Металопластиковые Трубы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="menu_items_22 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Внутрення Канализация</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Наружная Канализация</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Бесшумная Канализация</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</li>
						<li class="nav-item dropdown border-left">
							<a class="nav-link active dropdown-toggle active" data-toggle="dropdown" href="">Климатическая Техника</a>
								<div class="dropdown-menu">
									<div class="row">
										<div class="col col-sm-3 to_hover bg-primary">
											<ul>
												<li class="menu_link"><a class="text-light" id="31">Кандиционеры</a></li>
												<li class="menu_link"><a class="text-light" id="32">Увлажнители Воздуха</a></li>
											</ul>
										</div>
										<div class="col col-sm-9">
											<div class="menu_items_31 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Кандиционеры Настенного Типа</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Мобильные Кондиционеры</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
											</div>
											<div class="menu_items_32 to_hide">
												<div class="row">
													<!--  -->
												</div>
											</div>
										</div>
									</div>
								</div>
						</li>
						<li class="nav-item dropdown border-left">
							<a class="nav-link active dropdown-toggle active" data-toggle="dropdown" href="">Насосное Оборудование</a>
								<div class="dropdown-menu">
									<div class="row">
										<div class="col col-sm-3 to_hover bg-primary">
											<ul>
												<li class="menu_link"><a class="text-light" id="41">Насосы для Отопленя</a></li>
											</ul>
										</div>
										<div class="col col-sm-9">
											<div class="menu_items_41 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Циркулярные Насосы</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</li>
						<li class="nav-item dropdown border-left">
							<a class="nav-link active dropdown-toggle active" data-toggle="dropdown" href="">Водонагреватели</a>
								<div class="dropdown-menu dropdown-menu-left">
									<div class="row">
										<div class="col col-sm-3 to_hover bg-primary text-center">
											<ul>
												<li class="menu_link"><a class="text-light" id="51">Электрические Водонагреватели</a></li>
												<li class="menu_link"><a class="text-light" id="52">Газовые Водонагреватели</a></li>
											</ul>
										</div>
										<div class="col col-sm-9">
											<div class="menu_items_51 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Бойлеры Электрические<br>&nbsp;</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Проточные Электрические Водонагреватели</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
											<div class="menu_items_52 to_hide">
												<div class="row">
													<div class="col col-sm-4 text-center menu_item_block">
														<div class="title">
															<a href="">Газовые Колонки</a>
														</div>
														<div class="image mx-auto d-block">
															<a href="">
																<img class="img-fluid" src="https://via.placeholder.com/100">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</li>
						<li class="nav-item dropdown border-left border-right">
							<a class="nav-link active dropdown-toggle active" data-toggle="dropdown" href="">Автоматика</a>
								<div class="dropdown-menu dropdown-menu-left">
									<div class="row">
										<div class="col col-sm-3 to_hover bg-primary text-center">
											<ul>
												<li class="menu_link"><a class="text-light" id="61" href="">Программаторы</a></li>
												<li class="menu_link"><a class="text-light" id="62" href="">Стабилизаторы Напряжения</a></li>
											</ul>
										</div>
										<div class="col col-sm-9">
										</div>
									</div>
								</div>
						</li>

			</nav>
		</div>
	</div>
	<!-- 2nd Menu mobile -->
	<div class="container-fluid d-lg-none" id="second_menu_mobile">
		<div class="navbar navbar-expand-lg navbar-dark bg-primary">
			<!-- <a class="navbar-brand " style="font-size: 22px;">Категории</a> -->
			<button class="navbar-toggler ml-auto mr-1" data-toggle="collapse" data-target="#second_menu">
				<span class="text-light">
					<i class="fas fa-bars"></i>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="second_menu">
				<ul class="navbar-nav">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-primary headers border-bottom" data-toggle="dropdown" data-target="dropdown_target" id="1">
							Отопительная Техника
						</a>
						<ul class="dropdown-menu bg-primary border-0" aria-labelledby="1">
							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Котлы Отопления</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Настенные Газовые Котлы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Напольные Газовые Котлы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Конденсационные Газовые Котлы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Электрические Котлы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Твердотоплевные Котлы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Комплектующие Для Котлов</a>
									</li>
								</ul>
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Радиаторы Отопления</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Стальные Радиаторы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Алюминиевые Радиаторы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Биметаллические Радиаторы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Чугунные Радиаторы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Электрические Радиаторы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Дизайнерские Радиаторы</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Комплектующие Для Радиаторов</a>
									</li>
								</ul>
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Теплый Пол</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Водяной Теплый Пол</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Электрический Теплый Пол</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Труда Для Теплого Пола</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Инфракрасный Теплый Пол</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Коллекторные Шкафы</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-primary headers border-bottom" data-toggle="dropdown" data-target="dropdown_target" id="2">
							Водоснабжение
						</a>
						<ul class="dropdown-menu bg-primary border-0" aria-labelledby="2">
							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Водопровод</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">ППР Трубы и Фитинги</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Обжимные Фитинги</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Изоляция Для Труб</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Металлопластиковые Трубы</a>
									</li>
								</ul>
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Канализация</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Внутренняя Канализация</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Наружная Канализация</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Бесшумная Канализация</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-primary headers border-bottom" data-toggle="dropdown" data-target="dropdown_target" id="3">
							Климатическая Техника
						</a>
						<ul class="dropdown-menu bg-primary border-0" aria-labelledby="3">
							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Кондиционеры</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Кондиционеры Настенного Типа</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Мобильные Кондиционеры</a>
									</li>
								</ul>
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Увлижнители Воздуха</a>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-primary headers border-bottom" data-toggle="dropdown" data-target="dropdown_target" id="4">
							Насосное Оборудование
						</a>
						<ul class="dropdown-menu bg-primary border-0" aria-labelledby="4">
							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Насосы Для Отопления</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Циркулярные Насосы</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-primary headers border-bottom" data-toggle="dropdown" data-target="dropdown_target" id="5">
							Водонагреватели
						</a>
						<ul class="dropdown-menu bg-primary border-0" aria-labelledby="5">
							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Электрические Водонагреватели</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Бойлеры Электрические</a>
									</li>
									<li>
										<a class="dropdown-item text-light border-bottom">Проточные Электрические Водонагреватели</a>
									</li>
								</ul>
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Газовые Водонагреватели</a>
								<ul class="dropdown-menu bg-primary border-0">
									<li>
										<a class="dropdown-item text-light border-bottom">Назовые Колонки</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-primary headers border-bottom" data-toggle="dropdown" data-target="dropdown_target" id="6">
							Автоматика
						</a>
						<ul class="dropdown-menu bg-primary border-0" aria-labelledby="1">
							<li class="dropdown-submenu">
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Программаторы</a>
								<a class="dropdown-item dropdown-toggle bg-primary text-light non-headers border-bottom">Стабилизаторы Напряжения</a>
							</li>
						</ul>
					</li>

				</ul>
			</div>

		</div>
	</div>


<!-- MODAL -->
<div class="modal fade special-font" id="callback">
		<div class="modal-dialog modal-dialog-centered" role="document" >
				<div class="modal-content bg-primary">
						<div class="modal-header text-center">
								<h3 class="text-white">Всегда готовы перезвонить</h3>
								<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
								</button>
						</div>
						<div class="container" >
								<form class="form mt-1 callback_form_modal" id="callback_form">
										<div class="form-group-lg">
												<label class="text-white">Телефон</label>
												<input type="text" id="phone" required class="form-control form-control-lg text-center my-2 phone" name="phone" placeholder="+38(___) ___-____" autocomplete="off">
												<label class="text-white">Комментарий</label>
												<textarea type="text" id="comment" class="form-control form-control-lg my-2" name="comment" rows="4"></textarea>
												<div class="text-center">
													<button onclick="fbq_onClick()" type="submit" class="btn btn-lg btn-outline-success btn-success text-white mt-1 mb-2 btn-callback" data-product="">Перезвоните</button>
												</div>
												<div class="h3 text-center modal-texts text-white d-none my-2">Отлично! Сейчас перезвоним</div>
										</div>
								</form>
						</div>
				</div>
		</div>
</div>


<div class="wrapper" style="min-height:65%;">
	<?php echo $content; ?>
</div>

<div class="gapper"></div>

<div class="container-fluid bg-primary d-none d-lg-block">
	<div class="container">
		<div class="row bg-white py-3">
			<div class="col-lg-2 col-xl-2">
				<a href="/"><img class="img-fluid" src="/public/media/img/logo.jpg" alt=""></a>
			</div>
			<div class="col-lg-5 col-xl-5">
				<div class="row">
					<div class="col-6">
						<span><h5>Покупателю</h5></span>
						<span><a href="">О Нас<br></a></span>
						<span><a href="">Услуги<br></a></span>
						<span><a href="">Доставка<br></a></span>
						<span><a href="">Контакты<br></a></span>
					</div>
					<div class="col-6">
						<span><h5>Асортимент</h5></span>
						<span><a href="">Бренды<br></a></span>
						<span><a href="">Акции<br></a></span>
						<span><a href="">Популярное<br></a></span>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-xl-2">
				<span><h5>График работы</h5></span>
				<span>Пн-Сб: 8:00-18:00<br></span>
				<span>Вс: Выходной<br></span>
			</div>
			<div class="col-lg-3 col-xl-3">
				<span><h5>Телефоны</h5></span>
				<img src="/public/media/img/kyivstar.png"><span>+38(098) 037-77-11</span><br>
					<img src="/public/media/img/mts.png"><span>+38(050) 881-04-49</span>
			</div>
		</div>
	</div>
</div>

	<!-- Bootstrap core JavaScript -->
	<script src="/public/vendor/jquery/jquery.min.js"></script>
	<script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/public/js/script.js"></script>
	<script src="/public/vendor/jquery.maskedinput.min.js"></script>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<script>

	</script>

</body>

</html>
