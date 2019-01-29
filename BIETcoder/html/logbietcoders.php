<?php
session_start();





?>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/CSS" href="../csssheet/homecss.css">
<style>
#bcgrnd
{
min-height:100%;
min-width:100%;
background-image:url("../image/profilebcg.png");
    background-repeat: no-repeat;
    background-position: center;
  background-size: cover;
}

#outup
{
height:10%;
background:green;
border:0px solid black;
}
#o1
{
float:left;
//border:2px solid black;
height:80%;
margin:7px;
align:center;
//background:pink;
width:5%;
//border:2px solid black;
}
#o2
{
float:left;
//border:2px solid black;
height:80%;
margin:8px;
//background:pink;
width:10%;
align:center;
//border:2px solid black;
}
#o3
{
float:left;
//border:2px solid black;
height:80%;
margin:8px;
//background:pink;
align:center;
width:10%;
//border:2px solid black;
}
#o4
{
float:left;
//border:2px solid black;
height:80%;
margin:7px;
//background:pink;
width:7%;
align:center;
//border:2px solid black;
}
#o5
{
float:left;
//border:2px solid black;
height:80%;
align:center;
margin:3px;
//background:red;
width:18%;
//border:2px solid black;
}

#mdd
{
border:0px solid black;
height:600px;
width:100%;
}
#mdl1
{
background:grey;
height:500px;
width:30%;
opacity: 1;
border:1px solid pink;
float:left;

}
#mdr1
{
background:pink;
height:500px;
width:60%;
opacity: 1;
border:1px purple;
float:right;

}
#mdr1l1
{
background:pink;
height:100%;
width:49%;
opacity: 1;
border:1px solid pink;
float:left;
margin:0px auto;
}
#mdr1r1
{
background:pink;
height:100%;
width:49%;
opacity: 1;
border:1px purple;
float:right;
margin:0px auto;

}
#lower1
{
background:blue;
height:200px;
width:100%;
opacity: 1;
align:bottom;
border:5px black;

}

</style>
<body id="bcgrnd">
<div id="outup">
<div id="o1">
<a href="editprofile.php">
<img src="<?php echo $_SESSION['prfl']; ?>" height="100%" width="80%">
</a>
</div>
<div id="o5">
<p >
<form action="searchresult.php" method="POST">
<input style="background-color:pink; font-color:black; font-size:20px;" type="text" name="search" placeholder="Search your friends..">
</form>
</p>
</div>
<div id="o4">
</div>
<div id="o2">
<a href="profilehome.php">
<img src="../image/homepage.png" height="100%" width="50%">
</a>
</div>
<div id="o3">
<a href="logbietcoders.php">
<img src="../image/bietcoderlogo.png" height="100%" width="50%">
</a>
</div>
<div id="o3">
<a href="messagepage.php">
<img src="../image/messagepage.png" height="100%" width="50%">
</a>
</div>
<div id="o3">
<a href="notification.php">
<img src="../image/notification.png" height="100%" width="50%">
</a>
</div>
<div id="o3">
<a href="yourarea.php">
<img src="../image/yourarea.png" height="100%" width="50%">
</a>
</div>
<div id="o3">
<a href="logout.php">
<img src="../image/logout.png" height="100%" width="50%">
</a>
</div>

</div>



<table border="0" width="100%" height="10%" class="bg"  >


<tr width="100%" height="15%" colspan="3" >


<td width="20%" >
				<img src="../image/bietcoderlogo.png" height="50%" border="0" style="left-margin:1%;" width="50%"  >
</td>

<td width="40%" >
				<a href="index.php" class="atext" >
				<i>		<u>BIETcoders</u>	</i>	
				</a>
</td>

