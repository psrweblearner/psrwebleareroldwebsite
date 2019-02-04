<?php
include('blog-pagination.php');
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
	<h1>Blog</h1>
       <div class="row">
	       <?php
			while($row = mysqli_fetch_array($nquery)){
			?>
			  <div class="col-md-6 grid_3">
					<h3><a href="inner-blog.php?id=<?php echo $row['id'];?>"><?php echo $row['heading'];?></a></h3>
					<a href="inner-blog.php?id=<?php echo $row['id'];?>"><img src="admin/images/blog/<?php echo $row['project'];?>" class="img-responsive" alt=""/></a>
					
					<div class="blog-poast-info">
						<ul>
						<li><span><i class="fa fa-calendar"> </i>12-04-2015</span></li>
						</ul>
			   
				    </div>
					<p><?php echo $row['content'];?></p>
					<div class="button"><a href="inner-blog.php?id=<?php echo $row['id'];?>">Read More</a></div>
				</div>
				<?php };?>
				</div>
			  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
      </div>
</div>
<!-- gallery -->
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