<?php
	require_once ("dbConnect.php");
?>


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





<ul class="newContent">
<li style="background-image:url(../img/'.$row["background"].')  " ><a href="'.$row["way"].'?'.$row["id"].'" class="input1"  >'.$row["name"].'.'.$row["id"].'</a></li>
</ul>



';

} 
while ( $row=mysqli_fetch_array($result));
return ("$qq")
?>

