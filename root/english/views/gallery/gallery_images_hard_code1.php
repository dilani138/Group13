<!-- |THIS IS gallery images PAGE| -->

<!-- |OVERALL HEADER OF THE PAGE| -->
<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_gallery.php") ?> <!-- |NAVIGATION OF THE PAGE| -->

<!-- Include external css and javascript files -->
<link rel="stylesheet" href="includes/galleryStyles.css" />
<script type="text/javascript" src="includes/galleryFunctions.js" ></script>


<!-- |CONTENT OF THE PAGE| -->
 
<body>
<h2 align="center">Image Gallery</h2>
<div id= "container" onLoad="slideA()">

  <img src="Images/uploadImages/1.png" style="border:1px solid black" id ="img"/>

  <div id="left_holder">  <img onClick = "slide(-1)" src="Images/left.png" class ="left1"/> </div>

  <div id="right_holder">  <img onClick = "slide(1)" src="Images/right.png" class ="right1"/> </div>

</div>

<div id = "container1">
  <div id="container1_column">
    <table>

      <tr>
  <?php 

    $dir = "Images/uploadImages/";
    $openDir = opendir($dir);
    $size=9;
    
    $i = 0;
    while (($file = readdir($openDir)) !== false){
      
      $i++;
      
      if($file=="." or $file=="..")
      {
        $i--;
        continue;
      }
      if($i <= 4)
      {
          
          echo "<td> <a href=Images/uploadImages/".$file ."><img src=Images/uploadImages/".$file ." class="."smallImage"." /></a></td>";
        
      }elseif($i >4)
      {
        echo "</tr>";
        echo "</table>";
        echo "</div>";
        echo "<div id=\"container1_column\">
                <table>
                  <tr>";
        echo "<td> <a href=Images/uploadImages/".$file ."><img src=Images/uploadImages/".$file ." class="."smallImage"." /></a></td>";
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