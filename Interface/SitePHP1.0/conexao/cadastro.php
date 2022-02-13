<?php
session_start();
include("conectar.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$ssenha = $_POST["senha"];

$sql="insert into tb_clientes(nome,email,telefone,senha)values('$nome','$email','$telefone','$ssenha')";
$query=mysqli_query($conexao,$sql);
$sqll="select email from tb_clientes where email='$email'";
$sqlll="select nome from tb_clientes where email='$email'";
$nome=mysqli_query($conexao,$sqlll);
$queryy=mysqli_query($conexao,$sqll);
$row= mysqli_num_rows($queryy);
echo"$row";
if($row==1){
	$_SESSION['email']=$email;
	$_SESSION['nome']=$nome;
	header('location:../html/serviços.php');
	exit();
}
else{
	echo"Usuario já foi cadastrado";
	header('location:../html/cadastro.html');
	exit();
}
?>