<div class="container py-3" id="about">
<?php include("db/db.php");
				$query="select * from home_about";
				$run= mysqli_query($con,$query);
				while($row=mysqli_fetch_array($run)){
				?>
	<h1 class="heading text-center mb-md-5 mb-4"><?php echo $row['heading'];?></h1>
		<div class="row welcome-grids">
		
			<div class="col-lg-6">
			<h4>Why Important?</h4>
				<p class="my-4"><?php echo $row['content'];?></p>
				
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5 welcome-grid3">
				<div class="position">
					<img src="admin/images/about/<?php echo $row['image'];?>" alt="" class="img-fluid" />
				</div>
			</div>
			<?php }?>
		</div>
	</div>