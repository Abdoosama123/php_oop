<?php

$db = new mysqli("localhost","root","","php_oop");

// Check

if($db->connect_errno){
 echo"Failed";
 exit();
}