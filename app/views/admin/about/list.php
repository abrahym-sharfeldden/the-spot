	<?php if (empty($about)): ?>
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
		<?php foreach($about as $staff): ?>
    		<tr>
 				<td>
 					<div style="width:100px;height:100px;">
 						<img style="width:100%;height:100%;" src="../../IMG/staff/<?php echo $staff['imagePath']; ?>">
 					</div>
 				</td>
				<td><?php echo e($staff['name']); ?></td>
				<td><?php echo e($staff['position']); ?></td>
				<td><?php echo e($staff['detail']); ?></td>
				<td><a href="<?php echo BASE_URL;?>/admin/about/edit.php?id=<?php echo e($staff['id']); ?>">Edit</a></td>
				<td><a href="<?php echo BASE_URL;?>/admin/about/delete.php?id=<?php echo e($staff['id']); ?>">Delete</a></td>
    		</tr>
   		<?php endforeach; ?>
  	</tbody>
</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/drinks/add.php">Add New Page</a>