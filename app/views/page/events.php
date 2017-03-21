<?php require VIEW_ROOT . '/templates/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/events.css">
<link rel="stylesheet" type="text/css" href="css/media.css">


<div class="container" style="padding:20px;">
    	<?php if (empty($events)): ?>
    		<p style="font-size:10px;">There are currently no upcoming events.</p>
    	<?php else: ?>
    		<?php foreach($events as $event): ?>
				<div class="row">
					<div class="col-xs-12 col-sm-offset-2 col-sm-8">
						<ul class="event-list">
							<li>
								<time datetime="2017-07-20">
									<span class="day"><?php echo e($event["day"]); ?></span>
									<span class="month"><?php echo e($event["month"]); ?></span>
									<span class="year"><?php echo e($event["year"]); ?></span>
									<span class="time">ALL DAY</span>
								</time>

								<div class="info">
									<h2 class="title"><?php echo e($event["name"]); ?></h2>
									<p class="desc"><?php echo e($event["dsc"]); ?></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>