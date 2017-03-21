<?php 
	require 'app/start.php';

	$events 	= $db->query("
			SELECT id,day,month,year,name,dsc,created
			FROM events
		")->fetchAll(PDO::FETCH_ASSOC);

	$allEvents 	= $db->query("
		SELECT id,day,month,year,name,dsc,created
		FROM events

		ORDER BY created
	")->fetchAll(PDO::FETCH_ASSOC);
 
	require VIEW_ROOT . '/page/events.php';
 ?>