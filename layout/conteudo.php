<div id="conteudo">
	<?php
		$link = $_GET["link"];			
		$pag[1] = "layout/homeindex.php";
		$pag[2] = "objs/obj_login.php";
		$pag[3] = "ibec/ibec_home.php";
		$pag[4] = "objs/obj_opcad.php";
		$pag[5] = "ibec/ibec_cad_admin.php";
		$pag[6] = "ibec/ibec_cad_prof.php";
		$pag[7] = "ibec/ibec_cad_disc.php";
		$pag[8] = "ibec/ibec_cad_turma.php";
		$pag[9] = "ibec/ibec_cad_aluno.php";
		$pag[10] = "ibec/ibec_cad_respon.php";
		$pag[11] = "ibec/ibec_cad_aluno2.php";
		$pag[12] = "ibec/ibec_cad_aula.php";
		$pag[13] = "objs/obj_opup.php";
		$pag[14] = "ibec/ibec_uploadprof.php";
		$pag[20] = "layout/homeconteudo.php";
													
		if (!empty ($link)){ //Se a variavel link n&atilde;o estiver vazia
			if (file_exists($pag[$link])){ //se o arquivo existir 
				include $pag[$link]; // inclua o arquivo
			}else{
				include "layout/homeindex.php";
			}
		}else{
			include "layout/homeindex.php";
		}			
	?>
</div>