 	<?php if (empty($hostEvents)): ?>
		<p>No host requests at the moment.</p>
	<?php else: ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Description</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($hostEvents as $event): ?>
    <tr>
      <td><strong><?php echo e($event['name']); ?></strong></td>
      <td><?php echo e($event['email']); ?></td>
      <td><?php echo e($event['phone']); ?></td>
      <td><?php echo e($event['dsc']); ?></td>
      <td><a href="<?php echo BASE_URL;?>/admin/hostEvent/delete.php?id=<?php echo e($event['id']); ?>">Delete</a></td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
	<?php endif; ?>