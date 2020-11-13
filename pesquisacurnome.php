<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa Curso Por Nome</title>
	<meta charset="UTF-8">

</head>
<body>
<?php


$servidor="localhost";
$usuario="root";
$senha="";
$banco="escola2";
$pesquisa=$_POST['pesquisa'];

if ($con=mysqli_connect($servidor,$usuario,$senha,$banco)){
	$sql="SELECT * FROM cursos where cur_descricao like '%$pesquisa%'";


	$res=mysqli_query($con,$sql);
	echo "<p align=center><table border=1>
	       <tr>
				<td><b>Codigo</b></td>
    			<td><b>Nome do Curso</b></td>     
          </tr>";

    while ($row =mysqli_fetch_array($res)) {
    	echo '<tr><td>'.$row['cur_codigo'].'</td>';
    	echo '<td>'.$row['cur_descricao'].'</td></tr>';
    	
    }
echo "</table>";
}
else
{
	echo "Não foi Possivel Estabelecer a Coneção";
}

echo "<p align='center'><a href='index.html'>Menu Principal</a>";
?>

</body>
</html>