<?php
  session_start();
  include_once("../conexao/conectar.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/estilo.css">
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/menu.css">
  <Script src="../Bootstrap/js/validar.js"></Script>
  <title>Serviços</title>
  <script>
    alert("So é possivel a reserva se o usuario estiver logado !");
  </script>
</head>

<body>
  <!--barra de navegação -->
  <div class="header">
    <ul>
      <li><a href="Home.html">INICIO</a></li>
      <li><a href="contato.html">CONTATO</a></li>
      <li><a href="login.php">USUÁRIO</a></li>
    </ul>
  </div>
  <hr>
  <div class="container">
    <!-- <div class="user"> -->
      <?php
        if(isset($_SESSION['email'])):
      ?>
        <div class="user" style="background-color: #7FFFD4; border: solid; border-radius: 3px; border-color: seagreen;  width: 50%; margin:auto;">
          <?php
            $email=$_SESSION['email'];
            $pesquisa = $_POST['email']= $email;
            // // Preenchendo a tabela com os dados do banco
            $sql = "SELECT nome FROM tb_clientes WHERE email = '$pesquisa'";
            $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
            while ($registro = mysqli_fetch_array($resultado)){
              $nome = $registro['nome'];
              echo"<h4> Usuário: {$nome}</h4>";
            }
            $_SESSION['nome']=$nome;
          ?>
        </div>
    <?php
      endif;
    ?>
    <div class="col-m-12 serv1">
      <!-- Tabela inicio -->
      <div class="table">
        <table class="table table-striped table-bodered">
          <thead>
            <tr>
              <th>Serviço</th>
              <th>Custo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Corte simples</td>
              <td>20.00</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>Corte degrade</td>
              <td>25.00</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>fazer a barba</td>
              <td>15.00</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>Barba e corte simples de cabelo</td>
              <td>35.00</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>Barba e corte degrade no cabelo</td>
              <td>40.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Fim Tabela -->
      <form method="POST" action="../conexao/servico.php">
        <div class="fund">
          <p style="color: white;">Selecione o corte desejado</p>
          <select nome="serv" id="serv" onchange="selectServ()">
            <option value="0.00">Seleciona o corte</option>
            <option value="20.00">Corte Simples</option>
            <option value="25.00">Corte degrade</option>
            <option value="15.00">Fazer a barba</option>
            <option value="35.00">Barba e corte simples de cabelo</option>
            <option value="40.00">Barba e corte degrade no cabelo</option>
          </select>
        </div>
        <div class="fund2">
          <p style="color: white;">Selecione o Horário</p>
          <select nome="serv" id="horaa" onchange="selectServ()">
            <option value="0">Resever seu horário</option>
            <option value="07.00 AM">07:00 AM</option>
            <option value="08.00 AM">08:00 AM</option>
            <option value="09.00 AM">09:00 AM</option>
            <option value="10.00 AM">10:00 AM</option>
            <option value="11.00 AM">11:00 AM</option>
            <option value="14.00 PM">14:00 PM</option>
            <option value="15.00 PM">15:00 PM</option>
            <option value="16.00 PM">16:00 PM</option>
            <option value="17.00 PM">17:00 PM</option>
            <option value="18.00 PM">18:00 PM</option>
          </select>
        </div>
        <!-- <button class="btn bnt-default">ok</button> -->
        <table class="table table-striped table-bodered">
          <thead>
            <tr>
              <th id="custo">Custo</th>
              <th id="custo">Horário</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <h5  name="valor" style="color: black;" id="valor">
                <input id="vl" name ="inputValor" size="25">
              </td>
              <td>
                <h5 name="h" style="color: black;" id="h" ></h5>
                <input id="hr" name="inputHorario"size="25">
              </td>
            </tr>
          </tbody>
          <tbody>
        </table>
        <?php
          if(isset($_SESSION['email'])):
        ?>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        <?php
          endif;
          unset($_SESSION['email']);
        ?>
      </form>
    </div>
  </div>
  <hr>
</body>

</html>