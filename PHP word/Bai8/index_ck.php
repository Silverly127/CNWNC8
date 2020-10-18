<!DOCTYPE html>
<html>
<head>
	<title>Bài 8</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<form action="_posteddata.php" method="post">
	<textarea name="tomtat" cols="" rows="" ></textarea>
	<script type="text/javascript">
		CKEDITOR.replace( 'tomtat' );
	</script>
	<input name="ok" type="submit" value="Ok" />
</form>
</body>
</html>