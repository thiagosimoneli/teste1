	<div id="topo">
		<div id="logo">
			<h1>
				LBAA
			</h1>
			<h3>
				lIGA BRASILEIRA DE AMERICANS ARMYS
			</h3>
		</div>
		
<?php 
	$enviado = $_GET['enviar'];
	if($enviado == ""){	
?>
 		<div id="log">
			<form method="GET" action="index.php">	
			<p>
					<input type="text" name="usuario" id="usuario" value="USUÁRIO" onclick="document.getElementById('usuario').value='';">
			</p>			
			<p>
					<input type="text" name="senha" id="senha" value="SENHA" onclick="document.getElementById('senha').value='';">
			</p>			
			<p>
					<input type="submit" name="enviar" value="OK">
			</p>
			
			</form>
		</div> 
<?php } else{?>
  		<div id="logado">
			<a href="#" class="perfil">
				<div class="user_foto">
					<img src="images/usuarios/user_pedro1234_thumb.jpg">
				</div>
				<h1>PEDRO</h1>
			</a>
			
			<ul id="menu"> 
				
				<li><a href="#" class="drop"><img src="images/icones/user_arrow.png"> </a>
					<div class="columns"> 
						<ul class="col"> 
							<img src="images/usuarios/user_pedro1234_thumb.jpg"> <span>Pedro</span> 
							<li><a href="#">Editar perfil</a></li>
							<li><a href="#">Mensagens diretas</a></li>
							<li><a href="#">Lista de amigos</a></li>
							<li><a href="#">Ajuda</a></li>
							<li><a href="#">Meus torneios</a></li>
							<li><a href="#">Configurações</a></li>
							<li><a href="#">Sair</a></li>
						</ul> 
					</div> 
				</li>
			</ul> 
			
			<br>
			<p>Caixa de mensagens (<a href="#">5</a>)</p>
		</div>
<?php }?>
	</div>