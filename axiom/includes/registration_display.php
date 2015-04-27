<?php

		echo '<div class="jumbotron" id="main">';

		echo "\t" . '<div class="container-fluid">';

		echo "\t" . "\t" . '<div class="jumbotron" id="nested">';
		
   		echo '<h2>' . $page . '</h2>';
   		
   		echo "<h3>Registration Complete</h3> \n <p class='text-justify'>$first_name $last_name \n </br> <a href=\"mailto:$email\" title = \"Email Address $first_name $last_name\">$email</a></p></h4>";
   		
		echo '<p class="text-justify" class="text-muted">' . htmlspecialchars($comment, ENT_QUOTES, 'utf-8') . '</p>';
		
		
		echo '<p class="text-justify" class="text-muted"> Updated: ' . date('l, F, d, Y') . '</p>';
		
		echo '<p class="text-justify" class="text-muted">You have successfully register as an administrator for the Axiom Property Management website. </p>';
		
		
	
		echo "\t" . "\t" . '</div>';
		echo "\t" . '</div>';
		echo '</div>';
	
?>