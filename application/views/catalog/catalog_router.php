<div class="gapper"></div>

<div class="container">
	<div class="text-center">
		<a class="btn btn-danger d-block d-lg-none mb-3 w-50 mx-auto" data-toggle="collapse" href="#filter_collapse" role="button" aria-expanded="false" aria-controls="filter_collapse">
			Фильтр
		</a>
	</div>

	<div class="row border">
		<div class="col-lg-2 col-xl-2 border-right pl-2">

			<div class="collapse d-lg-block" id="filter_collapse" data-filter_headers='<?php echo json_encode($filter_headers);  $filter_header_counter = 0;?>'>
				<div class="text-center">
					<a class="btn btn-danger my-3 w-50 mx-auto" onclick='filter_headers(<?php echo json_encode($filter_headers);?>)' data-toggle="collapse" href="#filter_collapse" role="button" aria-expanded="false" aria-controls="filter_collapse">
						Найти
					</a>
				</div>

				<?php foreach ($filter_data as $key => $value): ?>
					<div class="mt-1 border-bottom" data-filter_key="<?php echo $filter_headers[$filter_header_counter]; $filter_header_counter++; ?>">
						<span class="mb-2 mt-4 font-weight-bold text-primary"><?php echo $key; ?></span>
						<?php foreach ($value as $data): ?>
							<div class="form-check text-left">
								<input class="form-check-input" type="checkbox" value="<?php echo $data; ?>">
								<label data-info="<?php echo $data; ?>"><?php echo $data; ?></label>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endforeach; ?>

				<div class="text-center">
					<a class="btn btn-danger my-3 w-50 mx-auto" onclick='filter_headers(<?php echo json_encode($filter_headers);?>)' data-toggle="collapse" href="#filter_collapse" role="button" aria-expanded="false" aria-controls="filter_collapse">
						Найти
					</a>
				</div>

			</div>

		</div>
		<div class="col-lg-10 col-xl-10">
			<div class="gapper"></div>

			<div class="row">
				<div class="col-lg-6 col-xl-6 text-center">
					<h3 id="title" data-title="<?php echo $data_title; ?>"><?php echo $title; ?></h3>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="form-group">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-self-center text-center">
								<label>Сортировать по:</label>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
								<select class="form-control float-left" name="sorting" id="sorting">
									<option value="sale">Акции</option>
									<option value="price_asc">Цена (по возрастанию)</option>
					        <option value="price_desc">Цена (по убыванию)</option>
									<option value="rating_asc">Популярность (по возрастанию)</option>
									<option value="rating_desc">Популярность (по убыванию)</option>
									<option value="title_asc">Название (А - Я)</option>
									<option value="title_desc">Название (Я -А)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gapper"></div>

			<?php foreach(array_chunk($product_list, 4, true) as $products): ?>
				<div class="row product_lists">
					<?php foreach ($products as $product): ?>
						<div class="col col-12 col-xl col-lg col-md col-sm-12 text-center product_item" data-product_price="<?php echo $product['price_uah']; ?>" <?php $query_list = explode(';', $product['query_list']); foreach ($query_list as $item){ $attr = explode(':', $item); echo "data-".$attr[0]."=".$attr[1]." ";}?>>
							<div class="card text-center mx-auto">
								<div class="">
									<?php if($product['onsale'] == 1){echo "<div class='card-badge bg-danger'>АКЦИЯ!</div>";} ?>
									<img src="/public/media/uploads/<?php echo $product['image']; ?>" class="img-fluid" alt="Product Thumbnail">
								</div>
							<!-- <img src="https://via.placeholder.com/250" class="img-fluid" alt="Product Thumbnail"> -->
								<div class="card-body">
									<div class="card-title align-self-center my-0">
										<a href="/product/<?php echo $product['id']; ?>" class=""><span class="font-title"><?php echo $product['title']; ?></span></a>
									</div>
									<p class="card-text border-top text-warning rating" rating="<?php echo $product['rating']; ?>" style="font-size: 20px;"></p>
									<div class="row card-buttons">
										<div class="col col-9">
											<p class="border rounded price_tablet"><b><?php echo $product['price_uah']; ?> грн</b></p>
										</div>
										<div class="col col-3">
											<button class="btn btn-danger" type="submit" onclick="add_item(this)" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину" data-id="<?php echo $product['id']; ?>" data-title="<?php echo $product['title']; ?>" data-price="<?php echo $product['price']; ?>"><i  class="fa fa-shopping-cart"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php endforeach; ?>
				</div>

			<div class="gapper"><hr></div>
		<?php endforeach; ?>

		</div>
	</div>
</div>