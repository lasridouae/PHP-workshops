<?php
include 'database.php';
if(isset($_POST["submit"])){
    //inputs:
    $user = $conn->real_escape_string($_POST["user"]);
    $message =  $conn->real_escape_string($_POST["message"]);

    date_default_timezone_get("Africa/Casablanca");
    $time = date("H:i:s",time());

    if(empty($user) || empty($message)){

        $error = "please fill in the empty fields";

        header("Location: index.php?error=".urlencode($error));

        exit();
    
        
    }else{

        $sql1 = "INSERT INTO `shouts` (users, messages,times)
        VALUES ('$user', '$message', '$time')";
    $inserted_row = $conn->query($sql1) or die($conn->error.__LINE__);

    header("location:index.php");

     exit();

      



    } 
} 