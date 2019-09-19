<div class="gapper"></div>

<div class="container">
	<div class="text-center text-primary">
		<h3>Каталог Товаров</h3>
	</div>
	<div class="gapper"></div>
	<div class="row mt-3">

	<?php foreach ($menu as $gc): ?>
		<?php foreach ($gc['info'] as $c): ?>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 mx-auto">
				<div class="row">
					<div class="col-4">
						<img src="/public/media/uploads/<?=$c['c_image']; ?>"class="img-fluid">
					</div>
					<div class="col-8">
						<ul>
							<li><h5><?=$c['c_name']; ?></h5></li>
							<?php foreach ($c['info'] as $lc): ?>
								<li><a href="/catalog/<?=$lc['eng_name']; ?>"><?=$lc['lc_name'] ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endforeach; ?>
</div>

<div class="gapper"></div>
<div class="container">
	<div class="text-center text-primary">
		<h3>Бренды</h3>
	</div>
	<div class="gapper"></div>
	<div class="row text-center">
		<?php foreach ($brands as $brand): ?>
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-10 col-10 mx-auto my-2">
				<a class="d-block border" href="/brand_search/<?=$brand['id'] ?>">
					<div class="border-bottom">
						<img class="my-auto" style="height:120px; width:150px;" src="/public/media/uploads/<?=$brand['m_image']; ?>">
					</div>
					<span class="text-dark"><?=$brand['m_name']; ?></span>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>
