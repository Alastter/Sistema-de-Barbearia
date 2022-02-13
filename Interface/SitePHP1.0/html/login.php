<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/menu.css">
    <script type="text/javascript">
      function termos() {
        alert("Seu dados serão Usados para preencher o bancoo de dados");
      }
      function validaDados(dados) {
        if (dados.email.value.indexOf('@', 0) == -1) {
          alert("O email digitado está invalido");
        }
        if (dados.senha.value.indexOf(' ', 0) != -1) {
          alert("A senha não pode estar em branco");
          return false;
        }
        if (dados.senha.value.length < 5 || dados.senha.value.length > 15) {
          alert("A senha deve conter entre 5 e 15 caracteres.");
          return false;
        }
        return true;
      }
    </script>
    <title>Pagina cadastro</title>

  </head>
<body>
  <!--barra de navegação -->
  <div class="header">
    <ul>
      <li><a href="Home.html">INICIO</a></li>
      <li><a href="contato.html">CONTATO</a></li>
    </ul>
  </div>
  <hr>
  <div class="container">
    <aside class="col-sm-4 col-sm-offset-4">
      <h3 id="tcor" align="center">Pagina de login</h3>
      <!-- codigo php -->
      <?php
        if(isset($_SESSION['Nao autenticado'])):
      ?>
      <div class="invalido">
        <P id="tcor" align="center">ERRO:Usuário ou senha invalido!</P>
      </div>
      <?php
        endif;
        unset($_SESSION['Nao autenticado']);
      ?>
      <!-- endif: -->
      <!-- unset($_SESSION['Nao autenticado']); -->
      <!-- fim do codigo php -->
      <div class="card ">
        <article class="card-body letra">
          <form method="post" action="../conexao/login.php" onSubmit="return validaDados(this)" >
            <div class="form-group">
              <label id="tcor">Digite seu email</label>
              <input name="email" class="form-control" placeholder="Email" type="email">
            </div> <!-- form-group// -->
            <div class="form-group">
              <label id="tcor">Digite sua senha</label><br>
              <h6 id="tcor">Senha deve ter de 5 a 15 caracteres</h6>
              <input name="senha" class="form-control" placeholder="******" type="password">
            </div> <!-- form-group// -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Logar</button>
            </div> <!-- form-group// -->
          </form>
          <p id="tcor">Deseja realizar cadastro ?</p>
          <a href="cadastro.html">Cadastrar</a>
        </article>
      </div>
    </aside>
  </div>
  <hr>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>