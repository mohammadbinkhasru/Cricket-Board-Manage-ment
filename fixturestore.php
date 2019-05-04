<!DOCTYPE html>
<html>
<body>
<head>


<form action="fixturesave.php" method="post">



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




<br><br>
<input type="submit" name="submit">


</form>



</body>
</head>
</html>

