<?php require VIEW_ROOT . '/templates/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/specials.css">

<div class="content-wrap">
	<?php if(empty($drinks)): ?>
			<h1>There are currently no upcoming events.</h1>
	<?php else: ?>
		<div class="dr-01">
			<h2 class="page-title">Our Specialty Drinks</h2>
	
			<div class="wrap">			
				<ul class="main-list">
					<br>
					<?php foreach($drinks as $drink): ?>
						<li>
							<div class="dr-01a">
								<div class="image1" id="info<?php echo $drink["id"]; ?>">
									<img src="IMG/drinks/<?php echo $drink['imagePath']; ?>" alt="Photograph of <?php echo $drink["name"]; ?>">
								</div>
								<div class="dr-list">
									<div class="dr-list-wrap">
										<ul>
											<li>
												<h3><?php echo $drink["name"]; ?></h3>
												
												<br>

												<h5>$<?php echo $drink["price"]; ?></h5>

												<br><br>
												<p><?php echo $drink["detail"]; ?></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>