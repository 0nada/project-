<?php 
session_start();
include('connection.php');
if(isset($_post['username']) && isset($_post['password'])){
    $email=stripcslashes($_POST['email']);
    $password =stripcslashes($_POST['password']);
}
if(empty($email)){
    $email_error ='please enter email';
}
if(empty($password)){
    $pass_error ='please enter password';
    include('login.php');
}