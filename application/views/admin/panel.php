<div class="gapper"></div>

<div class="container text-primary">
	<h1>Панель Администратора</h1>
</div>

<div class="gapper"></div>

<div class="container">
	<div class="row">
		<div class="col-5">
			<div class="my-3">
				<h5 class="text-primary my-3">Добавить Категорию</h5>
				<div class="">
					<form class="form-inline" id="add_category">
						<div class="form-group">
							<select class="custom-select mx-1 panel_select" name="global_category">
								<!-- <option selected>Глобальная Категория</option> -->
								<?php foreach ($global_category as $item) {
									echo "<option value='".$item['id']."'>".$item['gc_name']."</option>";
								} ?>
							</select>
							<input type="text" name="category_name" class="form-control mx-1" placeholder="Категория">
							<button type="submit" class="btn btn-success mx-1">+</button>
						</div>
					</form>
				</div>
			</div>
			<div class="my-3">
				<h5 class="text-primary my-3">Добавить Подкатегорию</h5>
				<div class="">
					<form class="form-inline" id="add_lower_category">
						<div class="form-group">
							<select class="custom-select mx-1 panel_select" name="category">
								<!-- <option selected>Категория</option> -->
								<?php foreach ($category as $item) {
									echo "<option value='".$item['id']."'>".$item['c_name']."</option>";
								} ?>
							</select>
							<input type="text" name="lower_category_name" class="form-control mx-1" placeholder="Подкатегория">
							<input type="file" name="lower_category_image" class="mx-1">
							<button type="submit" class="btn btn-success mx-1">+</button>
						</div>
					</form>
				</div>
			</div>
			<div class="my-3">
				<h5 class="text-primary my-3">Добавить Производителя</h5>
				<div class="">
					<form class="form-inline" id="add_manufacturer">
						<div class="form-group">
							<select class="custom-select mx-1 panel_select" id="manufacturer" name="manufacturer">
								<!-- <option selected>Производитель</option> -->
								<?php foreach ($manufacturer as $item) {
									echo "<option value='".$item['id']."'>".$item['m_name']."</option>";
								} ?>
							</select>
							<button class="btn btn-danger mx-1" onclick="del_manufacturer()">-</button>
							<input type="text" name="manufacturer_name" class="form-control mx-1" placeholder="Производитель">
							<input type="file" name="manufacturer_image" class="mx-1">
							<button type="submit" class="btn btn-success mx-1">+</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
