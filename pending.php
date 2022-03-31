<?php
include 'db.php';
$a = $_GET['id'];
$sql = "UPDATE leaves SET request = '0' where id = $a";
updateq($sql);
echo "Leave still pending";
?>