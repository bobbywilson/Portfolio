<?php

	
	define("URL_ROOT", "http://bobbywwilson.com/axiom/", false);
	define("ABSOLUTE_PATH", "http://bobbywwilson.com/axiom/", false);
	define("BUSINESS_NAME", "Axiom Property Management LLC", false);
	define("BUSINESS_ADDRESS", "<span class='glyphicon glyphicon-map-marker'></span> 2453 N Delaware, Indianapolis, IN 46205", false);
	define("BUSINESS_HOURS", "<span class='glyphicon glyphicon-time'></span> Monday through Friday, 9:00 AM to 5:00 PM", false);
	define("BUSINESS_PHONE", "<span class='glyphicon glyphicon-phone'></span> (317) 259-0200", false);
	define("BUSINESS_FAX", "<span class='glyphicon glyphicon-print'></span> (317) 259-4578", false);
	define("BUSINESS_EMAIL", "<span class='glyphicon glyphicon-envelope'></span><a href='mailto:info@axiommgt.com?Subject=Axiom%20Property%20Management'> info@axiommgt.com</a>", false);
	define("CUR_YEAR", date('Y'), false);
	define("COPYRIGHT", "<span class='glyphicon glyphicon-copyright-mark'></span> Copyright Axiom Property Management LLC", false);
	define("EHO_WHITE", '<img src="http://www.bobbywwilson.com/axiom/assets/images/eho_footer.jpg">', false);
	define("EHO_BLACK", '<span id="sub">EHO</span> <img src="http://www.bobbywwilson.com/axiom/assets/images/eho_black.jpg">', false);
	
	define("CEO_NAME", "Rob Attinger, CAM", false);
	define("CEO_TITLE", "President & CEO", false);
	define("CEO_EMAIL", "<span class='glyphicon glyphicon-envelope'></span><a href='mailto:rob@axiommgt.com?Subject=Axiom%20Property%20Management'> rob@axiommgt.com</a>", false);
	define("CEO_PHONE", "<span class='glyphicon glyphicon-phone'></span> (317) 259-0200 x 203", false);
	
	define("VICE_NAME", "Pat Hachtel", false);
	define("VICE_TITLE", "Vice-President of Operations", false);
	define("VICE_EMAIL", "<span class='glyphicon glyphicon-envelope'></span> <a href='mailto:pat@axiommgt.com?Subject=Axiom%20Property%20Management'>pat@axiommgt.com</a>", false);
	define("VICE_PHONE", "<span class='glyphicon glyphicon-phone'></span> (317) 259-0200 x 202", false);
	
	define("BUSINESS_MAINTENANCE", "<span class='glyphicon glyphicon-wrench'></span> Maintenance", false);
	define("BUSINESS_MAINTENANCE_EMAIL", "<span class='glyphicon glyphicon-envelope'></span> <a href='mailto:maintenance@axiommngt.com?Subject=Axiom%20Maintenance%20Emergency'>maintenance@axiommngt.com</a>", false);
	define("BUSINESS_MAINTENANCE_EMERGENCY", "<span class='glyphicon glyphicon-phone'></span> (317) 259-0200 x 15", false);
	define("BUSINESS_MAINTENANCE_AFTER_HOURS", "<span class='glyphicon glyphicon-phone'></span> (317) 259-0200 x 7", false);
	
	function hours() {
	
	
	$hours_of_operation = array();

	$hours_of_operation["Monday"] = "11:45AM to 10:00PM";
	$hours_of_operation["Tuesday"] = "11:45AM to 10:00PM";
	$hours_of_operation["Wednesday"] = "11:45AM to 10:00PM";
	$hours_of_operation["Thursday"] = "11:45AM to 10:00PM";
	$hours_of_operation["Friday"] = "11:45AM to 11:00PM";
	$hours_of_operation["Saturday"] = "11:45AM to 11:00PM";;
	$hours_of_operation["Sunday"] = "Closed";
	
	
		foreach($hours_of_operation as $key => $value) {
		
			echo '<tr> <td id="day">' . $key . '</td>' . '<td id="hours">' . $value . '</td> </tr>' . "\n";
	
	
		
	}



}

?>