<?php 
require 'app/start.php';

$drinks = $db->query("
	SELECT * FROM drinks
	")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/page/specials.php'; 

?>