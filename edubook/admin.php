<?php 
    session_start();
$usr = $_POST['usr'];
$psw = $_POST['password'];
if($usr=='user'&&$psw=='pwd')
   {
        header("location:moderna/index.php");
    }    
 ?>