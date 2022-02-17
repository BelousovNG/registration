<?php
$fio = explode(" ", $_POST['sso']);
$surname = $fio['0'];
$name = $fio['1'];
$secondname = $fio['2'];
$login= $_POST['login'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$mysql=new mysqli('localhost','root','','putin');
$mysql->set_charset('utf8');
$sql = ("SELECT * FROM `users` WHERE `login`='$login'");
$check = $mysql->query($sql);
$count = $check->num_rows;
if($count >= 1){
     echo "loginerror";
}
else{
     $mysql->query("INSERT INTO `users` (`name`,`surname`,`secondname`,`login`,`mail`,`pass`,`role`) VALUE('$name','$surname','$secondname','$login','$mail','$pass','users')");     
}
$mysql->close();


