<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
<?php
			if(isset($_FILES['fileimage']))
			{
				$target_dir="userimage/";
				$ext=explode(".",$_FILES["fileimage"]["name"]);
				$newfilename=round(microtime(true)).'.'.end($ext);
				$target_file=$target_dir.$newfilename;
				move_uploaded_file($_FILES["fileimage"]["tmp_name"],$target_file);
			}
?>
	<form action="index.php" method="POST" enctype="multipart/form-data"></br>
	<input type="file" class="form-control" accept=".jpg" name="fileimage"></br>
	<input type="submit" class="btn btn-primary w-100" value="save">
</form>