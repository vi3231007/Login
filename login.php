<?php

$email=$_POST['email'];
$pass=$_POST['pass'];

include 'connect.php';

$stmt=$conn->prepare('select * from register where email=?');
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result=$stmt->get_result(); 
if($stmt_result->num_rows>0)
{
    $data=$stmt_result->fetch_assoc();
    if($data['pass']===$pass)
    {
        echo "Login was successfull...";
    }else
    {
        echo "invalid email or password";
    }
}else{
    echo "invalid email or password";
}


?>