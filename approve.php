<?php
include 'db.php';
$a = $_GET["id"];
$sql = "UPDATE leaves SET request = '1' WHERE id = $a";
updateq($sql);
echo "Record Modified Successfully";
?> 