<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <div class="login">
    <div class="login__container">
        <div class="login__logo">
            <img src="logos/mainicon.png" alt="image" height="240" width="500"/>
        </div>
        
        <div class="login__auth">
            <!-- <div class="login__authOptions">
                <!-- <div class="login__authOption">
                    <img class="login__googleAuth" src="https://media-public.canva.com/MADnBiAubGA/3/screen.svg" alt="image"/>
                    <p>Continue with Google</p>
                </div>
                <div class="login__authOption">
                    <img class="login__googleAuth" src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo-500x350.png" alt="image"/>
                    <span> Continue with Facebook </span>
                </div> -->
                <!-- <div class="login__authDesc">
                    <p>
                        <span style="color:blue",style="cursor: pointer"> Sign up with Email </span>
                        . By continuing with this u have agreed to Quora's 
                        <span style="color:blue",style="cursor: pointer"> Terms of Service   </span> 
                        and  
                        <span style="color:blue",style="cursor: pointer"> Privacy Policy  </span> 
                        .
                    </p>
                </div> -->
            <!-- </div> --> 







     <form class="login__emailPass" action="register_val.php" method="POST">
       

            <div class="login__emailPass">
                <div class="login__label">
                    <h2>Register</h2>
                </div>
                <div class="login__inputFields">
                <div class="login__inputField">
                        <input
                        name="name"
                        value=""
                         type="text"
                         placeholder="Name"/>
                    </div>
                    <div class="login__inputField">
                        <input
                        name="email"
                        value=""
                         type="text"
                         placeholder="Email"/>
                    </div>
                    <div class="login__inputField">
                        <input
                        name="password"
                        value=""
                         type="password"
                         placeholder="Password"
                         id="myInput"/>
                    </div>
                    <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                </div>
                <!-- <div class="login__forgButt">

                    <small> Forgot Password?</small>

                    <button  type="submit" formaction="login.php" meth>Login</button>

                </div> -->
                <button type="submit" >Register</button>
                <a class="forg_pass" href="index.php">Already Have account</a>
            </div>

    </form>




        </div>
        <div class="login_lang">
            
            <ArrowForwardIosIcon fontsize="small"/>
        </div>
        <div class="login__footer">
            <p>About</p>
            <p>Languages</p>
            <p>Careers</p>
            <p>Business</p>
            <p>Privacy</p>
            <p>Terms</p>
            <p>Contact</p>
            <p>&copy; Quora Fake Inc. 2021</p>
        </div>
    </div>
</div>
    


</body>
</html>


