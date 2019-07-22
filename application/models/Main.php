<?php
namespace application\models;

use application\core\Model;

class Main extends Model{

	public function getProducts(){
		$result = $this->db->row('SELECT * FROM up_product WHERE available=1 LIMIT 10');
		return $result;
	}
}

 ?>
