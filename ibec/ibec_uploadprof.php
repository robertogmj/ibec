<div id="conteudo">
	<div class="boxconteudo">
        
        <?php		
			if($_SESSION["tipo_user"] == 2){ ?>
				<div class="titconteudo"> Plataforma Educacional IBEC </div> 
		        <div class="txtconteudo"> <strong>Enviar Arquivo para Alunos</strong> </div>
		<?php	
				$id_formup = 1;
        		include "objs/obj_formup.php";
			}else{
				echo "Somente Professores podem enviar arquivos, entre com o Login de um Professor";
			}		
		?>
	</div>
</div>