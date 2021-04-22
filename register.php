<?php
session_start();
if(!empty($_SESSION['user'])){
  header('LOCATION: index.php');
}
require "lib.php";

if(isset($_POST['username'])){

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $newpassword = hash_pass($password);
  $re =  register($username,$email, $newpassword); 
  if($re == true){
    echo "user added succsufly";
  }else{
      echo "failed data";
  }  
}

include "design/register.html";





