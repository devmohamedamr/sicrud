<?php
session_start();
require "lib.php";
if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}

$data = Alldata();



require "design/index.php";
