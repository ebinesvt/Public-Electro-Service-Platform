<?php
session_start();
$uid=$_SESSION['uid'];
require"../connect.php";
require"header.php";
if(isset($_POST['sub']))
{
	$com=$_POST['com'];
	$ag=$_POST['ag'];
	$sive=$_POST['sive'];
	$area=$_POST['area'];
	$desc=$_POST['desc'];
	$sql="INSERT INTO `complanits`(`uid`, `complaint`, `com_against`, `com_siveriry`, `com_area`, `com_desc`) VALUES ($uid,'$com','$ag','$sive','$area','$desc')";
	echo $sql;
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo "<script> alert('Added Successfully');</script>";
		echo "<script> window.location.href='complaints.php'</script>";
	}

}
?>

<div class="container" style="height:auto">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
		<h3 style="color: #ED1C24"> Add Your Complaints </h3>
		<br><br>
		<form method="post">
		  <div class="form-group">
		    <label for="formGroupExampleInput">Compliant</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="com" placeholder="Enter your Complaint">
		  </div>
		   <div class="form-group">
		    <label for="formGroupExampleInput">Compliant Against</label>
		    <input type="text" class="form-control" id="formGroupExampleInput" name="ag" placeholder=" Complaint Against">
		  </div>
		   <div class="form-group">
		    <label for="formGroupExampleInput">Compliant Siverity</label>
		    <select class="form-control" id="formGroupExampleInput" name="sive">
		    	<option> ----Select ----</option>
		    	<option value="Low">Low </option>
		    	<option value="medium">Medium </option>
		    	<option value="High"> High</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="formGroupExampleInput">Compliant Area </label>
		    <select class="form-control" id="formGroupExampleInput" name="area">
		    	<option> ----Select ----</option>
		    	<option value="panchayath">Panchayath </option>
		    	<option value="muncipality">Muncipality </option>
		    	<option value="corporation"> Corporation</option>
		    </select>
		  </div>

		    <div class="form-group">
		    <label for="formGroupExampleInput">Compliant Description </label>
		    <textarea class="form-control"rows="5" id="comment" placeholder=" Complaint Against" name="desc"></textarea>
		  </div>


		   <div class="form-group">
		   <div class="col-md-4">
		   </div>
		   <input type="submit" name="sub" value="Submit" class="btn btn-danger col-md-4">
		  </div>
		  <br><br> <br><br>
		</form>
	</div>
</div>

<?php
require"footer.php";
?>