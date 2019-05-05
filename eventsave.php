<?php
			
     if (isset($_POST['submit'])) {	
	 include_once "isccb_connection.php";

		
		$event_id= $_POST['env_id'];
		$start_date= $_POST['srt_d'];
		$end_date= $_POST['e_d'];
		$event_name= $_POST['env_name'];


	   		$query9 = "INSERT INTO events(event_id, start_date, end_date, event_name) 
			VALUES('".$event_id."', '".$start_date."', '".$end_date."', '".$event_name."')";
 
	  
	      if ($conn->query($query9) === TRUE) {
  echo "New record created successfully";
  header("location:admin.html");
  } else {
  echo " Error:";
    }                     
	  
	   $conn->close();

		
	 }

?>
