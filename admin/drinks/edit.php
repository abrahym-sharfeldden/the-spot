<?php 

require '../../app/start.php';

	if (!empty($_POST)) {
	$id 		= $_POST['id'];
	$name 		= $_POST['name'];
	$price 		= $_POST['price'];
	$detail 	= $_POST['detail'];

	$updatePage = $db->prepare("
		UPDATE about
		SET
			name 		= :name,
			price 	= :price,
			detail 		= :detail
		WHERE id = :id
	");

	$updatePage->execute([
		'id' 		=> $id,
		'name'		=> $name,
		'price'	=> $price,
		'detail' 	=> $detail,
	]);

	header('Location: ' . BASE_URL . '/admin/drinks/list.php');
}

require VIEW_ROOT . '/admin/drinks/edit.php';

?>