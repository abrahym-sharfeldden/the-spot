<!-- <?php // require VIEW_ROOT . '/templates/header.php'; ?> -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>


	<h2>Add page</h2>
<div id="container">	
	<form action="<?php echo BASE_URL; ?>/admin/events/add.php" method="POST" autocomplete="off">
		<label for="name">
			Name of Event:
			<input type="text" name="name" id="name">
		</label>
		<label for="month">
			Month
			<!--<input type="text" name="month" id="month">-->
			<select type="text" name="month" id="month">
				<option value="CHS">--Choose--</option>
				<?php foreach(array("JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER") as $month): ?>
				<option id="monthCycle" ><?php echo e($month); ?></option>
			<?php endforeach; ?>
			</select>
		</label>
		<label for="day">
			day
			<select type="text" name="day" id="day">
				<option value="CHS">--Choose--</option>
				<?php for($day = 1; $day <= 31; $day = $day+1): ?>
					<option><?php echo e($day); ?></option>
				<?php endfor; ?> 
			</select>
		</label>
		<label for="year">
			year
			<input type="text" name="year" id="year">
		</label>
		<label for="dsc">
			description
			<textarea name="dsc" id="dsc" cols="30" rows="10"></textarea>
		</label>

		<input type="submit" value="Add Page">
	</form>
</div>

<script>
		function checkMonth(numOfDays) {

			var month 	= document.getElementById('monthCycle');
			var day 	= document.getElementById('day');

			if (month == "APRIL" || "JUNE" || "SEPTEMBER" || "NOVEMBER"){

				for(var i = 1; i <= numOfDays; i++){
					day.options[] = new Option(day[i], i);
				}

			} 	else if( month == "JANUARY" || "MARCH" || "MAY" || "JULY" || "AUGUST" || "OCTOBER" ||"DECEMBER"){
				numOfDays = 31;
				for(var i = 1; i <= numOfDays; i++){
					day.options[] = new Option(day[i], i);
				}

			} 	else {
				numOfDays = 28;
				for(var i = 1; i <= numOfDays; i++){
					day.options[] = new Option(day[i], i);
				}
			}
		}
</script>
<!-- <?php // require VIEW_ROOT . '/templates/footer.php'; ?> -->

<style>
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