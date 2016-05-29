<?php

session_start();


?>

<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested-contact">
		
    		<h2>Axiom Property Management Administration Login</h2> </br>
    		
    		<p class="text-justify">Please enter your username and password.</p>
		
						<?php
						
							include("../includes/error_display.php");
						
						?>
			
						
		<h5 class="text-left">Fields marked with a "<span class="required"> &bull; </span>" are required.</h5>
		
						
		<div class="bg-danger text-justify text-danger" id="client-errors-box"><p class="text-justify text-danger" class="text-muted"></p></div>
		
			</br>

				<div class="row-login">
   				
    				<div class="col-md-12" id="col-md-admin-login">
    				
    				
      
      					<form method="POST" action="" enctype="multipart/form-data" role="form-inline" name="contact_form" id="contact_form" onsubmit="return validateForm()">
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="username">Username <span class="required"> &bull;</span></label>
      							
        							<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username;?>" onblur="return upper()" tabindex="1">
      							</div>
    						</div>
    						
    						
    						<div class="form-group">
    							<div class="col-xs-12" id="col-xs">
      								<label class="control-label" for="password">Password <span class="required"> &bull;</span></label>
      							
        							<input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>" onblur="return upper()" tabindex="2">
      							</div>
    						</div>
    				
							<div class="form-group" id="submit-button-box">
    							<div class="col-xs-12" id="col-xs">
  									<label class="sr-only" for="submit">Submit</label>
										<button type="submit" action="../classes/validation.class.php" class="btn btn-default btn-lg" id="submit" name="submit" tabindex="17"><span class="glyphicon glyphicon-log-in"></span> Login</button>
								</div>
								
							</div>
							
  						</form>
  						
    			</div>
    			
    				
    			
  			</div>
  			
  	 	</div>
    
  	</div>

</div>		
  			
  			
  			
  			
  			
  			