<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatbox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error){
 
  printf("connecion failed : %s\n",$conn->connect_error.__LINE__);
  exit();
}
else
{
  echo "connected";
}