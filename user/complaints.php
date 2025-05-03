<?php
session_start();
$uid=$_SESSION['uid'];
require"header.php";
require"../connect.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="delete from complanits where id=$id";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo "<script> alert('Succefully Deleted');</script>";
	}
}
$sql="select * from complanits where uid=$uid";
$res=mysqli_query($con,$sql);

?>
	<div class="container" style="height:70%">

		<h3 style="color: #ED1C24"> Complaints </h3>
		<br>
		<br>
		<a href="add_complaints.php" class="btn btn-danger"> Add New </a>
		<br>
		<br>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Complaint</th>
		      <th scope="col">Complaint Against</th>
		      <th scope="col">Complaint Siverity</th>
		      <th scope="col">Complaint Area</th>
		      <th scope="col">Complaint Description</th>
		      <th scope="col">Status</th>
		      <th scope="col">Delete</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  	$i=1;
		  	while($row=mysqli_fetch_array($res))
				{
				?>

				    <tr>
				      <th scope="row"><?php echo $i;?></th>
				      <td><?php echo $row['complaint'];?></td>
				      <td><?php echo $row['com_against'];?></td>
				      <td><?php echo $row['com_siveriry'];?></td>
				       <td><?php echo $row['com_area'];?></td>
				       <td><?php echo $row['com_desc'];?></td>
				       <?php
				       if($row['status']==1)
				       {
				       	?>
				       		<td><?php echo "pending"?> </td>
				       	<?php
				       }
				        else if($row['status']==2)
                       {
                        ?>
                            <td><?php echo "OK"?> </td>
                        <?php
                       }
				       else
				       {
				       	?>
				       		<td><?php echo "processing"?> </td>
				       	<?php
				       }
				     ?>
				     <td><a href="complaints.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash" style="color: #ED1C24;font-size: 25px"> </i> </a></td>
				    </tr>


				<?php
					
				}
				?>

		    
		  </tbody>
		</table>
	</div>

<?php
require"footer.php";
?>