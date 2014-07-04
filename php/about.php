<!DOCTYPE html>
<html lang="en">
	<head>
    <?php include 'head.php' ?>	
	<!--Personalised styling-->
	<link href="../css/style.main.css" rel="stylesheet">

	
  </head>

  <body style="background-image:url('../img/gc3.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:100%;margin-bottom:60px;font-family: 'Roboto', sans-serif;">
  <script>
  $(document).ready(function() {
  $("#about").addClass("active");$("#about_sidebar").addClass("active");
  $("#about").removeClass("default");$("#about_sidebar").removeClass("default");
  });
  </script>
  <!--<script>	
	$(document).ready(function(){
		$('.sidebar').hide();
		$('.menu').on('click', function(){
		$('.sidebar').toggle('slide', { direction: 'left' }, 600);
		});
		$('.main-content').on('click', function(){
		$('.sidebar').hide('slide', { direction: 'left' }, 400);
		});
	});
	</script>-->
	

    <?php include 'navbar.php' ?>
	
	<?php include 'sidebar.php' ?>	
	
	<br>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4">
					<center>
						<!--left stuff-->
					</center>
				</div>
				<div class="col-xs-4">
					<center>
						<!--middle stuff-->
						<div class="welcome">
							This website is all about pissing in the fourth dimension....and you know what...thats COOL
						</div>
					</center>
				</div>
				<div class="col-xs-4">
					<center>
						<!--right stuff-->
					</center>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-3">
					<center>
						<!--blank space-->
					</center>
				</div>
				<div class="col-xs-6 box">
					<center>
						<h2><u>WHO THE HECK AM I ?</u></h2>
						<p>
						Name's Kunal....my nick is TOOTHBRUSH....feel free to call me 'TB'..<br>
						I am an individual front-end web designer and this website has been made by me out of complete joblessness...
						ironically...i am one of those geeky guys who doesn't know the difference between precision and accuracy...
						</p>
					</center>
				</div>
				<div class="col-xs-3">
					<center>
						<!--blank space-->
					</center>
				</div>
			</div>
		</div>
		<!--?php include 'footer.php' ?-->
	</div>
</body></html>