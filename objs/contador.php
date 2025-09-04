<?php

	$sqlcont		= "SELECT * FROM estatistica WHERE id_conts = 1";
	$qrycont 		= mysql_query($sqlcont);
	$estatistica 	= mysql_fetch_assoc($qrycont);

	// Atualiza Contador
	
	$upcontgeral 	= ($estatistica[contgeral] + 1);

	$sql_upro = "UPDATE estatistica SET	contgeral = '$upcontgeral' WHERE id_conts = 1 ";
	mysql_query($sql_upro) or die ("Erro:001 - Contador n&atilde;o atualizado");
	
	echo "$upcontgeral";
		
	/*
	
	$sqlcli	= "SELECT * FROM cliente WHERE id_cli = '$id_cli'";
	
	$qrycli 	= mysql_query($sqlcli);
	$linhacli	= mysql_fetch_assoc($qrycli);
	
	$sql_upro = "UPDATE estatistica SET	qtd_pro = '$est_pro'  			
	WHERE id_pro 		= '$id_pro' ";
	mysql_query($sql_upro) or die ("Erro:004 - Os dados não foram alterados");
	*/
	
?>
