<!-- |THIS IS gallery videos PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_gallery.php") ?> <!-- |NAVIGATION OF THE PAGE| -->
   
<!-- |CONTENT OF THE PAGE| -->
   

<!-- Include external css and javascript files -->
<link rel="stylesheet" href="includes/galleryStyles.css" />
<script type="text/javascript" src="includes/galleryFunctions.js" ></script>


<!-- |CONTENT OF THE PAGE| -->



 
<body>
<h2 align="center">Video Gallery</h2>
<div id= "container" onLoad="slideA()">

   <video id ="video" controls><source src="videos/1.mp4" type="video/mp4" >
    <source src="videos/1.ogg" type="video/ogg" >

   </video>

  <div id="left_holder">  <img onClick = slideVideo(-1) src="Images/left.png" class ="left1"/> </div>

  <div id="right_holder">  <img onClick = slideVideo(1) src="Images/right.png" class ="right1"/> </div>

</div>

<div id = "container1">
  <div id="container1_column">
    <table>

      <tr>
  <?php 

    $dir = "videos/";
    $openDir = opendir($dir);
    $size=9;
    
    $i = 0;
    while (($file = readdir($openDir)) !== false){
      //echo $file;
      $i++;
      
      if($file=="." or $file==".." or $file==null)
      {
        $i--;
        continue;
      }
      if($i <= 4)
      {
          
          echo  "<td> <video class=\"smallImage\" controls><source src=\"videos/".$file."\" type=\"video/mp4\" ></video></td>";
        
      }elseif($i >4)
      {
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        echo "<div id=\"container1_column\">
                <table>
                  <tr>";
        echo "<td> <video class=\"smallImage\" controls><source src=\"videos/".$file."\" type=\"video/mp4\" ></video></td>";
        $i = 1;
      }
      
    
    ?>
   
      
        
     
  
  <?php }
    closedir($dir);
  ?>
      </tr>
    </table>
  </div>
 
</div>
<br /><br /><br />
</body>
<!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
</html>