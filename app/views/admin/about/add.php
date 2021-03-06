	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>


	<h2>Add page</h2>
<div id="container">	
	<form action="<?php echo BASE_URL; ?>/admin/about/add.php" method="POST" enctype="multipart/form-data" autocomplete="off">
		<label for="name">
			Name
			<input type="text" name="name" id="name" value="">
		</label>
		
		<label for="position">
			Position
			<input type="text" name="position" id="position" value="">
		</label>
		
		<label for="detail">
			Detail
			<textarea name="detail" id="detail" cols="30" rows="10"></textarea>
		</label>
		
		<label for="imagePath">
			Upload Image File:
			<input name="imagePath" id="imagePath" type="text" class="inputFile" />
		</label>
		
		<input type="submit" value="Add Page">
	</form>

</div>
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