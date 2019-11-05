<html>
<head>
</head>
<body>
<h1> IU4-12B </h1>
<h2> Var 7</h2>
<h3> Kovalev Danil</h3>

<p>Задание 1</p>
<table>
<?php
	echo('<tr>');
	for($i = 0; $i <= 10; $i++){
		echo('<td>'); echo($i); echo('</td>');
	}
	echo('</tr>');
	
	for($i = 1; $i <= 10; $i++){
		echo('<tr>');
		echo('<td>'); echo($i); echo('</td>');
		for($j = 1; $j <= 10; $j++){
			echo('<td>'); echo( $i*$i); echo('</td>');
		}
		echo('</tr>');
	}
?>
</table>

<p>Задание 2</p>
<form action ="" method = "POST">
	<p> Input number</p> <input type = "text" name = "val">
	<p>(2/3/sqrt)</p> <input type = "text" name = "ty">
	<input type = "submit" value = "OK">
</form>

<?php
	$val = $POST['val'];
	$ty = $POST['ty'];
	if($ty == '2'){
		echo($val*$val);
	}else{
	if($ty == '3'){
		echo($val*$val*$val);
	}else{
	if($ty == 'sqrt'){
		echo(sqrt($val));
	}else{
		echo('ERROR');
	}
	
?>

</body>
</html>
