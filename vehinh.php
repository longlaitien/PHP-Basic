<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Ve hinh</h1>
	<?php 
		echo "<hr>";
		for ($i=0; $i <= 10; $i++) { 
			for ($j=0; $j<= 6 ; $j++) { 
				if ($j==0 ) {
					echo "*";
				}

			if ($i==10) {
				echo "*";
				}
			}
			echo "<br>";
		}
		echo "<br>";

		for ($i=0; $i <=10 ; $i++) { 
			for ($j=0; $j <=6 ; $j++) { 
				if ($i==0 || $i==10) {
					echo "*";
				}
				if ($j==0 ) {
					echo "*";
				}
			}
			echo "<br>";
		}
		echo "<br>";
		for ($i=0; $i <= 6 ; $i++) { 
			for ($j=0; $j <20 ; $j++) { 
				echo "*";
			}
			print("*");
			echo "<br>";
		}
		for ($i=0; $i <= 6 ; $i++) { 
			for ($j=6-$i; $j <6 ; $j++) { 
				echo "*";
			}
			print("*");
			echo "<br>";
		}
	 ?>
</body>
</html>