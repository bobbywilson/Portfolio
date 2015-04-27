
<?php
	
	include("../config.php");
	
	$page = "Resident FAQ";

	$residents_status = 'class="active"';

	include("../includes/header.php");

?>



<div class="jumbotron" id="main">

	<div class="container-fluid">

		<div class="jumbotron" id="nested">
		
    		<h2>Resident FAQ</h2></br>
    		    
    		<p class="text-justify" class="text-muted">To find more detailed resident information, please see our <a href="<?php echo URL_ROOT . 'residents/resident_handbook.php'?>" id="utilities">Resident Handbook</a> page.</p>
    		    
   			<h3>How do I Report Maintenance Issues?</h3>
			
			<p class="text-justify" class="text-muted">For normal non-urgent maintenance items you can mail, fax <?php echo constant("BUSINESS_FAX") ?> or email <span><?php echo constant("BUSINESS_MAINTENANCE_EMAIL") ?> your written request. Be sure to provide us with the best possible time to reach you. If the item is urgent and it is during regular business hours, <?php echo constant("BUSINESS_HOURS") ?>, you may call our office at <?php echo constant("BUSINESS_PHONE") ?> to report the problem, or print and fax our form. To report emergency maintenance needs be sure the receptionist is informed that you have a maintenance emergency. If it is after business hours, call Emergency Maintenance Line at <?php echo constant("BUSINESS_MAINTENANCE_EMERGENCY") ?>. For police or fire emergencies, dial 911 before calling us.</p>
			
			<h3>What is considered an emergency?</h3>
			
			<p class="text-justify" class="text-muted">The following are examples of maintenance emergencies. The main sewer line is backed up.  A pipe broke and water is leaking into the home.  There was a break-in and you have an unsecured entrance to the home, no heat your interior temperature is below 55 degrees or no air conditioning (if you have central air) if the interior temperature is above 86 degrees.  After hours, contact our Emergency Maintenance Line at <?php echo constant("BUSINESS_MAINTENANCE_EMERGENCY") ?>.  If it is after 5:00 p.m. and before 9:00 a.m., and the call is not an emergency, you could be charged for the call.</p>
			
			<h3>Can I be charged for maintenance at the property?</h3>
			
			<p class="text-justify" class="text-muted">Yes, if resident damage or neglect causes the maintenance, you will be charged for it.  Also, you can be billed for a service call if you miss an appointment with one of our maintenance technicians or contractors.</br></br>
			
			To find circumstances where you will be billed for maintenance at the property, please see our <a href="<?php echo URL_ROOT . 'residents/resident_handbook.php'?>" id="utilities">Resident Handbook</a> page.</p>
			
			<h3>Can I install cable or satellite TV at the property?</h3>
			
			<p class="text-justify" class="text-muted">Generally, yes.  However, you must first obtain written permission from Axiom Property Management.  At some units you may be prohibited from installing a satellite dish in any location where the dish is visible from the ground or from any other unit in the area. Any cost of installation is an expense of the resident.</p>

			<h3>Can I install extra telephone lines?</h3>

			<p class="text-justify" class="text-muted">Generally, yes. However, you must also obtain written permission from Axiom Property Management to do this.  All costs of installing extra phone lines are the responsibility of the resident.</p>

			<h3>What are my rights to privacy if the landlord wants to enter the property?</h3>
			
			<p class="text-justify" class="text-muted">We will call you and also give you a written notice if we need to enter the home. All maintenance appointments are scheduled with you in advance.</p>

			<h3>What are my responsibilities if my company transfers me before the end of the lease?</h3>

			<p class="text-justify" class="text-muted">Most leases are for a set period of time.  If you are transferred, ask your company what assistance they will provide if you need to “break a lease”.  Let your property manager know what is happening as soon as possible so we can begin marketing the property for a replacement resident. Please refer to our policy on early termination of Residential agreement, which you signed at lease signing for more details.</p>

			<h3>Can I sub-lease the property?</h3>

			<p class="text-justify" class="text-muted">No. The lease agreement clearly states that the resident shall not sublet any portion of the property or assign the agreement without written consent from us.</p>

			<h3>Can I rent a steam cleaner and clean the carpets myself when I move out?</h3>
			
			<p class="text-justify" class="text-muted">No. Your rental agreement provides that all carpets must be professionally cleaned using a steam process, with a copy of the invoice submitted to your property manager at check out.</p>

			<h3>Can I get a pet after move-in?</h3>
			
			<p class="text-justify" class="text-muted">Yes. You must contact our office and complete the necessary paperwork as well as pay the necessary fees. Once this has been completed you are able to bring home your new pet.</p>

			<h3>When and how should I give my notice to vacate?</h3>

			<p class="text-justify" class="text-muted">It is important to refer to your lease for the specific terms in your own residential agreement. Notice to vacate must be received in our office in writing on or before the 1st of the month.  Your lease requires a minimum 30-day notice and run for a full monthly period.</p>
			
			<h3>What happens if my roommate moves out before the end of the lease?</h3>

			<p class="text-justify" class="text-muted">If your roommate moves out, a written notice needs to be submitted to us.  Remember that tenants are jointly and singularly liable to ensure that the rent is paid.  You must have written permission from us to substitute a roommate.  (It is not our responsibility to arbitrate or mediate problems with multiple tenant situations).</p>
			
			<h3>What happens to the disposition of a roommate’s security deposit after move-out?</h3>
	
			<p class="text-justify" class="text-muted">Security deposits are collected as “security” for the property. Reimbursements to departing roommates are handled by the remaining tenants.  No portion of the security deposit will be refunded individually.</p>

			<h3>I have always paid my rent on time. Why did I receive a 3-day notice when the rent was only 6 days late?</h3>
		
			<p class="text-justify" class="text-muted">The rent is due on the first of the month.  If the rent is not posted in our office by the fifth we serve a 3-day notice.</p>
			
			<h3>I am an excellent resident and take good care of the home.  Can you waive my late charges?</h3>
			
			<p class="text-justify" class="text-muted">No. We do not waive late charges.  Fair Housing laws require that we treat all our residents equally.  We cannot decide if one resident is more deserving than another of paying late charges, therefore we enforce late charges across the board.</p>
    
    	</div>
    
  </div>

</div>



<?php

	include("../includes/footer.php");

?>