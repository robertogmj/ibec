<div id="conteudo">
	<div class="boxconteudo">
    	<div class="titconteudo"> Plataforma Educacional IBEC </div>

		<?php
			// Restrito a Secretaria		
			if($_SESSION["tipo_user"] == 1){ ?> 
        <div class="txtconteudo"> <strong>Painel da Secretaria</strong> </div>
        <div class="txtconteudo"> <strong>Cadastros</strong> </div>
        <div class="txtconteudo"> <a href="index.php?link=5">Administrador / Secretaria</a> </div>
        <div class="txtconteudo">
        	Administradores Cadastrados
            <form action="index.php?link=5" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
            	<select name="seleditar" id='seleditar'>
            		<?php
						$sqleditar = "SELECT * FROM secretaria ORDER BY nome_secretaria ASC";
						$qryeditar = mysql_query($sqleditar);
						while ($seleditar = mysql_fetch_array($qryeditar)){
					?>
					<option value="<?php echo $seleditar[id_secretaria]; ?>" >
						<?php echo $seleditar[nome_secretaria]; ?>
                    </option>
			<?php  } ?>
            	</select>
                <input type="submit" value="Alterar" />
            </form>
        </div>        
        <div class="txtconteudo"> <a href="index.php?link=6">Professor</a> </div>
        <div class="txtconteudo">
        	Professores Cadastrados
            <form action="index.php?link=6" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
            	<select name="seleditar" id='seleditar'>
            		<?php
						$sqleditar = "SELECT * FROM professor ORDER BY nome_professor ASC";
						$qryeditar = mysql_query($sqleditar);
						while ($seleditar = mysql_fetch_array($qryeditar)){
					?>
					<option value="<?php echo $seleditar[id_professor]; ?>" >
						<?php echo $seleditar[nome_professor]; ?>
                    </option>
			<?php  } ?>
            	</select>
                <input type="submit" value="Alterar" />
            </form>
        </div>        
        <div class="txtconteudo"> <a href="index.php?link=7">Disciplina</a></div>
        <div class="txtconteudo">
        	Disciplinas Cadastradas
            <form action="index.php?link=7" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
            	<select name="seleditar" id='seleditar'>
            		<?php
						$sqleditar = "SELECT * FROM disciplina ORDER BY nome_disciplina ASC";
						$qryeditar = mysql_query($sqleditar);
						while ($seleditar = mysql_fetch_array($qryeditar)){
					?>
					<option value="<?php echo $seleditar[id_disciplina]; ?>" >
						<?php echo $seleditar[nome_disciplina]; ?>
                    </option>
			<?php  } ?>
            	</select>
                <input type="submit" value="Alterar" />
            </form>
        </div>
        <div class="txtconteudo"> <a href="index.php?link=8">Turma</a> </div>
        <div class="txtconteudo">
        	Turmas Cadastradas
            <form action="index.php?link=8" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
            	<select name="seleditar" id='seleditar'>
            		<?php
						$sqleditar = "SELECT * FROM turma ORDER BY num_turma ASC";
						$qryeditar = mysql_query($sqleditar);
						while ($seleditar = mysql_fetch_array($qryeditar)){
					?>
					<option value="<?php echo $seleditar[id_turma]; ?>" >
                        <?php echo $seleditar[num_turma]; ?> -
						<?php if($seleditar[turno] == 1){echo "Manhã";}
								elseif($seleditar[turno] == 2){echo "Tarde";}
								elseif($seleditar[turno] == 3){echo "Noite";}
						?>
                    </option>
			<?php  } ?>
            	</select>
                <input type="submit" value="Alterar" />
            </form>
        </div>
        <div class="txtconteudo"> <a href="index.php?link=9">Aluno</a> </div>
        <div class="txtconteudo">
        	Alunos Cadastradas
            <form action="index.php?link=9" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
            	<select name="seleditar" id='seleditar'>
            		<?php
						$sqleditar = "SELECT * FROM aluno ORDER BY nome_aluno ASC";
						$qryeditar = mysql_query($sqleditar);
						while ($seleditar = mysql_fetch_array($qryeditar)){
					?>
					<option value="<?php echo $seleditar[id_aluno]; ?>" >
						<?php echo $seleditar[nome_aluno]; ?>
                    </option>
			<?php  } ?>
            	</select>
                <input type="submit" value="Alterar" />
            </form>
        </div>
        <div class="txtconteudo"> <a href="index.php?link=10">Responsavel</a> </div>
        <div class="txtconteudo">
        	Pais Cadastradas
            <form action="index.php?link=10" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
            	<select name="seleditar" id='seleditar'>
            		<?php
						$sqleditar = "SELECT * FROM pai ORDER BY nome_pai ASC";
						$qryeditar = mysql_query($sqleditar);
						while ($seleditar = mysql_fetch_array($qryeditar)){
					?>
					<option value="<?php echo $seleditar[id_pai]; ?>" >
						<?php echo $seleditar[nome_pai]; ?>
                    </option>
			<?php  } ?>
            	</select>
                <input type="submit" value="Alterar" />
            </form>
        </div>
        <div class="txtconteudo"> <a href="index.php?link=11">Aluno (Responsavel ja cadastrado)</a> </div>
        <div class="txtconteudo"> <a href="index.php?link=12">Relacionar Disciplinas e Turmas</a> </div>
		<div class="txtconteudo">
        	Aulas Cadastradas
            <form action="index.php?link=12" method="post" enctype="multipart/form-data" name="cadform" id="cadform">
            	<select name="seleditar" id='seleditar'>
            		<?php
						$sqleditar = "SELECT * FROM aula ORDER BY id_aula ASC";
						$qryeditar = mysql_query($sqleditar);
						while ($seleditar = mysql_fetch_array($qryeditar)){
							$sqlturma = "SELECT * FROM turma WHERE $seleditar[id_turma] = id_turma LIMIT 1";
							$qryturma = mysql_query($sqlturma);
							$selturma = mysql_fetch_assoc($qryturma);
							
							$sqldisc = "SELECT * FROM disciplina WHERE $seleditar[id_disciplina] = id_disciplina LIMIT 1";
							$qrydisc = mysql_query($sqldisc);
							$seldisc = mysql_fetch_assoc($qrydisc);
							
							$sqlprof = "SELECT * FROM professor WHERE $seleditar[id_professor] = id_professor LIMIT 1";
							$qryprof = mysql_query($sqlprof);
							$selprof = mysql_fetch_assoc($qryprof);
					?>
					<option value="<?php echo $seleditar[id_aula]; ?>" >
						<?php echo $selturma[num_turma]; ?> - 
                        <?php if($selturma[turno] == 1){echo "Manhã";}
								elseif($selturma[turno] == 2){echo "Tarde";}
								elseif($selturma[turno] == 3){echo "Noite";}
						?> - 
                        <?php echo $seldisc[nome_disciplina]; ?> - 
                        <?php echo $selprof[nome_professor]; ?>
                    </option>
			<?php  } ?>
            	</select>
                <input type="submit" value="Alterar" />
            </form>
        </div>
		<?php
        	}
		?>
		<?php		
			// Restrito a Professores
			if($_SESSION["tipo_user"] == 2){ ?>   
        <div class="txtconteudo"> <strong>Painel do Professor</strong> </div>     
        <div class="txtconteudo"> <strong>Envio de Conteudo aos Alunos</strong> </div>
        <div class="txtconteudo"> <a href="index.php?link=14">Enviar Arquivo</a> </div>
        <div class="txtconteudo"> <strong>Conteúdo Enviado:</strong> </div>
    	    <?php
				$id_professor = $_SESSION["id_user"];
				$sqlaulas = "SELECT * FROM aula WHERE id_professor = $id_professor ORDER BY id_aula ASC";
				$qryaulas = mysql_query($sqlaulas);
				while ($selaulas = mysql_fetch_array($qryaulas)){
			
					$sqlups = "SELECT * FROM upconteudo WHERE id_aula = $selaulas[id_aula] ORDER BY date_up DESC";
					$qryups = mysql_query($sqlups);
					while ($selups = mysql_fetch_array($qryups)){
			?>
					<a href="ibec/up_conteudo/<?php echo $selups[file_up]; ?>"> <?php echo $selups[title_up]; ?> </a> <br/>
						
       			<?php
					}
				}	
				?>
        
        <?php
        	}
		?>
        <?php
			// Restrito a Alunos		
			if($_SESSION["tipo_user"] == 3){ ?>
		        <div class="txtconteudo"> <strong>Painel do Aluno</strong> </div>
				<?php include "ibec_listupload.php"; ?>
        <?php
        	}
		?>
        
        <?php
			// Restrito a Pai		
			if($_SESSION["tipo_user"] == 4){ ?>
		        <div class="txtconteudo"> <strong>Painel do Respons&aacute;vel</strong> </div>
				<?php include "ibec_listfilhos.php"; ?>
        <?php
        	}
		?>
	</div>
</div>