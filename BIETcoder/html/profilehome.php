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
<div id="dw1">
<marquee height="8%" ><font size="18px" color="red">WELCOME</font></marquee>
</div>

<div id="mdd">
<div id="mdl1">
<font size="5px">
<h1 align="center" >Details</h1>
<h3 align="center">
<b > Name : </b>
<?php 	echo $_SESSION['name']."</br>";?>
</h3>
<h3 align="center">
<b > Rollno : </b>
<?php 	echo $_SESSION['rno']."</br>";?>
</h3>
<h3 align="center">
<b > Branch : </b>
<?php 	echo $_SESSION['branch']."</br>";?>
</h3>
<h3 align="center">
<b > Year : </b>
<?php 	echo $_SESSION['year']."</br>";?>
</h3>
<h3 align="center">
<b > Mobileno : </b>
<?php 	echo $_SESSION['mno']."</br>";?>
</h3>


</h3>

</font>
</div>
<div id="mdr1">
<div id="mdr1l1">
<p align="center">

</p>
<div id="part2" style="height:50%;">
<h1 align="center" >Messages</h1>
</div>
<!--
<div style="height:auto; margin: 70% auto;">
<form action="/action_page.php" align="center">
  <input type="file" name="pic" accept="image/*">
  <input type="submit">
</form>
</div>
-->
</div>
<div id="mdr1r1">
<div id="part1" style="height:50%;">
<h1 align="center" >Notifications</h1>
</div>

</div>
</div>

</div>
<div id="lower1">
</div>









</body>
</html>