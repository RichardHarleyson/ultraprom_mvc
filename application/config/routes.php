<?php
return [
	// MAIN
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'product/{id:\d+}' => [
		'controller' => 'product',
		'action' => 'page',
	],
	'catalog' => [
		'controller' => 'catalog',
		'action' => 'main',
	],
	// CART
	'cart' => [
		'controller' => 'cart',
		'action' => 'main',
	],
	'cart/add_item' => [
		'controller' => 'cart',
		'action' => 'add_item',
	],
	'cart/empty_cart' => [
		'controller' => 'cart',
		'action' => 'empty_cart',
	],
	'cart/delete_item' => [
		'controller' => 'cart',
		'action' => 'delete_item',
	],

];
?>
