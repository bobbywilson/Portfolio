<?php
	
	include("../config.php");

	$page = "Skills";
	
	$home_status = 'class="active"';
	$home_icon = 'id="home-icon"';
	
	include("../includes/header.php");

?>




<div class="container home-container">
	<div class="jumbotron jumbotron-home">
	
		<div class="row code-wrapper">
		
			<h2 class="text-center">Front-End Skills</h2> </br></br>
			
			<div class="col-sm-4 col-md-4 col-lg-4 text-center code-logo">
				<div class="row text-left code-logo-heading"><h4>HTML5</h4><i class="fa fa-check-circle circle-icon pull-right"></i></div>
				<div class="row code-logo-icon"><i class="fa fa-html5 fa-5x-html5"></i></div>
					
			</div>
	
			<div class="col-sm-4 col-md-4 col-lg-4 text-center code-logo">
				<div class="row text-left code-logo-heading"><h4>CSS3</h4><i class="fa fa-check-circle circle-icon pull-right"></i></div>
				<div class="row code-logo-icon"><i class="fa fa-css3 fa-5x-css3"></i></div>
				
			</div>
	
			<div class="col-sm-4 col-md-4 col-lg-4 text-center code-logo">
				<div class="row text-left code-logo-heading"><h4>JavaScript</h4><i class="fa fa-check-circle circle-icon pull-right"></i></div>
				<div class="row code-logo-icon"><img src="<?php echo ABSOLUTE_PATH . 'assets/img/js-logo.jpg'?>" alt="" class="fa-5x-js"></div>
				
			</div>
	
		
		</div>
			
	</div>

</div>



<div class="container home-container pull-up">
	<div class="jumbotron jumbotron-home">
	
		<div class="row code-wrapper">
		
			<h2 class="text-center">Back-End Skills</h2> </br></br>
			
			<div class="col-sm-6 col-md-6 col-lg-6 text-center code-logo">
				<div class="row text-left code-logo-heading"><h4>PHP</h4><i class="fa fa-check-circle circle-icon pull-right"></i></div>
				<div class="row code-logo-icon"><img src="<?php echo ABSOLUTE_PATH . 'assets/img/php.jpg'?>" alt="" class="fa-5x-js"></div>
				
			</div>
	
			<div class="col-sm-6 col-md-6 col-lg-6 text-center code-logo">
				<div class="row text-left code-logo-heading"><h4>MySQL</h4><i class="fa fa-check-circle circle-icon pull-right"></i></div>
				<div class="row code-logo-icon"><img src="<?php echo ABSOLUTE_PATH . 'assets/img/mysql.jpg'?>" alt="" class="fa-5x-js"></div>
				
			</div>
	
		</div>

               </br></br>
		
	       <hr class="hr">
			
	</div>

</div>



<?php
	
	include("../includes/footer.php");

?>