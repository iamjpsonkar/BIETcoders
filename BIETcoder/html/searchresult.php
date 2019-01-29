<?php
session_start();
$i=0;
$search=$_POST['search'];
mysql_connect('localhost','root','');
mysql_select_db('bietcoders');
$query="select name,profile_image,user_name from users where name='$search' or user_name='$search'";

$res=mysql_query($query);
$det=array(array());
if(!($row=mysql_fetch_array($res,MYSQL_BOTH)))
{
	header("location:error.html");
}
else{
	$det[$i]=$row;
	$i+=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$det[$i]=$row;
$i+=1;
		
}

}



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
<form action="usersearch.php" method="POST">
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



<?php
/*$val=array();
echo $_SESSION['Res'][3];
array_push($val,$_SESSION['Res']);
//echo $val[0]." ".$val[1];
$n=count($val);
$a=0;
echo $n."aaaaaaaaaassaaaaaaa";
*/
foreach ($det as $i)
	{
	
	echo '<div id="lower1">';
	echo '<div style="margin:0px auto; float:left"><h1 align="center">'.$i[0]."</h1></div>";
	echo '<div style="margin:0px auto;float:right"><img src='.$i[1].">"."</div>";
	echo "</div>";
	
	
}
	
/*
foreach ($val as $v)
{
	echo '<img src='.$val['profile_image'].'.jpg">';
	echo $val['name']." ".$val['user_name'];
	echo "</br>";
}
//echo '<pre>'; print_r(array_values($val)); echo '</pre>';
//echo $val['name'];

*/



?>










</body>
</html>