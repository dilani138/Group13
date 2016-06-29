<!-- |THIS IS gallery videos PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_gallery.php") ?> <!-- |NAVIGATION OF THE PAGE| -->
   
<!-- |CONTENT OF THE PAGE| -->
   
<div class="contianer">
    <br/>	
  	<div style="text-align:center" poster="/images/w3html5.gif" controls> 
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
</div>

<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
