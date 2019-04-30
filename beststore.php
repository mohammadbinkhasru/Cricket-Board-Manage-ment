<!DOCTYPE html>
<html>
<body>
<head>

<form action="bestsave.php" method="post">



 <!-- Here is the table for Previous Performance-->
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<br><h3>Best Performance</h3><br>
<table style="width:70%">

  <tr>
    <th>Club Name</th> 
    <th>Oponent Club Name</th>
    <th>Event Id</th>
	<th>Match Id</th>
    <th>Runs</th>
    <th>Wickets</th>
	<th>OP</th>
    <th>Player Id</th>
	<th>Venu Id</th>
   </tr>
   
         <tr>

     <td width="50%"> <input type="text" name="c_n"></td> 
     <td width="50%"> <input type="text" name="o_c_n"></td>
	 <td width="50%"> <input type="number" name="e_id"></td>
     <td width="50%"> <input type="number" name="m_id"></td>
	 <td width="50%"> <input type="number" name="rs"></td>
     <td width="50%"> <input type="number" name="ws"></td> 
	 <td width="50%"> <input type="text" name="o_p"></td> 
	 <td width="50%"> <input type="number" name="pry_id"></td>
     <td width="50%"> <input type="number" name="v_id"></td>
	
	 <tr/>
	 
<table/>


<br><br>
<input type="submit" name="submit">


</form>



</body>
</head>
</html>

