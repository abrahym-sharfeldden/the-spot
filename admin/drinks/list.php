<?php
	require '../../app/start.php';

	$drinks = $db->query("
			SELECT id,name,price,detail,imagePath
			FROM drinks
	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/admin/drinks/list.php';
?>


<link rel="stylesheet" type="text/css" href="../style.css">