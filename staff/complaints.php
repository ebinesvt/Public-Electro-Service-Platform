<?php
require"header.php";
$uid=$_SESSION['uid'];
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="update complanits set status=2 where id='$id'";
    echo $sql;
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo "<script> alert('Succefully Changed');</script>";
	}
}
?>
                    <!--/.span3-->
                    <div class="span9" >
                        <div class="content">
                            
                            <!--/#btn-controls-->
                            
                            <!--/.module-->
    
                            <div class="module" style="width:900px;">
                                <div class="module-head">
                                    <h3>
                                       Approve Organization</h3>
                                </div>
                                <?php
                                $sql="select c.complaint,c.com_against,c.com_area,c.com_desc,c.status,c.staff_id,c.com_siveriry,r.first_name,c.id from complanits c,register r where c.uid=r.id and c.staff_id=$uid";
                               
                                $res=mysqli_query($con,$sql);
                                ?>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                   Sl No
                                                </th>
                                                
                                                <th>
                                                    User Name
                                                </th>
                                                <th>
                                                  Complaint
                                                </th>
                                                <th>
                                                   Complaint Against
                                                </th>
                                                <th>
                                                    Complaint Siverity
                                               
                                                </th>
                                                <th>
                                                    complaint Area
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                              
                                                <th> 
                                                    Status
                                                </th>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$i=1;
                                        	while($row=mysqli_fetch_array($res))
                                        	{
                                        		?>
                                        		 <tr class="odd gradeX">
                                                <td>
                                                   <?php echo $i++;?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['first_name'];?> 
                                                </td>
                                                <td><?php echo $row['complaint'];?></td>
                                                <td><?php echo $row['com_against'];?></td>
                                                <td><?php echo $row['com_siveriry'];?></td>
                                                <td><?php echo $row['com_area'];?></td>
                                                <td><?php echo $row['com_desc'];?></td>
                                                   <?php
                                                   if($row['status']==1)
                                                   {
                                                    ?>
                                                    <td>
                                                        <?php echo "processing"?>
                                                        <a href="complaints.php?id=<?php echo $row['id'];?>" > Click Here To close </a> </td>
                                                    <?php
                                                   }
                                                   else if($row['status']==2)
                                                   {
                                                    ?>
                                                        <td><?php echo "OK"?> </td>
                                                    <?php
                                                   }

                                        	}
                                        	?>
                                           
                                           
                                           
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
       <?php
       require"footer.php";
       ?>