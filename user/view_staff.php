<?php
session_start();
require"../connect.php";
require"header.php";
$uid=$_SESSION['uid'];
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
                                       Stafff</h3>
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
                                                    Profile
                                                </th>
                                                <th>
                                                    Like
                                                </th>
                                                 <th>
                                                    Unlike
                                                </th>
                                            
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$i=1;
                                        	while($row=mysqli_fetch_array($res))
                                        	{
                                                $sql1="select * from like_staff where uid=".$uid." and sid=".$row['id'];
                                                $res1=mysqli_query($con,$sql1);
                                               // echo $sql1;
                                                $count=mysqli_num_rows($res1);


                                                $s="select * from like_staff where  sid=".$row['id'];
                                                $r=mysqli_query($con,$s);
                                              // echo $s;
                                                $c=mysqli_num_rows($r);
                                                $s1="select * from unlike_staff where  sid=".$row['id'];
                                                $r1=mysqli_query($con,$s1);
                                              // echo $s;
                                                $c1=mysqli_num_rows($r1);


                                        		?>
                                        		 <tr class="odd gradeX">
                                                <td>
                                                   <?php echo $i++;?> 
                                                </td>
                                                 <td>
                                                   <?php echo $row['name'];?> 
                                                </td>
                                                <td><?php echo $row['area'];?></td>
                                                <td><?php echo $row['designation'];?></td>
                                                <td><?php echo $row['place'];?></td>
                                                <td><?php echo $row['profile'];?></td>
                                                <td> <?php
                                                    echo $c;
                                                 if($count>0)
                                                { 
                                                     ?> <i class="fa fa-heart" style="color: red"></i><?php } else{ ?> <a href="like.php?id=<?php echo $row['id']?>" class="fa fa-heart" style="color: pink;font-size: 20px" ></a> <?php } ?>
                                            </td>
                                                <td>
                                                <?php $sql2="select * from unlike_staff where uid=".$uid." and sid=".$row['id'];
                                              //  echo $sql2;
                                                $res2=mysqli_query($con,$sql2);
                                               // echo $sql1;
                                                $count2=mysqli_num_rows($res2);
                                                echo $c1;
                                                 if($count2>0)
                                                {
                                                   // echo $count;?> <i class="fa fa-thumbs-down" style="color: red"></i><?php } else{ ?> <a href="like.php?uid=<?php echo $row['id']?>" class="fa fa-thumbs-down" style="color: pink;font-size: 20px" ></a> <?php } ?>

                                                 
                                                </td>
                                             
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