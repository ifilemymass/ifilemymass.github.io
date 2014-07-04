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
  $("#home").addClass("active");$("#home_sidebar").addClass("active");
  $("#home").removeClass("default");$("#home_sidebar").removeClass("default");
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
						<!--middle stuff--><img src="../img/tp.png" style="align:left;height:100%;width:100%;">
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
					<!--blank space-->
				</div>
				<div class="col-xs-6">
					<center>
						<div class="welcome">
							It is not a POpcoRN site so please leave if you are hungry....
						</div>
					</center>
				</div>
				<div class="col-xs-3">
					<!--blank space-->
				</div>
			</div>
		</div>
		<!--?php include 'footer.php' ?-->
	</div>
</body></html>