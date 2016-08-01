<!-- |THIS IS gallery images PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_gallery.php") ?> <!-- |NAVIGATION OF THE PAGE| -->


<!-- |CONTENT OF THE PAGE| -->
   

 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<div class="col-b-1">
<h2 class="w3-center">Gallery >> Photos </h2>
<div class = "image">
	<div class="w3-content" style="max-width:800px;position:relative">

	<img class="mySlides" src="Images/1.png" style="border:1px solid black" height="475" width="800" >
	<img class="mySlides" src="Images/2.png" style="border:1px solid black" height="475" width="800">
	<img class="mySlides" src="Images/3.png" style="border:1px solid black" height="475" width="800">
	<img class="mySlides" src="Images/4.png" style="border:1px solid black" height="475" width="800">
  <img class="mySlides" src="Images/5.png" style="border:1px solid black" height="475" width="800">
  <img class="mySlides" src="Images/6.png" style="border:1px solid black" height="475" width="800">
  <img class="mySlides" src="Images/7.png" style="border:1px solid black" height="475" width="800">
  <img class="mySlides" src="Images/8.png" style="border:1px solid black" height="475" width="800">

	<a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
	<a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

	</div>
</div>

<div class="image_flow">
  <ul class="">
          <li>
            
            <a class="fancybox" rel="group" href="Images/1.png">
              <img src="Images/1.png" alt="" style="border:1px solid black" width="100" height="100" border="5">

            </a>
            
        
          </li>

          <li>
            
            <a  class="fancybox" rel="group" href="Images/2.png">
              <img src="Images/2.png" alt="" style="border:1px solid black" align = "middle" width="100" height="100"/>
            </a>
            
      
          </li>

          <li>
      
            <a  class="fancybox" rel="group" href="Images/3.png">
              <img src="Images/3.png" alt="" style="border:1px solid black" width="100" height="100">
            </a>
            
          </li>

          <li>
      
            <a  class="fancybox" rel="group" href="Images/5.png">
              <img src="Images/5.png" alt="" style="border:1px solid black" width="100" height="100">
            </a>
            
          </li>

          <li>
            
            <a  class="fancybox" rel="group" href="Images/4.png">
              <img src="Images/4.png" alt="" style="border:1px solid black" align = "middle" width="100" height="100"/>
            </a>
            
      
          </li>

          <li>
            
            <a  class="fancybox" rel="group" href="Images/6.png">
              <img src="Images/6.png" alt="" style="border:1px solid black" align = "middle" width="100" height="100"/>
            </a>
            
      
          </li>


           <li>
            
            <a  class="fancybox" rel="group" href="Images/7.png">
              <img src="Images/7.png" alt="" style="border:1px solid black" align = "middle" width="100" height="100"/>
            </a>
            
      
          </li>

           <li>
            
            <a  class="fancybox" rel="group" href="Images/8.png">
              <img src="Images/8.png" alt="" style="border:1px solid black" align = "middle" width="100" height="100"/>
            </a>
            
      
          </li>
        </ul> 
    </div>
 </div>   
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });
</script>


<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
