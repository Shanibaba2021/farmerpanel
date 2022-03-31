<?php
include 'db.php';
$sql = "DELETE FROM STAFF WHERE id = '".$_GET["id"]."'";
deleteq($sql);
?>