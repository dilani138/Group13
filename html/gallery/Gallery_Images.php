<?php include("../includes/new_main_header.php");?>


	
	<div class=image>
		<h3></h3>
		<h3>Image Gallery</h3><br/>
		 <object  width="30%" height="200px" align = "middle" data="linux.jpg" style="border:5px solid #000080"></object> 
		 <div class="desc">Deccription about picture</div>
	</div>
	
<div class = "imageGallery">
	<section id="content">
		<div class="gallery">
			<ul>
				<li>
					
				  <a class="fancybox" rel="group" href="Images/1.jpg">
				    <img src="Images/1.jpg" alt="" width="100" height="100">

				  </a>
				  
			
				</li>

				<li>
					
				  <a  class="fancybox" rel="group" href="Images/2.jpg">
				    <img src="Images/2.jpg" alt="Forest" align = "middle" width="100" height="100"/>
				  </a>
				  
		
				</li>

				<li>
		
				  <a  class="fancybox" rel="group" href="Images/3.jpg">
				    <img src="Images/3.jpg" alt="Northern Lights" width="100" height="100">
				  </a>
				  
				</li>

				<li>
		
				  <a  class="fancybox" rel="group" href="Images/5.jpg">
				    <img src="Images/5.jpg" alt="Mountains" width="100" height="100">
				  </a>
				  
				</li>

				<li>
					
				  <a  class="fancybox" rel="group" href="Images/2.jpg">
				    <img src="Images/4.jpeg" alt="Forest" align = "middle" width="100" height="100"/>
				  </a>
				  
		
				</li>

				<li>
					
				  <a  class="fancybox" rel="group" href="Images/2.jpg">
				    <img src="Images/6.jpg" alt="Forest" align = "middle" width="100" height="100"/>
				  </a>
				  
		
				</li>

			</ul>	
		</div>
	</section>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

</body>
</html>