<?php



session_start();


if( !isset($_SESSION['name'])){
    header("Location: http://localhost/quora/index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css?v4">
    <script src="https://kit.fontawesome.com/6e8a25e253.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
</head>
<body>




    <div class="qHeader">
        <div class="qHeader__logo">
            <img src="logos/mainicon.png" alt="logo">
        </div>
        <div class="qHeader__icons">
            <div class="qHeader__icon">
                <i class="fas fa-home"></i>
            </div>
           
        </div>
        <div class="qHeader__input">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search quora"/>
        </div>
        <div class="qHeader__Rem">
           <div class="qHeader__avatar">
            <!-- <i class="fas fa-user"></i> -->

            <div class="dropdown">
            <i class="fas fa-user"></i>
            <div class="dropdown-content">
                <a href="#">My account</a>
                <a href="logout.php">Logout</a>
            </div>
            </div>



           </div> 
           <i class="fas fa-globe"></i>
           <!-- <button> Add Question </button> -->
           <button  onclick="openForm()">Ask Question</button>
        </div>
    </div>


<!-- To ASK QUESTION --->    

<div class="form-popup" id="myForm">
  <form action="post.php" class="form-container" method="POST"  enctype="multipart/form-data">
    <h1>Question</h1>

    <label for="email"><b>Type your question here...</b></label>
    

    <!-- <textarea name="question" rows="10" cols="60" required>

   </textarea> -->
   <input type="text" name="qtn" id="fileToUpload">

     <div class="img">
        <label for="psw"><b>upload image</b></label>
        <input type="file" name="image" id="fileToUpload">
     </div>
    <button type="submit" class="btn" ">Post</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

  
  
 <div class="quora__content">
     <div class="feed">
        <div class="quoraBox">
            <div class="quoraBox__info">
                <i class="fas fa-user">
                </i>
                
                <h5><?php echo  $_SESSION['name']; ?> </h5>
               
            </div>
            <div class="quoraBox__quora">
                <p>what is your question or link? </p>
            </div>
        </div>




     <?php

      include "db.php";
     
      $s = array();
     $stmt=$conn ->prepare("SELECT * FROM posts");
     $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $stmt->execute();

     while($row=$stmt->fetch()){

        $s[] = $row;
      

        $postId=$row['id'];
        $username=$row['name'];
        $timestamp=$row['date'];
        $question=$row['question'];
        $image=$row['img'];

        

        if($image ==""){

            echo"
        
        
        
            <div class='post'>
                <div class='post__info'>
                    <i class='fas fa-user'>
                    </i>
                    <h5>$username</h5>
                    <small>$timestamp</small>  
                </div>
                <div class='post__body'>
                    <div class='post__question'>
                        <p>$question</p>
                        <button class='post__btnAnswer'>
                            Answer
                        </button>
                    </div>
                    <div class='post__answer'>
                        <p>  </p>
                    </div>
    
                   
    
                </div>
                <div class='post__footer'>
                    <div class='post__footerAction'>
                        <i class='fas fa-thumbs-up'></i>
                        <i class='fas fa-thumbs-down'></i>
                        <i class='fas fa-comment-dots'></i>
                        <i class='fas fa-share-square'></i>
                    </div>
                </div>
            </div>
    
            
            
            
            
            
            ";

        }else{
            //echo $postId;

        echo"
        
        
        
        <div class='post'>
            <div class='post__info'>
                <i class='fas fa-user'>
                </i>
                <h5>$username</h5>
                <small>$timestamp</small>  
            </div>
            <div class='post__body'>
                <div class='post__question'>
                    <p>$question</p>
                    

                    

                </div>
                <button class='post__btnviewAnswer' onclick='openFormb()' > Add Answer </button>

                

                <div class='form-popup' id='myForm1'>
                <form action='addanswer.php' class='form-container' method='POST'  enctype='multipart/form-data'>
                  <h1>Type Answer</h1>
              
                  <label for='email'><b>Type your answer here...</b></label>
                  
                  
                 <input type='text' name='ans' id='fileToUpload'>
                 <input type='hidden' name='id' value='{$postId}'> 
                 
              
                  
                  <button type='submit' class='btn' '>Post</button>
                  <button type='button' class='btn cancel' onclick='closeFormb()'>Cancel</button>
                </form>
              </div>






                <button type='button' class='collapsible'> view Answer</button>
                
                

                   
                <div class='content'>
               
            


                <p></p>
              </div>
                <div class='post__answer'>
                    <p></p>
                </div>

                <img src='post_images/$image'  width='500px'/>

            </div>
            <div class='post__footer'>
                <div class='post__footerAction'>
                    <i class='fas fa-thumbs-up'></i>
                    <i class='fas fa-thumbs-down'></i>
                    <i class='fas fa-comment-dots'></i>
                    <i class='fas fa-share-square'></i>
                </div>
            </div>
        </div>

        
        
        
        
        
        ";
        }
     }

   

    ?>    
        
    

    
 <script src="js/popup.js?v1"></script>
 <script src="js/ansqtn.js?v1"></script>
 <script src="js/ans.js?v1"></script>
    
</body>
</html>