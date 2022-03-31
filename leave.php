<?php
session_start();
include 'db.php';
// print_r($_SESSION);
if(count($_SESSION) ==0)
{
    header('location:login.php');
}

$reason = $_POST['reason'];
$date = $_POST['date'];
$u_id = $_SESSION['username'];


$a = "select  date  from leaves where date = '$date' ";
$result = selectq($a);
$num = mysqli_num_rows($result);
if($num > 0){
    echo "Sorry this date already  used!";
}
else
{
    $s = "INSERT INTO leaves(reason,date,username) VALUES ('$reason','$date' , '$u_id')";
    insertq($s);
}


?>