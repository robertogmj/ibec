<?php 
	include "bd/conexao.php";
	
	session_start();

	if ((!isset($_SESSION["login_user"])) AND ($_GET["link"] > 2) AND ($_GET["link"] < 11)){
  		print "<script type = 'text/javascript'> location.href = 'index.php'</script>";
	}
	
	// Função para Sortear Background
	$bgrand = rand(1,3);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>IBEC - Instituto Batista de Ensino de Custodópolis</title>
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/gallery.css" />
        <link rel="stylesheet" href="css/gallery.theme.css" />
        
		<style type="text/css">
			#bgtela{
				background:url(imgs/bgs/<?php echo $bgrand; ?>.jpg) #CCCC00 center no-repeat;
			}
		</style>
	</head>

	<body>
    	<div id="bgtela">
        	<div id="principal">
	        	<?php include "layout/cabecalho.php"; ?>
	    		<?php include "layout/conteudo.php"; ?>
	            <?php include "layout/colright.php"; ?>
	            <?php include "layout/rodape.php"; ?>
            </div>
    	</div>
	</body>
</html>
