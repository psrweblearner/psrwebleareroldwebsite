<?php  
include("db/database.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Login Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body>

	
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="#" method="post">
							<input type="email" class="user" name="user_name" placeholder="Enter Your Email" required="">
							<input type="password" name="user_pass" class="lock" placeholder="Password" required="">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<button class="btn btn-success" name="login" id="login-button">Submit</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
	
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>
<?php
if(isset($_POST['login'])){
	$user_name =  $_POST['user_name'];
	$user_pass =  $_POST['user_pass'];
	$user_pass = base64_encode($user_pass);
	
	$login_query = "select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";
	$run =mysqli_query($con,$login_query);
	if(mysqli_num_rows($run)>0){
	$_SESSION['user_name']=$user_name;
		echo"<script type='text/javascript' language='javascript'>window.open('index.php','_self')</script>";
	}
	else{
		echo"<script type='text/javascript'>alert('User Name or Password is incorrect!')</script>";
	}
	
}

?>