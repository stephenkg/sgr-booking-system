<?php

$hostname="localhost";
$username="root";
$password="";
$db="sgr";

$connect= mysqli_connect($hostname,$username,$password,$db);

$Day=$_POST['Day'];
$Origin=$_POST['Origin'];
$Destination=$_POST['Destination'];
$Departure=$_POST['Departure'];
$Arrival=$_POST['Arrival'];
$seat=$_POST['seat'];	
$number=$_POST['number'];
$childDiscount=$_POST['childDiscount'];
$infantDiscount=$_POST['infantDiscount'];

$result=mysqli_query($connect,"INSERT INTO timetable(Day,Origin,Destination,seat,Departure,Arrival,snumber,childDiscount,infantDiscount)VALUES('$Day','$Origin','$Destination','$seat','$Departure','$Arrival','$number','$childDiscount','$infantDiscount')") or die("ERROR".mysqli_error());

if($result)
{

	echo("<script>alert('data entered sucessfully')</script>");
	  echo("<script>window.location = 'admin-update.php';</script>"); 
}
else
{
	echo("<script>alert('data entery unsucessfully')</script>");
}

?>