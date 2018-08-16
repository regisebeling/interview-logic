<html>
<head>
</head>
<body>
<?php
$tri = $_GET["tri"];

if(!isset($tri) || $tri < 0 || !is_numeric($tri))
	echo "Erro!";
else
{
	$num = 1;
	for($linha = 1; $linha <= $tri; $linha++){
		for($cel = 1; $cel <= $linha; $cel++){
			echo $num." ";
			$num++;
		}
		echo "<br>";
	}
}
?>
</body>
</html>
