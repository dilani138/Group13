<?php include("../../includes/main/header.php") ?>  <!-- |HEADER OF THE PAGE| -->
<?php include("../../includes/navigations/nav_active_gallery.php") ?> <!-- |NAVIGATION OF THE PAGE| -->


<!-- Include external css and javascript files -->
<link rel="stylesheet" href="includes/galleryStyles.css" />
<script type="text/javascript" src="includes/galleryFunctions.js" ></script>

   <body>
      <?php
   if(isset($_POST['upload_img'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"Images/$file_name");

         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>	
<div id="continer">
	<h2 align="center" >Upload Image</h2>
      <form action = "" method = "POST" enctype = "multipart/form-data">
         Select an image to upload: <input type = "file" name = "image" /><br><br>
         Upload:<input type = "submit" value="Upload Image"name="upload_img"/>
     </div>
		
		<div id="container">


		</div>
			
      </form>
      
   </body>

   <!-- |FOOTER OF THE PAGE| -->
<?php include("../../includes/main/footer.php") ?>
</html>

