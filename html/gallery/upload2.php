

<?php 

echo "<pre>";
print_r($_FILES['file_upload']);
echo "</pre>";
echo "<hr />";

if(isset($_POST['submit']))
{
	$tmp_file = $_FILES['file_upload']['tmp_name'];
	$target_file = basename($_FILES['file_upload']['tmp_name']);
	$upload_dir = "uploads";

	if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file))
	{
		echo "file uploaded";
	}else{
		echo "error";
	}
}

?>



<?php if(!empty($message)) {echo "<p>{$message}</p>";} ?>
<form action="upload2.php" method="POST" enctype="multipart/form-data" method="POST">

<input type="hidden" name = "MAX_FILE_SIZE" value="1000000" />
<input type="file" value="Upload Image" name="file_upload" />
<input type="submit" name="submit" value="Upload"/>
</form>



</body>

</html>
