<?php


function register($username,$email,$password){
    $con = mysqli_connect("localhost","root","","first_pro");
    mysqli_query($con,"INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$username','$email','$password') ");
    $res =  mysqli_affected_rows($con);

    if($res == 1){
        return true;
    }else{
        return false;
    }
}


function login($email,$password){
    $con = mysqli_connect("localhost","root","","first_pro");
    $myq =  mysqli_query($con,"SELECT * FROM `user` where `email` = '$email' AND `password` = '$password' ");

   $res = mysqli_fetch_assoc($myq);
   return $res;
}


function hash_pass($password){
   return sha1($password);
}



function Alldata(){
    $con = mysqli_connect("localhost","root","","first_pro");
    $myq =  mysqli_query($con,"SELECT `id`,`name`,`email` FROM `user` ");
    $data = [];
   while($res = mysqli_fetch_assoc($myq)){
    $data[] = $res;
   }
   return $data;
}