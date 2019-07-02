<div class="gapper"></div>

<div class="container text-primary">
	<h1>Панель Товаров</h1>
</div>

<div class="gapper"></div>

<div class="container">
	<div class="row">
		<div class="col-lg-4">
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
						<?php foreach ($categories as $category){
							echo "<option value=".$category[id].">".$category['title']."</option>";
						}?>
					</select>

					<label>Свойства для Фильтра</label>
					<div class="filter_info">
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
								<option value="Закрытий (турбированный)">Закрытий (турбированный)</option>
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
						<div class="input-group" id="filter_nasos" style="display: none;">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Насос</span>
							</div>
							<select class="custom-select" name="filter_nasos" disabled="disabled">
								<option value="Есть" selected>Есть</option>
								<option value="Нет">Нет</option>
							</select>
						</div>
						<div class="input-group" id="filter_napryajenie" style="display: none;">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Напряжение Питания, В</span>
							</div>
							<input type="number" class="custom-select" name="filter_napryajenie" disabled="disabled"></input>
						</div>
						<div class="input-group" id="filter_montaj" style="display: none;">
							<div class="input-group-prepend w-50">
								<span class="input-group-text w-100">Тип Монтажа</span>
							</div>
							<select class="custom-select" name="filter_montaj" disabled="disabled">
								<option value="Напольные" selected>Напольный</option>
								<option value="Настенный">Настенный</option>
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
		<div class="col-lg-4">
			Параметры
		</div>
		<div class="col-lg-4">
			<div class="">
				Шаблоны
			</div>
			<div class="">
				Товары из Базы
			</div>
		</div>
	</div>
</div>

<div class="gapper"></div>
