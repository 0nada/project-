<?php
include('connection.php');
if(isset($_post["submit"])){
    $username=stripcslashes($_POST['username']);
    $email=stripcslashes($_POST['email']);
    $password =stripcslashes($_POST['password']);
}


if(empty($username)){
    $user_error=' please enter username ';
}
if(empty($email)){
    $email_error=' please enter email';

}
if(empty($password)){
    $pass_error=' please enter password';
    include ("reg.php");
}
