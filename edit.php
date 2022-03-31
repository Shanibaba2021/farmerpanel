<?php
include 'db.php';
 if(isset($_POST['id'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $sql = "UPDATE staff set name='" . $_POST['name'] . "',password ='" . $_POST['password']. "' WHERE  id ='" . $_POST['id'] . "'";
    updateq($sql);
    echo "Record Modified Successully";

    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))
    {
        $image = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        // $image = $_FILES["fileToUpload"]["name"];
        $success = "✓ Successfully Updated";
        $sql = "UPDATE staff set filename ='" .$image. "'WHERE  id ='" . $_POST['id'] . "'";
        updateq($sql);
        // echo "Record Modified Successully";
    }
}
$sId = $_GET['id'];
$get_staff="SELECT * FROM staff WHERE id = $sId";
$xy = selectq($get_staff);
$row = $xy->fetch_assoc();

?>
<html>
<head>
</head>
<body>
<form name="frmUser" method="post" action="" enctype="multipart/form-data">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Id: <br>
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Image: <br>
<input type="file" name="fileToUpload" class="txtField" value="<?php echo $row['filename']; ?>">
<img src="<?php echo $row['filename'] ; ?>" alt="">
<?php echo $row['filename']; ?>
<br>
Password:<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br><br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>