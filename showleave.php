<!DOCTYPE HTML>
<html>  
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  justify-content: center;
}
</style>
<?php
include 'db.php';

session_start();

print_r($_SESSION);
$u_id = $_SESSION['username'];
if(count($_SESSION) == 0) {
    header('location:login.php');
}

echo "<br>";
echo "<br>";

$sql="select * from leaves WHERE username = '$u_id' ";  
$result = selectq($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Id</th><th>Reason</th><th>Username</th><th>Date</th><th>Action</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["reason"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["date"]."</td>";
    echo "<td>".$row["request"]."</td>";
    echo "</tr>";

  }
} else {
  echo "0 results";
}

$conn->close();


?>

</body>
</html>