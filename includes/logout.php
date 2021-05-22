<?php 
    if(isset($_POST['logout']))
    {
        session_start();
        session_unset();
        session_destroy();
        header("location: ../Index.php");
        exit();
    }
?>
<!-- 
Author:Sujan Murugesh(TG/2017/248),
Department of Information and Communication Technology ,
Faculty Of Technology, 
University of Ruhuna.
-->