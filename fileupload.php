<?php
if(isset($_POST['sub']))
{
	$name=$_FILES['upload']['name'];

	move_uploaded_file($_FILES['upload']['tmp_name'], "img/".$name);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data"> 
Upload File <input type="file" name="upload">
<input type="submit" name="sub" value="Submit">
	</form>

</body>
</html>