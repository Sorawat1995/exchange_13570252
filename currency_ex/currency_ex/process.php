<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" type="text/css" href="css/set2.css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">



</head>
<body>
	<div align="center">
		<h2>RESULT</h2>
		<?php
			$money=$_POST['money'];
			$coin=$_POST['coin'];
			switch($coin) {
				case 'A':{
					$coin_m=0.023;
					$sum=$money*$coin_m;
					echo "1 THB. = ".$coin_m."   British Pound (GBP)"."<br><br>";
					echo "Amount     ".number_format($money,2)."   THB. = ".number_format($sum,2)."   British Pound (GBP)";
					break;
				}
				case 'B':{
					$coin_m=0.0286;
					$sum=$money*$coin_m;
					echo "1 THB. = ".$coin_m."   United States Dollar (USD)"."<br><br>";
					echo "Amount     ".number_format($money,2)."   THB. = ".number_format($sum,2)."   United States Dollar (USD)";
					break;
				}
				case 'C':{
					$coin_m=3.24;
					$sum=$money*$coin_m;
					echo "1 THB. = ".$coin_m."   Japanese Yen (JPY)"."<br><br>";
					echo "Amount     ".number_format($money,2)."   THB. = ".number_format($sum,2)."   Japanese Yen (JPY)";
					break;
				}
			}
		?>
	</div>
</body>
</html>