<?php
include'db.php';
session_start();
print_r($_SESSION);
if(count($_SESSION) ==0 ){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="signup-form">
<h1 class="text-center">Add Staff Here</h1> 
    <form action="addstaff.php" method="post" enctype="multipart/form-data">
        <div class="form-group"> 
            <label for="username">Name</label> 
        <input type="text"  id="name" name="name">    
        </div>
        <br>
        <div class="form-group"> 
            <label for="password">username</label> 
            <input type="text" class="form-control"id="password" name="username" > 
        </div>  
        <br>
        <div class="form-group"> 
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        </div> 
    <br>
    <div class="form-group"> 
            <label for="password">password</label> 
            <input type="password" class="form-control"id="password" name="password" autocomplete="false"> 
    </div> 
    <br>
        <button type="submit" class="btn btn-primary">
        Submit
        </button> 
    </form> 	
</div>
</body>
</html>