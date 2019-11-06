<?php
include_once '../H/cabecalho.html';
?>
<html>
    <head>
        <title>Usuarios</title>
    </head>
    <body style="background-color:#c6dfe0;">
	<div class="form" style="background-color:white;">
        <form action="adicionarOKusuario.php" method="POST" enctype="multipart/form-data" >
            <h2 style="color:black;">
            
            Nome:<input type="text" name="nome"/></br>
            Sobrenome:<input type="text" name="sobrenome"/></br>
            Email:<input type="email" name="email"></br>
            Senha:<input type="password" name="senha"/></br>
            Telefone:<input type="number" name="telefone"/></br>
            Endereço:<input type="text" name="endereco"/></br>
            Cidade:<input type="text" name="cidade"/></br>
            Documento de Indentificação:<input type="number" name="doc_identificacao"/></br>

          
          <input type="submit" value="Adicionar Usuario"/></br>
		  </br>
          
         
          
    </form>
	</div>
    </body>
                 
    
</html>
<?php

include_once '../H/rodape.html';

?>




