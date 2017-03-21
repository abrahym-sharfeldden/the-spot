<?php
	require '../../app/start.php';

	$about = $db->query("
			SELECT id,name,position,detail,imagePath
			FROM about
	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/admin/about/list.php';
?>

<link rel="stylesheet" type="text/css" href="../style.css">