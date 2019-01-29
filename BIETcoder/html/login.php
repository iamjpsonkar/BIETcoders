<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
//echo $user;
//echo $pass;


  
mysql_connect('localhost','root','');
mysql_select_db("bietcoders");
$query="select * from users where user_name='$user' and password='$pass'";
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$_SESSION['name']=$row['name'];
//echo $_SESSION['name'];
$_SESSION["user"]=$row['user_name'];
$_SESSION["email"]=$row['email'];
$_SESSION["pass"]=$row['password'];
$_SESSION["mno"]=$row['mobile'];
$_SESSION["branch"]=$row['branch'];
$_SESSION["year"]=$row['year'];
$_SESSION["rno"]=$row['rollno'];
$_SESSION["prfl"]=$row['profile_image'];
//echo $_SESSION['prfl'];
header("location:profilehome.php");
}
else
{
	
header("location:../index.php");	
}












?>