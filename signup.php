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
                        <input type="password" name="password" placeholder="password" class="form-control "><br>
                        <button class="btn btn-success" name="signup" >Sign Up</button>
                        <button type="reset" formaction="signup.php" class="btn btn-reset"  >Reset</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php require_once('footer.php');?>