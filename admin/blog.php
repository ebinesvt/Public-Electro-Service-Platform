a<?php
require"header.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="delete from blog where id=$id";
	$res=mysqli_query($con,$sql);
	if($res)
	{
		echo "<script> alert('Succefully Deleted');</script>";
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
                                       News</h3>

                                       <br><br> 
                                       <a href="add_blog.php" class="btn btn-primary">  Add New</a>
                                </div>
                                <?php
                                $sql="select * from blog";
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
                                                     Picture
                                                </th>
                                                <th>
                                                    
                                                    Title
                                                </th>
                                                <th>
                                                  Description
                                                </th>
                                                <th>
                                                   NewsDate
                                                </th>
                                                <th>
                                                  Delete
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
                                                   <img src="images/<?php echo $row['pictures'];?>"> 
                                                </td>
                                                
                                                <td>
                                                   <?php echo $row['title'];?> 
                                                </td>
                                                  <td>
                                                   <?php echo $row['description'];?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['news_date'];?> 
                                                </td>
                                                 <td>
                                                   <button style="background-color: white;border: none" onclick="deletefn(<?php echo $row['id'];?>)">  <i  style="color:red;font-size: 30px" class="fa fa-trash"></i></button>
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
                <script type="text/javascript">
                    function deletefn(id)
                    {
                        var f=confirm("Do you want to delete");
                        if(f==true)
                        {
                            window.location.href="blog.php?id="+id;
                        }
                        else
                        {
                            window.location.href="blog.php";
                        }
                    }
                </script>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
       <?php
       require"footer.php";
       ?>