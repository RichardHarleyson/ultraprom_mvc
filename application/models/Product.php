<?php
namespace application\models;

use application\core\Model;

class Product extends Model{

	public function getProduct($id){
		$params = [
			'id' => $id,
		];
		$result = $this->db->row('SELECT * FROM up_products WHERE id=:id', $params);
		return $result;
	}
}


 ?>
