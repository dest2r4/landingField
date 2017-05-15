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

			<?php 
		do
		{
		echo '	
				<ul>
				<li>
				
					<h2>'.$row["titleRight"].'</h2>
					
					
					<p>'.$row["textRight"].'</p>
				</li></ul>
			 
';}
while ( $row=mysqli_fetch_array($result));
?>