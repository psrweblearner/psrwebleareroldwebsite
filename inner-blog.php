<?php
include("db/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Best Web Learner Website</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="In Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />  <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<link href="css/lightcase.css" rel="stylesheet" type="text/css" />

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!--Header-->
<header>
<?php include("includes/home-header.php");?>	
</header>
<!--Header-->
<div class="innerpage-banner">
	<div class="layer1">
	</div>
</div>
<div class="blog">
<div class="container">
	       <div id="inner-blog">
	       <?php  $page_id=$_GET['id'];
 $query="select * from blog where id='$page_id'";
$run=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($run)){
			   ?>
<h4><?php echo $row['heading'];?></h4>
<div class="row">
<p align="justify"><img src="admin/images/blog/<?php echo $row['project'];?>" class="img-responsive" alt="" align="left"/>
<?php echo $row['content'];?></p>
</div>
 </div>
  </div>
<div class="container">
		<p align="center"><a href="admin/images/inner-blog/<?php echo $row['zipfile'];?>"><button class="btn btn-success">Download</button></a></p>
	</div><br>
	<?php };?>
	<?php 
	$query="select * from inner_blog where blog_id='$page_id'";
	$run=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($run)){
	?>
	<div class="container">
		<iframe id="myframe" src="admin/images/inner-blog/<?php echo $row['multiple_file'];?>"></iframe>
	</div>
			<?php };?><br>
	
     
</div>
<section>
	<?php include("includes/footer.php");?>
</section>

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- gallery light-case -->
		<script src="js/lightcase.js"></script>
		<script src="js/jquery.events.touch.js"></script>
		<script>
			$('.showcase').lightcase();
		</script>
		<!-- //gallery light-case -->
		
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script> 
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>