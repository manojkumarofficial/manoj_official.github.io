<?php
$uname=$_POST["uname"];
$email=$_POST["email"];
$add=$_POST["add"];
$message=$_POST["message"];
$con=mysqli_connect("localhost","root","","contactdb");
$res=mysqli_query($con,"insert into contact(username,email,address,message) values('$uname','$email','$add','$message')");
if($res)
{
	echo "thank for showing intrest .We will contact you soon";
}
else
{
	echo "error";
}