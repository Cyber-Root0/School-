
<?php
$codigo=$_POST['txtcodigo'];
$descricao=$_POST['txtdescricao'];

$servidor='localhost';
$login='root';
$pass='';
$nomebd='escola2';

if ($con=mysqli_connect($servidor,$login,$pass,$nomebd)){
	//conecao com sucesso!!!
	$sql="insert into cursos(cur_codigo,cur_descricao) values ($codigo,'$descricao')";
	if (mysqli_query($con,$sql)){
		echo "Cuso Cadastrado Com Sucesso";
	}else{

		echo "Não foi possivel inserir o curso";
	}
 
mysqli_close($con);
}	



else{  

     echo "Não Foi possivel Estabelecer a Coneção com o Banco De Dados";


	}
echo "<a href='index.html'>Menu Principal</a>";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>