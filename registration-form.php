<?php
mysqli_connect("localhost","root","") or die("not connected");
mysqli_select_db("course registration") or die("no db found");
if(isset($_POST['submit']))
{
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$CNIC=$_POST['CNIC'];
$E-Mail=$_POST['E-Mail'];
$ContectNumber=$_POST['ContectNumber'];
$DateOfBirth=$_POST['DateOfBirth'];
$Gender=$_POST['Gender'];
$ParmanentAddress=$_POST['ParmanentAddress'];
$CourseName=$_POST['CourseName'];
$query="insert into course registration table1(FirstName,LastName,CNIC,E-Mail,ContectNumber,DateOfBirth,Gender,ParmanentAddress,CourseName) values('$FirstName','$LastName','$CNIC','$E-Mail','$ContectNumber','$DateOfBirth','$Gender','$ParmanentAddress','$CourseName')";
if(mysqli_query($query))
{
	echo "<h3>Sucessfull</h3>";
}
}
?>