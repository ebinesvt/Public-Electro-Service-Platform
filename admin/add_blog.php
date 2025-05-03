<?php
 require 'header.php';
require '../connect.php';
if(isset($_POST['submit'])){
	$title=$_POST['txttitle'];
	$date=$_POST['txtdate'];
	$des=$_POST['txtdes'];
	$img=$_FILES['txtimg']['name'];

	if(move_uploaded_file($_FILES['txtimg']['tmp_name'], 'images/'.$img)){
		$sql="insert into blog(pictures,title,description,news_date)values('$img','$title','$des','$date')";
		//echo $sql;
		if(mysqli_query($con,$sql)){
			echo "<script>alert('Successful')</script>";
		}


	}

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="span9">
			<div class="content">
		<div class="">
			
			<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" name="txttitle" >
			</div>
			<div class="form-group">
				<label>Date</label>
				<input type="date" class="form-control" name="txtdate" >
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="txtdes" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file"  name="txtimg" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" >
			</div>
		</div>
			<img id="img" width="100" height="100">
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
		
		
	</div>
		
	</div>

</body>
</html>