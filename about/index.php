<?php
	
	include("../config.php");

	$page = "About";
	
	$home_status = 'class="active"';
	$home_icon = 'id="home-icon"';
	
	include("../includes/header.php");

?>



<div class="container">
	<div class="jumbotron jumbotron-home">
	
		<!--<img src="<?php echo ABSOLUTE_PATH . 'assets/img/bobby-wilson.png'?>" alt="" class="img-self" class="img-circle img-responsive">
		</br>-->
		<h2 class="text-center">About Me</h2></br>
		<p class="body-font">Hello, my name is Bobby Wilson and I am a web developer. I am a Object Oriented Programmer (OOP). I primarily build web systems using HTML5, CSS3, JavaScript, PHP, MySQL and Bootstrap. I am skilled at building mobile and responsive layouts. I also have experience with GitHub for version control, backup repository and collaboration.
		</p>
		
		<p class="body-font"> I am currently working as a Microsoft.Net Developer Apprentice at Eleven Fifty Consulting. In this role I am learning C# and the Microsoft.Net framework in order to support the consulting team.
		</p>
		
	</div>

</div>





<?php
	
	include("../includes/footer.php");

?>