<?php

session_start();


if(count($_SESSION) > 0)
{
    // die("session already exists");
    if($_SESSION['roleid'] == '1'){
        header('location:dash.php');
    }
    else{
        header('location:dash1.php');
    }
    
}
else{
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="signup-form">
<h1 class="text-center">Login Here</h1> 
    <form action="login2.php" method="post">
        <br>
        <div class="form-group"> 
            <label for="password">Username</label> 
            <input type="text" class="form-control"id="password" name="username" > 
        </div>    
    <br>
    <div class="form-group"> 
            <label for="password">password</label> 
            <input type="password" class="form-control"id="password" name="password" autocomplete="false"> 
    </div> 
    <br>
        <button type="submit" class="btn btn-primary">Login</button> 
    </form> 	
</div>
</body>
</html>