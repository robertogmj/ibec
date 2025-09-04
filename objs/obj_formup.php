<form action="index.php?link=13" method="post" enctype="multipart/form-data" name="upform" id="upform">
    <div>Professor: <?php echo $_SESSION["nome_user"]; ?></div>
    <?php
		$id_professor = $_SESSION["id_user"];
	?>
    
    Titulo do Conteudo: <input name="title_up" type="text" id="title_up" width="20" maxlength="20"/>
    
    <div>Selecione a Turma e Turno ao qual deseja enviar este arquivo: </div>
   		<select name="selaula" id="selaula">
        	<?php
				$sqlaula = "SELECT * FROM aula WHERE $id_professor = id_professor ORDER BY id_turma ASC";
				$qryaula = mysql_query($sqlaula);
				while ($selaula = mysql_fetch_array($qryaula)){
				
					$sqlturma = "SELECT * FROM turma WHERE $selaula[id_turma] = id_turma";
					$qryturma = mysql_query($sqlturma);
					$selturma = mysql_fetch_assoc($qryturma);
					
					$sqldisc = "SELECT * FROM disciplina WHERE $selaula[id_disciplina] = id_disciplina";
					$qrydisc = mysql_query($sqldisc);
					$seldisc = mysql_fetch_assoc($qrydisc);
			?>
				<option value="<?php echo $selaula[id_aula]; ?>" >
					<?php echo $selturma[num_turma]; ?> - 
					<?php if($selturma[turno] == 1){echo "Manhã";}
						elseif($selturma[turno] == 2){echo "Tarde";}
						elseif($selturma[turno] == 3){echo "Noite";}
					?> - 
                    <?php echo $seldisc[nome_disciplina]; ?>
                </option>
			<?php  } ?>
         </select>
         
	<div>Enviar Conteudo Adicional (Arquivo em formato PDF e com tamanho máximo de 1.5MB)</div> 
	<input type="file" name="uparquivo" size="50" />
         
	<input name="id_formup" type="hidden" id="id_formup" value="<?php echo $id_formup; ?>" />
  	<div><input type="reset" value="Redefinir Formulario" class="button" /> | <input type="submit" value="Enviar Arquivo" /></div>
         
</form> 
 
 
/*******************************************************************************************************************************/  
<?php /*    <div>Turma:
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
     
    <div>Enviar Conteudo Adicional (Arquivo em formato PDF e com tamanho máximo de 1.5MB)</div> 
	<input type="file" name="uparquivo" size="50" />

  
          
	<input name="id_formup" type="hidden" id="id_formup" value="<?php echo $id_formup; ?>" />
  	<div><input type="reset" value="Redefinir Formulario" class="button" /> | <input type="submit" value="Enviar Arquivo" /></div>
</form>
*/ ?>
