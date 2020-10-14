<!DOCTYPE html>
<html>
<head>
	<title>Bài 5</title>
</head>
<body>
	<?php
		function GPT($a, $b, $c)
		{
			$delta = $b*$b-4*$a*$c;
			if ($delta < 0) {
				$sol = "Phương trình vô nghiệm";
			}
			elseif ($delta == 0) {
				$x = -$b/(2*$a);
				$x = round($x,2);
				$sol = "Phương trình có nghiệm kép x1 = x2 = $x";
			}
			else {
				$can = sqrt($delta);
				$x1 = (-$b-$can)/(2*$a);
				$x2 = (-$b+$can)/(2*$a);
				$x1 = round($x1,2);
				$x2 = round($x2,2);
				$sol = "Phương trình có nghiệm x1 = $x1, x2 = $x2.";
			}
			return $sol;
		}
		if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && is_numeric($_POST['a']) && is_numeric($_POST['b']) && is_numeric($_POST['c'])) {
			$sol = GPT($_POST['a'],$_POST['b'],$_POST['c']);
		}
	?>
	<form action="demo5.php" method="post">
		<table border="1" align="center">
			<tr>
				<td colspan="7" bgcolor="sky blue">Giải phương trình bậc 2</td>
			</tr>
			<tr>
				<td>Phương trình</td>
				<td><input type="text" name="a"></td>
				<td>X^2 + </td>
				<td><input type="text" name="b"></td>
				<td>X + </td>
				<td><input type="text" name="c"></td>
				<td> = 0</td>
			</tr>
			<tr>
				<td>Nghiệm</td>
				<td colspan="6"><input type="text" name="sol" size="50" value="<?php if(isset($sol)) echo $sol; ?>"></td>
			</tr>
			<tr>
				<td colspan="7" align="center"><input type="submit" value="Xuất"></td>
			</tr>
		</table>
	</form>
</body>
</html>