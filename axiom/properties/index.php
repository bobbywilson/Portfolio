<?php
	
	include("../config.php");
	
	$page = "Available Properties";

	$properties_status = 'class="active"';

	include("../includes/header.php");
	

   				
   	include("../classes/property.class.php");
			
	$property = new Property();
			
	$property_list = $property->property_list();
	$count = $property_list->rowCount();
					
	$output_property = "";		
			
	if($count > 0) {
				
		
		while($item = $property_list->fetch(PDO::FETCH_OBJ)) {
			
		$output_property .= '<div class="row" id="property-box">' . "</br>" . '<div class="col-md-6" id="property-image">' . "</br>" . "\n" .
			
			
			
			'<div id="property-carousel-' . $item->property_id . '" class="carousel slide" data-ride="carousel" data-interval="7000">
				<!-- Indicators -->
  				<ol class="carousel-indicators" id="bullet-indicators">
    				<li data-target="#carousel" data-slide-to="0" class="active"></li>
    				<li data-target="#carousel" data-slide-to="' . $item->property_id . '"></li>
   					<li data-target="#carousel" data-slide-to="' . $item->property_id . '"></li>
    				<li data-target="#carousel" data-slide-to="' . $item->property_id . '"></li>
    				<li data-target="#carousel" data-slide-to="' . $item->property_id . '"></li>
   					<li data-target="#carousel" data-slide-to="' . $item->property_id . '"></li>
    				<li data-target="#carousel" data-slide-to="' . $item->property_id . '"></li>
    				<li data-target="#carousel" data-slide-to="' . $item->property_id . '"></li>
  				</ol>
    			

    			<!-- Wrapper for slides -->
   				<div class="carousel-inner" role="listbox">

      				<div class="item active">
        				<img src="../' . $item->image_1 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
          						
        					</div>
      				</div>

      				<div class="item">
        				<img src="../' . $item->image_2 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>
    
      				<div class="item">
        				<img src="../' . $item->image_3 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>

      				<div class="item">
        				<img src="../' . $item->image_4 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>
      				
      				<div class="item">
        				<img src="../' . $item->image_5 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>
      				
      				<div class="item">
        				<img src="../' . $item->image_6 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>
      				
      				<div class="item">
        				<img src="../' . $item->image_7 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>
      				
      				<div class="item">
        				<img src="../' . $item->image_8 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>
      				
      				 <!--<div class="item">
        				<img src="../' . $item->image_9 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div>
      				
      				<div class="item">
        				<img src="../' . $item->image_10 . '" class="center-image">' .
        					'<div class="carousel-caption" id="bullet-indicators">
          						<h4>' . $item->availability . '</h4>
        					</div>
      				</div> -->
      				
  
    		</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#property-carousel-' . $item->property_id . '" role="button" data-slide="prev" id="left">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#property-carousel-' . $item->property_id . '" role="button" data-slide="next" id="right">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>' .
			
				
				
				
				
				 "</br>" .
				 
				 '<p class="text-justify" id="tour-button"><span class="glyphicon glyphicon-calendar"></span><a href="http://www.bobbywwilson.com/axiom/properties/tour.php"> Schedule a Property Tour</a></p>' .
			
				 
			
			"</div>" . "</br>" . "\n" .
    										
    										
    		'<div class="col-md-6" id="property-address">' . "</br>" . 
    		
    			'<div class="panel panel-default" id="property-table">

					<div class="panel-heading"><span class="text-justify text-info" class="text-muted">' . ucwords( strtolower($item->property_name)) . '</span></div>
			
					<div class="panel-body" id="table-panel">
					
					<div class="col-md-8" id="property-address">
					<p class="text-justify" class="text-muted"><small>' . ucwords( strtolower($item->street)) . ", <br /> " . ucwords( strtolower($item->city)) . ", " . ucwords($item->state) . ", " . ucwords( strtolower($item->zip_code)) . 
					
					'</div> 
					<div class="col-md-4" id="property-address">
					<a href="' . $item->apply . '" target="_blank" type="button" class="btn btn-default btn-lg" id="button-group-property" name="submit">Apply</a></a></small></p>
					</div>
					</div>
			

			<table class="table" >
    
				<tbody>
				
					<tr>
        
						<td id="indent" class="text-info text-uppercase small">beds/baths</b></td>
        
						<td></td>

						<td class="text-right">' . $item->beds . " bd / " . $item->baths . " ba" . '</td>
      
					</tr>
      
					<tr>
        
						<td id="indent" class="text-info text-uppercase small">square feet</b></td>
        
						<td></td>

						<td class="text-right">' . number_format($item->square_feet,0) . '</td>
      
					</tr>

					<tr>
        
						<td id="indent" class="text-info text-uppercase small">rent</b></td>
        
        				<td></td>
        		
						<td class="text-right">$' . number_format($item->rent,0) . " / month" . '</td>
      
					</tr>

					<tr>
        
					<td id="indent" class="text-info text-uppercase small">security deposit</b></td>
        
						<td></td>
      						
      					<td class="text-right">$' . number_format($item->deposit,0) . '</td>
      						
					</tr>

					<tr>
        
      					<td id="indent" class="text-info text-uppercase small">application fee</td>
        
						<td></td>
      						
      					<td class="text-right">$' . number_format($item->fee,0) .  '</td>
      						
					</tr>
      					
      					
					</tr>

					</tbody>
				

			   
  				</table>

			</div>
			
			<div class="panel-group" id="accordion' . $item->property_id . + 1 . '">
        		<div class="panel panel-default">
          			<div class="panel-heading">
            			<h4 class="panel-title">
              				<a data-toggle="collapse" data-parent="#accordion' . $item->property_id . + 1 . '" href="#collapse' . $item->property_id . + 1 . '"><b class="text-info text-uppercase small">description</b></a>
            			</h4>
          			</div>
          			<div id="collapse' . $item->property_id . + 1 . '" class="panel-collapse collapse">
            			<div class="panel-body" id="panel-body">' 
            			
            				. '<p class="text-justify text-uppercase"><small>' . ucwords($item->property_description) . "</br>" . constant("EHO_BLACK") . '</small></p>' .
            			
            			'</div>
          			</div>
        		</div>
        	<div class="panel-group" id="accordion' . $item->property_id . '">
        		<div class="panel panel-default">
         			<div class="panel-heading">
            			<h4 class="panel-title">
              				<a data-toggle="collapse" data-parent="#accordion' . $item->property_id . '" href="#collapse' . $item->property_id . '"><b class="text-info text-uppercase small">amenities</b></a>
            			</h4>
          			</div>
          			
          			<div id="collapse' . $item->property_id . '" class="panel-collapse collapse">
            			<div class="panel-body" id="panel-body">'
            		
            				. '<p class="text-justify text-uppercase"><small>' . ucwords($item->amenities) . '</small></p>' .
            		
            			'</div>
          			</div>
        			</div>
        
      			</div>
	
			</div>'		.	
					
      	'</div>' .							
      									
	
    			'</div>' . "</br>" . "\n" ;
			
		}	
					
				
	} else {
					
	$output_property = '<p class="text-justify" class="text-muted"> No properties to display </p>';		
					
}
					
?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Available Properties</h2> </br></br> 
  
			<? echo $output_property; ?>	
	
    	</div>
    
 	 </div>

</div>



<?php

	include("../includes/footer.php");

?>