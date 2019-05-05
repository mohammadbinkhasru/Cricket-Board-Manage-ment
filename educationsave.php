<?php
			
     if (isset($_POST['submit'])) {	
	 include_once "isccb_connection.php";
		$player_id = $_POST['pyrl_id'];
		$degree = $_POST['d'];
		$institute = $_POST['i'];
		$passing_year = $_POST['p_y'];
		$result = $_POST['r'];      
		
		
		
		$query = "INSERT INTO educational_qualification(player_id, degree, institute, passing_year, result) 
			VALUES ('".$player_id."','".$degree."', '".$institute."', '".$passing_year."', '".$result."')";
			
	if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
	header("location:beststore.php");
     } else {
      echo " Error:";
       }                 
   $conn->close();
   
   		
	 }

?>
