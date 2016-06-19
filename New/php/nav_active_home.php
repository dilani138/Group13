<!--
================================================================================================
	* |ACTIVE HOME NAVIGATION PAGE. 
	* |LINK TO HOME PAGE.
================================================================================================
-->


<?php include("../in/header.php");?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="../css/media_queries_1.css" /> <!--MEDIA QUERY STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="../css/responsive_navigation.css" />  <!--NAVIGATION STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="../css/basic_structure.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"> <!--FONT FA FA STYLE SHEET -->

	

<body>



	<div class= "col-b-3 topnav" > <!-- RESPONSIVE FOR DIFFERENT SCREEN SIZES -->
	
		<label for="show-menu" class="show-menu">Navigation</label>  <!-- NAVIGATION BUTTON ON MOBILE AND TABLET SCREEN -->
		
		<input type="checkbox" id="show-menu" role="button">	
		
			<ul id="menu" >  <!-- NAVIGATION BEGIN HERE -->
			
			
				<li> <a href="" class= "active" > Home </a> </li> <!-- HOME PAGE -->
				
				
				<li>																			
				<a href="" > About Us <i class= "fa fa-angle-double-down" style= "color: #ffffff;"> </i> </a>  <!-- ABOUT US PAGE -->
				
					<ul class="hidden">
						<li> <a href="about_us.html" > Who We Are </a> </li>
						<li> <a href="authorities_message.html" > Authorities Message </a> </li>
					</ul>

				</li>
				
				
				<li>
				<a href="#"> Gallery <i class= "fa fa-angle-double-down" style= "color: #ffffff;"> </i> </a> <!-- GALLERY PAGE -->
				
					<ul class="hidden">
						<li> <a href="gal_photos.html" > Photos </a> </li>
						<li> <a href="gal_videos.html" > Videos </a> </li>
					</ul>

				</li>
				
				<li> <a href="skill_diectory.html"> Skill Directory </a> </li><!-- SKILL DIRECTORY PAGE -->
			
				<li> <a href="search.html"> <i class= "fa fa-search fa-lg " style= "color: #ffffff;"></i>  Search  </a> </li> <!-- SEARCH PAGE -->
				
				<li> <a href="apply_on-line.html"> Apply On-line </a> </li> <!-- APPLY ON LINE PAGE -->
				
				<li> <a href="contact.html"> Contact </a> </li><!-- CONTACT PAGE -->
				
				<li> <a href="loging_page.html"> <i class= "fa fa-user fa-lg " style= "color: #ffffff;"></i>  Profiles </a> </li> <!-- PROFILES PAGE -->
				
				<li> <a href="faqs.html"> FAQs </a> </li> <!-- FAQS PAGE -->
				
				
				<li>
				<a href="#"> Follow Us <i class= "fa fa-angle-double-down" style= "color: #ffffff;"> </i> </a> <!-- FOLLOW US BUTTON -->
				
					<ul class="hidden">
					 <!-- GOOGLE+ -->
						<li class= "right"> <a href="https://plus.google.com/u/0/118127281917719301738/posts">  <i class= "fa fa-google-plus-square fa-lg" style= "color: #000000;"></i>Google+ </a> </li> 
					 <!-- YOU TUBE -->
						<li class= "right"> <a href="https://www.youtube.com/channel/UCQXQr6J27of68k7wPyqdJpg">  <i class= "fa fa-youtube-square fa-lg" style= "color: #000000;"></i> You Tube</a> </li>
					 <!--FACE BOOK -->
						<li class= "right"> <a href="https://www.facebook.com/ictvta"> <i class= "fa fa-facebook-square fa-lg" style= "color: #000000;"> </i> FaceBook </a> </li>
					</ul>

				</li>
		</ul> <!-- NAVIGATION ENDS HERE -->
	
	</div>


</body>
</html>