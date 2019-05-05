<?php
			
     if (isset($_POST['submit'])) {	
	 include_once "isccb_connection.php";
		$degree = $_POST['d'];
		$institute = $_POST['i'];
		$passing_year = $_POST['p_y'];
		$result = $_POST['r'];               
		
		
		$club_name= $_POST['c_n'];
		$event_id= $_POST['e_id'];
		$match_id = $_POST['m_id'];
		$oponent_club_name = $_POST['o_c_n'];
		$runs= $_POST['rs'];
		$wickets= $_POST['ws'];
		
		$pr_house_no= $_POST['p_h_n'];
		$pr_location= $_POST['p_l'];
		$pr_street = $_POST['p_s'];
		$pr_thana= $_POST['p_t'];
		$pr_district= $_POST['p_d'];
		$pr_post_code= $_POST['p_p_c'];
		$pe_house_no= $_POST['phn1'];
    	$pe_location= $_POST['pl1'];
		$pe_street = $_POST['ps1'];
		$pe_thana= $_POST['pt1'];
		$pe_district= $_POST['pd1'];
		$pe_post_code= $_POST['ppc1'];
		
		$player_id=   $_POST['pl_id'];
		$first_name = $_POST['fname'];
		$middle_name= $_POST['mdname'];
		$last_name=   $_POST['ltname'];
		$father_name= $_POST['f_name'];
    	$mother_name= $_POST['m_name'];
		$date_of_birth= $_POST['d_o_b'];
		$membership=  $_POST['mshp'];
		$signature=   $_POST['sn'];
		$contract_id= $_POST['ct_id'];      
		
		$joining= $_POST['jng'];
		$resign= $_POST['rsn'];
		$total_runs= $_POST['t_r'];
		$total_wickets=$_POST['t_w'];
		$team_leader= $_POST['t_l'];
	    $club= $_POST['c_name'];            
		
/*		$contract_id= $_POST['cnrt_id'];
		$club_name= $_POST['cl_name'];
		$first_name = $_POST['f_n'];
		$middle_name= $_POST['m_n'];
		$last_name= $_POST['l_n'];
		$ap_name= $_POST['a_n'];
		$designation= $_POST['dsgn'];
		$payment_duedate= $_POST['p_due'];
		$payment_date= $_POST['p_date'];
		$salary_amount= $_POST['s_amt'];
		$witness_1= $_POST['w_1'];
		$witness_2= $_POST['w_2'];
        $start_date= $_POST['s_date'];
		$end_date= $_POST['e_date'];
		$contract_amount= $_POST['c_amt'];  */
		
/*		$club_name= $_POST['clb_nme'];
		$date_of_establishment= $_POST['d_o_e'];
		$city= $_POST['cty'];
		$name_of_president=$_POST['n_o_p'];
	    $phone_number= $_POST['phn_num'];          



    	$event_id= $_POST['env_id'];
		$start_date= $_POST['srt_d'];
		$end_date= $_POST['e_d'];
		$event_name= $_POST['env_name'];

		$match_id= $_POST['mat_id'];
		$match_date= $_POST['mat_date'];
		$club_1=$_POST['cl_1'];
		$club_2= $_POST['cl_2'];
	    $team_bat_first= $_POST['t_b_f'];
		$team_bowl_first= $_POST['t_bl'];
		$venue= $_POST['vnu'];
		$venue_id= $_POST['vnu_id'];
		$man_of_the_match=$_POST['m_m'];
		$man_of_the_match_id= $_POST['mm_id'];
	    $umpires= $_POST['ump'];                              
    	
        
	   
		$team_id= $_POST['tem_id'];
	    $team_name= $_POST['tem_name'];
		$team_leader_id= $_POST['tel_id'];
		$formation_date= $_POST['for_date'];
		$team_leader_name= $_POST['tel_name'];
		$coach_name=$_POST['cc_name'];
		$coach_id= $_POST['cc_id'];         */
		
	
        
	 		

		$query = "INSERT INTO educational_qualification(degree, institute, passing_year, result) 
			VALUES ('".$degree."', '".$institute."', '".$passing_year."', '".$result."')";
			
	if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
     } else {
      echo " Error:";
       }
   

  	
	
		 	$query3 = "INSERT INTO best_performance(club_name, event_id, match_id, oponent_club_name, runs, wickets) 
			VALUES ('".$club_name."', '".$event_id."', '".$match_id."', '".$oponent_club_name."', '".$runs."', '".$wickets."')";
	
		if ($conn->query($query3) === TRUE) {
  echo "New record created successfully";
		} else {
  echo " Error:";
    }
	
		
					$query4 = "INSERT INTO location(pr_house_no, pr_location, pr_street, pr_thana, pr_district, pr_post_code, pe_house_no, pe_location, pe_street, pe_thana, pe_district, pe_post_code) 
		VALUES ('".$pr_house_no."', '".$pr_location."', '".$pr_street."', '".$pr_thana."', '".$pr_district."', '".$pr_post_code."', '".$pe_house_no."', '".$pe_location."', '".$pe_street."', '".$pe_thana."', '".$pe_district."', '".$pe_post_code."')";	
		
		
	  if ($conn->query($query4) === TRUE) {
  echo "New record created successfully";
 } else {
  echo " Error:";
    }                       
		
	
        		$query5 = "INSERT INTO player(player_id, first_name, middle_name, last_name, father_name, mother_name, date_of_birth, membership, signature, contract_id) 
			VALUES ('".$player_id."', '".$first_name."', '".$middle_name."', '".$last_name."', '".$father_name."', '".$mother_name."', '".$date_of_birth."', '".$membership."', '".$signature."', '".$contract_id."')";
 
                     
      if ($conn->query($query5) === TRUE) {
  echo "New record created successfully";
  } else {
  echo " Error:"; 
    }                  
	
	         	$query6 = "INSERT INTO previous_club(joining, resign, total_runs, total_wickets, team_leader, club) 
			VALUES ('".$joining."', '".$resign."', '".$total_runs."', '".$total_wickets."', '".$team_leader."', '".$club."')";
	
	  
	      if ($conn->query($query6) === TRUE) {
  echo "New record created successfully";
  } else {
 echo " Error:";
    }                      
	  
	  
	  	
