<!DOCTYPE html>
<html>
<head>
	<title>Bài 9</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="maxsize" value="5000000">
		<label>Upload: <input type="file" name="ufile"></label>
		<p><input type="submit" name="upload" value="Upload"></p>
	</form>
	<?php
		$target = "uploads/";
		if (isset($_FILES['ufile'])) {
			$target = $target . basename($_FILES['ufile']['name']);
		if (!preg_match('/\.(jpg|gif)$/i',basename($_FILES['ufile']['name']))) {
			echo "Không phải file ảnh";
		}
		else if(file_exists($target)){
			echo "Đã tồn tại";
		}
		else if(move_uploaded_file($_FILES['ufile']['tmp_name'], $target)){
			echo "Uploaded.";
		}
		else{
			echo "Error.";
		}
	}
	?>
</body>
</html>