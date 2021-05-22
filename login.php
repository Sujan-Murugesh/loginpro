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
                <div class="card-body">
                    <form action="logindesign.php">
                        <input type="text" name="UserName" placeholder="Enter User name or email" class="form-control "><br>
                        <input type="password" name="password" placeholder="Enetr your password" class="form-control "><br>
                        <button class="btn btn-success" name="login" >Login</button>
                        <button type="reset" formaction="login.php" class="btn btn-reset"  >Reset</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</center>
<?php require_once('footer.php');?>