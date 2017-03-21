<?php 

require '../../app/start.php';
	
	if (!empty($_POST)) {
		$name 	= $_POST['name'];
		$day 	= $_POST['day'];
		$dsc 	= $_POST['dsc'];
		$month	= $_POST['month'];
		$year	= $_POST['year'];

		$insertPage = $db->prepare("
			INSERT INTO events (name, day, dsc, month, year, created)
			VALUE (:name, :day, :dsc, :month, :year, NOW())
		");

		$insertPage->execute([
			'name' 	=> $name,
			'day' 	=> $day,
			'dsc' 	=> $dsc,
			'month' => $month,
			'year'	=> $year,
		]);

		header('Location: ' . BASE_URL . '/admin/events/list.php');
	}

require VIEW_ROOT . '/admin/events/add.php'; ?>