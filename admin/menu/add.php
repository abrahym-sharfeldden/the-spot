<?php 

require '../../app/start.php';
	
	if (!empty($_POST)) {
		$name 	= $_POST['name'];
		$label 	= $_POST['label'];
		$dsc 	= $_POST['dsc'];
		$price	= $_POST['price'];

		$insertPage = $db->prepare("
			INSERT INTO menu (name, label, dsc, price, created)
			VALUE (:name, :label, :dsc, :price, NOW())
		");

		$insertPage->execute([
			'name' 	=> $name,
			'label' => $label,
			'dsc' 	=> $dsc,
			'price' => $price,
		]);

		header('Location: ' . BASE_URL . '/admin/menu/list.php');
	}

require VIEW_ROOT . '/admin/menu/add.php'; ?>