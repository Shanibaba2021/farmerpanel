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

$sql="select * from leaves ";  
$result = selectq($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Id</th><th>Reason</th><th>Username</th><th>Date</th><th>Approve</th><th>Reject</th><th>Pending</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["reason"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["date"]."</td>";
    if($row['request'] ==1 ){
      echo "<td><button >Approved</button></a></td>";
    }
    else
    {
      echo "<td><a href='approve.php?id=$row[id]'><button >Approve</button></a></td>";
    }
    if($row['request'] ==2){
      echo "<td><button >Rejected</button></a></td>";
    }
    else{
      echo "<td><a href='reject.php?id=$row[id]'><button >Reject</button></a></td>";
    }
    echo "<td><a href='pending.php?id=$row[id]'><button >Pending</button></a></td>";
    echo "</tr>";

  }
} else {
  echo "0 results";
}

$conn->close();


?>

</body>
</html>