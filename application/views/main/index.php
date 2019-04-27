<div class='gapper'></div>

<div class='container'>
	<div id="HCarousel" class="carousel slide border d-none d-md-block" data-ride="carousel">
		<ul class="carousel-indicators">
		<li data-target="#HCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#HCarousel" data-slide-to="1"></li>
	</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="/ultraprom_mvc/public/media/img/ultraprom_teplo.jpg" class="d-block w-100" alt="slide1">
			</div>
			<div class="carousel-item">
				<img src="/ultraprom_mvc/public/media/img/montag.jpg" class="d-block w-100" alt="slide2">
			</div>
		</div>
	</div>
</div>

<div class="gapper"></div>

<!-- Популярные товары -->
<div class="container">
	<div id="product_carousel_pop" class="carousel slide" data-ride="carousel" data-interval="0">

		<div class="row">
			<div class="col-4 text-left mb-4">
				<h3>Популярные Товары</h3>
			</div>
			<div class="col-8 text-right mb-4">
				<a class="btn btn-primary" href="#product_carousel_pop" title="prev" data-slide="prev"><i class="fa fa-lg fa-chevron-left"></i></a>
				<a class="btn btn-primary" href="#product_carousel_pop" title="next" data-slide="next"><i class="fa fa-lg fa-chevron-right"></i></a>
			</div>
		</div>

		<div class="carousel-inner" id="product_carousel" role="listbox">
			<?php foreach(array_chunk($result, 5, true) as $products): ?>
				<div class="carousel-item" id="4">
					<div class="row product_lists">
						<?php foreach ($products as $product): ?>
							<div class="col col-12 col-xl col-lg-3 col-md-4 col-xs-12 col-sm-12 text-center">
								<div class="card text-center mx-auto d-block">
									<!-- <img src="<?php echo $product['thumbnail']; ?>" alt="Product Thumbnail"> -->
									<img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail">
									<div class="card-body">
										<a href="/ultraprom_mvc/product/<?php echo $product['id']; ?>" class="card-title"><span class="font-title"><?php echo $product['title']; ?></span></a>
										<p class="card-text border-top text-warning" style="font-size: 20px;">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="far fa-star"></i>
										</p>
										<div class="row card-buttons">
											<div class="col col-9">
												<p class="border rounded price_tablet"><b>18000 uah</b></p>
											</div>
											<div class="col col-3">
												<button class="btn btn-danger"><i  class="fa fa-shopping-cart"></i></button>
												<!-- <p class="border rounded">Cart</p> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="gapper"></div>

<!-- Акционные товары -->
<div class="container">
	<div id="product_carousel_sale" class="carousel slide" data-ride="carousel" data-interval="0">

	<div class="row">
		<div class="col-4 text-left mb-4">
			<h3>Акционные Предложения</h3>
		</div>
		<div class="col-8 text-right mb-4">
			<a class="btn btn-primary" href="#product_carousel_sale" title="prev" data-slide="prev"><i class="fa fa-lg fa-chevron-left"></i></a>
			<a class="btn btn-primary" href="#product_carousel_sale" title="next" data-slide="next"><i class="fa fa-lg fa-chevron-right"></i></a>
		</div>
	</div>

	<div class="carousel-inner" id="product_carousel" role="listbox">
		<?php foreach(array_chunk($result, 5, true) as $products): ?>
			<div class="carousel-item" id="4">
				<div class="row product_lists">
					<?php foreach ($products as $product): ?>
						<div class="col col-12 col-xl col-lg-3 col-md-4 col-xs-12 col-sm-12 text-center">
							<div class="card text-center mx-auto d-block">
								<!-- <img src="<?php echo $product['thumbnail']; ?>" alt="Product Thumbnail"> -->
								<img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail">
								<div class="card-body">
									<a href="/ultraprom_mvc/product/<?php echo $product['id']; ?>" class="card-title"><span class="font-title"><?php echo $product['title']; ?></span></a>
									<p class="card-text border-top text-warning" style="font-size: 20px;">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="far fa-star"></i>
									</p>
									<div class="row card-buttons">
										<div class="col col-9">
											<p class="border rounded price_tablet"><b>18000 uah</b></p>
										</div>
										<div class="col col-3">
											<button class="btn btn-danger"><i  class="fa fa-shopping-cart"></i></button>
											<!-- <p class="border rounded">Cart</p> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	</div>
</div>

<div class="container">
</div>

</div>

<!-- Вывод товаров
Текстовка -->
