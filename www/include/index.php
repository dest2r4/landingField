<!--         -->
<?php
	include ("include/dbConnect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SiteName</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--  1)  добавить метатеги и фавикон   -->
</head>
<body>
	<div id="wrapper">
		
			<header>
				<div id="logo">
					<a href="index.php"><img src="img/Logo.jpg" title="Главная"></a>
				</div>
				<div id="topNav">
					<ul>
						<li><a href="include/page1.php">page</a></li>
						<li><a href="include/page2.php">page</a></li>
						<li><a href="include/page3.php">page</a></li>
						<li><a href="include/page4.php">page</a></li>
					</ul>
				</div>
				<div id="botNav">
					<ul>
						<li><a href="include/page5.php">page</a></li>
						<li><a href="include/page6.php">page</a></li>
						<li><a href="include/page7.php">page</a></li>
					</ul>
				</div>
				<div id="socials">
				
				</div>
			</header>
		<aside>




<?php


$sql  = "SELECT * FROM first";
$result=mysqli_query($link,$sql);


 if (mysqli_num_rows($result) > 0)
 {
 	$row=mysqli_fetch_array($result);
 	$qq=$row["id"];
 }


 do {
 	echo '

<ul id="newContent">
<li style="background:url(img/'.$row["background"].') center " ><a href="include/'.$row["way"].'?'.$row["id"].'" class="input1" >'.$row["name"].'.'.$row["id"].'</a></li>
</ul>



';

} 
while ( $row=mysqli_fetch_array($result));
return ("$qq")
?>


			</aside>
		
			
	</div>
</body>
</html>