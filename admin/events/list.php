<?php
	require '../../app/start.php';

	$events = $db->query("
			SELECT id,day,month,year,name,dsc,created
			FROM events
		ORDER BY year DESC, month DESC, day DESC
	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/admin/events/list.php';
?>


<link rel="stylesheet" type="text/css" href="../style.css">