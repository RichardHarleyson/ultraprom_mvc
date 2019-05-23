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
			$vars['description'],
			(int)$vars['rating'],
			(int)$vars['category'],
			(int)$vars['manufacturer'],
			0, // power_id
			0, // stat_list
			$vars['query_list'],
			(int)$vars['available'],
			(int)$vars['status'],
		];

		$result = $this->db->insert_query("INSERT INTO up_product(`title`, `image`, `price`, `currency`,
			`description`, `rating`, `category_id`, `manufacturer_id`, `power_id`, `stat_list`, `query_list`,
			`available`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", $data);

		// $result = $this->db->insert_query("INSERT INTO `up_product`(`title`, `image`, `price`, `currency`,
		// 	`description`, `rating`, `category_id`, `manufacturer_id`, `power_id`, `stat_list`,
		// 	`available`, `status`) VALUES (:title, :image, :price, :currency, :description, :rating,
		// 	:catergory, :manufacturer, :power_id, :stat_list, :available, :status)", $data);
		return $data;
	}

	public function get_categoroies(){
		$result = $result = $this->db->row('SELECT * FROM up_category');
		return $result;
	}
}


 ?>
