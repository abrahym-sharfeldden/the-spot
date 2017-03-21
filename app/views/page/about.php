<?php require VIEW_ROOT . '/templates/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/about.css">

<div class="container">
	<div class="container-wrap"> 
		<div class="ab-01">
			<div class="ab-01a">

				<br>
			
				<h2 class="page-title">About The Spot</h2>
				
				<br><br>
				
				<div class="image-container-1"><img src="IMG/" alt="Landscape of The Spot w/ Logo"></div>

				<br><br>

				<div class="ab-01a-para">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lobortis quis mi id convallis. Fusce interdum, tortor nec malesuada mattis, ante lorem ornare massa, vel gravida mauris ante ac orci. Phasellus enim diam, facilisis id sem eget, tincidunt pharetra nunc. Etiam facilisis enim sed augue imperdiet, vitae rutrum augue sodales. In hendrerit, dui sit amet posuere viverra, mauris nibh tincidunt dui, ut sollicitudin lorem ligula quis tortor. Nulla eu magna nec augue vulputate dignissim ac in sapien. Vestibulum neque lacus, ultricies vel laoreet vitae, ultricies in tortor. Donec euismod dictum tellus, a consequat turpis.</p>
				</div>
			</div>
		</div>

		<br><hr><br>

		<div class="ab-02">
		<?php if(empty($about)): ?>
				<h1>There are currently no upcoming events.</h1>
		<?php else: ?>
			<div class="ab-02a">
			<h2 class="page-title">Our Team</h2>
				
				<ul class="main-list">
					<br>
					<?php foreach($about as $staff): ?>
						<li>
							<div class="ab-02a-team">
								<div class="image-container-2" id="info<?php echo $staff["id"]; ?>">
									<img src="IMG/staff/<?php echo $staff['imagePath']; ?>" alt="Photograph of <?php echo $staff["name"]; ?> (<?php echo $staff["position"]; ?>)">

									<div class="hover">
										<div class="hover-wrap">
											<ul>
												<li>
													<h3><?php echo $staff["name"]; ?></h3>
													
													<br>

													<h5><?php echo $staff["position"]; ?></h5>

													<br><br>
													<p><?php echo $staff["detail"]; ?></p>
												</li>
											</ul>
										</div>
									</div>	
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
		</div>

	</div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>