<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width-device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <title> FutureTech login System</title>
        
        <style>
            body {

                background-image:linear-gradient(rgba(0,0,0,4),rgba(0,0,0,0.3)), url("img/background.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                margin-top: 60px;  
                background-attachment: fixed;         
            }
		</style>
        
    </head>
    <body>
      <!-- <div class="container">  -->
       <nav class="navbar navbar-inverse navbar-fixed-top" >
            <div class="navbar">
                <a href="Index.php" class="navbar-brand "><h3>Future Tech</h3></a> 
                
                <div class="collapse navbar-collapse">
                        <?php 
                            if(isset($_SESSION['U_D']))
                            {
                                echo '<form action="includes/logout.php" method="POST">
                                        <button type="submit" name="logout" class="btn btn-danger" align="right"><img class="navImg" src="img/logout.png" height="45px" width="45px">Logout</button>
                                    </form>';
                            }
                            else{
                                echo '<a href="logindesign.php" class="nav-link"><button class="btn btn-danger"><img class="navImg" src="img/log.png" height="45px" width="45px">Login </button> </a>
                    
                                <a href="signupdesign.php" class="nav-link"><button class="btn btn-success "><img class="navImg" src="img/signup.png" height="45px" width="45px">Sign Up </button></a>';
                            }
                        ?>
                </div>
            </div>
       </nav>  
       <!--</div>-->
        <br>
<!-- 
Author:Sujan Murugesh(TG/2017/248),
Department of Information and Communication Technology ,
Faculty Of Technology, 
University of Ruhuna.
-->