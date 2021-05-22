<?php
    require_once('header.php');
      if(isset($_GET['well']))
      {
          if(isset($_SESSION['U_D']))
            {
                echo '<div class="display-4 mt-10 text-center"> 
                <h1 style="color: white;" >You Have Successfully logged in...</h1>
                </div>';
            }
            else{
                
            }
      }
      else{
            header("location: ../logindesign.php");
            exit();
      }
    require_once('footer.php');
    
?>
<!-- 
Author:Sujan Murugesh(TG/2017/248),
Department of Information and Communication Technology ,
Faculty Of Technology, 
University of Ruhuna.
-->