<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
	<meta charset="utf-8">
	<link href="css.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php
		include("functions.php");
		if(isset($_GET['id'])){
		$id=$_GET['id'];
		if(isset($_POST['rate_submit'])){
			if(isset($_POST['rate'])){
				$rate = $_POST['rate'];
				setRatingInfo($id, $rate);
			}
		}
		$html = getProduct($id);
		include("view-product.php");
		}else{
		$html = listProduct();
		include("list-products.php");
		}
	?>
</body>
</html>
