<?php

$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$agree=$_POST['agree'];

include "connect.php";

$stmt=$conn->prepare("insert into register(user,email,pass,agree)
  value(?,?,?,?)");
  $stmt->bind_param("sssb",$user,$email,$pass,$agree);
  $stmt->execute();
  echo "registration successfully...";
  $stmt->close();
  $conn->close();
?>