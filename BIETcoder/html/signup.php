<?php

$rno=$_POST['rollno'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$name=$_POST['name'];
$hostle=$_POST['hostle'];
$mno=$_POST['mobile'];
$user=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];
$prfl="../image/defaultuser.png";
echo($rno);
mysql_connect('localhost','root','');
mysql_select_db("bietcoders");
$query="insert into users(rollno,year,branch,name,hostle,mobile,user_name,password,email,profile_image) values('$rno','$year','$branch','$name','$hostle','$mno','$user','$pass','$email','$prfl')";
mysql_query($query);

header("location:../index.php");




?>
