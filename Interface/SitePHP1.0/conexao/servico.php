<?php
session_start();
include("conectar.php");
$nome=$_SESSION['nome'];
$custo = $_POST["inputValor"];
$horario = $_POST["inputHorario"];
$servico;
if($custo=="20.00"){
    $servico="Corte Simples";
}
elseif($custo=="25.00"){
    $servico="Corte degrade";
}
elseif($custo=="15.00"){
    $servico="Fazer a barba";
}
elseif($custo=="35.00"){
    $servico="Barba e corte simples de cabelo";
}
elseif($custo=="40.00"){
    $servico="Barba e corte degrade no cabelo";
}

$sql="insert into servicos(cliente,servico,preco,horario)values('$nome','$servico','$custo','$horario')";
$query=mysqli_query($conexao, $sql);
if($query){
    session_destroy();
    header("location:../html/Agradecimento.html");
    exit;
}
?>