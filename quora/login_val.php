<?php
include "db.php";

// Start the session
session_start();




//if ($_SERVER["REQUEST_METHOD"]== "POST") {
    
    $email=$_POST['email'];
    $password=$_POST['password'];
 
$chk=$conn->prepare("SELECT *  FROM users where email='$email'AND password='$password' ");
$chk->execute();

if($res=$chk->fetch())
{
    $_SESSION['name']= $res['name'];
    $_SESSION['email']= $res['email'];
    
    header("Location: http://localhost/quora/main.php");
}

else{

    echo '<script>alert(" enter valid Email and Password ")</script>';
//     header("Location: http://localhost/quora/index.php");
 }
   

//}

?>