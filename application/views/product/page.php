<div class="container">
	<div class='gapper'></div>

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
				<!-- <img class="img-fluid mx-auto" src="/public/media/uploads/<?php echo $product[0]['image'];?>" style="margin: 5px"> -->
				<img class="img-fluid" src="https://via.placeholder.com/400" style="margin: 5px">
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
			<h4 class="text-danger">Характеристики Товара</h4>
			<hr>
			<table class="table table-striped">
				<tbody>
					<tr>
						<td>Высота</td>
						<td>Otto</td>
					</tr>
					<tr>
						<td>Ширини</td>
						<td>Thornton</td>
					</tr>
					<tr>
						<td>Высота</td>
						<td>Otto</td>
					</tr>
					<tr>
						<td>Ширини</td>
						<td>Thornton</td>
					</tr>
					<tr>
						<td>Высота</td>
						<td>Otto</td>
					</tr>
					<tr>
						<td>Ширини</td>
						<td>Thornton</td>
					</tr>
					<tr>
						<td>Высота</td>
						<td>Otto</td>
					</tr>
					<tr>
						<td>Ширини</td>
						<td>Thornton</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-xl-6 col-sm-12">
			<h4 class="text-primary">Все о Товаре</h4>
			<hr>
			<span>
				Котлы Данко изготавливаются как одноконтурные, так и с функцией водоподогрева. Оснащенные вертикальным или горизонтальным газоходом.
	Усовершенствованная серия бытовых газовых котлов Данко мощностью от 8 до 24 кВт. Основной сварной трубчатый теплообменник изготавливается из высококачественной стали толщиной 3 мм. Газоходы теплообменника выполнены из большого количества дымогарных труб, в которые вставлены винтовые турбулизаторы. Это обеспечивает максимальный отбор температуры отходящих дымовых газов, быстрый нагрев теплоносителя в теплообменнике и максимальный КПД котла.
Для комплектации Данко 8 используются: автоматика безопасности и регулирования SIT, а также импортные инжекционные низкофакельные горелки из высококачественной термостойкой нержавеющей стали, которые обеспечивают полное сгорание газа и стойкое пламя даже при падении давления газа до 635 Па.
<br>
Преимущества газовых котлов Данко:
<br>
энергосберегающие котлы;
высокая надежность, гарантированная экономичность, эстетичное выполнение, легкое обслуживание.
			</span>
		</div>

	</div>
</div>
