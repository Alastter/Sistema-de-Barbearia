<?php
	define('host', "localhost");
	define('user', "root");
	define('password', "");
	define('bd', "bd_dados");

	$conexao=mysqli_connect(host,user,password,bd) or die("falha ao conectar");

?>