<?php
session_start();
$uid=$_SESSION['uid'];
require"header.php";
require"../connect.php";
if(isset($_POST['sub']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $ph=$_POST['ph'];
    $img=$_POST['img'];
    $address=$_POST['address'];
    $sql="update register set first_name='$fname',last_name='$lname',ph='$ph',address='$address' where id=$uid";
    $res=mysqli_query($con,$sql);
    if($res)
    {
        if(($_FILES['upload']['name']))
        {
            echo "haii";
            move_uploaded_file($_FILES['upload']['tmp_name'],"profile/".$_FILES['upload']['name']);
            $profile=$_FILES['upload']['name'];
            $sql="update register set profile='$profile' where id=$uid";
            $res=mysqli_query($con,$sql);
            
        }
        echo "<script> alert('Updated');</script>";
    }

}
$sql="select * from register where id=$uid";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);


?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        
        .full-width{
    float:left;width:100%;margin-top:30px;min-height:100px;position:relative;
}
.form-style-fake{position:absolute;top:0px;}
.form-style-base{position:absolute;top:0px;z-index: 999;opacity: 0;}
.imgCircle{border-radius: 50%;}
.form-control{padding: 10px 50px;}
.form-input{height:50px;border-radius: 0px;margin-top: 20px;}
.Profile-input-file{
    height:480px;width:180px;left:33%;
    position: absolute;
    top: 0px;
    z-index: 999;
    opacity: 0 !important;
}
.mg-auto{
    margin:0 auto;max-width: 200px;overflow: hidden;
}
.fake-styled-btn{
    background: #006cad;
    padding: 10px;
    color: #fff;
}
#main-input{width:250px;}
.input-place{
    position: absolute;top:35px;left: 20px;font-size:23px;color:gray;}
.margin{margin-top:10px;margin-bottom:10px;}
.truncate {
    width: 250px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.bg-form{
    float:left;width:100%;
    position:relative;
   
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 0px;
}
.bg-transparent{
    background: rgba(0,0,0,0.5);float: left;
    width: 100%;margin-top: 0px;
}
.container{
    background: url("");
    background-repeat: no-repeat;
    background-size: cover;
}
.custom-form{float: left;width:100%;border-radius: 20px;box-shadow: 0 0 16px #fff;overflow: hidden;
background: rgba(255,255,255,0.6);
}
.img-section{
    float: left;width: 100%;padding-top: 15px;padding-bottom: 15px;background: rgba(0,0,0,0.7);position: relative;
}
.img-section h4{color:#fff;}
#PicUpload{
    color: #ffffff;
    width: 180px;
    height: 180px;
    background: rgba(255,255,255,0.4);
    padding: 100px;
    position: absolute;
    left: 30.5%;
    border-radius: 50%;
    display: none;
    top:15px;
}
.camera{
    font-size: 50px;
    color: #333;
}
.custom-btn{
    margin-top: 15px;
    border-radius: 0px;
    padding: 10px 60px;
    margin-bottom: 15px;
}
#checker{
    opacity: 0;
    position: absolute;
    top: 0px;
    cursor: pointer;
}
.color{
    color:#fff;
}

/*====== style for placeholder ========*/

