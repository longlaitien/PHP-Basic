<!-- Viết một chương trình để in ra các số từ 1 đến 100. Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” thay vì hiển thị số đó và đối với các số chia hết cho 5 thì in ra chữ “Buzz”. Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”.  -->

<!DOCTYPE html>
<html>
<head>
	<title>bt </title>
</head>
<body>
	<h1>gia tri</h1>
<?php 
	for ($i=1; $i <=100 ; $i++) { 
		if($i %3==0&& $i%5==0){
			print("FizzBuzz");
		}
		elseif ($i%5==0) {
			print("Buzz");
		}
		elseif ($i%3==0 ) {
			print("Fizz");
		}
		else{
			print($i);
		}
		echo " ";
	}
 ?>
</body>
</html>