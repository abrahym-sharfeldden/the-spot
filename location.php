<?php 
	require 'app/start.php';

	$hostEvents = $db->query("
		SELECT id,name,email,phone,dsc,created
		FROM hostEvent
	")->fetchAll(PDO::FETCH_ASSOC);

	$allHostEvents = $db->query("
		SELECT id,name,email,phone,dsc,created
		FROM hostEvent

		ORDER BY created ASC
	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/page/location.php';
?>