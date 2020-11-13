<?php
$matricula=$_POST['matricula'];
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$cidade=$_POST['cidade'];

$servidor="localhost";
$username="root";
$password="";
$bdname="escola2";

if ($con=mysqli_connect($servidor,$username,$password,$bdname)){
   $sql="insert into alunos(alu_matricula,alu_nome,alu_endereco,alu_cidade) values($matricula,'$nome','$endereco','$cidade')";
   if(mysqli_query($con,$sql)){
    echo "Aluno Cadastrado Com Sucesso";

   }else{
   	echo "Erro Na Query....".mysqli_error($con);

   }

mysqli_close($con);
}
else{
	echo "Não Foi Possivel Estabelecer a Coneção com o Banco...";
}

echo "<a href='index.html'>Menu Principal</a>";


?>