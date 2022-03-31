<?php

session_start();
include'db.php';
print_r($_SESSION);
if(count($_SESSION) == 0)
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="signup-form">
<h1 class="text-center">Request for leave Here</h1> 
    <form action="leave.php" method="post">
        <div class="form-group"> 
            <label for="username">Reason</label> 
        <input type="text"  id="name" name="reason">    
        </div>
    <br>
    <div class="form-group"> 
            <label for="password">Date</label> 
            <input type="date" class="form-control"id="date" name="date"> 
    </div> 
    <br>
        <button type="submit" class="btn btn-primary">
        Submit
        </button> 
    </form> 	
</div>
</body>
</html>