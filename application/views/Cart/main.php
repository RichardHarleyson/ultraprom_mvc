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
					 <th scope="col">Опции</th>
				 </tr>
			 </thead>
			 <tbody>';
			 $index =0;
			 foreach ($data as $item){
				 echo '
				 <tr>
		       <td>'.$item['title'].'</td>
		       <td>'.$item['price'].'</td>
					<td class="">
		 				<input type="number" class="form-control cart_quantity" step="1"  min="1" value="'.$item['quantity'].'" data-price="'.$item['price'].'" style="width: 60px;">
		 			</td>
		 			<td>
		 				<button class="btn btn-danger" onclick="delete_item(this)" data-index="'.$index.'"><i class="fas fa-minus"></i></button>
		 			</td>
		     </tr>';
				 $index++;
				 $total_price += $item['price'];
			 }
			 echo '
			 <tr>
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
				<button class="btn btn-primary w-50" type="button" name="button" onclick="location.href='/';"><i class="fa fa-lg fa-chevron-left"></i> <b>Продолжить Покупки</b></button>
				<button class="btn btn-danger w-50" type="button" name="button" ><b>Произвести Заказ</b> <i class="fa fa-lg fa-chevron-right"></i></button>
			</div>
		</div>
		<div class="col col-12 col-lg-5 col-xl-5 text-center align-self-center total_price">
			<h4>Общая стоимость: <?php echo $total_price?> грн</h4>
		</div>
	</div>
</div>
