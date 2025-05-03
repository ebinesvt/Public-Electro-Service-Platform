<?php
session_start();
require"connect.php";
if(isset($_POST['register']))
{
  $fname=$_POST['first_name'];
  $lname=$_POST['last_name'];
  $email=$_POST['email'];
   $ph=$_POST['ph'];
    $address=$_POST['address'];
  $pass=$_POST['password'];
  $aadhar=$_POST['aadhar'];
  $sql="select * from login where email='$email'";
  $res=mysqli_query($con,$sql);
  if(mysqli_num_rows($res)>0)
  {
    echo "<script> alert('Email Already Exist');</script>";
  }
  else
  {
    $sql="insert into register(first_name,last_name,email,password,ph,address,aadhar)values('$fname','$lname','$email','$pass','$ph','$address','$aadhar')";
    //echo $sql;
    $res=mysqli_query($con,$sql);
    if($res)
    {
      $uid=$con->insert_id;
      $sql="insert into login(email,password,role,uid)values('$email','$pass','user',$uid)";
      $res=mysqli_query($con,$sql);
      
      if($res)
      {
          echo "<script> alert('Registration Completed Successfully');</script>";
      }
      else
      {
        mysqli_query($con,"delete from register where id=$uid");
        echo "<script> alert('Registration Failed');</script>";
      }
    }
     else
      {
        mysqli_query($con,"delete from register where id=$uid");
        echo "<script> alert('Registration Failed');</script>";
      } 
  }
}



if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $sql="select * from login where email='$email' and password='$pass'";
  $res=mysqli_query($con,$sql);
  if(mysqli_num_rows($res)>0)
  {
    $row=mysqli_fetch_array($res);
    $_SESSION['uid']=$row['uid'];
    $_SESSION['uname']=$row['email'];
    header("location:user/index.php");
  }
  else
  {
    echo "<script> alert('Login Failed');</script>";
  }
  
}
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
function validname1(x)
{
  var regex = /^[A-Z a-z]+$/;
  if(regex.test(x) == false)
  {
    alert("Invalid FirstName");
  }
}


function validname2(x)
{
  var regex1 = /^[A-Z a-z]+$/;
  if(regex1.test(x) == false)
  {
    alert("Invalid LastName");
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
  <meta charset="utf-8">
  <title>Form-v4 by Colorlib</title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font-->
  <link rel="stylesheet" type="text/css" href="Login/css/opensans-font.css">
  <link rel="stylesheet" type="text/css" href="Login/fonts/line-awesome/css/line-awesome.min.css">
  <!-- Jquery -->
  <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
  <!-- Main Style Css -->
    <link rel="stylesheet" href="Login/css/style.css"/>
</head>
<body class="form-v4" >
  <div class="page-content" style="background-image: url(img/bg2.jpg);background-repeat:no-repeat;background-size: 100% 100%">
    <div class="form-v4-content">
      <div class="form-left">
        <form class="form-detail" action="#" method="post" id="myform1">
        <h2 style="color:white;margin-left: 20%">Login</h2>
       
          <div style="width:70%">
             <label for="your_email">Your Email</label>
          <input type="text" name="email" id="email" required="" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          </div>
      
          
           <div style="width:70%">
            <label for="password">Password</label>
            <input type="password" name="password" id="pass" required="" class="input-text" required>

          </div>
       
        <div class="form-row-last">
          <input type="submit" name="login" class="register" style="background-color: white;color: #3786bd;margin-left: 15%" value="login">
        </div>
      </form>
      </div>
      <form class="form-detail" action="#" method="post" id="myform2">
        <h2>REGISTER FORM</h2>
        <div class="form-group">
          <div class="form-row form-row-1">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" required="" class="input-text" onkeyup="validname1(this.value)">
          </div>
          <div class="form-row form-row-1">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" required="" class="input-text" onkeyup="validname2(this.value)">
          </div>
        </div>
        <div class="form-row">
          <label for="your_email">Your Email</label>
          <input type="text" name="email" id="your_email" required="" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
        </div>
         <div class="form-row">
          <label for="your_phno">Your PHNO</label>
          <input type="text" name="ph" id="your_phno" required="" class="input-text" required >
        </div>
        <div class="form-group">
          <div class="form-row form-row-1 ">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required="" class="input-text" required>
            <span id="result"> </span>
          </div>
          <div class="form-row form-row-1">
            <label for="comfirm-password">Comfirm Password</label>
            <input type="password" name="comfirm_password" required="" id="comfirm_password" class="input-text" required>
          </div>
        </div>
        <div class="form-row">
          <label for="aadhar">Aadhar Number</label>
          <input type="number" name="aadhar" id="aadhar" required="" class="input-text" required >
        </div>
        <div class="form-row">
          <label for="your_email">Your Address</label>
          <input type="text" name="address" id="your_addres" required="" class="input-text" required onkeyup="validaddress(this.value)">
        </div>
        <div class="form-checkbox">
          <label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
              <input type="checkbox" name="checkbox" required="">
              <span class="checkmark"></span>
          </label>
        </div>
        <div class="form-row-last">
          <input type="submit" name="register" class="register" value="Register" onclick="return fomr_valid()">
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
        success:  function(label){
            label.attr('id', 'valid');
        },
    });
    $( "#myform" ).validate({
        rules: {
          password: "required",
          comfirm_password: {
              equalTo: "#password"
          }
        },
        messages: {
          first_name: {
            required: "Please enter a firstname"
          },
          last_name: {
            required: "Please enter a lastname"
          },
          your_email: {
            required: "Please provide an email"
          },
          password: {
            required: "Please enter a password"
          },
          comfirm_password: {
            required: "Please enter a password",
              equalTo: "Wrong Password"
          }
        }
    });

  </script>
  <script type="text/javascript">
  
    $(document).ready(function()
    {
      $("#password").keyup(function()
      {
        pass=$("#password").val();
        patt=/^[a-z 0-9]{8,20}$/;
        if(patt.test(pass)==false)
        {
         $("#result").text("Weak Password");
        }
        else
        {
          $("#result").text("Strong Password");
        }
      });
    });
  </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>