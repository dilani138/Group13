<?php include("../includes/new_main_header.php");?>

	<!--div class= "ft_courses" --> 
	<br/>	
  	<div style="text-align:center"> 
	  <br/><br/>
	  <video  id="video1" height=100% width="420" >
  		<source src="atif.mp4" type="video/mp4">
  		<source src="atif.ogg" type="video/ogg">
  		</video>

  		
  		&nbsp;
  		<br/>
  	  <button onclick="playPause()">Play/Pause</button> 
	 
	  <br/>
	  &nbsp;
<script>

var myVideo = document.getElementById("video1");
	
	
function playPause()
{
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

</script>

	</div> 

	

	<!--/div-->

<?php include("../includes/main_footer.php");?>