.form-control::-webkit-input-placeholder {
    color:lightgray;
    font-size:18px;
}
.form-control:-moz-placeholder {
    color:lightgray;
    font-size:18px;
}
.form-control::-moz-placeholder {
    color:lightgray;
    font-size:18px;
}
.form-control:-ms-input-placeholder {
    color:lightgray;
    font-size:18px;
}


    </style>
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="width:100%;background-image: url(img/1000.jpg)">
    
  <div class="full-width col-md-3">
  </div>

        <div class="full-width col-md-6" style="">
            <h1 class="text-center color">Edit Profile Snippet</h1>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="custom-form">
                <div class="text-center bg-form">
                    <form method="post" action="" enctype="multipart/form-data">
                    <div class="img-section">
                        <?php 
                        if($row['profile']=='')
                        {
                             ?><img src="img/pic.png" width=30% class="imgCircle" alt="Profile picture"><?php

                        }
                        else
                        {
                            ?>
                             <img src="profile/<?php echo $row['profile']?>" width=30% class="imgCircle" alt="Profile picture">
                            <?php
                        }
                        ?>
                       
                        <span class="fake-icon-edit"  id="PicUpload" style="color: #ffffff;"><span class="glyphicon glyphicon-camera camera"></span></span>
                    <div class="col-lg-12">
                        <h4 class="text-right col-lg-12"><span class="glyphicon glyphicon-edit"></span> Edit Profile</h4>
                        <input type="checkbox" class="form-control" id="checker">
                    </div>
                    </div>
                    <input type="file" name="upload" id="image-input" style="width:200px;height:400px;" onchange="readURL(this);" accept="image/*"  class="form-control form-input Profile-input-file" >
                </div>
                <div class="col-lg-12 col-md-12">
                    <input type="hidden" name="img" value="<?php echo $row['profile'];?>">
                    <input type="text" class="form-control form-input" value="<?php echo $row['first_name']?>" placeholder="Name" disabled id="name" name="fname">
                    <span class="glyphicon glyphicon-user input-place"></span>
                </div>
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="form-control form-input" value="<?php echo $row['last_name']?>" placeholder="Name" disabled id="lname" name="lname">
                    <span class="glyphicon glyphicon-user input-place"></span>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="form-control form-input" value="<?php echo $row['ph']?>" placeholder="Phone Number" disabled id="phone" name="ph">
                    <span class="glyphicon glyphicon-earphone input-place" name="ph"></span>
                </div>
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="form-control form-input"  value="<?php echo $row['address']?>" placeholder="Address"  id="place1" name="address">
                    <span class="glyphicon glyphicon-map-marker input-place"></span>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    <button type="submit" name="sub" class="btn btn-info btn-lg custom-btn" id="submit" disabled><span class="glyphicon glyphicon-save"></span> Save</button>
                </div>
                </div>
            </form>
            </div>
        </div>

    </div>
    </div>
        
    </div>
</div>


<!--==================================== sorry I am a newbie in bootsnipp so I am unable to link js to html in bootsnipp thats why I have included the script in html ===================-->

<script>

    $('input[id=base-input]').change(function() {
        $('#fake-input').val($(this).val().replace("C:\\fakepath\\", ""));
    });

    <!--==================Javascript code for custom input type file on button ================-->

    $('input[id=main-input]').change(function() {
        console.log($(this).val());
        var mainValue = $(this).val();
        if(mainValue == ""){
            document.getElementById("fake-btn").innerHTML = "Choose File";
        }else{
            document.getElementById("fake-btn").innerHTML = mainValue.replace("C:\\fakepath\\", "");
        }
    });

    <!--=========================input type file change on button ends here====================-->

//    ===================== snippet for profile picture change ============================ //

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.imgCircle')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

//    =================================== ends here ============================================ //

    var checkme = document.getElementById('checker');
    var userImage = document.getElementById('image-input');
    var userName = document.getElementById('name');
    var userlName = document.getElementById('lname');
    var userPhone = document.getElementById('phone');
    var userEmail = document.getElementById('email');
    var userPlace = document.getElementById('place1');
    var UserSend = document.getElementById('submit');
    var editPic = document.getElementById('PicUpload');
    checkme.onchange = function() {
        UserSend.disabled = !this.checked;
        userImage.disabled = !this.checked;
        userName.disabled = !this.checked;
          userlName.disabled = !this.checked;
        userPhone.disabled = !this.checked;
        userEmail.disabled = !this.checked;
        userPlace.disabled = !this.checked;
        editPic.style.display = this.checked ? 'block' : 'none';
    };
    </script>
</body>
</html>


<?php
require"footer.php";
?>