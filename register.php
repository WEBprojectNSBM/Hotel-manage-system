
<?php
	
		$servername="localhost";
	$username="root";
	$password="";
	$dbname="webproject";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn==False)
{
	echo "Connection failure";
}
else
{
	
		$name1=$_REQUEST['fname'];
		$name2=$_REQUEST['lname'];
		$bday=$_REQUEST['dob'];
		$Email=$_REQUEST['email'];
		$contact=$_REQUEST['number'];
		$user=$_REQUEST['username'];
		$psw1=$_REQUEST['password'];
		$psw2=$_REQUEST['confirm'];


$sql="INSERT INTO hotel_customers VALUES('$name1','$name2','$bday','$Email','$contact','$user','$psw1','$psw2');";

if(mysqli_query($conn,$sql)==True)
{
	echo "Record added successfully";
}
else
{
	"error";
}
}

?>