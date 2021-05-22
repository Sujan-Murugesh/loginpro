<?php require_once('header.php');?>
<center>  
<div class="container ">
        <div class="row">
        <div class="col-lg-6">
            <div class="col bg-light">
                <div class="card-title bg-primary text-white">
                    <h3 class="text-center">Login Form</h3>
                </div>
                <hr>
                
                <!-- If Login feilds are empty alerts...-->
                <?php 
                    if(isset($_GET['Empty']))
                    {
                        $Message=$_GET['Empty'];
                        $Message="Please Fill in the Blanks";
                ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $Message ?>
                    </div>
                <?php
                    }
                ?>
                
                <!-- invalid User alerts...-->
                <?php 
                    if(isset($_GET['P_Invalid']))
                    {
                        $Message=$_GET['P_Invalid'];
                        $Message="Invalid Password";
                ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $Message ?>
                    </div>
                <?php
                    }
                ?>
                
                <!-- invalid Password alerts...-->
                <?php 
                    if(isset($_GET['U_Invalid']))
                    {
                        $Message=$_GET['U_Invalid'];
                        $Message="Invalid User";
                ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $Message ?>
                    </div>
                <?php
                    }
                ?>
 <!--==========================================================================================-->
                <div class="card-body">
                    <form action="includes/login.php" method="POST">
                        
                        <input type="text" name="UserName" placeholder="Enter User name or email" class="form-control ">
                        <br>
                        
                        <input type="password" name="password" placeholder="Enetr your password" class="form-control ">
                        <br>
                        
                        <button class="btn btn-success" name="login" >Login</button>
                        <button type="reset" formaction="logindesign.php" class="btn btn-reset"  >Reset</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</center>
<?php require_once('footer.php');?>
<!-- 
Author:Sujan Murugesh(TG/2017/248),
Department of Information and Communication Technology ,
Faculty Of Technology, 
University of Ruhuna.
-->