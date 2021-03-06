<div class="gapper"></div>

<div class="container text-primary">
	<h1>Панель Администратора</h1>
</div>

<div class="gapper"></div>

<div class="container">
	<p>
	  <button class="btn btn-primary" data-toggle="collapse" href="#categories" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Категории</button>
	  <button class="btn btn-primary" data-toggle="collapse" data-target="#manufacturers" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Производители</button>
		<button class="btn btn-primary" data-toggle="collapse" data-target="#slides" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Слайды</button>
		<button class="btn btn-primary" data-toggle="collapse" data-target="#reviews" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Отзывы</button>
	</p>
</div>

<div class="container">

	<div class="collapse" id="categories">
		<div class="row">
			<div class="col-6">
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
								<label class="m-0 ml-1 text-white" for="lc_photo">
									<a class="btn btn-primary btn_file_input">
										<i class="far fa-file-image"></i>
									</a>
								</label>
								<input class="file mx-1" id="lc_photo" name="lower_category_image" type="file" style="width: 0.1px; height: 0.1px; opacity: 0; z-index: -1; position: absolute; overflow: hidden">

								<button type="submit" class="btn btn-success mx-1">+</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="collapse" id="manufacturers">
		<div class="row">
			<div class="col-6">
				<div class="my-3">
					<h5 class="text-primary my-3">Добавить Производителя</h5>
					<div class="">
						<form class="form-inline" id="add_manufacturer">
							<div class="form-group my-2">
								<input type="text" name="manufacturer_name" class="form-control mx-1" placeholder="Производитель">
								<!-- <input type="file" name="manufacturer_image" class="mx-1"> -->
								<label class="m-0 ml-1 text-white" for="m_photo">
									<a class="btn btn-primary btn_file_input">
										<i class="far fa-file-image"></i>
									</a>
								</label>
								<input class="file mx-1" id="m_photo" name="manufacturer_image" type="file" style="width: 0.1px; height: 0.1px; opacity: 0; z-index: -1; position: absolute; overflow: hidden">
								<button type="submit" class="btn btn-success mx-1">+</button>
							</div>
						</form>
						<form class="form-inline">
							<div class="form-group my-2">
								<select class="custom-select mx-1 panel_select" id="manufacturer" name="manufacturer">
									<!-- <option selected>Производитель</option> -->
									<?php foreach ($manufacturer as $item) {
										echo "<option value='".$item['id']."'>".$item['m_name']."</option>";
									} ?>
								</select>
								<button class="btn btn-danger mx-1" onclick="del_manufacturer()">-</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="collapse" id="slides">
		<div class="row">
			<div class="col-6">
				<div class="my-3">
					<h5 class="text-primary my-3">Добавить Слайд</h5>
						<div class="">
							<form class="form-inline" id="add_slide">
								<div class="form-group my-2">
									<input class="form-control" placeholder="Адрес слайда" type="text" name="slide_url">
								</div>
								<div class="form-group my-2">
									<label class="m-0 ml-1 text-white" for="slide_photo">
										<a class="btn btn-primary btn_file_input">
											<i class="far fa-file-image"></i>
										</a>
									</label>
									<input class="file mx-1" id="slide_photo" name="slide_image" type="file" style="width: 0.1px; height: 0.1px; opacity: 0; z-index: -1; position: absolute; overflow: hidden">
								</div>
								<button type="submit" class="btn btn-success mx-1">+</button>
							</form>
							<form class="form-inline">
								<div class="form-group my-2">
									<select class="custom-select" name="slides">
										<?php foreach ($slides as $s): ?>
											<option value="<?=$s['id']; ?>"><?=$s['s_url']; ?></option>
										<?php endforeach; ?>
									</select>
									<button class="btn btn-danger mx-1" onclick="del_slide()">-</button>
								</div>
							</form>
						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="collapse" id="reviews">
		<div class="row">
			<div class="col-5">
				<div class="my-3">
					<h5 class="text-primary my-3">Проверка Отзывов</h5>
					<div class="table-responsive">
						<table class="table" style="max-width: 500px; max-height: 300px;">
							<tbody>
								<?php if(empty($reviews)){echo '<h5>Нет отзывов на проверку</h5>';} ?>
								<?php foreach ($reviews as $r): ?>
									<tr>
										<td class="p-1 w-75"><?=$r['comment']; ?></td>
										<td class="p-1 w-25">
											<button onclick="del_review(this)" data-r_id="<?=$r['id']; ?>" data-product_id="<?=$r['product_id']; ?>" class="btn btn-danger mx-1">-</button>
											<button onclick="set_review(this)" data-r_id="<?=$r['id']; ?>" data-product_id="<?=$r['product_id']; ?>" class="btn btn-success mx-1">+</button>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
