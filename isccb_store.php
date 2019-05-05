<!DOCTYPE html>
<html>
<body>
<head>
<h1 align="center">Player Resgistration Form</h1>

<form action="isccb_saves.php" method="post">

First  name: <input type="text" name="fname">
Middle name: <input type="text" name="mdname">
Last   name: <input type="text" name="ltname"><br><br>
Father name: <input type="text" name="f_name">
Motrher name: <input type="text" name="m_name"><br><br>
Date Of Birth: <input type="date" name="d_o_b">
Player Id: <input type="number" name="pl_id">
Contract Id: <input type="number" name="ct_id"><br><br>



<h3 align="left">Present Address</h3><br>
House No : <input type="text" name="p_h_n">
Location : <input type="text" name="p_l">
Village/Street: <input type="text" name="p_s"><br>
<br>Thana : <input type="text" name="p_t">
District: <input type="text" name="p_d">
Post code: <input type="number" name="p_p_c"><br><br>

<h3 align="left">Permanent Address</h3><br>
House No : <input type="text" name="phn1">
Location : <input type="text" name="pl1">
Village/Street: <input type="text" name="ps1"><br>
<br>Thana : <input type="text" name="pt1">
District: <input type="text" name="pd1">
Post code: <input type="number" name="ppc1"><br><br>

<!-- Here is the Table for Previous History -->


<br><h3>Previous Club</h3><br>
<table style="width:70%">
  <tr>
    <th>Club</th>
    <th>Joining</th>
    <th>Resign</th>
	<th>Total Runs</th>
    <th>Total Wickets</th>
    <th>Team Leader</th>
   </tr>
     <tr>
     <td width="50%"> <input type="text" name="c_name"></td>
     <td width="50%"> <input type="date" name="jng"></td>
	 <td width="50%"> <input type="date" name="rsn"></td>
     <td width="50%"> <input type="number"name="t_r"></td>
	 <td width="50%"> <input type="number" name="t_w"></td>
     <td width="50%"> <input type="text" name="t_l"></td>
   
   
  </tr>

<table/>

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
   </tr>
   
         <tr>

     <td width="50%"> <input type="text" name="c_n"></td> 
     <td width="50%"> <input type="text" name="o_c_n"></td>
	 <td width="50%"> <input type="number" name="e_id"></td>
     <td width="50%"> <input type="number" name="m_id"></td>
	 <td width="50%"> <input type="number" name="rs"></td>
     <td width="50%"> <input type="number" name="ws"></td> 
	
	 <tr/>
	 
<table/>

<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<br><h3>educational_qualification</h3><br>
<table style="width:50%">
 <tr>
 
    <th>Degree</th>
    <th>Institute</th>
	<th>Passing Year</th>
    <th>Result</th>


   </tr>
   	 <tr>
	
     <td width="30%"> <input type="text" name="d"></td>
     <td width="30%"> <input type="text" name="i"></td>
	  <td width="30%"> <input type="number" name="p_y"></td>	 
	 <td width="30%"> <input type="number" name="r"></td>
    
	 <tr/>

<table/>
<h3>Membership</h3><br>

Membership: <input type="text" name="mshp"><br><br>

 <br>Signature: <input type="text" name="sn">
 <br><br>
 
 

<h2 style="color:green;" align="center" >Contract Information</h2>

<br>
Contract Id: <input type="number" name="cnrt_id"> 
Club Name: <input type="text" name="cl_name">

<h3 align="left">player Name & Authorized Person Information</h3><br>

First  name: <input type="text" name="f_n">
Middle name: <input type="text" name="m_n">
Last name: <input type="text" name="l_n"><br><br>
Authorized person: <input type="text" name="a_n">
Designation: <input type="text" name="dsgn"> <br>

<h3 align="left">Contract Period</h3><br>

Start Date: <input type="date" name="s_date">
End Date: <input type="date" name="e_date"><br><br>
Contract Amount: <input type="text" name="c_amt">

<h3 align="left">Payment</h3><br>

Due Date: <input type="date" name="p_due">
Payment Date: <input type="date" name="p_date"><br><br>
Salary Amount: <input type="text" name="s_amt">

<h3 align="left">Witneses</h3><br>

Witness 1: <input type="text" name="w_1"><br><br>
Witness 2: <input type="text" name="w_2">


<h2 style="color:green;" align="center" >Club Information</h2>

Club Name : <input type="text" name="clb_nme"><br><br>
Date Of Establishment: <input type="date" name="d_o_e">

<h3 align="left">Club Address</h3><br>

City : <input type="text" name="cty"> <br><br>
Phone Number: <input type="number" name="phn_num">

<h3 align="left">president</h3><br>

Name Of President : <input type="text" name="n_o_p"><br><br>


<h2 style="color:green;" align="center" >Event & Match Information</h2>

Event ID: <input type="number" name="env_id"> 
Event Name: <input type="text" name="env_name"><br><br>
Start Date: <input type="date" name="srt_d">
End Date: <input type="date" name="e_d">

<h3 align="left">Match Information</h3><br>

Match ID: <input type="number" name="mat_id"> 
<br><br>
Match Date: <input type="date" name="mat_date"><br><br>


<h3 align="left">Venue information</h3><br>

Venue: <input type="text" name="vnu"><br><br>
Venue ID: <input type="number" name="vnu_id">

<h3 align="left">Playing Teams</h3><br>

Club 1: <input type="text" name="cl_1"> 
Club 2: <input type="text" name="cl_2">

<br><br>
Team Bat First:  <input type="text" name="t_b_f"> <br><br>
Team Bowl First: <input type="text" name="t_bl">

<h3 align="left">Match Moderator</h3>
Umpire: <input type="text" name="ump">

<h3 align="left">Star Of the Match</h3>

Man Of The Match: <input type="text" name="m_m">
Man Of The Match ID: <input type="number" name="mm_id">

<h2 style="color:green;" align="center" >Team Information</h2>

Team ID: <input type="number" name="tem_id">
Team Name: <input type="text" name="tem_name"><br><br>


<h3 align="left">Captain Information</h3>

Team Leader Name: <input type="text" name="tel_name">
Team Leader ID: <input type="number" name="tel_id"><br><br>
Formation Date: <input type="date" name="for_date">

<h3 align="left">Coach Information</h3>

Coach Name: <input type="text" name="cc_name"><br><br>
Coach ID: <input type="number" name="cc_id">


<br><br>
<input type="submit" name="submit">


</form>



</body>
</head>
</html>

