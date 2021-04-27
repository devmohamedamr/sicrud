<?php
session_start();
require "lib.php";
if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}



if(isset($_POST['username'])){

    $id = $_POST['id'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // img
    if(!empty($_FILES['img']['tmp_name'])){
        $img = $_FILES['img']['tmp_name'];
        $imgtype = $_FILES['img']['type'];
        $type = explode("/",$imgtype);
        $ext = $type[1];
        $newname = $name.".".$ext;
        move_uploaded_file($img,"userimg/".$newname);
    }else{
        $newname = ''; 
    }
  
   
   $res =  updateUser($id,$name,$email,$password,$newname);
   if($res == true){
       header("LOCATION: index.php");
   }

}else{
    $userid = $_GET['id'];
    $userdata = getuserbyid($userid);
}


require "design/update.php";