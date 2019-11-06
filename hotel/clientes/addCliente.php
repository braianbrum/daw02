<?php
include_once '../H/cabecalho.html';

?>
<body style="background-color: #02051a;">
    <div id="formularioCli" style="background-color:white;">
        <h1>CADASTRAMENTO DE CLIENTES</h1>
Nome:<input type="text" name="nome"/></br></br>
Sobrenome:<input type="text" name="sobrenome"/></br></br>
e-mail:<input type="email" name="email"/></br></br>
Senha:<input type="password" name="senha"/></br></br>
Telefone:<input type="number"   name="telefone"/></br></br>
Endereço:<input type="text" name="endereco"/></br></br>
Documento de identificação:<input type="number" name="documentoDeIdentificacao"/></br></br>
<button type="reset" name="CANCELAR" style="background-color:orange;">CANCELAR</button>
<button type="submit" name="CADASTRAR" style="background-color:green;">CADASTRAR</button>
</br></br>


</div>

<?php 
include_once '../H/rodape.html';
?>
</body>