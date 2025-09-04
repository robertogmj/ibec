<?php
	$sqlaluno = "SELECT * FROM aluno WHERE $_SESSION[id_user] = id_pai ORDER BY nome_aluno DESC";
	$qryaluno = mysql_query($sqlaluno);
	while ($selaluno = mysql_fetch_array($qryaluno)){
	
		$sqlturma = "SELECT * FROM turma WHERE $selaluno[id_turma] = id_turma";
		$qryturma = mysql_query($sqlturma);
		$selturma = mysql_fetch_assoc($qryturma);
		
?>				
		<div>
        	Aluno: <?php echo $selaluno[nome_aluno]; ?> -
            Turma: <?php echo $selturma[num_turma]; ?> 
        </div>
	
<?php
	}
?>
