<?php
			
     if (isset($_POST['submit'])) {	
	 include_once "isccb_connection.php";

		
		$club_name= $_POST['clb_nme'];
		$date_of_establishment= $_POST['d_o_e'];
		$city= $_POST['cty'];
		$name_of_president=$_POST['n_o_p'];
	    $phone_number= $_POST['phn_num'];          


	  
	       	$query8 = "INSERT INTO club(club_name, date_of_establishment, city, name_of_president, phone_number) 
	VALUES ('".$club_name."', '".$date_of_establishment."', '".$city."', '".$name_of_president."', '".$phone_number."')";
	
	
	      if ($conn->query($query8) === TRUE) {
  echo "New record created successfully";
  header("location:admin.html");
  } else {
 echo " Error:";                
    }                  
	  
	  $conn->close();
	  

		
		
		
	 }

?>
