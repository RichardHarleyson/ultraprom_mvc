<div class="gapper"></div>

<div class="container text-primary">
	<h1>Панель Товаров</h1>
</div>

<div class="gapper"></div>

<div class="container-fluid px-5">
	<div class="row">
		<div class="col-lg-3">
			<h4 class="text-danger">Добавить товар</h4>

			<form id="create_product" method="post">
			  <div class="form-group">

			    <label>Название</label>
			    <input name="title" class="form-control">

					<label>Фото</label>
				  <div class="custom-file">
				    <input name="photo" type="file" class="custom-file-input">
				    <label class="custom-file-label" for="inputGroupFile01"></label>
				  </div>

					<label>Цена</label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <input name="price" class="form-control">
					  </div>
					  <select name="currency" class="custom-select">
					    <option value="2">&#36;</option>
					    <option value="3">&euro;</option>
					    <option value="1">&#8372;</option>
					  </select>
					</div>

					<label>Рейтинг</label>
					<select name="rating" class="custom-select">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>

					<label>Категория</label>
					<select name="category" class="custom-select">
						<option value="0">. . .</option>
						<?php foreach ($categories as $category){
							echo "<option value=".$category[id].">".$category['title']."</option>";
						}?>
					</select>

					<label>Свойства для Фильтра</label>
					<div class="filter_info" id="filter_info">
						<div class="input-group" id="filter_manufacturer">
						  <div class="input-group-prepend w-50">
						    <span class="input-group-text w-100">Производитель</span>
						  </div>
						  	<input type="text" name="filter_manufacturer" class="form-control">
						</div>
						<div class="input-group" id="filter_country">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Страна Прозводитель</span>
							</div>
								<input type="text" name="filter_country" class="form-control">
						</div>
						<div class="input-group" id="filter_contur">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип Контура</span>
							</div>
								<select class="custom-select" name="filter_contur">
									<option value="Двухконтурный" selected>Двухконтурный</option>
									<option value="Одноконтурный">Одноконтурный</option>
									<option value="Двухконтурны с Бойлером">Двухконтурны с Бойлером</option>
								</select>
						</div>
						<div class="input-group" id="filter_power">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Мощность</span>
							</div>
								<input type="number" name="filter_power" class="form-control">
						</div>
						<div class="input-group" id="filter_burn_cam">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Камера Сгорания</span>
							</div>
							<select class="custom-select" name="filter_burn_cam">
								<option value="Открытая (дымоходный)" selected>Открытая (дымоходный)</option>
								<option value="Закрытый (турбированный)">Закрытый (турбированный)</option>
							</select>
						</div>
						<div class="input-group" id="filter_teploobmen">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Теплообменник</span>
							</div>
							<select class="custom-select" name="filter_teploobmen">
								<option value="Битермический" selected>Битермический</option>
								<option value="Раздельный">Раздельный</option>
							</select>
						</div>
						<div class="input-group" id="filter_tteploobmen">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Теплообменник</span>
							</div>
							<select class="custom-select" name="filter_tteploobmen">
								<option value="Стальной" selected>Стальной</option>
								<option value="Чугунный">Чугунный</option>
							</select>
						</div>
						<div class="input-group" id="filter_nasos">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Насос</span>
							</div>
							<select class="custom-select" name="filter_nasos">
								<option value="Есть" selected>Есть</option>
								<option value="Нет">Нет</option>
							</select>
						</div>
						<div class="input-group" id="filter_napryajenie">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Напряжение Питания, В</span>
							</div>
							<input type="number" class="custom-select" name="filter_napryajenie"></input>
						</div>
						<div class="input-group" id="filter_montaj">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип Монтажа</span>
							</div>
							<select class="custom-select" name="filter_montaj">
								<option value="Напольные" selected>Напольный</option>
								<option value="Настенный">Настенный</option>
							</select>
						</div>
						<div class="input-group" id="filter_rozjig">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип Розжига</span>
							</div>
							<select class="custom-select" name="filter_rozjig">
								<option value="Электро" selected>Электро</option>
								<option value="Пьезо">Пьезо</option>
							</select>
						</div>
						<div class="input-group" id="filter_otvod">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Способ Отвода Газов</span>
							</div>
							<select class="custom-select" name="filter_otvod">
								<option value="Турбированный" selected>Турбированный</option>
								<option value="Дымоходный">Дымоходный</option>
								<option value="Парапетный">Парапетный</option>
							</select>
						</div>
						<div class="input-group" id="filter_controller">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Управление</span>
							</div>
							<select class="custom-select" name="filter_controller">
								<option value="Механическое" selected>Механическое</option>
								<option value="Электромеханическое">Электромеханическое</option>
								<option value="Электронное">Электронное</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_type">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип</span>
							</div>
							<select class="custom-select" name="filter_rad_type">
								<option value="11" selected>11</option>
								<option value="22">22</option>
								<option value="33">33</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_height">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Высота</span>
							</div>
							<select class="custom-select" name="filter_rad_height">
								<option value="300" selected>300</option>
								<option value="500">400</option>
								<option value="500">500</option>
								<option value="600">600</option>
								<option value="500">900</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_length">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Длинна</span>
							</div>
							<select class="custom-select" name="filter_rad_length">
								<option value="400" selected>400</option>
								<option value="500">500</option>
								<option value="600">600</option>
								<option value="700">700</option>
								<option value="800">800</option>
								<option value="900">900</option>
								<option value="1000">1000</option>
								<option value="1100">1100</option>
								<option value="1200">1200</option>
								<option value="1400">1400</option>
								<option value="1600">1600</option>
								<option value="1800">1800</option>
								<option value="2000">2000</option>
								<option value="2100">2100</option>
								<option value="2200">2200</option>
								<option value="2300">2300</option>
								<option value="2400">2400</option>
								<option value="2500">2500</option>
								<option value="2600">2600</option>
								<option value="2700">2700</option>
								<option value="2800">2800</option>
								<option value="2900">2900</option>
								<option value="3000">3000</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_conn">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Подключение</span>
							</div>
							<select class="custom-select" name="filter_rad_conn">
								<option value="Боковое" selected>Боковое</option>
								<option value="Нижнее">Нижнее</option>
							</select>
						</div>
						<div class="input-group" id="filter_apex">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Межосевое расстояние</span>
							</div>
							<select class="custom-select" name="filter_apex">
								<option value="300" selected>300</option>
								<option value="350">350</option>
								<option value="500">500</option>
								<option value="900">900</option>
								<option value="1000">1000</option>
								<option value="1200">1200</option>
								<option value="1400">1400</option>
								<option value="1600">1600</option>
								<option value="1800">1800</option>
								<option value="2000">2000</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_sec">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Количество Секций</span>
							</div>
							<select class="custom-select" name="filter_rad_sec">
								<option value="3" selected>3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_elem_comp">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип Комплектации</span>
							</div>
							<select class="custom-select" name="filter_rad_elem_comp">
								<option value="Кран Маевского" selected>Кран Маевского</option>
								<option value="Напольный крепеж">Напольный крепеж</option>
								<option value="Настенный крепеж">Настенный крепеж</option>
								<option value="Кронштейн угловой">Кронштейн угловой</option>
								<option value="Кронштейн анкерный">Кронштейн анкерный</option>
								<option value="Решетка конвектора">Решетка конвектора</option>
								<option value="Присоединительный набор">Присоединительный набор</option>
								<option value="Кронштейн для сушки белья">Кронштейн для сушки белья</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_kind">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип Радиатора</span>
							</div>
							<select class="custom-select" name="filter_rad_kind">
								<option value="Чугунные" selected>Чугунные</option>
								<option value="Панельные">Панельные</option>
								<option value="Секционные">Секционные</option>
								<option value="Внутрипольные">Внутрипольные</option>
							</select>
						</div>
						<div class="input-group" id="filter_rad_eradius">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Диаметр подключения</span>
							</div>
							<select class="custom-select" name="filter_rad_eradius">
								<option value="1" selected>1</option>
								<option value="1/2">1/2</option>
								<option value="3/4">3/4</option>
							</select>
						</div>
						<div class="input-group" id="filter_flour_montaj">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип монтажа</span>
							</div>
							<select class="custom-select" name="filter_flour_montaj">
								<option value="В стяжку" selected>В стяжку</option>
								<option value="В слой плиточного клея">В слой плиточного клея</option>
								<option value="Под напольное покрытие">Под напольное покрытие</option>
							</select>
						</div>
						<div class="input-group" id="filter_flour_type">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип пола</span>
							</div>
							<select class="custom-select" name="filter_flour_type">
								<option value="Нагревательный мат" selected>Нагревательный мат</option>
								<option value="Нагревательный кабель">Нагревательный кабель</option>
							</select>
						</div>
						<div class="input-group" id="filter_flour_cabtype">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип кабеля</span>
							</div>
							<select class="custom-select" name="filter_flour_cabtype">
								<option value="Двухжильный" selected>Двухжильный</option>
								<option value="Одножильный">Одножильный</option>
							</select>
						</div>
						<div class="input-group" id="filter_flour_cabrad">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Диаметр кабеля</span>
							</div>
							<select class="custom-select" name="filter_flour_cabrad">
								<option value="3" selected>3</option>
								<option value="4">4</option>
								<option value="7">7</option>
								<option value="5,5">5,5</option>
								<option value="0,9-1,8">0,9-1,8</option>
							</select>
						</div>
						<div class="input-group" id="filter_flour_isqr">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Площадь укладки</span>
							</div>
							<select class="custom-select" name="filter_flour_isqr">
								<option value="0,5" selected>0,5</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>

					</div>

					<!-- <textarea name="query_list" class="form-control" rows="2">производитель:_;страна-производитель:_;тип-контура:_;мощность:_;</textarea> -->

					<label>Описание</label>
					<textarea name="description" class="form-control" rows="3"></textarea>

					<div class="custom-control custom-checkbox text-center my-2">
						<input name="available" type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">В Наличии</label>
					</div>
					<div class="custom-control custom-checkbox text-center my-2">
						<input name="onsale" type="checkbox" class="custom-control-input" id="customCheck2">
						<label class="custom-control-label" for="customCheck2">Акционный</label>
					</div>
			  </div>

				<div class="text-center">
					<button type="submit" class="btn btn-primary w-50">Добавить</button>
				</div>
			</form>

		</div>
		<!-- <div class="col-lg-4">
			Параметры
		</div> -->
		<div class="col-lg-9">
			<h4 class="text-danger">Список Товаров</h4>
			<div class="input-group my-3 w-25">
				<select name="list_category" class="custom-select">
					<option value="0">Тип Товаров</option>
					<?php foreach ($categories as $category){
						echo "<option value=".$category[id].">".$category['title']."</option>";
					}?>
				</select>
			</div>
			<div class="m-3">
				<div class="">
					<table class="table w-auto">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Название</th>
								<th scope="col">Цена</th>
								<th scope="col">Описание</th>
								<th scope="col">Акция</th>
								<th scope="col">Наличие</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($products as $product) {
								$is_onsale = '';
								$is_available = '';
								if($product['onsale'] == 1){
									$is_onsale = 'checked';
								}
								if($product['available'] == 1){
									$is_available = 'checked';
								}
								echo '<tr class="list_item" data-product_type="'.$product['category_id'].'">
								<td class="py-1">'
									.'<a href="/product/'.$product['id'].'">'.$product['id'].'</a>'.
								'</td>'
								.'<td class="py-1">'
									.'<input class="form-control" name="item_title" value="'.$product['title'].'">'.
								'</td>'
								.'<td class="py-1">'
								.'<div class="input-group my-0">
									  <div class="input-group-prepend d-inline-block w-75">
									    <input name="item_price" class="form-control" value="'.$product['price'].'">
									  </div>
									  <select name="item_currency" class="custom-select d-inline-block w-25">
									    <option value="2" '.(($product['currency'] == '2') ? 'selected="selected"' : '').'>&#36;</option>
									    <option value="3" '.(($product['currency'] == '3') ? 'selected="selected"' : '').'>&euro;</option>
									    <option value="1" '.(($product['currency'] == '1') ? 'selected="selected"' : '').'>&#8372;</option>
									  </select>
									</div>'.
									// .'<input name="item_price" data-product_currency="'.$product['currency'].'" value="'.$product['price'].'">'.
								'</td>'
								.'<td class="py-1">'
									.'<textarea  class="form-control" name="item_description" rows="1">'.$product['description'].'</textarea>'.
								'</td>'
								.'<td class="py-1">'
								.'<input name="item_onsale" '.$is_onsale.' type="checkbox">'.
									// .'<span data-product_id="'.$product['id'].'">'.$product['onsale'].'</span>'.
								'</td>'
								.'<td class="py-1">'
								.'<input name="item_available" '.$is_available.' type="checkbox">'.
									// .'<span data-product_id="'.$product['id'].'">'.$product['onsale'].'</span>'.
								'</td>'
								.'<td class="py-1">
									<div class="btn-group" role="group">'
										.'<button class="btn btn-success mr-1" onclick="product_upd(this)" data-product_id="'.$product['id'].'"><i class="text-white fas fa-save"></i></button>'
										.'<button class="btn btn-danger ml-1" onclick="product_del(this)" data-product_id="'.$product['id'].'"><i class="text-white fas fa-trash"></i></button>'
									.'</div>'
								.'</td>'
								.'</tr>';
							} ?>

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="gapper"></div>
