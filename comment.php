<?php 
session_start();
require 'header.php'; 
require 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Comment and reply system in PHP</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="main.css">
	<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 post">
			<h2>Post title</h2>
			<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nam illum ipsum corporis voluptatibus, perspiciatis possimus vitae consequuntur. Voluptate quisquam reprehenderit sapiente cupiditate esse, consequuntur vel dicta culpa dolorem rerum.</p>-->
		</div>

		<!-- comments section -->
		<div class="col-md-6 col-md-offset-3 comments-section">
			<!-- comment form -->
			<!--<form class="clearfix" action="index.php" method="post" id="comment_form">
				<h4>Post a comment:</h4>
				<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
				<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
			</form>-->

			<!-- Display total number of comments on this post  -->
			<!--<h2><span id="comments_count">0</span> Comment(s)</h2>
			<hr>-->
	<!--<title>comment section</title>
	<meta charset="utf-8">
	<style>

body{
 margin:0px;
 font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
 }

input[type=text], select {
 width: 50%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit]:hover {
 background-color: #00a7d1;
}

textarea, select {
 width: 50%;
 border-radius: 5px;
 margin: 7px 0;
 border: 1px solid #ccc;
 padding: 14px 18px; 
 display: inline-block;
 box-sizing: border-box;
}

input[type=submit] {
 width: 50%;
 border: none;
 color: white;
 padding: 14px 20px;
 background-color: #01c9fb;
 margin: 8px 0;
 cursor: pointer;
 border-radius: 4px;
 
}

</style>-->

</head>
<body>
	<form method="post">

<div align = "center">

	<!--<textarea  name="comment" placeholder="comment" ></textarea>
	<input type="submit" name="submit" value="post" class="btn btn-danger" style="margin-top: 50px;margin-left: -150px;width: 80px">
	<div class="col-md-6 col-md-offset-3 comments-section">-->
			

			<?php
				$sql="select * from comments,register where comments.uid=register.id   order by comments.id desc ";
				$result=mysqli_query($con,$sql);
				$n=mysqli_num_rows($result)
				?>
			<!-- Display total number of comments on this post  -->
			<h2><span id="comments_count"> <?php echo $n;?></span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
				<div class="comment clearfix">
					<?php
						while($row=mysqli_fetch_array($result))
							{

							
							?>
								<div class="comment-details">
									<p>	<span class="comment-name" style="color: blue;font-weight: 20px"> <?php echo $row['first_name'];?> :</span><?php echo $row['comment'];?>.</p>
									
								</div>
							<?php
							}
							?>
						
					</div>
			</div>

</div>
</div>
		<!-- // comments section -->
	</div>
</div>
<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
<?php

echo "<br><br><br><br><br><br><br>";
 require 'footer.php'; ?>