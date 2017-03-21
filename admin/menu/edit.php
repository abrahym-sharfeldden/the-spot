<?php 

require '../app/start.php';

if (!empty($_POST)) {
	$id 	= $_POST['id'];
	$label 	= $_POST['label'];
	$name 	= $_POST['name'];
	$dsc 	= $_POST['dsc'];
	$price	= $_POST['price'];

	$updatePage = $db->prepare("
		UPDATE menu
		SET
			label 	= :label,
			name 	= :name,
			dsc 	= :dsc,
			price 	= :price,
			updated = NOW()
		WHERE id = :id
	");

	$updatePage->execute([
		'id' 	=> $id,
		'label'	=> $label,
		'name'	=> $name,
		'dsc' 	=> $dsc,
		'price' => $price,
	]);

	header('Location: ' . BASE_URL . '/admin/menu/list.php');
}


if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . '/admin/menu/list.php');
	die(); 
}

$menuList = $db->prepare("
	SELECT id,name,label,dsc,price
	FROM menu
	WHERE id = :id
");

$menuList->execute(['id' => $_GET['id']]);

$menuList = $menuList->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/menu/edit.php';
?>