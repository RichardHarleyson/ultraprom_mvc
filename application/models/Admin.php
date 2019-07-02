<?php
namespace application\models;

use application\core\Model;

class Admin extends Model{

	public function create_product($vars){

		// $data =[
		// 	'title' => $vars['title'],
		// 	'image' => $vars['photo'],
		// 	'price' => $vars['price'],
		// 	'currency' => $vars['currency'],
		// 	'description' => $vars['description'],
		// 	'rating' => $vars['rating'],
		// 	'category_id' => $vars['category'],
		// 	'manufacturer_id' => $vars['manufacturer'],
		// 	'power_id' => 0,
		// 	'stat_list' => 0,
		// 	'available' => 1,
		// 	'status' => 0,
		// ];

		$data =[
			$vars['title'],
			$vars['photo'],
			(float)$vars['price'],
			(int)$vars['currency'],
			(int)$vars['price_uah'],
			$vars['description'],
			(int)$vars['rating'],
			(int)$vars['category'],
			(int)$vars['manufacturer'],
			0, // power_id
			0, // stat_list
			$vars['filter_info'],
			(int)$vars['available'],
			(int)$vars['status'],
		];

		$result = $this->db->insert_query("INSERT INTO up_product(`title`, `image`, `price`, `currency`, `price_uah`,
			`description`, `rating`, `category_id`, `manufacturer_id`, `power_id`, `stat_list`, `filter_info`,
			`available`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $data);

		// $result = $this->db->insert_query("INSERT INTO `up_product`(`title`, `image`, `price`, `currency`,
		// 	`description`, `rating`, `category_id`, `manufacturer_id`, `power_id`, `stat_list`,
		// 	`available`, `status`) VALUES (:title, :image, :price, :currency, :description, :rating,
		// 	:catergory, :manufacturer, :power_id, :stat_list, :available, :status)", $data);
		return $data;
	}

	public function get_categoroies(){
		$result = $this->db->row('SELECT * FROM up_category');
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
		$currency = $this->db->row('SELECT id, buy FROM up_currency');
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
		return	$this->db->row('SELECT id, buy FROM up_currency');
	}

}


 ?>
