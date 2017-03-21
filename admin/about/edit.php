<?php 

require '../../app/start.php';

	if (!empty($_POST)) {
	$id 		= $_POST['id'];
	$name 		= $_POST['name'];
	$position 	= $_POST['position'];
	$detail 	= $_POST['detail'];

	$updatePage = $db->prepare("
		UPDATE about
		SET
			name 		= :name,
			position 	= :position,
			detail 		= :detail
		WHERE id = :id
	");

	$updatePage->execute([
		'id' 		=> $id,
		'name'		=> $name,
		'position'	=> $position,
		'detail' 	=> $detail,
	]);

	header('Location: ' . BASE_URL . '/admin/about/list.php');
}


if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . '/admin/about/list.php');
	die(); 
}

$about = $db->prepare("
	SELECT 	id,name,position,detail
	FROM 	about
	WHERE 	id = :id
");

$about->execute(['id' => $_GET['id']]);

$about = $about->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/about/edit.php';

?>