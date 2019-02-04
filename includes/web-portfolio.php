<h2 class="heading text-center mb-sm-5 mb-4">My Web Projects</h2>
		<div class="container">
			<div class="row">
			<div class="col-lg-12">
				<div id="pagination_data"> 
               </div>
               </div>
				</div>
		</div>
			
			<script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"web-project.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script> 		
			
			
			
				
		
		
