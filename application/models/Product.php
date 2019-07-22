<?php
namespace application\models;

use application\core\Model;

class Product extends Model{

	public function getProduct($id){
		$params = [
			'id' => $id,
		];
		$result = $this->db->row('SELECT * FROM up_product WHERE id=:id', $params);
		return $result;
	}

	public function get_same_products($type){
		$result = $this->db->row('SELECT * FROM up_product WHERE category_id='.$type.' AND available=1 LIMIT 10');
		return $result;
	}

	public function get_reviews($id){
		$result = $this->db->row('SELECT * FROM up_comments WHERE product_id='.$id);
		return $result;
	}

	public function new_review($review){
		$result = $this->db->insert_query('INSERT INTO up_comments(uname, comment, rating, product_id) VALUES (:uname, :review, :rating, :product_id)', $review);
		return $result;
	}

	public function update_rating($rating, $id){
		$result = $this->db->insert_query('UPDATE up_product SET rating='.$rating.' WHERE id='.$id);
		return $result;
	}



}


 ?>
