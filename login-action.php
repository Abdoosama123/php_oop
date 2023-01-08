<?php
session_start();

require "db/db.php";
require "classes/UserLogin.php";

$email = $_POST["email"];
$password = $_POST["password"];

$user = new UserLogin($db,$email,$password);

if($user->login()){
 header("Location:profile.php");
}else{
    echo "please verify your information";
}