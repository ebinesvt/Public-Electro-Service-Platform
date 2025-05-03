a<?php
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

                                       <br><br> 
                                       <a href="add_staff.php" class="btn btn-primary"> Add Staff</a>
                                </div>
                                <?php
                                $sql="select * from staff";
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
                                                     Name
                                                </th>
                                                <th>
                                                    
                                                    Area
                                                </th>
                                                <th>
                                                  Designation
                                                </th>
                                                <th>
                                                   Place
                                                </th>
                                                <th>
                                                  Email
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
                                                   <?php echo $row['name'];?> 
                                                </td>
                                                
                                                <td>
                                                   <?php echo $row['area'];?> 
                                                </td>
                                                  <td>
                                                   <?php echo $row['designation'];?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['place'];?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['email'];?> 
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