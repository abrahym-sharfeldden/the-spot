<?php 

require '../../app/start.php';

	if (!empty($_POST)) {
	$id 	= $_POST['id'];
	$name 	= $_POST['name'];
	$day 	= $_POST['day'];
	$month 	= $_POST['month'];
	$year	= $_POST['year'];
	$dsc	= $_POST['dsc'];

	$updatePage = $db->prepare("
		UPDATE events
		SET
			name 	= :name,
			day 	= :day,
			month 	= :month,
			year 	= :year,
			dsc 	= :dsc
		WHERE id = :id
	");

	$updatePage->execute([
		'id' 		=> $id,
		'name'		=> $name,
		'day'		=> $day,
		'month' 	=> $month,
		'year' 		=> $year,
		'dsc'		=> $dsc,
	]);

	header('Location: ' . BASE_URL . '/admin/events/list.php');
}


if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . '/admin/events/list.php');
	die(); 
}

$eventList = $db->prepare("
	SELECT id,day,name,month,year,dsc
	FROM events
	WHERE id = :id
");

$eventList->execute(['id' => $_GET['id']]);

$eventList = $eventList->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/events/edit.php';

?>