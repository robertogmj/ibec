<?php
$host 		= "localhost";
$usuario 	= "root";
$senha 		= "";
$db=mysql_connect($host,$usuario,$senha) or die("Não foi possivel fazer a conexão com o servidor de banco de ");
mysql_select_db("ibeconline",$db) or die("Não foi possivel fazer a conexão com o banco de dados");
?>
