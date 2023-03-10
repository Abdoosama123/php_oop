<?php

require_once('db/db.php');
require_once('classes/UserRegister.php');


$data = json_decode(file_get_contents('php://input'));


$username = $data->username;
$email = $data->email;
$password = $data->password;

$user = new UserRegister($db,$username,$email,$password);

$register = $user->register();
if($register){
echo json_encode(['ok' => 'good registration']);
}else{
    echo json_encode(['error' => $user->getError()]);
}

