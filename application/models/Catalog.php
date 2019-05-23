<?php
namespace application\models;

use application\core\Model;

class Catalog extends Model{

	public function getProducts($category){
		$result = $this->db->row('SELECT * FROM up_product WHERE category_id='.$category.' ORDER BY onsale=1 DESC');
		return $result;
	}

	public function getProducts_sorted($category, $type){
		$query_data = ['category_id' => $category];
		if($type == 'sale'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id ORDER BY onsale=1 DESC', $query_data);
		}elseif($type == 'price_desc'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id ORDER BY price_uah DESC', $query_data);
		}elseif ($type == 'price_asc') {
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id ORDER BY price_uah ASC', $query_data);
		}elseif($type == 'rating_desc'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id ORDER BY rating DESC', $query_data);
		}elseif ($type == 'rating_asc') {
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id ORDER BY rating ASC', $query_data);
		}elseif($type == 'title_desc'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id ORDER BY title DESC', $query_data);
		}elseif ($type == 'title_asc') {
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id ORDER BY onsale=1 DESC', $query_data);
		}else{
			$result = $this->getProducts($category);
		}

		return $result;
	}
}


 ?>
