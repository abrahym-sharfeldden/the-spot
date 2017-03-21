	<?php if (empty($menu)): ?>
		<p>Menu coming soon!</p>
	<?php else: ?>
		<div id="container">
<table>
  	<thead>
	    <tr>
			<th>Name</th>
			<th>Label</th>
			<th>Price</th>
			<th>Description</th>
			<th></th>
			<th></th>
	    </tr>
  	</thead>
  	<tbody>
		<?php foreach($menu as $food): ?>
    		<tr>
 				<td><?php echo e($food['name'])?></td>
				<td><?php echo e($food['label']); ?></td>
				<td><?php echo e($food['price']); ?></td>
				<td><?php echo e($food['dsc']); ?></td>
				<td><a href="<?php echo BASE_URL;?>/admin/menu/edit.php?id=<?php echo e($food['id']); ?>">Edit</a></td>
				<td><a href="<?php echo BASE_URL;?>/admin/menu/delete.php?id=<?php echo e($food['id']); ?>">Delete</a></td>
    		</tr>
   		<?php endforeach; ?>
  	</tbody>
</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/menu/add.php">Add New Page</a>