<?php  
include("db/database.php");

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
				<h2 class="title1">Signup</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form method="post" action="#" >
							<input type="email"  name="user_name" placeholder="Enter User ID" required="">
							<input type="password" name="user_pass"  placeholder="Password" required="">
							<input type="email"  name="user_email" placeholder="Enter Your Email" required="">
							<button class="btn btn-success" name="signup" id="login-button">SignUp</button>
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
if(isset($_POST['signup'])){
	//text data variables////////////////////////////////////////
	$user_name= $_POST['user_name'];
	$user_pass= $_POST['user_pass'];
	$user_email= $_POST['user_email'];
$user_pass=base64_encode($user_pass);
		
	$insert ="insert into admin_login(user_name,user_pass,user_email) values ('$user_name','$user_pass','$user_email')";
	$run = mysqli_query($con, $insert);
		if($run){
			echo"<script language='javascript'>alert(' successfilly SignUp')</script>";
		}
	}
?>