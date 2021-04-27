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

  // img 
  $tmp = $_FILES['img']['tmp_name'];
  $type = $_FILES['img']['type'];
  $typeofar =  explode("/",$type);
  $ext = $typeofar[1];

  $imgfullname = $username.".".$ext;

  $newpassword = hash_pass($password);
  $re =  register($username,$email, $newpassword,$imgfullname); 
  if($re == true){
    move_uploaded_file($tmp,'userimg/'.$username.".".$ext);
    echo "user added succsufly";
  }else{
      echo "failed data";
  }  
}

include "design/register.html";





