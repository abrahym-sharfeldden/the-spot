<?php

require '../../app/start.php';

if (isset($_GET['id'])) {
	$deletePage = $db->prepare("
		DELETE FROM about
		WHERE id = :id

	");

	$deletePage->execute(['id' => $_GET['id']]);
}

header('Location: ' . BASE_URL . '/admin/about/list.php');
?>