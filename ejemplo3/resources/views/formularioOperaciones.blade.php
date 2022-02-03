<!DOCTYPE html>
<html>
<head>
	<title>Formulario Operaciones</title>
</head>
<body>
	<h1>Formulario Operaciones</h1>
	<form action ="operacion" method="GET">
		<label for="oper1">Operando1</label>
		<input type="text" id="oper1" name="oper1">
		<br>
		<label for="oper2">Operando2</label>
		<input type="text" id ="oper2" name="oper2">
		<br>
		<input type="radio"  id="s" name="operacion" value="sum" chequed>
		<label for="s">Suma</label><br>
		<input type="radio"  id="r" name="operacion" value="res">
		<label for="r">Resta</label><br>
		<input type="radio"  id="s" name="operacion" value="mul">
		<label for="m">Multiplicacion</label><br>
		<input type="radio"  id="d" name="operacion" value="div">
		<label for="d">Division</label>
		<br>
		<input type="submit" name="Operar">
	</form>



</body>
</html>