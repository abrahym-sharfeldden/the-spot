<?php
	require 'app/start.php';

	$menu = $db->query("
		SELECT id,name,label,price,dsc
		FROM menu
	")->fetchAll(PDO::FETCH_ASSOC);


	$itemsByBrand = [];

	foreach ($menu as $menuList)
	{
	  $itemsByBrand[$menuList['label']][] = $menuList;
	}

	
	require VIEW_ROOT . '/page/menu.php'
?>
