<?php

if (!(isset($_SESSION['views']) && $_SESSION['views'] != "")) {

require_once("../config.php");
require_once("../includes/header.php");
require_once("../includes/login_error_display.php");
require_once("../includes/footer.php");
!include("../includes/registration_form.php");

}

?>

<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested-contact">
		
    		<h2>Axiom Property Management Administration Registration </h2> </br>
    		
    		<p class="text-justify">Please complete the form below.</p>
    		
    		
    					<?php
    		
    						echo '<p class="text-success">' . $_SESSION['views'] . ', you have successfully logged in. </p>';
    		
    					?>
    					
    					<?php include("menu_buttons.php"); ?>
		
						<?php
						
							include("../includes/error_display.php");
						
						?>
						
		<h5 class="text-left">Fields marked with a "<span class="required"> &bull; </span>" are required.</h5>
		
						
		<div class="bg-danger text-justify text-danger" id="client-errors-box"><p class="text-justify text-danger" class="text-muted"></p></div>
		
			</br>

				<div class="row-register">
   				
    				<div class="col-md-12" id="col-md-admin-login">
    				
    				
      
      					<form method="POST" action="" enctype="multipart/form-data" role="form-inline" name="contact_form" id="contact_form" onsubmit="return validateForm()">
      					
      						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="first_name">First Name <span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="i.e. John" value="<?php echo $first_name?>" onblur="return upper()" tabindex="1">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="lastname">Last Name <span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="i.e. Smith" value="<?php echo $last_name?>" onblur="return upper()" tabindex="1">
      							</div>
    						</div>
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="email">Email <span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="email" name="email" placeholder="i.e. john.smith@example.com" value="<?php echo $email?>" onblur="return upper()" tabindex="1">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="username">Username <span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username?>" onblur="return upper()" tabindex="1">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="password">Create Password <span class="required"> &bull;</span></label>
      							
        							<input type="password" class="form-control" id="password1" name="password1" placeholder="Create Password" value="<?php echo $password1 ?>" onblur="return upper()" tabindex="2">
      							</div>
    						</div>
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="password2">Confirm Password <span class="required"> &bull;</span></label>
      							
        							<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" value="<?php echo $password2 ?>" onblur="return upper()" tabindex="2">
      							</div>
    						</div>
    						
    						
    						
							
							
							
							
							<div class="form-group" id="submit-button-box">
    							<div class="col-xs-12" id="col-xs">
  									<label class="sr-only" for="submit">Submit</label>
										<button type="submit" class="btn btn-default btn-lg" id="submit" name="submit" tabindex="17"><span class="glyphicon glyphicon-log-in"></span> Register</button>
								</div>
								
							</div>
							
  						</form>
  						
    			</div>
    			
    				
    			
  			</div>
  			
  	 	</div>
    
  	</div>

</div>		
  			
  			
  			
  			
  			
  			