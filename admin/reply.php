<?php
 require 'header.php';
require '../connect.php';
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	
	$des=$_POST['txtdes'];
	
		$sql="update comments set reply='$des' where ID=$id";
		//echo $sql;
		if(mysqli_query($con,$sql)){
			echo "<script>alert('Successful');
			window.location.href='comments.php';</script>";
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
				
				<input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id'];?>" >
			</div>
		
			<div class="form-group">
				<label>Reply</label>
				<textarea name="txtdes" class="form-control"></textarea>
			</div>
			
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
		
		
	</div>
		
	</div>

</body>
</html>