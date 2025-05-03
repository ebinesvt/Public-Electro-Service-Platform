<?php
require"header.php";
if(isset($_POST['sub']))
{
  
  $name=$_POST['name'];
  $area=$_POST['area'];
  $place=$_POST['place'];
   $desig=$_POST['desig'];
   $email=$_POST['email'];
   $pass=$_POST['pass'];
  $file=$_FILES['image']['name'];

   $sql="insert into staff values('','$name','$area','$desig','$place','$email','$pass','$file')";
   $res=mysqli_query($con,$sql);
   if($res)
   {
      $uid=$con->insert_id;
      $sql="insert into login(email,password,role,uid)values('$email','$pass','staff',$uid)";
      $res=mysqli_query($con,$sql);
      
    move_uploaded_file($_FILES['image']['tmp_name'],"../staff/profile/".$file);
    echo "<script>alert('added Successfully');</script>";
      echo "<script> window.location.href='view_off.php'</script>";
   }
}
?>
<script type="text/javascript">
function validname1(x)
{
  var regex = /^[A-Z a-z]+$/;
  if(regex.test(x) == false)
  {
    alert("Invalid Name");
  }
}


function validname2(x)
{
  var regex1 = /^[A-Z a-z]+$/;
  if(regex1.test(x) == false)
  {
    alert("Invalid ");
  }
}
function validaddress(x)
{
  var regex1 = /^[A-Z a-z]+$/;
  if(regex1.test(x)==false)
  {
    alert("invalid address");
  }
}

function validphno(x)
{
  var regex1 = /^[0-9]+$/;
  if(regex1.test(x)==false)
  {
    alert("invalid Phno");
  }
  else if(x.length>10)
  {
    alert("invalid Phno")
  }
}
function validnationality(x)
{
  var regex = /^[A-Z a-z]+$/;
  if(regex.test(x)==false)
  {
    alert("invalid Nationality");
  }
}
function validEmailid(x)
{
  var regex = /^[A-Z a-z @ ]+$/;
  if(regex.test(x) == false)
  {
    alert("invalid Emailid");
  }
}
function validpassword(x)
{
  
  var regex = /^[A-Z a-z 0-8]+$/;
  if(regex.test(x)==false)
  {
    alert("invalid Password");
  }
  
}
</script>
                    <!--/.span3-->
                    <div class="span9" >
                        <div class="content">
                            
                            <!--/#btn-controls-->
                            
                            <!--/.module-->
    
                            <div class="module">
              <div class="module-head">
                <h3>Forms</h3>
              </div>
              <div class="module-body">

               

                  <br />

                  <form class="form-horizontal row-fluid" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                      <label class="control-label" for="basicinput">Satff Name</label>
                      <div class="controls">
                        <input type="text" id="basicinput" name="name" placeholder=" Name" class="span8" onkeyup="validname1(this.value)">
                       
                      </div>
                    </div>

                   <div class="control-group">
                      <label class="control-label" for="basicinput">Area </label>
                      <div class="controls">
                        <select name="area" class="span8">
                          <option value="panchayath">Panchayath </option>
                          <option value="muncipality">Muncipality </option>
                          <option value="corporation"> Corporation</option>
                        </select>
                        
                      </div>
                    </div>
                       <div class="control-group">
                      <label class="control-label" for="basicinput">Designation</label>
                      <div class="controls">
                        <input type="text" id="basicinput" name="desig" placeholder="Designation" class="span8"  onkeyup="validname2(this.value)">
                        
                      </div>
                    </div>
                    

                      <div class="control-group">
                      <label class="control-label" for="basicinput">Place</label>
                      <div class="controls">
                        <input type="text" id="basicinput" name="place" placeholder="Place" class="span8" onkeyup="validname2(this.value)">
                        
                      </div>
                    </div>

                     <div class="control-group">
                      <label class="control-label" for="basicinput">Email</label>
                      <div class="controls">
                        <input type="email" id="basicinput" name="email" placeholder="Email" class="span8">
                        
                      </div>
                    </div>

                     <div class="control-group">
                      <label class="control-label" for="basicinput">Passowrd</label>
                      <div class="controls">
                        <input type="password" id="basicinput" name="pass" placeholder="Password" class="span8">
                        
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Profile Upload</label>
                      <div class="controls">
                        <input type="file" name="image" id="basicinput" placeholder="Type something here..." class="span8">
                        
                      </div>
                    </div>

                   

                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="sub" class="btn">Submit Form</button>
                      </div>
                    </div>
                  </form>
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