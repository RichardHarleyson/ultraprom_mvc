<div class="PageType_ProductPage" id="PageType"></div>
<div class="container">
	<div class='gapper'></div>

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white">
	    <li class="breadcrumb-item"><a href="#">Главная</a></li>
	    <li class="breadcrumb-item"><a href="#">Отопительная Техника</a></li>
	    <li class="breadcrumb-item"><a href="#">Котлы Отопления</a></li>
	    <li class="breadcrumb-item"><a href="#">Настенные Газовые Котлы</a></li>
	    <li class="breadcrumb-item active" aria-current="page"><?php echo $product[0]['title'] ?></li>
	  </ol>
	</nav>

	<div class="container">
		<h4><?php echo $product[0]['title']; ?></h4>
	</div>
	<hr>

	<!-- <div class="gapper"></div> -->

	<div class="container" hidden>
		<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active">Все о Товаре</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link">Характеристики товара</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link">Отзывы</a>
		  </li>
		</ul>
	</div>

	<!-- <div class="gapper"></div> -->

	<div class="product_content">
		<div class="row">
			<div class="col-xl-6 col-md-5 col-sm-12" style="padding: 0;">
				<!-- <img class="img-fluid" src="https://via.placeholder.com/400" style="margin: 5px"> -->
				<div class="m-auto">
					<img class="mx-auto d-block" src="/public/media/uploads/<?php echo $product[0]['image'] ?>">
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-sm-12 align-self-center">
				<div class="container" style="padding-top: 10px;">
					<div class="row">
						<div class="col-6" style="font-size: 16px;">
							<i class="fas fa-check-square text-success"></i>
							<b>В Наличии</b>
						</div>
						<div class="col-6 text-right " rating="<?php echo $product[0]['rating']; ?>" style="font-size: 16px;">
							<p class="text-warning rating" rating="<?php echo $product[0]['rating']; ?>"></p>
						</div>
					</div>
				</div>
				<div class="gapper"></div>
				<div class="row text-center price_row">
					<div class="col col-12 col-lg-6 col-xl-6 mx-auto my-2">
						<p class="price_tablet_solo border rounded mx-auto"><b><?php echo number_format($product[0]['price_uah'], 0, ',', ' '); ?> грн</b></p>
					</div>
					<div class="col col-12 col-lg-6 col-xl-6 text-center my-2">
						<a class="btn btn-lg btn-danger" style="width: 155px; color: white" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product[0]['id']; ?>" data-title="<?php echo $product[0]['title']; ?>" data-price="<?php echo $product[0]['price_uah']; ?>" >В корзину <i  class="fa fa-shopping-cart"></i> </a>
					</div>
				</div>
				<div class="gapper"></div>
				<div class="container text-center">
					<form class="callback_form">
						<div class="input-group">
							<input type="text" id="phone" required class="form-control text-center phone" name="phone" placeholder="+38(___) ___-____" autocomplete="off">
							<div class="input-group-append w-50">
								<button class="btn btn-primary w-100 btn-callback" type="submit" data-product="<?php echo $product[0]['title']; ?>">Заказать</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- <div class="col-xl-3 col-md- col-sm-12">Side bar</div> -->
		</div>
		<hr>
	</div>

	<!-- <div class="gapper"></div> -->

	<div class="row">
		<div class="col-xl-6 col-sm-12">
			<h4 class="text-danger">Отзывы о Товаре</h4>
			<hr>
			<div class="comments my-3">
				<?php {
					if(empty($reviews)){
						echo '<div class="text-center my-3"><h6>Данный товар пока не иммеет отзывов. Вы можете оставить свой отзыв о товаре.</h6></div>';
					}else{
						foreach ($reviews as $review) {
							echo '
								<div class="">
									<p class="d-inline mr-3"><span>'.$review['uname'].'</span></p>
									<p class="d-inline text-warning rating" rating="'.$review['rating'].'"></p>
									<p>'.$review['comment'].'</p>
								</div>
								<hr class="w-50">';
						}
					}
				} ?>
				<div class="text-center mt-3">
					<button class="btn btn-primary" data-toggle="collapse" data-target="#reviewformdiv">Оставить отзыв о товаре</button>
				</div>
				<div class="my-3 collapse" id="reviewformdiv">
					<form id="reviewform" data-product_id="<?php echo $product[0]['id'] ?>">
						<div class="form-group">
							<label>Имя:</label>
							<input type="text" class="form-control" name="uname">
						</div>
						<div class="form-group">
							<label>Отзыв:</label>
							<textarea required rows=2 class="form-control" name="review"></textarea>
						</div>
						<div class="my-3 text-center" id="Оценки" onmouseout="Выбрать_звёздочку(-1);" style="font-size: 2rem;"></div>
						<div class="text-center">
							<button class="btn btn-success" type="submit">Сохранить отзыв</button>
						</div>
						<div class="text-center my-3" id="review_form_status">
							<!-- <h5>Спасибо за Ваш отзыв!</h5> -->
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-sm-12">
			<h4 class="text-primary">Все о Товаре</h4>
			<hr>
			<span>
				<?php echo $product[0]['description'] ?>
			</span>
		</div>
	</div>
	<div class="my-3">
		<div class="row">
			<div class="col-4 text-left mb-4">
				<h3>Похожие товары</h3>
			</div>
			<div class="col-8 text-right mb-4">
				<a class="btn btn-primary text-white" id="btn_prev"><i class="fa fa-lg fa-chevron-left"></i></a>
				<a class="btn btn-primary text-white" id="btn_next"><i class="fa fa-lg fa-chevron-right"></i></a>
			</div>
		</div>
		<div class="" id="same_products_carousel">
			<?php foreach ($same_products as $sproduct): ?>
				<div class="col col-12 col-xl col-lg-3 col-md-4 col-sm-12 text-center mt-4">
					<div class="card text-center mx-auto">
						<?php if($sproduct['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
						<a href="/product/<?php echo $sproduct['id']; ?>">
							<img src="/public/media/uploads/<?php echo $sproduct['image']; ?>" class="mx-auto d-block" alt="Product Thumbnail">
						</a>
						<div class="card-body">
							<div class="card-title align-self-center my-0">
								<a href="/product/<?php echo $sproduct['id']; ?>" class=""><span class="font-title"><?php echo $sproduct['title']; ?></span></a>
							</div>
							<p class="card-text border-top text-warning rating" rating="<?php echo $sproduct['rating']; ?>" style="font-size: 20px;"></p>
							<div class="row card-buttons">
								<div class="col col-9">
									<p class="border rounded price_tablet"><b><?php echo number_format($sproduct['price_uah'], 0, ',', ' '); ?> грн</b></p>
								</div>
								<div class="col col-3">
									<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product['id']; ?>" data-title="<?php echo $product['title']; ?>" data-price="<?php echo $product['price_uah']; ?>"><i  class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
