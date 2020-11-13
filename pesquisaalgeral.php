<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="escola2";


if ($con=mysqli_connect($servidor,$usuario,$senha,$banco)){
	$sql="SELECT * FROM alunos ORDER BY alu_nome";
	$res=mysqli_query($con,$sql);
	echo "<p align=center><table border=1>
	       <tr>
				<td><b>Codigos</td>
    			<td><b>Nome dos Alunos</td>  
    			<td><b> Endereço</b></td>   
    			<td><b> Cidade</b></td> 
    			
          </tr>";

    while ($row =mysqli_fetch_array($res)) {
    	echo '<tr><td>'.$row['alu_matricula'].'</td>';
    	echo '<td>'.$row['alu_nome'].'</td>';
    	echo '<td>'.$row['alu_endereco'].'</td>';
    	echo '<td>'.$row['alu_cidade'].'</td></tr>';
    	
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