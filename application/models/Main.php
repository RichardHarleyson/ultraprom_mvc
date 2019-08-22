<?php
namespace application\models;

use application\core\Model;

class Main extends Model{

	public function getProducts(){
		$result = $this->db->row('SELECT * FROM up_product WHERE available=1 LIMIT 10');
		return $result;
	}

	public function getProducts_onsale(){
		$result = $this->db->row('SELECT * FROM up_product WHERE available=1 AND onsale=1 LIMIT 10');
		return $result;
	}

	public function getSlides(){
		return $this->db->row('SELECT * FROM up_slides');
	}

	public function get_search($search){
		return $this->db->row('SELECT * FROM up_product WHERE title LIKE "%'.$search.'%" AND available=1');
	}
}

 ?>
