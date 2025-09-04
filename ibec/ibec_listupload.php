<?php
	$sqlup = "SELECT * FROM upconteudo ORDER BY date_up DESC";
	$qryup = mysql_query($sqlup);
	while ($selup = mysql_fetch_array($qryup)){
		
		$sqlaula = "SELECT * FROM aula WHERE $selup[id_aula] = id_aula LIMIT 1";
		$qryaula = mysql_query($sqlaula);
		$selaula = mysql_fetch_assoc($qryaula);
		
		$sqlaluno = "SELECT * FROM aluno WHERE $_SESSION[id_user] = id_aluno AND $selaula[id_turma] = id_turma LIMIT 1";
		$qryaluno = mysql_query($sqlaluno);
		$selaluno = mysql_fetch_assoc($qryaluno);
		
		if($selaluno != ""){
		
		$sqlturma = "SELECT * FROM turma WHERE $selaula[id_turma] = id_turma";
		$qryturma = mysql_query($sqlturma);
		$selturma = mysql_fetch_assoc($qryturma);
		
		$sqldisc = "SELECT * FROM disciplina WHERE $selaula[id_disciplina] = id_disciplina";
		$qrydisc = mysql_query($sqldisc);
		$seldisc = mysql_fetch_assoc($qrydisc);
		
		$sqlprof = "SELECT * FROM professor WHERE $selaula[id_professor] = id_professor";
		$qryprof = mysql_query($sqlprof);
		$selprof = mysql_fetch_assoc($qryprof);
?>				
		<div>
        	Turma: <?php echo $selturma[num_turma]; ?> -
            Disciplina: <?php echo $seldisc[nome_disciplina]; ?> - 
            Professor: <?php echo $selprof[nome_professor]; ?> - 
            Conteudo: <?php echo $selup[title_up]; ?> - 
            <a href="ibec/up_conteudo/<?php echo $selup[file_up]; ?>">Download</a> - <?php echo date("d/m/Y H:m:s", strtotime($selup[date_up])); ?>    
        </div>
	
<?php
		}
	}
?>
