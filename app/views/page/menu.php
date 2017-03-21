<?php require VIEW_ROOT . '/templates/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/menu.css">

<link rel="stylesheet" type="text/css" href="css/media.css">

<div class="container">
	<div class="menu-wrap">
		<?php if (empty($menu)): ?>
			<p>Menu is coming soon!</p>						
		<?php else: ?>
			<div id="foreach-wrap">
				<!--Title of the Section-->
					<div class="row">
						<div class="col-md-10">
							<h2><?php echo e($menuList['label']); ?></h2>
							<hr>
						</div>
					</div>
						
					
					<?php foreach($menu as $menuList): ?>
						<div class="row">				
							<div class="col-md-8 col-sm-10 col-xs-10 col-sm-10 col-xs-10" style="display:block;">
								<h4><?php echo e($menuList['name']); ?></h4>
							</div>
							<div class="col-md-4 col-sm-2 col-xs-2 col-sm-2 col-xs-2" style="display:block;">
								<h5>$<?php echo e($menuList['price']); ?></h5>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8 col-sm-10 col-xs-10 col-sm-12 col-xs-12">
								<p><?php echo e($menuList['dsc']); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>