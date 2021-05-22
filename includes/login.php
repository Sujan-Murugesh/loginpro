<?php
    session_start();
    require_once('connection.php');
    
    if(isset($_POST['login']))
    {
        if(empty($_POST['UserName']) || empty($_POST['password']))
        {
            header("location: ../logindesign.php?Empty");
            exit();
        }
        else{
            $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
            $Password = mysqli_real_escape_string($con,$_POST['password']);
            
            $Query="select * from userlogin where UserName='".$UserName."' or Email='".$UserName."'";
            $result = mysqli_query($con,$Query);
            
            if($row=mysqli_fetch_assoc($result))
            {
                $HashPass=password_verify($Password,$row['Password']);
                
                if($HashPass==false)
                {
                    header("location: ../logindesign.php?P_Invalid");
                    exit();
                }
                elseif($HashPass==true){
                    $_SESSION['U_D']=$row['ID'];
                    $_SESSION['FName']=$row['FName'];
                    $_SESSION['LName']=$row['LName'];
                    $_SESSION['Email']=$row['Email'];
                    $_SESSION['UserName']=$row['UserName'];
                    $_SESSION['Password']=$row['Password'];
                    
                    header("location: ../account.php?well");
                    exit();
                }
            }
            else{
                header("location: ../logindesign.php?U_Invalid");
                exit();
            }
        }
    }
    else{
        header("location: ../logindesign.php?");
        exit();
    }
?>
<!-- 
Author:Sujan Murugesh(TG/2017/248),
Department of Information and Communication Technology ,
Faculty Of Technology, 
University of Ruhuna.
-->