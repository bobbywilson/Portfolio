
<?php

	
		echo '<div class="jumbotron" id="main">';

		echo "\t" . '<div class="container-fluid">';

		echo "\t" . "\t" . '<div class="jumbotron" id="nested">';
		
   		echo '<h2>' . $page . '</h2>';
   	
		include("menu_buttons.php");
    
		echo '<p class="text-justify" class="text-muted"> Updated: ' . date('l, F, d, Y') . '</p>';
		
		echo '<p class="text-justify" class="text-muted">The Axiom Property Management property portfolio was successfully updated. The content can now be viewed on the website.</p>';
		
		
	
		echo "\t" . "\t" . '</div>';
		echo "\t" . '</div>';
		echo '</div>';
		
		
?>