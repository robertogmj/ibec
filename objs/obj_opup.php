<div class="boxconteudo">
<?php
	#Recebendo Dados
	
	$id_formup 	= $_POST["id_formup"];
	$title_up 	= $_POST["title_up"];
	$selaula 	= $_POST["selaula"];
	$uparquivo 	= $_FILES["uparquivo"]["name"];
	
	#Verifcando se o formulario não está vazio
	if(empty($uparquivo)){
		echo "Erro no envio do anexo<br /><br />";
		echo "Nenhum arquivo foi selecionado para ser enviado.";
	}else{		

	#Verificando o tamanho do arquivo
		if($_FILES["uparquivo"]["size"] > 1572864) {
			echo "Erro no envio do anexo<br /><br />";
			echo "Seu anexo não pode ser maior que 1.5MB!";
			exit;
		}


		#Processa o envio do Arquivo		
		if(!empty($_FILES["uparquivo"]["tmp_name"]) and is_file($_FILES["uparquivo"]["tmp_name"])){
			
			#Local onde será salvo o arquivo
			$caminho = "ibec/up_conteudo/";
			
			#Captura Data e Hora para serem inseridos no nome do arquivo
			$datahora = date("Ymd_His_");
			$regdata = date("Y-m-d H:i:s");
			echo $regdata;

			#Renomeando o Arquivo e Localizando a pasta de destino
			$caminho = $caminho.$datahora.$_FILES["uparquivo"]["name"];
			
			#Verifica a extensão do Arquivo se é PDF
			if(eregi(".pdf$", $_FILES["uparquivo"]["name"])){
				copy($_FILES["uparquivo"]["tmp_name"],$caminho);
				
				# Registra o envio no Banco de Dados
				$reg_file = $datahora.$_FILES["uparquivo"]["name"];
				echo "Processando ... $uparquivo";
				
				$sqlup= "INSERT INTO upconteudo (title_up, id_aula, file_up, date_up) VALUES ('$title_up', '$selaula', '$reg_file', '$regdata' )";
				mysql_query($sqlup) or die ("Erro:017 - Arquivo nao Registrado no Sistema");
				echo "<script type = 'text/javascript'> location.href = 'index.php?link=3'</script>";

				echo "Envio de anexo<br /><br />";
				echo "Anexo enviado com sucesso!";

			}else{
				echo "Erro no envio do anexo<br /><br />";
				echo "Extensão inválida de arquivo!";
				echo "<script type = 'text/javascript'> location.href = 'index.php?link=14'</script>";
				exit;
			}
		
		}else{
			echo "Erro no envio do anexo<br /><br />";
			echo "Caminho e/ou nome de anexo inválido!";
			exit;
	}
}
?>
</div>