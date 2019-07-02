<?php
namespace application\models;

use application\core\Model;

class Main extends Model{

	public function getProducts(){
		$result = $this->db->row('SELECT * FROM up_product LIMIT 10');
		return $result;
	}
}

 ?>
