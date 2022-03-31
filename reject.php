<?php
include 'db.php';
$as = $_GET["id"];
$sql = "UPDATE leaves set request = '2' where id = $as";
updateq($sql);
echo "Leave Reject Successfully";
?>