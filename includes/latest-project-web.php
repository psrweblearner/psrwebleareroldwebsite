<div class="container py-3" id="project">
		<h3 class="heading text-center mb-5"> Latest Web Project </h3>
			<div class="row inner-sec">
			
				<div class="col-lg-4 col-md-6 news-left">
				
					<ul id="demo1_thumbs" class="list-inline">
					<?php include("db/db.php");
						$query="select * from web_project ORDER BY ID DESC LIMIT 0,4";
						$run=mysqli_query($con,$query);
						while($row= mysqli_fetch_array($run)){
					?>
					<li>
							<a href="admin/images/webproject/<?php echo $row['project'];?>">
								<img src="admin/images/webproject/<?php echo $row['project'];?>" alt="" data-desoslide-caption="<h3><?php echo $row['heading'];?></h3><p><?php echo $row['date'];?></p>">
								<div class="mid-text-info">
									<p><?php echo $row['heading'];?></p>
								</div>
							</a>
						</li>
						<?php }?>
					</ul>
					<br>
					
				</div>
				
				<div id="demo1_main_image" class="col-lg-8 col-md-6 news-right">
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
