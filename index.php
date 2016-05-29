<?php
	
	include("config.php");

	$page = "";
	
	$home_status = 'class="active"';
	$home_icon = 'id="home-icon"';
	
	include("includes/header.php");

?>

<div class="container">

	<div class="jumbotron jumbotron-home jumbotron-mobile">
	
		<!--<img src="<?php echo ABSOLUTE_PATH . 'assets/img/bobby-wilson.png'?>" alt="" class="img-self" class="img-circle img-responsive">
		</br>-->
		
		<h2 class="text-center">About Me</h2></br>
		<p class="body-font">Hello, my name is Bobby Wilson and I am a Web Developer. I am a Object Oriented Programmer (OOP). I primarily build web systems using HTML5, CSS3, JavaScript, PHP, MySQL and Bootstrap. I am skilled at building mobile and responsive layouts. I also have experience with GitHub for version control, backup repository and collaboration.
		</p>
		
		<p class="body-font"> I am currently working as a Microsoft.Net Developer Apprentice at Eleven Fifty Consulting. In this role, I am learning C# and the Microsoft.Net framework in order to support the consulting team.
		</p>
		
		<p class="body-font"> Below is an sample of my work. You can see all of the projects that I have worked on by clicking the 
		<a style="color: #333 !important; text-decoration: underline !important; font-weight: bold;" href="<?php echo ABSOLUTE_PATH . "portfolio/"?>">My Portfolio</a> link.
		</p>
		
		</br></br>
		
		<div class="row">
		
			<div class="col-sm-12 col-md-12 col-lg-12 text-center code-logo code-logo-home">
			
				<div class="row screenshot-box">
					<a class="" href="<?php echo ABSOLUTE_PATH . 'axiom'?>" target="_blank">
						<img src="<?php echo ABSOLUTE_PATH . 'assets/img/axiom-screenshot.jpg'?>" alt="Website Screenshot">
					</a> 
						
				</div>
				
			</div>
		</div>

              </br></br>

              <hr class="hr">

	</div>

</div>




<?php
	
	include("includes/footer.php");

?>