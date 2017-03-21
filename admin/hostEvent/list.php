<?php
	require '../../app/start.php';

	$hostEvents = $db->query("
		SELECT id,name,email,phone,dsc,created
		FROM hostEvent

		ORDER BY created ASC
	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/admin/hostEvent/list.php';
?>

<link rel="stylesheet" type="text/css" href="../style.css">