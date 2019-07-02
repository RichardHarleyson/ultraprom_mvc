<div class="gapper"></div>
<div class="container">
	<?php
	$total_price = 0;
	if(empty($data)){
		echo '
		<h2>Корзина пока пуста</h2>
		<div class="gapper"></div>
		';
	}else{
		echo '
		<h2>Корзина</h2>
		<div class="gapper"></div>
		<table class="table table-responsive-sm">
			 <thead>
				 <tr>
					 <th scope="col">Название</th>
					 <th scope="col">Цена</th>
					 <th scope="col">Количество</th>
					 <th scope="col">Итого</th>
					 <th scope="col"></th>
				 </tr>
			 </thead>
			 <tbody>';
			 $index =0;
			 foreach ($data as $item){
				 echo '
				 <tr>
		       <td><a href="/product/'.$item['id'].'">'.$item['title'].'</a></td>
		       <td>'.number_format($item['price_uah'], 0, ',', ' ').' грн</td>
					<td class="">
		 				<input type="number" class="form-control cart_quantity" step="1"  min="1" data-index="'.$index.'" value="'.$item['quantity'].'" data-price="'.$item['price_uah'].'" style="width: 60px;">
		 			</td>
					<td><div class="item_total_price" data-index="'.$index.'">'.number_format($item['price_uah'], 0, ',', ' ').' грн</div></td>
		 			<td>
		 				<button class="btn btn-danger" onclick="delete_item(this)" data-index="'.$index.'"><i class="fas fa-trash-alt"></i></button>
		 			</td>
		     </tr>';
				 $index++;
				 $total_price += $item['price_uah'];
			 }
			 echo '
			 <tr>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td></td>
				 <td>
				 	<button class="btn btn-danger" type="button" onclick="delete_all()"><i class="fas fa-trash-alt"></i></button>
				 </td>
			 </tr>
			 </tbody>
		 		</table>';
	}
	?>
	<div class="row cart_bottom">
		<div class="col col-12 col-lg-5 col-xl-5 align-self-center">
			<div class="btn-group w-100">
				<button class="btn btn-primary w-50" type="button" name="button" onclick="location.href='/';"><b>Продолжить Покупки</b></button>
				<button class="btn btn-danger w-50" type="button" name="button" ><b>Произвести Заказ</b></button>
			</div>
		</div>
		<div class="col col-12 col-lg-5 col-xl-5 text-center align-self-center total_price">
			<h4>Общая стоимость: <?php echo number_format($total_price, 0, ',', ' ') ?> грн</h4>
		</div>
	</div>
</div>
