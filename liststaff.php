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
if(count($_SESSION) == 0) {
    header('location:login.php');
}

echo "<br>";
echo "<br>";

$sql="select * from staff WHERE roleid='2' ";  
$result = selectq($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Id</th><th>Name</th><th>Username</th><th>RoleId</th><th>Image</th><th>Password</th><th>Edit</th><th>Delete</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["roleid"]."</td>";
    echo "<td>".$row["filename"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td><a href='edit.php?id=$row[id]'><button >Edit</button></a></td>";
    echo "<td><a href= 'delete.php?id=$row[id]'><button>Delete</button></a></td>";
    echo "</tr>";

  }
} else {
  echo "0 results";
}

$conn->close();


?>

</body>
</html>