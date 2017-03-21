<?php //require VIEW_ROOT . '/templates/header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<h2>Edit Events</h2>
<div id="container">
	<form action="<?php echo BASE_URL; ?>/admin/events/edit.php" method="POST" autocomplete="off">
		<label for="name">
			Name
			<input type="text" name="name" id="name" value="<?php echo e($eventList['name']); ?>">
		</label>
		<label for="month">
			Month
			<select type="text" name="month" id="month">
				<option value="CHS">--Choose--</option>
				<?php foreach(array("JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER") as $month): ?>
				<option><?php echo e($month); ?></option>
			<?php endforeach; ?>
			</select>

			<input type="text" name="year" id="year" value="<?php echo e($eventList['month']); ?>" disabled>
		</label>
		<label for="day">
			Day:
			<select type="text" name="day" id="day">
				<option value="CHS">--Choose--</option>
				<?php for($day = 1; $day <= 31; $day = $day+1): ?>
					<option><?php echo e($day); ?></option>
				<?php endfor; ?>
			</select>

			<input type="text" name="year" id="year" value="<?php echo e($eventList['day']); ?>" disabled>
		</label>
		<label for="year">
			Year
			<input type="text" name="year" id="year" value="<?php echo e($eventList['year']); ?>">
		</label>
		<label for="dsc">
			Description
			<textarea name="dsc" id="dsc" cols="30" rows="10"><?php echo e($eventList['dsc']); ?></textarea>
		</label>

		<input type="hidden" name="id" value="<?php echo $eventList['id']; ?>">

		<input type="submit" value="Edit Event">
	</form>
</div>

<script>
	$(document).ready(function() {
    	$('#select-id option:contains("<?php echo $eventList['month']; ?>")').prop('selected', true);
	});
</script>
<?php //require VIEW_ROOT . '/templates/footer.php'; ?>

<style type="text/css">
body
{
	font:1em "Helvetica", sans-serif;
	background-color:#edeff0;
	margin:0;
}
h2
{
	font-weight:200;
}

input,textarea { font-size:inherit; }
}

input[type="text"],textarea
{
	width:100%;
	padding:10px;
	box-sizing:border-box;
	border:1px solid #bbb;
}
label
{
	display:block;
	margin-bottom:20px;
}

table
{
	width:100%;
	table-layout:fixed;
	margin-bottom:20px;
}

table th 
{
	text-align: left;
}
</style>