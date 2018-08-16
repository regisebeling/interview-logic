<html>
<head>
</head>
<body>
<?php
for($i = 2; $i; $i++){	
	$quint = pow($i, 5);
	for($j = 2; $j; $j++){
		$cub = pow($j, 3);
		if($cub == $quint){
			for($k = 2; $k; $k++){
				$quad = pow($k, 2);		
				if($quad == $cub){
					echo "Números: a = ".$i.", b = ".$j.", c = ".$k.", com valor de ".$quad."<br>";
					break 3;
				}
				else if ($quad > $cub)
					break;
			}
		}
		else if($cub > $quint)
			break;
	}

}

?>
</body>
</html>
