	<?php if (empty($drinks)): ?>
		<p>No about at the moment.</p>
	<?php else: ?>
<table>
  	<thead>
	    <tr>
			<th>Image</th>
			<th>Name</th>
			<th>Position</th>
			<th>Detail</th>
			<th></th>
			<th></th>
	    </tr>
  	</thead>
  	<tbody>
		<?php foreach($drinks as $drink): ?>
    		<tr>
 				<td>
 					<div style="width:100px;height:100px;">
 						<img style="width:100%;height:100%;" src="../../IMG/drinks/<?php echo $drink['imagePath']; ?>">
 					</div>
 				</td>
				<td><?php echo e($drink['name']); ?></td>
				<td><?php echo e($drink['price']); ?></td>
				<td><?php echo e($drink['detail']); ?></td>
				<td><a href="<?php echo BASE_URL;?>/admin/about/edit.php?id=<?php echo e($drink['id']); ?>">Edit</a></td>
				<td><a href="<?php echo BASE_URL;?>/admin/about/delete.php?id=<?php echo e($drink['id']); ?>">Delete</a></td>
    		</tr>
   		<?php endforeach; ?>
  	</tbody>
</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/about/add.php">Add New Page</a>