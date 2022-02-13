<?php
session_start();
include("conectar.php");
if(empty($_POST['email'])||empty($_POST['senha'])){
	header("location:../formulário.html");
	exit();
}
$email=mysqli_real_escape_string($conexao, $_POST['email']);
$senha=mysqli_real_escape_string($conexao, $_POST['senha']);

$userrr="select nome from tb_clientes where email='$email'";
$sql="select * from tb_clientes where email='$email' and senha='$senha'";
$userrR=mysqli_query($conexao, $userrr);
$resultado= mysqli_query($conexao, $sql);
$row= mysqli_num_rows($resultado);
if($row==1){
	$_SESSION['email']=$email;
	header('location:../html/serviços.php');
	exit();
}else{
	$negado=$_SESSION['Nao autenticado']=true;
	header('location:../html/login.php');
	exit();
}
?>