<?php 

require '../../app/start.php';

	if (!empty($_POST)) {
		$name 		= $_POST['name'];
		$position 	= $_POST['position'];
		$detail 	= $_POST['detail'];
		$imagePath	= $_POST['imagePath'];

		$insertPage = $db->prepare("
			INSERT INTO about (name, position, detail, imagePath)
			VALUES (:name, :position, :detail, :imagePath)
		");

		$insertPage->execute([
			'name' 		=> $name,
			'position' 	=> $position,
			'detail' 	=> $detail,
			'imagePath'	=> $imagePath
		]);

		header('Location: ' . BASE_URL . '/admin/about/list.php');
	}
	


require VIEW_ROOT . '/admin/about/add.php'; 

?>