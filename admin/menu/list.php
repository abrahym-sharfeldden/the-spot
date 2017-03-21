<?php
	require '../../app/start.php';

	$menu = $db->query("
			SELECT id,name,label,price,dsc
			FROM menu
			
		ORDER BY label
	")->fetchAll(PDO::FETCH_ASSOC);
	
	require VIEW_ROOT . '/admin/menu/list.php';
?>

<link rel="stylesheet" type="text/css" href="../style.css">