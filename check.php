<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$mysql=new mysqli('localhost','root','','putin');
$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
$user =$result->fetch_assoc();

if(isset($user)==false)
{
    echo 'userno';
    exit();
    
}
    setcookie("user_name", $user['name'], time () + 3600,'/');
    setcookie("user_role", $user['role'], time () + 3600,'/');
    echo $_COOKIE["user_name"];
    $mysql->close();
