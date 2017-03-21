<?php require VIEW_ROOT . '/templates/header.php'; ?>

<link rel="stylesheet" type="text/css" href="css/location.css">

<div class="container">
	<div class="about-wrap">
		<div class="map-wrap">
			<div id="map" style="width:100%;height:200px;"></div>
		</div>
		<div class="about-content">
			<div class="about-left">
				<div class="columns seven" style="text-align:center;margin-right: 9%;">
      				<br>
  					<p>
	  					<br>
						<font style="font-size:1.2em; font-weight:600;">483 39th Street <br> Brooklyn, NY 11232</font>
						<br>
	           	 		<a href="https://maps.google.com?saddr=Current+Location&amp;daddr=438+39th+St,+Brooklyn,+NY,+United+States/" target="_blank" style="color:#F32626; text-decoration:underline;"><strong style="font-size:1.5em;">Get Directions</strong></a>
						<br>
             		</p> 
             		<p>
             			<br>
             			<font style="font-size:0.7em;">The Spot is opened from 5pm to 4am</font>
             			<br>
             			<font style="font-size:0.7em;">For more event related closing times, <br> Check the <a href="events.php" style="font-size:1.1em;color:blue;">Events page</a> </font>
             		</p>
             	</div>
			</div>
			<div class="about-right">
				<div class="col-rg-main col-main">
					<div class="col-rg-1">
						<div id="col-rg-1-form">	
							<div class="form-style-2">
								<div class="form-style-2-heading">Provide your information to host an event!</div>
								
								<form action="<?php echo BASE_URL; ?>/admin/hostEvent/add.php" method="post">
									<label for="field1">
										<span><span class="required">*</span>Name:</span>
										<input type="text" class="input-field" name="field1" value="" />
									</label>
									<br>
									<label for="field2">
										<span><span class="required">*</span>Email:</span>
										<input type="text" class="input-field" name="field2" value="" />
									</label>
									<br>
									<label for="field3">
										<span><span class="required">*</span>Telephone:</span>
										<input type="text" class="tel-number-field" name="field3" value="" maxlength="10" />
									</label>
									<br>
									<label for="field5">
										<span><span class="required">*</span>Message:</span>
										<textarea name="field5" class="textarea-field"></textarea>
									</label>

									<br>

									<label>
										<span>&nbsp;</span>
										<input type="submit" value="Submit" />
									</label>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>

    <script>
      function initMap() {
        var uluru = {lat: 40.651542, lng: -74.004198};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 19,
          center: uluru,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDucSpoWkWGH6n05GpjFLorktAzT1CuEc&callback=initMap">
    </script>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>