<?php 
include('graphic-pagination.php');?>
	<div class="container py-sm-3">
		<h2 class="heading text-center mb-sm-5 mb-4">My Graphic Projects</h2>
		<div class="row">
		<?php
    		while($row = mysqli_fetch_array($nquery)){
    			?>
		<div class="col-lg-4">
			<div class="galry-grid grid-top-rgt">
					<a href="admin/images/graphicproject/<?php echo $row['project'];?>" class="showcase" data-rel="lightcase:myCollection:slideshow" >
						<img src="admin/images/graphicproject/<?php echo $row['project'];?>" alt="<?php echo $row['heading'];?>" class="img-responsive zoom-img">
						<div class="w3agile-text w3agile-text-small1">
							<h5><?php echo $row['heading'];?></h5>
						</div>
						
					</a>
					<p align="justify"><?php echo $row['content'];?></p>
				</div>
		</div>
		<?php };?>
		
		</div> 
		<div class="row">
			<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
		</div>
		</div>