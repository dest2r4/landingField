
<?php
$part=$_SERVER['QUERY_STRING'];
?>
<?php
	require_once ("dbConnect.php");
?>
	<?php


			switch ($part) {
				case '301':
					$sql="SELECT * FROM news1 WHERE opacity='1'";
					$result=mysqli_query($link,$sql);


					 if (mysqli_num_rows($result) > 0)
					 {
					 	$row=mysqli_fetch_array($result);
					 	
					 }

					break;
				case '302':
					$sql="SELECT * FROM news2 WHERE opacity='1'";
					$result=mysqli_query($link,$sql);


					 if (mysqli_num_rows($result) > 0)
					 {
					 	$row=mysqli_fetch_array($result);
					 	
					 }

					break;
					default: 
					echo "no news now";
					break;

				
			}


			?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>our site</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div id="wrapper1">
		<div id ="scale">
		<div id="header1">
			<?php

			require_once ("blockHeader.php");


			?>	
		</div>
		<div id="content1">
			<div id="pageWrap">
		
			<div id="left">
		<?php 
		do
		{
		echo '	
		
			<ul>
			<li>	
					<h2>'.$row["title"].'</h2>
					
					<img src="../img/'.$row["img"].'" alt=""><br/>
					<p>'.$row["text"].'</p>
				</li></ul>
			 
';}
while ( $row=mysqli_fetch_array($result));
?>
</div>
			<div id="right">
		<?php
			require_once ("blockRight.php")
		?>
			</div>
		</div>
		</div>
</div>



</div>

</body>
</html>




