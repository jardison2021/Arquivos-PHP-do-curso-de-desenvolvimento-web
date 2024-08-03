<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estruturas de repetição</title>
	<style type="text/css">
		hr{
			color: #ADD8E6;
		}
		h1{
			color: #4682B4;
		}
		h3{
			color: #90d4d0;
		}
	</style>
</head>
<body>
	<?php
		echo '<h1>Estruturas de repetição(loops)</h1>';
		echo '<h3>Whille</h3>';
		$num = 1;
		echo "Início do loop <br>";
		while ($num < 10) {
			$num ++;
			if($num == 2 or $num == 6){
				continue;
			}
			echo "$num <br>";
			/*if($num > 100){
				break;
			}*/
		}
		echo 'Fim do loop';
	?>
</body>
</html>