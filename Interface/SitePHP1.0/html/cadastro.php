<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/menu.css">
    <title>Cadastro</title>
    <script>
        function validaDadoss(dados) {
            if (dados.nome.value == "") {
                alert("Digite o seu nome");
                return false;
            }
            if (dados.email.value.indexOf('@', 0) == -1) {
                alert("O email digitado está invalido");
                return false;
            }
            if (dados.senha.value.indexOf(' ', 0) != -1) {
                alert("A senha não pode estar em branco");
                return false;
            }
            if (dados.senha.value.length < 5 || dados.senha.value.length > 15) {
                alert("A senha deve conter entre 5 e 15 caracteres.");
                return false;
            }
            if (dados.telefone.value.length =="") {
                alert("Informe seu telefone");
                return false;
            }
            return true;
        }
        function info(){
            alert("A senha deve ter entre 5 a 15 caracteres");
        }
    </script>
</head>

<body>
    <div class="header">
        <ul>
            <li><a href="Home.html">INICIO</a></li>
            <li><a href="serviços.php">SERVIÇOS</a></li>
            <li><a href="contato.html">CONTATO</a></li>
            <li><a href="login.php">USUÁRIO</a></li>
        </ul>
    </div>
    <hr>
    <div class="container ">
        <div style="color:red;">
        <?php
        if(isset($_SESSION['vazio'])):
        ?>
         <h5>Usuário já cadastro</h5>
         <?php
        endif;
        unset($_SESSION['vazio']);
        ?>
        </div>

        <form method="POST" action="../conexao/cadastro.php" onsubmit="return validaDadoss(this)">

            <div class="row">

                <div class="col-sm-6 cavalo">
                    <div class="form-group">
                        <label id="tcor">Digite seu Nome</label>
                        <input name="nome" class="form-control" placeholder="Nome" type="text">
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                        <label id="tcor">Digite seu Email</label>
                        <br>
                        <input name="email" class="form-control" placeholder="Digite seu email" type="email">
                    </div>

                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label id="tcor">Informe seu telefone</label>
                        <input name="telefone" class="form-control" placeholder="Telefone" type="text">
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                        <label id="tcor">Crie sua senha</label>

                        <input name="senha" class="form-control" placeholder="Senha deve ter entre 5 a 15 caracteres" type="password">
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-2  col-sm-offset-5">
                    <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                </div>
            </div>

        </form>

    </div>
    <hr>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>