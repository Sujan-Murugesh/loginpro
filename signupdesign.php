<?php require_once('header.php');?>
<h1 style="color: white;" >Registration Form</h1>
		<p style="color: white;">Dear Student welcome to Future Tech Acadamy ! please fillout and submit your details....</p>
		<hr> 
    <div class="container ">
        
        <div class="row">
        <div class="col-lg-6">
            <div class="col bg-light">
                <div class="card-title bg-primary text-white">
                    <h3 class="text-center">Sign Up Form</h3>
                </div>
                
                <!-- Display Empty feilds...-->
                <?php 
                    if(isset($_GET['empty']))
                    {
                        $Message=$_GET['empty'];
                        $Message=" Please Fill In The Blanks";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php
                    }  
                ?>
                
                <!-- Invalid Characters Msg...-->
                <?php 
                    if(isset($_GET['Invalid']))
                    {
                        $Message=$_GET['Invalid'];
                        $Message=" Invalid Characters...";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php
                    }  
                ?>
                
                <!-- Invalid Emails Msg...-->
                <?php 
                    if(isset($_GET['Email']))
                    {
                        $Message=$_GET['Email'];
                        $Message=" Invalid Email ...";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php
                    }  
                ?>
                
                <!-- User Already exsits..-->
                <?php 
                    if(isset($_GET['user']))
                    {
                        $Message=$_GET['user'];
                        $Message=" User Already taken ...";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php
                    }  
                ?>
                
                <!-- Email Already exsits..-->
                <?php 
                    if(isset($_GET['Emailc']))
                    {
                        $Message=$_GET['Emailc'];
                        $Message=" Email Already taken ...";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>
                    <?php
                    }  
                ?>
                
                <!-- Successfully Sign uped-->
                <?php 
                    if(isset($_GET['Success']))
                    {
                        $Message=$_GET['Success'];
                        $Message="You Have Successfully Signed Up";
                    ?>
                        <div class="alert alert-success text-center"><?php echo $Message ?></div>
                    <?php
                    }  
                ?>
                <!-- ======================================================================= -->
                <hr>
                <div class="card-body">
                    <form action="includes/signup.php" method="POST">
                        <input type="text" name="FName" placeholder="First Name" class="form-control "><br>
                        <input type="text" name="LName" placeholder="Last Name" class="form-control ">
                        <br>
                        <input type="text" name="Email" placeholder="Email" class="form-control ">
                        <br>
                        <input type="text" name="UserName" placeholder="User Name" class="form-control ">
                        <br>
                        <input type="password" name="password" placeholder="password" class="form-control ">
                            <input class="cB"type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me *
					       <p>By creating an user account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        
                        <button class="btn btn-success" name="signup" >Sign Up</button>
                        <button type="reset" formaction="signupdesign.php" class="btn btn-reset"  >Reset</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php require_once('footer.php');?>
<!-- 
Author:Sujan Murugesh(TG/2017/248),
Department of Information and Communication Technology ,
Faculty Of Technology, 
University of Ruhuna.
-->