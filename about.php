<?php 
	require 'app/start.php';

	$about 	= $db->query("
			SELECT id,name,position,detail,imagePath
			FROM about

			ORDER BY 
				CASE position
				WHEN 'Lead Supervisor' then 1
				WHEN 'Assistant Supervisor' then 2
				WHEN 'Project Manager' then 3
				WHEN 'Back End Developer' then 4
				WHEN 'Web Designer' then 5

				ELSE 6
				END
		")->fetchAll(PDO::FETCH_ASSOC);


	require VIEW_ROOT . '/page/about.php';
?>
