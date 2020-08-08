<?php

$servername="localhost";
$username="members";
$password="password"
$dbname="test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){

	die("connectionfailed".mysql_connect_error());

}
else
{
	$Username=$_POST['Username'];
	$UserID=$_POST['UserID'];
	$ContactNumber=$_POST['ContactNumber'];
	$City=$_POST['City'];
	
	$sql="INSERT INTO student(Username,UserID,ContactNumber,City);
	VALUES('$Username','$UserID','$ContactNumber','$City');";
	if(mysqli_query($conn,$sql)==True)
	{
		echo "Record added successfully";
	}
	else
	{
		echo "error";
	}
}


