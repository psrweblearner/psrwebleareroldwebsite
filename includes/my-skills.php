<?php include("db/db.php");?>
		<div class="container">
			<h3 class="w3l_header w3_agileits_header">My <span>Skills</span></h3>
			
			<div class="agileinfo_services_grids">
				<div class="row">
				<?php 
	  $query="select * from about_skill";
	  $run=mysqli_query($con,$query);
	  while ($row=mysqli_fetch_array($run)){
		?>
					<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<h4 align="center"><?php echo $row['heading'];?></h4>
						<img src="admin/images/skills/<?php echo $row['file'];?>" class="img-responsive">
						<div class="agileinfo_services_grid1_pos">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						</div>
					</div>
				</div>
				<?php };?>
				
				</div>
				<div class="clearfix"> </div>
			</div>
		
		</div>
	