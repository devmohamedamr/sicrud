<?php
session_start();
if(!empty($_SESSION['user'])){
    header('LOCATION: index.php');
}


require "lib.php";

if(isset($_POST['email'])){

  $email =   $_POST['email'];
  $password =  $_POST['password'];
   
  $newpassword = hash_pass($password);

  $userdata =  login($email,$newpassword);

   if(!empty($userdata)){
        $_SESSION['user'] = $userdata;

        header("LOCATION: index.php");
   }else{
       echo "invlid user and password";
   }
}





require "design/login.html";