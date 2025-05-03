a<?php
require"header.php";
// if(isset($_GET['id']))
// {
//     $id=$_GET['id'];
//     $sql="delete from comments where id=$id";
//     $res=mysqli_query($con,$sql);
//     if($res)
//     {
//         echo "<script> alert('Succefully Deleted');</script>";
//     }
// }
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
                               $sql="select * from comments,register where comments.uid=register.id   order by comments.id desc ";
                                  $result=mysqli_query($con,$sql);
                                  $n=mysqli_num_rows($result);
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
                                                  Comment
                                                </th>
                                              
                                              
                                                <th> 
                                                    Reply
                                                </th>
                                               <th>
                                                    Delete
                                                </th>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$i=1;
                                        	while($row=mysqli_fetch_array($result))
                                        	{
                                        		?>
                                        		 <tr class="odd gradeX">
                                                <td>
                                                   <?php echo $i++;?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['first_name'];?> 
                                                </td>
                                                <td><?php echo $row['comment'];?></td>
                                                <td><?php if($row['reply']=='') {?><a href="reply.php?id=<?php echo $row['ID'];?>">Add Reply </a><?php } else echo $row['reply']?> </td>

                                               
                                                 <!--< class="odd gradeX">-->
                                               
                                                 <!--<td>
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
                                                </td>-->
                                                 <td>
                                                  <a href='deletecomment.php?id=<?php echo $row['ID']; ?>'> <button style="background-color: white;border: none" onclick="deletefn(<?php echo $row['id'];?>)">  <i  style="color:red;font-size: 30px" class="fa fa-trash"></i></button></a>
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