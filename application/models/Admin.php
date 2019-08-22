<?php
namespace application\models;

use application\core\Model;

class Admin extends Model{

	public function create_product($vars){
		$data =[
			$vars['title'],
			$vars['eng_name'],
			$vars['photo'],
			(float)$vars['price'],
			(int)$vars['currency'],
			(int)$vars['price_uah'],
			(int)$vars['onsale'],
			$vars['description'],
			(int)$vars['rating'],
			(int)$vars['category'],
			(int)$vars['m_id'],
			0, // power_id
			$vars['stat_list'], // stat_list
			$vars['filter_info'],
			(int)$vars['available'],
			(int)$vars['status'],
		];

		$result = $this->db->insert_query("INSERT INTO up_product(`title`,`eng_name`, `image`, `price`, `currency`, `price_uah`,
			`onsale`,`description`, `rating`, `category_id`, `manufacturer_id`, `power_id`, `stat_list`, `filter_info`,
			`available`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $data);

		return $data;
	}

	public function get_global_categoroies(){
		$result = $this->db->row('SELECT * FROM up_global_category');
		return $result;
	}

	public function get_categoroies(){
		$result = $this->db->row('SELECT * FROM up_category ORDER BY c_name DESC');
		return $result;
	}

	public function get_lower_categoroies(){
		$result = $this->db->row('SELECT * FROM up_lower_category ORDER BY id ASC');
		return $result;
	}

	public function get_manufacturer(){
		$result = $this->db->row('SELECT * FROM up_manufacturer ORDER BY m_name ASC');
		return $result;
	}

	public function get_products(){
		$result = $this->db->row('SELECT * FROM up_product WHERE status=1');
		return $result;
	}

	public function get_slides(){
		return $this->db->row('SELECT * FROM up_slides');
	}

	public function get_reviews(){
		return $this->db->row('SELECT * FROM up_comments WHERE status=0');
	}

	public function upd_reviews($status){
		return $this->db->insert_query('UPDATE up_comments SET status=:status WHERE id=:id',$status);
	}

	public function add_category($category){
		// $result = $this->db->insert_query('INSERT INTO up_comments(uname, comment, rating, product_id) VALUES (:uname, :review, :rating, :product_id)', $review);
		$result = $this->db->insert_query('INSERT INTO up_category(c_name, eng_name, gc_id) VALUES (:c_name, :eng_name, :gc_id)', $category);
		return $result;
	}

	public function add_lower_category($lcategory){
		// $result = $this->db->insert_query('INSERT INTO up_lower_category (lc_name, eng_name, lc_image, c_id) VALUES (:)')
		$result = $this->db->insert_query('INSERT INTO up_lower_category (lc_name, eng_name, lc_image, c_id) VALUES (:lc_name, :eng_name, :lc_image, :c_id)', $lcategory);
		return $result;
	}

	public function add_manufacturer($manufacturer){
		$result = $this->db->insert_query('INSERT INTO up_manufacturer (m_name,  m_image) VALUES (:m_name, :m_image)', $manufacturer);
		return $result;
	}

	public function add_slide($slide){
		$result = $this->db->insert_query('INSERT INTO up_slides (s_url, s_image) VALUES (:s_url, :s_image)',$slide);
	}

	public function del_manufacturer($manufacturer){
		$result = $this->db->row('DELETE FROM up_manufacturer WHERE id=:id',$manufacturer);
		return $result;
	}

	public function del_slide($id){
		return $this->db->row('DELETE FROM up_slides WHERE id='.$id);
	}

	public function del_review($id){
		return $this->db->row('DELETE FROM up_comments WHERE id='.$id);
	}

	public function product_update($product){
		$result = $this->db->insert_query("UPDATE up_product SET title=:title, price=:price, currency=:currency, price_uah=:price_uah, description=:description,
		onsale=:onsale, available=:available WHERE id=:id", $product);
		return $result;
	}

	public function update_photo($product){
		$result = $this->db->insert_query("UPDATE up_product SET image=:photo WHERE id=:id", $product);
	}

	public function product_del($id){
		$result = $this->db->insert_query("UPDATE up_product SET status=0, available=0 WHERE id=".$id);
		return $result;
	}

	public function set_currency($data){
		try{
			$this->db->row('UPDATE up_currency SET sale='.$data['usd_sale'].', buy='.$data['usd_buy'].' WHERE id=2');
			$this->db->row('UPDATE up_currency SET sale='.$data['eur_sale'].', buy='.$data['eur_buy'].' WHERE id=3');
		}catch( PDOException $Exception ) {
			throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
		}
	}

	public function update_prices(){
		$products = $this->db->row('SELECT id, price, currency FROM up_product');
		$currency = $this->db->row('SELECT id, buy, sale FROM up_currency');
		$cur_buy = [];
		foreach ($currency as $curr) {
			$cur_buy[$curr['id']] = $curr;
		}
		foreach ($products as $product) {
			$new_price = $product['price'] * $cur_buy[$product['currency']]['buy'];
			$this->db->row('UPDATE up_product SET price_uah='.(int)$new_price.' WHERE id='.$product['id']);
		}
	}

	public function get_currencies(){
		return	$this->db->row('SELECT id, sale, buy FROM up_currency');
	}

}


 ?>
