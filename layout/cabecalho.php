<div id="cabecalho">
	<div id="toplogo"><img src="imgs/logoibec.png" width="200" height="200" /></div>
    <div id="toptxt">Instituto Batista de Ensino de Custod&oacute;polis <br/> Ensinando com amor!</div>
    <div id="toplogin">
    	Plataforma Online
        <?php
/*			echo "Usuario: ";
			echo $_SESSION["nome_user"];
			echo " - ";
			echo $_SESSION["tipo_user"]; */
		?>
    	<form action="index.php?link=2" method="post" name="cadform" id="cadform">
			Login: <input name='login_user' type='text' id='login_user' size='10' /> | 
			Senha: <input name='pass_user' type='password' id='pass_user' size='10' /> | 
			<input type="submit" value="Entrar" />
		</form>
    </div>    
</div>