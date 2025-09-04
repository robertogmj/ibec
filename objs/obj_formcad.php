<form action="index.php?link=4" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
	<?php
		if(($_GET["link"] == 5) OR ($_GET["link"] == 6) OR ($_GET["link"] == 9) OR ($_GET["link"] == 10) OR ($_GET["link"] == 11)){ //Cadastro de Administrador / Professor / Pais / Alunos
	?>
  			<div>Nome: <input name='cadnome' type='text' id='cadnome' size='20' /></div>
			<div>Login: <input name='cadlogin' type='text' id='cadlogin' size='20' /></div>
			<div>Senha: <input name='cadsenha' type='password' id='cadsenha' size='20' /></div>
    <?php
    	}elseif($_GET["link"] == 7){ //Cadastro de Disciplina
	?>
     		<div>Disciplina: <input name='cadnome' type='text' id='cadnome' size='20' /></div>
    <?php
     	}elseif($_GET["link"] == 8){ //Cadastro de Turma
	?>
     		<div>Turma: <input name='cadnome' type='text' id='cadnome' size='20' /></div>
            <div>Turno:
            	<select name="cadturno" id='cadturno'>
            		<option value="1">Manha</option>
              		<option value="2">Tarde</option>
                    <option value="3">Noite</option>
            	</select>
            </div>
    <?php
     	}elseif($_GET["link"] == 12){ //Relacionar Disciplinas a Turmas
	?>
  			<div>Turma:
            	<select name="selturma" id='selturma'>
            		<?php
						$sqlturma = "SELECT * FROM turma ORDER BY num_turma ASC";
						$qryturma = mysql_query($sqlturma);
						while ($selturma = mysql_fetch_array($qryturma)){
					?>
					<option value="<?php echo $selturma[id_turma]; ?>" >
						<?php echo $selturma[num_turma]; ?> - 
						<?php if($selturma[turno] == 1){echo "Manhã";}
								elseif($selturma[turno] == 2){echo "Tarde";}
								elseif($selturma[turno] == 3){echo "Noite";}
						?>
                    </option>
			<?php  } ?>
            	</select>
            </div>
            <div>Disciplina:
            	<select name="seldisc" id='seldisc'>
            		<?php
						$sqldisc = "SELECT * FROM disciplina ORDER BY nome_disciplina ASC";
						$qrydisc = mysql_query($sqldisc);
						while ($seldisc = mysql_fetch_array($qrydisc)){
					?>
					<option value="<?php echo $seldisc[id_disciplina]; ?>" ><?php echo $seldisc[nome_disciplina]; ?></option>
			<?php  } ?>
            	</select>
            </div>
            <div>Professor:
            	<select name="selprof" id='selprof'>
            		<?php
						$sqlprof = "SELECT * FROM professor ORDER BY nome_professor ASC";
						$qryprof = mysql_query($sqlprof);
						while ($selprof = mysql_fetch_array($qryprof)){
					?>
					<option value="<?php echo $selprof[id_professor]; ?>" ><?php echo $selprof[nome_professor]; ?></option>
			<?php  } ?>
            	</select>
            </div>
	<?php
    	}
	 	if($_GET["link"] == 9){ //Cadastro de Alunos
	?>
  			<div>Turma:
            	<select name="selturma" id='cadturma'>
            		<?php
						$sqlturma = "SELECT * FROM turma ORDER BY num_turma ASC";
						$qryturma = mysql_query($sqlturma);
						while ($selturma = mysql_fetch_array($qryturma)){
					?>
					<option value="<?php echo $selturma[id_turma]; ?>" >
						<?php echo $selturma[num_turma]; ?> - 
						<?php if($selturma[turno] == 1){echo "Manhã";}
								elseif($selturma[turno] == 2){echo "Tarde";}
								elseif($selturma[turno] == 3){echo "Noite";}
						?>
                    </option>
			<?php  } ?>
            	</select>
            </div>
            <div class="txtconteudo"><strong>Cadastro do Respons&aacute;vel</strong></div>
			<div>Nome: <input name='cadnomepai' type='text' id='cadnomepai' size='20' /></div>
			<div>Login: <input name='cadloginpai' type='text' id='cadloginpai' size='20' /></div>
			<div>Senha: <input name='cadsenhapai' type='password' id='cadsenhapai' size='20' /></div>
            <div>Telefone: <input name='cadtelpai' type='text' id='cadtelpai' size='11' /></div>
            <div>E-mail: <input name='cademailpai' type='text' id='cademailpai' size='20' /></div>
	<?php
    	}elseif($_GET["link"] == 10){ //Cadastro de Responsavel
	?>
  			<div>Telefone: <input name='cadtel' type='text' id='cadtel' size='11' /></div>
            <div>E-mail: <input name='cademail' type='text' id='cademail' size='20' /></div>
	<?php
    	}elseif($_GET["link"] == 11){ //Cadastro de Alunos / Responsavel ja Cadastrado
	?>
            <div>Turma:
            	<select name="selturma" id='cadturma'>
            		<?php
						$sqlturma = "SELECT * FROM turma ORDER BY num_turma ASC";
						$qryturma = mysql_query($sqlturma);
						while ($selturma = mysql_fetch_array($qryturma)){
					?>
					<option value="<?php echo $selturma[id_turma]; ?>" >
						<?php echo $selturma[num_turma]; ?> - 
						<?php if($selturma[turno] == 1){echo "Manhã";}
								elseif($selturma[turno] == 2){echo "Tarde";}
								elseif($selturma[turno] == 3){echo "Noite";}
						?>
                    </option>
			<?php  } ?>
            	</select>
            </div>
            <div>Respons&aacute;vel:
            	<select name="cadrespon" id='cadrespon'>
            		<?php
						$sqlpai = "SELECT * FROM pai ORDER BY nome_pai ASC";
						$qrypai = mysql_query($sqlpai);
						while ($selpai = mysql_fetch_array($qrypai)){
					?>
					<option value="<?php echo $selpai[id_pai]; ?>" ><?php echo $selpai[nome_pai]; ?></option>
			<?php  } ?>
            	</select>
            </div>
	<?php
    	}
	?>
     
	<input name="id_formcad" type="hidden" id="id_formcad" value="<?php echo $id_formcad; ?>" />
  	<div><input type="submit" value="Cadastrar" /></div>
</form>
