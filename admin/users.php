<?php
require"header.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="update login set status=1 where uid=$id and type='org'";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo "<script> alert('Succefully Approved');</script>";
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
                                $sql="select * from register";
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
                                                    First Name
                                                </th>
                                                <th>
                                                    Last Name
                                                </th>
                                                <th>
                                                  Contact
                                                </th>
                                                <th>
                                                   Email
                                                </th>
                                                <th>
                                                  Address
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
                                                
                                                <td>
                                                   <?php echo $row['last_name'];?> 
                                                </td>
                                                  <td>
                                                   <?php echo $row['email'];?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['ph'];?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['address'];?> 
                                                </td>
                                                 
                                                <td>
                                                   <?php echo $row['address'];?> 
                                                </td>
                                               
                                            </tr>
                                           
                                        		<?php

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