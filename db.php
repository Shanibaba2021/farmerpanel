<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


function selectq( $sql ) { 
global $conn;
$result = $conn->query($sql);
return $result;
}

function deleteq($sql){
    global $conn;
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

function updateq($sql){
    global $conn;       
    $result = mysqli_query($conn,$sql);
}

function insertq($sql){
    global $conn;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}

