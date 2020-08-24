<?php

$servername="localhost";
$username="root";
$password="";
$dbname="signdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("not connected".connect_error);
}

else{
	$fname =$_REQUEST["username"];
	$psw =$_REQUEST["password"];
	$sqlquery ="SELECT firstname,password FROM register WHERE firstname='$fname'&&password='$psw';";
	$result = $conn->query($sqlquery);

	$row = mysqli_fetch_array($result);
	
	if($row==true)
	{
		
		echo "successful";
	}
			
	else
	{
		header('Location:http://localhost/project/Login.html'			);
	}		 
}
mysqli_close($conn);
?>