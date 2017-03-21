<?php //require VIEW_ROOT . '/templates/header.php'; ?>

	<h2>Edit menuList</h2>
<div id="container">
	<form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete="off">
		<label for="name">
			Title
			<input type="text" name="name" id="name" value="<?php echo e($menuList['name']); ?>">
		</label>
		<label for="label">
			Label
			<input type="text" name="label" id="label" value="<?php echo e($menuList['label']); ?>">
		</label>
		<label for="price">
			Price
			<input type="text" name="price" id="price" value="<?php echo e($menuList['price']); ?>">
		</label>
		<label for="slug">
			Slug
			<input type="text" name="slug" id="slug" value="<?php echo e($menuList['slug']); ?>">
		</label>
		<label for="dsc">
			description
			<textarea name="dsc" id="dsc" cols="30" rows="10"><?php echo e($menuList['dsc']); ?></textarea>
		</label>

		<input type="hidden" name="id" value="<?php echo $menuList['id']; ?>">

		<input type="submit" value="Edit Menu">
	</form>
</div>
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