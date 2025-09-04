<div class="boxconteudo">
<?php
	session_start();

	$login_user = mysql_escape_string($_POST["login_user"]);
	$pass_user 	= mysql_escape_string($_POST["pass_user"]); 

	echo "Processando Login...";
	
	// Verifica a Permissão do Usuario
	
	// Verifica se o Usuario é Administrador
	$sql_login = "SELECT * FROM secretaria WHERE log_secretaria = '$login_user' AND pass_secretaria = '$pass_user' LIMIT 1";
	$qry_login = mysql_query($sql_login);
	if ( mysql_num_rows($qry_login) > 0){
		$user = mysql_fetch_assoc($qry_login);
		$_SESSION["tipo_user"] 	= 1;
		$_SESSION["login_user"] = $login_user;
		$_SESSION["pass_user"] 	= $pass_user;
		$_SESSION["id_user"] 	= $user[id_secretaria];
		$_SESSION["nome_user"] 	= $user[nome_secretaria];
		
		print "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
	}else{
		// Verifica se o Usuario é Professor
		$sql_login = "SELECT * FROM professor WHERE log_professor = '$login_user' AND pass_professor = '$pass_user' LIMIT 1";
		$qry_login = mysql_query($sql_login);
		if ( mysql_num_rows($qry_login) > 0){
			$user = mysql_fetch_assoc($qry_login);
			$_SESSION["tipo_user"] 	= 2;
			$_SESSION["login_user"] = $login_user;
			$_SESSION["pass_user"] 	= $pass_user;
			$_SESSION["id_user"] 	= $user[id_professor];
			$_SESSION["nome_user"] 	= $user[nome_professor];
			
			print "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}else{
			// Verifica se o Usuario é Aluno
			$sql_login = "SELECT * FROM aluno WHERE log_aluno = '$login_user' AND pass_aluno = '$pass_user' LIMIT 1";
			$qry_login = mysql_query($sql_login);
			if ( mysql_num_rows($qry_login) > 0){
				$user = mysql_fetch_assoc($qry_login);
				$_SESSION["tipo_user"] 	= 3;
				$_SESSION["login_user"] = $login_user;
				$_SESSION["pass_user"] 	= $pass_user;
				$_SESSION["id_user"] 	= $user[id_aluno];
				$_SESSION["nome_user"] 	= $user[nome_aluno];
				
				print "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
			}else{
				// Verifica se o Usuario é Pai
				$sql_login = "SELECT * FROM pai WHERE log_pai = '$login_user' AND pass_pai = '$pass_user' LIMIT 1";
				$qry_login = mysql_query($sql_login);
				if ( mysql_num_rows($qry_login) > 0){
					$user = mysql_fetch_assoc($qry_login);
					$_SESSION["tipo_user"] 	= 4;
					$_SESSION["login_user"] = $login_user;
					$_SESSION["pass_user"] 	= $pass_user;
					$_SESSION["id_user"] 	= $user[id_pai];
					$_SESSION["nome_user"] 	= $user[nome_pai];
					
					print "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
				}else{
					unset($_SESSION["login_user"]);
					unset($_SESSION["pass_user"]);
					unset($_SESSION["tipo_user"]);
					unset($_SESSION["nome_user"]);
					print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
				}
			}
		}
	}
	
	mysql_close();


/*
	if ( mysql_num_rows($qry_login) > 0){
 		$user = mysql_fetch_assoc($qry_login);		 	
	
		$_SESSION["login_user"] = $login_user;
		$_SESSION["pass_user"] 	= $pass_user;
		$_SESSION["tipo_user"] 	= secretaria;
		$_SESSION["nome_user"] 	= $user[nome_secretaria];
	
		print "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
	}else{
		unset($_SESSION["login_user"]);
		unset($_SESSION["pass_user"]);
		unset($_SESSION["tipo_user"]);
		unset($_SESSION["nome_user"]);
		print "<script type = 'text/javascript'> location.href = 'index.php?link=4'</script>";
	}
	mysql_close();
*/
?>
</div>