<!DOCTYPE html>
<html>
<head>
	<title>Posted Data</title>
	<link rel="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1 class="samples">
		CKEditor &mdash; Posted Data
	</h1>
	<table border="1" cellspacing="0">
		<colgroup><col width="100" /></colgroup>
		<thead>
			<tr>
				<th>Field&nbsp;Name</th>
				<th>Value</th>
			</tr>
		</thead>
<?php
if ( isset( $_POST ) )
	$postArray = &$_POST ;			
else
	$postArray = &$HTTP_POST_VARS ;	
foreach ( $postArray as $sForm => $value )
{
	if ( get_magic_quotes_gpc() )
		$postedValue = htmlspecialchars( stripslashes( $value ) ) ;
	else
		$postedValue = htmlspecialchars( $value ) ;
?>
		<tr>
			<th style="vertical-align: top"><?php echo htmlspecialchars($sForm); ?></th>
			<td><pre class="samples"><?php echo $postedValue?></pre></td>
		</tr>
	<?php
}
?>
	</table>
</body>
</html>