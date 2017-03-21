<?php 

require '../../app/start.php';

	if (!empty($_POST)) {
		$name 		= $_POST['name'];
		$price 	= $_POST['price'];
		$detail 	= $_POST['detail'];
		$imagePath	= $_POST['imagePath'];

		$insertPage = $db->prepare("
			INSERT INTO about (name, price, detail, imagePath)
			VALUES (:name, :price, :detail, :imagePath)
		");

		$insertPage->execute([
			'name' 		=> $name,
			'price' 	=> $price,
			'detail' 	=> $detail,
			'imagePath'	=> $imagePath
		]);

		header('Location: ' . BASE_URL . '/admin/drinks/list.php');
	}
	


require VIEW_ROOT . '/admin/drinks/add.php'; 

?>