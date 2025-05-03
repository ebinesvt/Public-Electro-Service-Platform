<?php 
require "connection.php";
$id=$_GET['id'];
$query="DELETE FROM comments WHERE ID='$id'";
$res=mysqli_query($con,$query);
	if($res)
	{
		echo "<script>alert('Comment Deleted..!');
		window.location.href='comments.php';
		</script>";
	}

 ?>