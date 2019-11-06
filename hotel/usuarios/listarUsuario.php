<?php
include_once '../H/cabecalho.html';
include_once '../class/classUsuario.php';

$ObjUsuarios = new Usuario();

$listarUsuarios = $ObjUsuarios->listarUsuario();

?>

<h1>USUÁRIOS CADASTRADOS</h1>
<br>
<table border='5'>

<thead>
<th>id_Usuario</th>
<th>nome</th>
<th>sobrenome</th>
<th>email</th>
<th>senha</th>
<th>telefone</th>
<th>endereco</th>
<th>cidade</th>
<th>doc_identificacao</th>
</thead>
<tbody>
<?php

foreach($listarUsuarios as $linha){
    echo"<tr>";
    echo "<td>".$linha->id_usuario."</td>";
    echo "<td>".$linha->nome."</td>";
    echo "<td>".$linha->sobrenome."</td>";
    echo "<td>".$linha->email."</td>";
    echo "<td>".$linha->senha."</td>";
    echo "<td>".$linha->telefone."</td>";
    echo "<td>".$linha->endereco."</td>";
    echo "<td>".$linha->cidade."</td>";
    echo "<td>".$linha->doc_identificacao."</td>";

    echo "<td><a href=""/id_usuario=.$linha->id_usuario."'>EDITAR"</a></td>";
    echo "<td><a href=""/id_usuario=.$linha->id_usuario."'>EXCLUIR"</a></td>";
    echo "</tr>";
}
?>
</tbody>
</table>
<?php
include_once '../H/rodape.html';
?>