<?php
			
     if (isset($_POST['submit'])) {	
	 include_once "isccb_connection.php";


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
    	
        

	 		

	  
	  
	   		$query10 = "INSERT INTO matches(match_id, match_date, club_1, club_2, team_bat_first, team_bowl_first, venue, venue_id, man_of_the_match, man_of_the_match_id, umpires) 
			VALUES('".$match_id."', '".$match_date."', '".$club_1."', '".$club_2."', '".$team_bat_first."', '".$team_bowl_first."', '".$venue."', '".$venue_id."', '".$man_of_the_match."', '".$man_of_the_match_id."', '".$umpires."')";
 
	  
	      if ($conn->query($query10) === TRUE) {
  echo "New record created successfully";
  header("location:admin.html");
  } else {
  echo " Error:";
    }                         
	  
	  $conn->close();

		
		
	 }

?>
