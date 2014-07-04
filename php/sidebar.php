	<script> 
		$(document).ready(function(){
		$(".sidebar").hide();
		$(".cover").on('mouseover',function(){
		$(".sidebar").show('slide', { direction: 'left' }, 600);
		});
		$(".main-content").on('mouseover',function(){
		$(".sidebar").hide('slide', { direction: 'left' }, 600);
		});
		});
	</script>
	
	<style>
		 .cover{
		  width: 70px;
		  height: 560px;
		  position: fixed;
		  top:55px;left:0px;
		  background-color:#333;
		  }
		 .sidebar{
		  width: 250px;
		  height: 620px;
		  position: fixed;
		  top:55px;left:70px;
		  background-color:#333;
		  border:none;padding:0;
		  }
		  .sidebar>a>div{
		  width: 250px;
		  height:70px;
		  background-color:#333;
		  font-family: 'Oswald';
		  font-size:125%;
		  color:white;
		  text-align:center;
		  padding-top:20px;
		  }
		  .sidebar>a>div.active{
		  background-color:white;
		  color:#333;
		  }
		  .sidebar>a>div.default#home_sidebar:hover{
		  background-color:#27AE61;
		  }
		  .sidebar>a>div.default#about_sidebar:hover{
		  background-color:rgb(41,128,185);
		  }
		  .sidebar>a>div.default#schedule_sidebar:hover{
		  background-color:rgb(192,57,43);
		  }
		  .sidebar>a>div.default#blog_sidebar:hover{
		  background-color:#89BFC9;
		  }
		  .sidebar>a>div.default#partners_sidebar:hover{
		  background-color:#20618B;
		  }
		  .sidebar>a>div.default#register_sidebar:hover{
		  background-color:#EE753E;
		  }
		  .sidebar>a>div.default#contact_sidebar:hover{
		  background-color:rgb(237,173,21);
		  }
		  .sidebar>a>div.default#search_sidebar:hover{
		  background-color:#88D6C6;
		  }
		  .sidebar>center:hover{
		  background-color:#F5F5F5;
		  }
	</style>
	<div class="cover">
		<!--Cover-->
		<img style="height:70px;width:70px;" src="../img/Home.png">
		<img style="height:70px;width:70px;" src="../img/Document.png">
		<img style="height:70px;width:70px;" src="../img/Calendar.png">
		<img style="height:70px;width:70px;" src="../img/Comment.png">
		<img style="height:70px;width:70px;" src="../img/User.png">
		<img style="height:70px;width:70px;" src="../img/Tag.png">
		<img style="height:70px;width:70px;" src="../img/Mail3.png">
		<img style="height:70px;width:70px;" src="../img/Search.png">
		<img style="height:70px;width:70px;" src="../img/share.png">
	</div>
	<div class="sidebar">
		<!--Sidebar content-->
		<a href="home.php"><div class="default" id="home_sidebar">HOME</div></a>
		<a href="about.php"><div class="default" id="about_sidebar">ABOUT ME</div></a>
		<a href="schedule.php"><div class="default" id="schedule_sidebar">SCHEDULE</div></a>
		<a href=""><div class="default" id="blog_sidebar">BLOG</div></a>
		<a href=""><div class="default" id="partners_sidebar">PARTNERS</div></a>
		<a href=""><div class="default" id="register_sidebar">REGISTER</div></a>
		<a href="contact.php"><div class="default" id="contact_sidebar">CONTACT</div></a>
		<a href=""><div class="default" id="search_sidebar">SEARCH</div></a>
		<center>
		<a href="http://gplus.to/ifilemymass/"><img style="height:55px;width:55px;" src="../img/google-plus-icon.png"></a>
		<a href="http://www.facebook.com/ifilemymass"><img style="height:55px;width:55px;" src="../img/facebook-icon.png"></a>
		<a href="http://www.github.com/ifilemymass"><img style="height:55px;width:55px;" src="../img/github-icon.png"></a>
		</center>
	</div>