<?php

session_start();
include 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];


$a = "select  * from staff where username = '$username'  && password ='$password' ";
$result = selectq($a);
$num = mysqli_num_rows($result);
if($num > 0){
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['roleid']  = $row['roleid'];
    print_r($_SESSION);
    if($username == 'admin' && $password == '123456' &&  $_SESSION['roleid'] =='1' ){
        header('location:dash.php');
    }
    else{
        header('location:dash1.php');
    }
}
else{
    header('location:login.php');
}
