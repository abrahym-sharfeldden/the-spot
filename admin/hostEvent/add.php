<?php 

require '../../app/start.php';
	
	if (!empty($_POST)) {
		$name 	= $_POST['field1'];
		$email 	= $_POST['field2'];
		$phone	= $_POST['field3'];
		$dsc	= $_POST['field5'];

		$insertPage = $db->prepare("
			INSERT INTO hostEvent (name,email,phone,dsc,created)
			VALUE (:name, :email, :phone, :dsc, NOW())
		");

		$insertPage->execute([
			'name' 	=> $name,
			'email' => $email,
			'phone' => $phone,
			'dsc'	=> $dsc,
		]);

		header('Location: ' . BASE_URL . '/location.php');
	}

require VIEW_ROOT . '/admin/hostEvent/add.php'; ?>