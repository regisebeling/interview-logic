<html>
<head>
<title>Interview Logic</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>   
<script>
$(document).ready(function(){
   $("#callBack4").click(function(evento){
      evento.preventDefault();
      $("#showBack4").load("background4.php?tri="+document.getElementById('numero').value);
   });
})
</script>

<script>
$(document).ready(function(){
   $("#callBack1").click(function(evento){
      evento.preventDefault();
      $("#showBack1").load("background1.php");
   });
})
</script>


</head>
<body>
<h1> Exercício 1</h1>


	Encontrar os menores a, b, c tal que a^2 = b^3 = c^5: <br><br>
	<a href="#" id="callBack1"><input type="button" value="Find" /></a>

<br><br><br>
<b>Output:</b>
<div id="showBack1">

</div>

<br>
<br>
<b>=======================================================================</b>
<br>


<h1> Exercício 4</h1>

	Informe o número do triângulo: <br><br>
	<input  type="text" name="numero" id="numero" size=2 />
	<a href="#" id="callBack4"><input type="button" value="Checar" /></a>

<br><br><br>
<b>Output:</b>
<div id="showBack4">

</div>

</body>
</html>
