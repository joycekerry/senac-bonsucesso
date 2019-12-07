<!Doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title> exemplo</title>
</head>
<body>
	<h1> Olá, mundo xxx</h1>
	<p><?php  
	// if tratamento de erro, trás verdadeiro ou falso
	if(isset($_GET["btnCalcular"])) {
	$num1 = $_GET["numero1"];
	$num2 = $_GET["numero2"];
	$num3 = $_GET["numero1"];
	$num4 = $_GET["numero2"];
	
	$res = ($num1 + $num2 + $num3 + $num4)/4;
	
	} else{
		$res = 0;
	}
	
	echo "Olá mundo";
	
	define("TITULO" , "meu site !!!");
	
	$num1 = "olá Mundo !";
	$resultado = 2+3;
	
	$script = "<script> alert('olá'); </script>";
	
	?>
</p>
	<p><?= $num1 ?></p>
	<?php echo $resultado; ?>
	
	<h1><?php echo TITULO; ?></h1>
	
	<a href="formulario.php">Fomulário</a>
	<h2><?=$res?></h2>
	
</body>
</html>
<?php echo $script; ?>

 
 