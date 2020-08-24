<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hotel";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn==True)
{



if(isset($_GET['fname']))
	{$fname=$_GET['fname'];}
else{
	$fname="Name not set in get method";
}

if(isset($_GET['uname']))
	{$uname=$_GET['uname'];}

else{
	$uname="Name not set in get method";
}


if(isset($_GET['cnum']))
	{$cnum=$_GET['cnum'];}

else{
	$cnum="Name not set in get method";
}

if(isset($_GET['city']))
	{$city=$_GET['city'];}

else{
	$city="Name not set in get method";
}

if(isset($_GET['guest']))
	{$guest=$_GET['guest'];}

else{
	$guest="Name not set in get method";
}

if(isset($_GET['pickd']))
	{$pickday=$_GET['pickd'];}

else{
	$pickday="Name not set in get method";
}

if(isset($_GET['nuday']))
	{$numday=$_GET['nuday'];}

else{
	$numday="Name not set in get method";
}

if(isset($_GET['dia']))
	{$dia=$_GET['dia'];}

else{
	$dia="Name not set in get method";
}

if(isset($_GET['gol']))
	{$gol=$_GET['gol'];}

else{
	$gol="Name not set in get method";
}

if(isset($_GET['sil']))
	{$sil=$_GET['sil'];}

else{
	$sil="Name not set in get method";
}


$sql="INSERT INTO hall_res(uname,cnum,city,bdate,nguest,days,fname,dia,gol,sil) 
VALUES('$uname','$cnum','$city','$pickday','$guest','$numday','$fname','$dia','$gol','$sil')";


if(mysqli_query($conn,$sql)==True)
{
	echo 'data inserted';
}
else
{
	echo 'data not inserted';
}

}
else
{
	echo "connection error";

}

