<?php

include "db.php";

session_start();

//$if (_SERVER["REQUEST_METHOD"]== "POST") {


    $question= $_POST['qtn'];
    $username=$_SESSION['name'];
    $email=$_SESSION['email'];
    

    $img=$_FILES['image']['name'];

    $tmp_img=$_FILES['image']['tmp_name'];



    if($question ==''){

        echo"<script>alert('Please fill all the fields!')</script>";

        exit();

    }else{


        move_uploaded_file($tmp_img,"post_images/$img");

        $stmt=$conn->prepare("INSERT INTO posts(name,email,img,question,date)VALUES(?,?,?,?,NOW())");
        $result=$stmt->execute([$username,$email,$img,$question]);


        if($result){
            echo"<script>alert('Please fill all the fields!')</script>";
            
            header("Location: http://localhost/quora/main.php");

        }

    }

//}





?>