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
  $("#contact").addClass("active");$("#contact_sidebar").addClass("active");
  $("#contact").removeClass("default");$("#contact_sidebar").removeClass("default");
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
							CONTACT me if you want any kind of help....
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
						<h2><u>CONTACT ME ON:</u></h2>
						<p style="font-family: 'Open Sans Condensed', sans-serif;">PHONE: +919003291309<br>
						EMAIL: kunalkishore.mail@gmail.com<br>
						GITHUB: github.com/ifilemymass<br>
						FACEBOOK: facebook.com/ifilemymass<br>
						GOOGLE PLUS: gplus.to/ifilemymass<br>
						<a href="http://gplus.to/ifilemymass/"><img style="height:55px;width:55px;" src="../img/google-plus-icon.png"></a>
						<a href="http://www.facebook.com/ifilemymass"><img style="height:55px;width:55px;" src="../img/facebook-icon.png"></a>
						<a href="http://www.github.com/ifilemymass"><img style="height:55px;width:55px;" src="../img/github-icon.png"></a><br>
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