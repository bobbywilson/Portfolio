<?php

	session_start();

if (!(isset($_SESSION['views']) && $_SESSION['views'] == "loggedout" || $_SESSION['views'] == "")) {
	
	header('Location: ../includes/login_error_display.php');
	
}

?>

<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Axiom Property Management Administration Menu</h2> </br>
    		
    		<?php
    		
	
				echo '<p class="text-success">' . $_SESSION['views'] . ', you have successfully logged in. </p>';
    		
    		?>
  
    				<?php include("menu_buttons.php"); ?>
  					
  					<div class="jumbotron" id="resources">
  					
  					
  					<p class="text-justify" class="text-muted">Please choose one of the content management options above.</p></br>
   
  					</div>
  					
    
    	</div>
    
  </div>

</div>








