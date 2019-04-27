<?php
namespace application\models;

use application\core\Model;

class Catalog extends Model{

	public function getProducts(){

		$result = $this->db->row('SELECT * FROM products LIMIT 10');
		return $result;
	}
}


 ?>
