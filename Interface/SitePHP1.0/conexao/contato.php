<?php
    include("conectar.php");

    $nome=$_POST['txtName'];
    $email=$_POST['txtEmail'];
    $telefone=$_POST['txtPhone'];
    $mensagem=$_POST['txtMsg'];

    $sql="INSERT INTO tb_contato(nome,email,telefone,mensagem)VALUES('$nome','$email','$telefone','$mensagem')";
    $query=mysqli_query($conexao, $sql);
    if($query){
        header("location:../html/Agradecimento.html");
        exit;
    }
    
?>