<td width="35%">

			
</td>
			
				</tr>

				<tr width="100%"  align="center"  colspan="3"   >

				<td colspan="3" class="bgt" >
	<div class="dropdown">
				
		<button class="dropbtn"  width="14%" height="40px" border="0" ><a  target="_blank" href="http://bietjhs.ac.in/" style="text-decoration:none" ><strong >BIET</strong></a></button>

		<div class="dropdown-content">
				<a class="etext" target="_blank" href="http://bietjhs.ac.in/" style="text-decoration:none" ><strong >BIET</strong></a>
				<a class="etext" target="_blank" href="http://bietjhs.ac.in/examination-results/" style="text-decoration:none" ><b>Result</b></a>
				<a class="etext" target="_blank" href="https://www.facebook.com/lscbiet/" style="text-decoration:none"><strong >L.S.C. BIET</strong></a>
				<a class="etext" target="_blank" href="https://www.facebook.com/bietcsc/" style="text-decoration:none"><strong >C.S.C. BIET</strong></a>
				<a class="etext" target="_blank" href="https://www.facebook.com/fah.biet/" style="text-decoration:none"><strong >F.A.H. BIET</strong></a>
		</div>
	</div>


	<div class="dropdown">
				<button class="dropbtn"  width="14%" height="40px" border="0" ><a  target="_blank" href="books.html" style="text-decoration:none" ><strong >BOOKS</strong></a></button>
		<div class="dropdown-content">
			<a class="etext" target="_blank" href="csbooks.html" style="text-decoration:none" ><strong >Computer Science</strong></a>
			<a class="etext" target="_blank" href="cebooks.html" style="text-decoration:none" ><b>Civil Engineering</b></a>
			<a class="etext" target="_blank" href="mebooks.html" style="text-decoration:none"><strong >Mechanical Engineering</strong></a>
			<a class="etext" target="_blank" href="chbooks.html" style="text-decoration:none"><strong >Chemical Engineering</strong></a>
			<a class="etext" target="_blank" href="ecbooks.html" style="text-decoration:none"><strong >Electronics & Communication</strong></a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn"  width="14%" height="40px" border="0" ><a   target="_blank" href="dept.html" style="text-decoration:none" ><strong >DEPARTMENT</strong></a></button>
		<div class="dropdown-content">
			<a class="etext" target="_blank" href="cs.html" style="text-decoration:none" ><strong >Computer Science</strong></a>
			<a class="etext" target="_blank" href="ce.html" style="text-decoration:none" ><b>Civil Engineering</b></a>
			<a class="etext" target="_blank" href="me.html" style="text-decoration:none"><strong >Mechanical Engineering</strong></a>
			<a class="etext" target="_blank" href="ch.html" style="text-decoration:none"><strong >Chemical Engineering</strong></a>
			<a class="etext" target="_blank" href="ec.html" style="text-decoration:none"><strong >Electronics & Communication</strong></a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn"  width="14%" height="40px" border="0" ><a   target="_blank" href="sports.html" style="text-decoration:none" ><strong >SPORTS</strong></a></button>
		<div class="dropdown-content">
			<a class="etext" target="_blank" href="football.html" style="text-decoration:none" ><strong >Football</strong></a>
			<a class="etext" target="_blank" href="bollyball.html" style="text-decoration:none" ><b>Bollyball</b></a>
			<a class="etext" target="_blank" href="basketball.html" style="text-decoration:none"><strong >Basketball</strong></a>
			<a class="etext" target="_blank" href="tabletanis.html" style="text-decoration:none"><strong >Table-Tenis</strong></a>
			<a class="etext" target="_blank" href="badminton.html" style="text-decoration:none"><strong >Badminton</strong></a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn"   width="14%" height="40px" border="0" ><a  target="_blank" href="sports.html" style="text-decoration:none" ><strong >SYLLABUS</strong></a></button>
		<div class="dropdown-content">
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/01/Complete-Syllabus-Of-CSE-Department.pdf" style="text-decoration:none" ><strong >Computer Science</strong></a>
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/01/Complete-Syllabus-Of-CE-Department.pdf" style="text-decoration:none" ><b>Civil Engineering</b></a>
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/01/Complete-Syllabus-Of-ME-Department.pdf" style="text-decoration:none"><strong >Mechanical Engineering</strong></a>
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/01/Complete-Syllabus-Of-CH-Department.pdf" style="text-decoration:none"><strong >Chemical Engineering</strong></a>
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/01/Complete-Syllabus-Of-ECE-Department.pdf" style="text-decoration:none"><strong >Electronics & Communication</strong></a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn"  width="14%" height="40px" border="0" ><a  target="_blank" href="sports.html" style="text-decoration:none" ><strong >NOTICES</strong></a></button>
		<div class="dropdown-content">
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/08/Leave_collender_170817.pdf" style="text-decoration:none"><strong >List Of Holidays</strong></a>
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/07/Fee-Structure_180717.pdf" style="text-decoration:none" ><b>Fee for B.Tech</b></a>
			<a class="etext" target="_blank" href="http://bietjhs.ac.in/wp-content/uploads/2017/07/Fee-Structure_180717.pdf" style="text-decoration:none"><strong >Fee for M.tech</strong></a>

		</div>
	</div>



</td>

</tr>

</table>

						<div height="40%" width="100%" style="margin-top:150px">

</div>

<table cellpadding="5" cellspacing="5" border="0" bgcolor="black">

<tr style="align:centre;">
<td class="atext3" width="33%">
<p >
<h4  > Contact Us :</h4>
<h4 > +918004023840</br> +918545835593</h4></p>
</td>
<td class="atext3" width="33%">
<p >
<h4  > Email Us :</h4>
<h4 > support@bietcoder.in</br> help@bietcoder.in</h4></p>
</td>
<td class="atext3" width="33%">
<p >
<h4 > Like & Follow:</h4>
<a href="https://www.facebook.com/BIET-Jhansi-Computer-Science-Crazy-Engineers-252480078514772/?ref=bookmarks" style="text-decoration:none;font-color:cyan; link-color:cyan;" target="_blank" > <img src="../image/fb.png" height="75"></a>
<a href="https://www.facebook.com/BIET-Jhansi-Computer-Science-Crazy-Engineers-252480078514772/?ref=bookmarks" style="text-decoration:none;font-color:cyan; link-color:cyan;" target="_blank" > <img src="../image/g+.png" height="75"></a></p>
</td></tr>
</table>
</body>