/*        		$query7 = "INSERT INTO contract(contract_id, club_name, first_name, middle_name, last_name, ap_name, designation, payment_duedate, payment_date, salary_amount, witness_1, witness_2, start_date, end_date, contract_amount) 
			VALUES ('".$contract_id."', '".$club_name."', '".$first_name."', '".$middle_name."', '".$last_name."', '".$ap_name."', '".$designation."', '".$payment_duedate."', '".$payment_date."', '".$salary_amount."', '".$witness_1."', '".$witness_2."', '".$start_date."', '".$end_date."', '".$contract_amount."')";
 
                     
      if ($conn->query($query7) === TRUE) {
  echo "New record created successfully";
  } else {
  echo " Error:";         
    }                      */
	  
	  
	  
/*	       	$query8 = "INSERT INTO club(club_name, date_of_establishment, city, name_of_president, phone_number) 
	VALUES ('".$club_name."', '".$date_of_establishment."', '".$city."', '".$name_of_president."', '".$phone_number."')";
	
	
	      if ($conn->query($query8) === TRUE) {
  echo "New record created successfully";
  } else {
 echo " Error:";                
    }                  */
	  
	  
	  
	  
/*	   		$query9 = "INSERT INTO events(event_id, start_date, end_date, event_name) 
			VALUES('".$event_id."', '".$start_date."', '".$end_date."', '".$event_name."')";
 
	  
	      if ($conn->query($query9) === TRUE) {
  echo "New record created successfully";
  } else {
  echo " Error:";
    }                     
	  
	  
	  
	  
	   		$query10 = "INSERT INTO matches(match_id, match_date, club_1, club_2, team_bat_first, team_bowl_first, venue, venue_id, man_of_the_match, man_of_the_match_id, umpires) 
			VALUES('".$match_id."', '".$match_date."', '".$club_1."', '".$club_2."', '".$team_bat_first."', '".$team_bowl_first."', '".$venue."', '".$venue_id."', '".$man_of_the_match."', '".$man_of_the_match_id."', '".$umpires."')";
 
	  
	      if ($conn->query($query10) === TRUE) {
  echo "New record created successfully";
  } else {
  echo " Error:";
    }                         /*
	  
	  
	  	  
/*	       	$query11 = "INSERT INTO team(team_id, team_name,  team_leader_id, formation_date, team_leader_name, coach_name, coach_id) 
		VALUES ('".$team_id."', '".$team_name."' , '".$team_leader_id."', '".$formation_date."', '".$team_leader_name."', '".$coach_name."', '".$coach_id."')";
	
	  
	      if ($conn->query($query11) === TRUE) {
  echo "New record created successfully";
  } else {
 echo " Error:";
    }                    */

		
		
		
	 }

?>
