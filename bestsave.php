<?php
			
     if (isset($_POST['submit'])) {	
	 include_once "isccb_connection.php";

		$club_name= $_POST['c_n'];
		$event_id= $_POST['e_id'];
		$match_id = $_POST['m_id'];
		$oponent_club_name = $_POST['o_c_n'];
		$runs= $_POST['rs'];
		$wickets= $_POST['ws'];
		$o_p= $_POST['o_p'];
		$player_id= $_POST['pry_id'];
		$venue_id= $_POST['v_id'];
		

  	
	
		 	$query3 = "INSERT INTO best_performance(club_name, event_id, match_id, oponent_club_name, runs, wickets, o_p, player_id, venue_id) 
			VALUES ('".$club_name."', '".$event_id."', '".$match_id."', '".$oponent_club_name."', '".$runs."', '".$wickets."', '".$o_p."', '".$player_id."', '".$venue_id."')";
	
		if ($conn->query($query3) === TRUE) {
  echo "New record created successfully";
  header("location:admin.html");
		} else {
  echo " Error:";
    }
	$conn->close();
		

	 }

?>
