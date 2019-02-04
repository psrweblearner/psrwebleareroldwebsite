	<div class="callbacks_container">

				<ul class="rslides callbacks callbacks1" id="slider4">

				<?php include("db/db.php");

					$query="select * from banners ORDER BY ID DESC";

					$run=mysqli_query($con,$query);

					while($row=mysqli_fetch_array($run)){

					?>

					<li class="container-fluid">

						<!--<div class="banner-top" style=" background:url(admin/images/banner/) no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;min-height: 480px;">-->
<img src="admin/images/banner/<?php echo $row['image'];?>">
<pre><?php echo $row['image_desc'];?></pre>

</li>
<?php }?>
</ul>

			</div>

		

<!-- To bottom button

		<div class="thim-click-to-bottom">

			<div class="rotate">

				<a href="#project" class="scroll">

					<i class="fa fa-ellipsis-v"></i>

				</a>

			</div>

		</div>-->