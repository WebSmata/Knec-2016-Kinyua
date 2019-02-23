<?php
	// POSTING FUNCTIONS
	// Begin Posting Functions 
	
	function js_slug_this($content) {
		return preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($content)));
	}
	
	function js_slug_is(){
		if(empty($_POST['slug'])) {
		    $js_slug = trim($_POST['slug']);
		} else $js_slug = js_slug_this($_POST['title']);
		
	}
		
	function js_add_admin($admin_username) {		
		$database = new Js_Dbconn();	
		$Update_Admin_Details = array(
			'employee_group' => trim($_POST['admin_role']),
		);
		$where_clause = array('employee_name' => $admin_username);
		$updated = $database->js_update( 'js_employee', $Update_Admin_Details, $where_clause, 1 );
		if( $updated )	{	}
	
	}
 		
	function js_add_new_vehicle(){		
		$database = new Js_Dbconn();			
		$New_Bus_Details = array(	
			'vehicle_vehicleno' => trim($_POST['vehicleno']),
			'vehicle_regno' => trim($_POST['regno']),
			'vehicle_seats' => trim($_POST['seats']),
			'vehicle_driver' => trim($_POST['driver']),
			'vehicle_posted' => date('Y-m-d H:i:s'),
			'vehicle_postedby' => "1",
		);
			
		$add_query = $database->js_insert( 'js_vehicle', $New_Bus_Details ); 
	}
	
		
	function js_add_new_town(){		
		$database = new Js_Dbconn();			
		$New_Town_Details = array(	
			'town_title' => trim($_POST['title']),
			'town_created' => date('Y-m-d H:i:s'),
			'town_createdby' => "1",
		);
			
		$add_query = $database->js_insert( 'js_town', $New_Town_Details ); 
	}
	//type, vehicle, pagefrom, pageto, depature, pass, seat, customer, mobile, amount,  payment
	
	function js_add_new_ticket(){
		$database = new Js_Dbconn();			
		$New_Item_Details = array(
			'ticket_type' => trim($_POST['ticket']),
			'ticket_date' => trim($_POST['datetravel']),
			'ticket_vehicle' => trim($_POST['vehicle']),
			'ticket_pagefrom' => trim($_POST['pagefrom']),
			'ticket_pageto' => trim($_POST['pageto']),
			'ticket_depature' => trim($_POST['depature']),
			'ticket_pass' => trim($_POST['pass']),
			'ticket_seat' => trim($_POST['seat']),
			'ticket_customer' => trim($_POST['customer']),
			'ticket_mobile' => trim($_POST['mobile']),
			'ticket_amount' => trim($_POST['amount']),
			'ticket_payment' => trim($_POST['payment']),
		    'ticket_posted' => date('Y-m-d H:i:s'),
		    'ticket_postedby' => "1",
		);
			
		$add_query = $database->js_insert( 'js_ticket', $New_Item_Details ); 
	}
		
	
?>