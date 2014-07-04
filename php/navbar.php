	
	<style>
		  .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus{
		  /*background-color:#F28A02;*/
		  background-image:url(../img/arrow.png);
		  background-size:20px 9px;
		  background-repeat:no-repeat;
		  background-position:bottom center;
		  }
		  .navbar-nav>li.active{
		  border-bottom:thick solid #00A3E8;
		  }
		  .navbar-inverse .navbar-nav>li>a{
		  font-size:125%;
		  text-transform:uppercase;
		  font-family: 'Oswald';
		  }
		  .navbar-nav>li.default>a:hover{
		  /*background-color:#F2A62C;*/
		  }
		  .navbar-nav>li.default{
		  border-bottom:thick solid transparent;
		  }
		  .navbar-nav>li.default:hover{
		  border-bottom:thick solid #09E65A;
		  }
		  .navbar{
		  /*background-color:#F5B056;*/
		  }
	</style>
	
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand menu">#IFILEMYMASS</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="default" id="home"><a href="home.php">Home</a></li>
			<li class="default" id="about"><a href="about.php">About me</a></li>
            <li class="default" id="schedule"><a href="schedule.php">Schedule</a></li>
			<li class="default" id="blog"><a href="blog.php">Blog</a></li>
			<li class="default" id="partners"><a href="partners.php">Partners</a></li>
			<li class="default" id="register"><a href="register.php">Register</a></li>
			<li class="default" id="contact"><a href="contact.php">Contact ME</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>