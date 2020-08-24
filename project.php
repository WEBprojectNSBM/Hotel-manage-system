<?php

  $servername="localhost";
  $username="root";
  $password="";
  $db="booking";

$conn=mysqli_connect($servername,$username,$password,$db);
if($conn==True )
{
    
    if(isset($_GET['Username'])){
    $name=$_GET['Username'];

  }else{
    $name="Name not set in GET Method";
  }

  if(isset($_GET['Contactnumber'])){
    $Contactnumber=$_GET['Contactnumber'];

  }else{
    $Contactnumber="Name not set in GET Method";
  }

  if(isset($_GET['City'])){
    $City=$_GET['City'];

  }else{
    $City="City not set in GET Method";
  }

  if(isset($_GET['side'])){
    $Roomside=$_GET['side'];

  }else{
    $Roomside="Side not set in GET Method";
  }

   if(isset($_GET['Room'])){
    $Roomtype=$_GET['Room'];

  }else{
    $Roomtype="Room not set in GET Method";
  }

   if(isset($_GET['Number'])){
    $num=$_GET['Number'];

  }else{
    $num="Number not set in GET Method";
  }

   if(isset($_GET['guest'])){
    $Guest=$_GET['guest'];

  }else{
    $Guest="Guest not set in GET Method";
  }

   if(isset($_GET['need'])){
    $Need=$_GET['need'];

  }else{
    $Need="Need not set in GET Method";
  }
   if(isset($_GET['date'])){
    $Adate=$_GET['date'];

  }else{
    $Adate="Arrival date is not set in GET Method";
  }
   if(isset($_GET['dat'])){
    $Ddate=$_GET['dat'];

  }else{
    $Ddate="Departhure date is not set in GET Method";
  }

    $sql="INSERT INTO rooms(Username,Contactnumber,City,Roomside,Roomtype,Roomnumber,Numberofguests,Whatneed,Arrivaldate,Departuredate)
    VALUES('$name','$Contactnumber','$City','$Roomside','$Roomtype',$num','$Guest','$Need','$Adate','$Ddate')";
    if(mysqli_query($conn,$sql)==True)
    {
      echo'data inserted';

    } 
    else{
      echo'data not inserted';
    }


}
else{
  echo"Connection failure";
    } 
  