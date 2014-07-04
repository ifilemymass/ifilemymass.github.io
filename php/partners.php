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
  $("#partners").addClass("active");$("#partners_sidebar").addClass("active");
  $("#partners").removeClass("default");$("#partners_sidebar").removeClass("default");
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
				<div class="col-xs-3">
					<center>
						<!--left stuff-->
					</center>
				</div>
				<div class="col-xs-6">
					<center>
						<!--middle stuff-->
						<div class="welcome">
							<img src="../img/wip.png">
						</div>
					</center>
				</div>
				<div class="col-xs-3">
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
				<div class="col-xs-6">
					<center>
						
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