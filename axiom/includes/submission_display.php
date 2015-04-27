
<?php

	
		echo '<div class="jumbotron" id="main">';

		echo "\t" . '<div class="container-fluid">';

		echo "\t" . "\t" . '<div class="jumbotron" id="nested">';
		
   		echo '<h2>' . $page . '</h2>';
   		
   		echo "<h4> Thank you for your comment!</h3> \n <p class='text-justify'>$first_name $last_name \n </br> <a href=\"mailto:$email\" title = \"Email Address $first_name $last_name\">$email</a> \n </br> ($area_code) $phone_prefix-$phone_suffix</p></h4>";
   		
		echo '<p class="text-justify" class="text-muted">' . htmlspecialchars($comment, ENT_QUOTES, 'utf-8') . '</p>';
		
		echo '<p class="text-justify" class="text-muted"> Updated: ' . date('l, F, d, Y') . '</p>';
		
		echo '<p class="text-justify" class="text-muted">The Axiom Property Management property portfolio was successfully updated. The content now can be viewed on the website.</p>';
		
		echo "is" . $checked;
	
		echo "\t" . "\t" . '</div>';
		echo "\t" . '</div>';
		echo '</div>';
		
		
?>