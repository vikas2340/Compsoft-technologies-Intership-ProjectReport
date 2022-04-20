<?php

include "db.php";

session_start();

//$if (_SERVER["REQUEST_METHOD"]== "POST") {

    $postId= $_POST['id'];
    $answer= $_POST['ans'];
    $username=$_SESSION['name'];
    $email=$_SESSION['email'];
    

   



    if($answer ==''){

        echo"<script>alert('Please fill all the fields!')</script>";

        exit();

    }else{


        

        $stmt=$conn->prepare("INSERT INTO answers(postid,name,email,answer,date)VALUES(?,?,?,?,NOW())");
        $result=$stmt->execute([$postId,$username,$email,$answer]);


        if($result){
            echo"<script>alert('Please fill all the fields!')</script>";
            
            header("Location: http://localhost/quora/main.php");

        }

    }

//}





?>