<?php
session_start();
require"../connect.php";
require"header.php";

if(isset($_GET['id'])){
	$uid=$_SESSION['uid'];
$id=$_GET['id'];
$sql="insert into like_staff(sid,uid)values($id,$uid)";
$res-mysqli_query($con,$sql);
header("location:view_staff.php");

}

if(isset($_GET['uid'])){
	$uid=$_SESSION['uid'];
$id=$_GET['uid'];
$sql="insert into unlike_staff(sid,uid)values($id,$uid)";
$res-mysqli_query($con,$sql);
header("location:view_staff.php");
}




?>