<div class="boxconteudo">
	<?php
		$id_formcad	= $_POST["id_formcad"];
		$cadnome	= $_POST["cadnome"];
		
		if(($id_formcad == 1) OR ($id_formcad == 2) OR ($id_formcad == 5) OR ($id_formcad == 6) OR ($id_formcad == 7)){
			$cadlogin		= $_POST["cadlogin"];
			$cadsenha 		= $_POST["cadsenha"];
		}
		
		if($id_formcad == 4){
			$cadturno		= $_POST["cadturno"];
		}
		
		if($id_formcad == 5){
			$selturma		= $_POST["selturma"];
			$cadnomepai		= $_POST["cadnomepai"];
			$cadloginpai	= $_POST["cadloginpai"];
			$cadsenhapai 	= $_POST["cadsenhapai"];
			$cadtelpai		= $_POST["cadtelpai"];
			$cademailpai 	= $_POST["cademailpai"];
		}
		
		if($id_formcad == 6){
			$cadtel		= $_POST["cadtel"];
			$cademail 	= $_POST["cademail"];
		}
		
		if($id_formcad == 7){
			$selturma		= $_POST["selturma"];
			$cadrespon		= $_POST["cadrespon"];
		}
		
		if($id_formcad == 8){
			$selturma		= $_POST["selturma"];
			$seldisc 		= $_POST["seldisc"];
			$selprof		= $_POST["selprof"];
			
		}

	// Cadastrando Novo Usuario da Secretaria	
		if($id_formcad == 1){
			$sql= "INSERT INTO secretaria (nome_secretaria, log_secretaria, pass_secretaria) VALUES ('$cadnome', '$cadlogin', '$cadsenha')";
			mysql_query($sql) or die ("Erro:010 - Usuario da Secretaria NAO Cadastrado");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}
		
	// Cadastrando Novo Professor	
		if($id_formcad == 2){
			$sql= "INSERT INTO professor (nome_professor, log_professor, pass_professor) VALUES ('$cadnome', '$cadlogin', '$cadsenha')";
			mysql_query($sql) or die ("Erro:011 - Usuario Professor NAO Cadastrado");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}
		
	// Cadastrando Nova Disciplina	
		if($id_formcad == 3){
			$sql= "INSERT INTO disciplina (nome_disciplina) VALUES ('$cadnome')";
			mysql_query($sql) or die ("Erro:012 - Nova Disciplina NAO Cadastrada");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}
		
	// Cadastrando Nova Turma	
		if($id_formcad == 4){
			$sql= "INSERT INTO turma (num_turma, turno) VALUES ('$cadnome', '$cadturno')";
			mysql_query($sql) or die ("Erro:013 - Nova Turma NAO Cadastrada");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}		
    
    // Cadastrando Novo Aluno e Responsavel
		if($id_formcad == 5){
			$sql= "INSERT INTO pai (nome_pai, log_pai, pass_pai, tel_pai, email_pai) VALUES ('$cadnomepai', '$cadloginpai', '$cadsenhapai', '$cadtelpai', 'cademailpai')";
			mysql_query($sql) or die ("Erro:014 - Novo Responsavel NAO Cadastrado");
			
				$sqlpai = "SELECT * FROM pai WHERE log_pai = '$cadloginpai' ORDER BY id_pai DESC";
				$qrypai = mysql_query($sqlpai);
				$selpai = mysql_fetch_assoc($qrypai);
			
				$id_pai = $selpai[id_pai];

			$sql= "INSERT INTO aluno (nome_aluno, log_aluno, pass_aluno, id_turma, id_pai) VALUES ('$cadnome', '$cadlogin', '$cadsenha', '$selturma', '$id_pai')";
			mysql_query($sql) or die ("Erro:015 - Novo Aluno NAO Cadastrado");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}
	 // Cadastrando Novo Responsavel
		if($id_formcad == 6){
			$sql= "INSERT INTO pai (nome_pai, log_pai, pass_pai, tel_pai, email_pai) VALUES ('$cadnome', '$cadlogin', '$cadsenha', '$cadtel', 'cademail')";
			mysql_query($sql) or die ("Erro:014 - Novo Responsavel NAO Cadastrado");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}
		
	// Cadastrando Novo Aluno e Responsavel ja Cadastrado
		if($id_formcad == 7){				
			$sql= "INSERT INTO aluno (nome_aluno, log_aluno, pass_aluno, id_turma, id_pai) VALUES ('$cadnome', '$cadlogin', '$cadsenha', '$selturma', '$cadrespon')";
			mysql_query($sql) or die ("Erro:015 - Novo Aluno NAO Cadastrado");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}
		
	// Relacionando Disciplina / Turma / Professor - Aula
		if($id_formcad == 8){				
			$sql= "INSERT INTO aula (id_disciplina, id_professor, id_turma) VALUES ('$seldisc', '$selprof', '$selturma')";
			mysql_query($sql) or die ("Erro:016 - Nova Aula da Turma NAO Cadastrada");
			echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";
		}				
	?>
</div>