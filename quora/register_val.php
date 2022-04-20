<?php
include "db.php";

session_start();




//$if (_SERVER["REQUEST_METHOD"]== "POST") {
    $username= $_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
 
$chk=$conn->prepare("SELECT *  FROM users where email='$email' ");
$chk->execute();

if($chk->fetch())
{
    echo '<script>alert("user already exist ")</script>';
    
}
else{

    if($username =='' OR $email =='' OR $password ==''){

        echo"<script>alert('Please fill all the fields!')</script>";


    


    }else{
    
        $stmt=$conn->prepare("INSERT INTO users(name,email,password)VALUES(?,?,?)");
        $result=$stmt->execute([$username,$email,$password]);
        session_start();
        $_SESSION['name']=$username;
        $_SESSION['email']=$email;
        header("Location: http://localhost/quora/main.php");

       
    }

        
}

//}

?>