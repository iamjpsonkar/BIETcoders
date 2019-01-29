<?php
session_start();
$search=$_POST['search'];

mysql_connect('localhost','root','');
mysql_select_db('bietcoders');
$query="select name,profile_image,user_name from users where name='$search' or user_name='$search'";

$res=mysql_query($query);

if(!($row=mysql_fetch_array($res,MYSQL_BOTH)))
{
	header("location:error.html");
}
else{
	$_SESSION['Res']=$row;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$_SESSION['Res']=$row;
//echo $row['name']." hii ".$row['profile_image']." hello ".$_SESSION['Res']['name']." byee ".$_SESSION['Res']['profile_image']."</br>";
		
}
header("location:searchresult.php");
}


?>