	<?php if (empty($events)): ?>
		<p>No events at the moment.</p>
	<?php else: ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Day</th>
      <th>Month</th>
      <th>Year</th>
      <th>Description</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($events as $event): ?>
    <tr>
      <td><strong><?php echo e($event['name']); ?></strong></td>
      <td><?php echo e($event['day']); ?></td>
      <td><?php echo e($event['month']); ?></td>
      <td><?php echo e($event['year']); ?></td>
      <td><?php echo e($event['dsc']); ?></td>
      <td><a href="<?php echo BASE_URL;?>/admin/events/edit.php?id=<?php echo e($event['id']); ?>">Edit</a></td>
      <td><a href="<?php echo BASE_URL;?>/admin/events/delete.php?id=<?php echo e($event['id']); ?>">Delete</a></td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/events/add.php">Add New Page</a>