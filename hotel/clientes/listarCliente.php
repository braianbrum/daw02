<?php

include_once '../H/cabecalho.html';
include_once '../class/classCliente.php';

$ObjClientes= new  Cliente();

$listarClientes = $ObjClientes->listarCliente();

?>

<h1>CLIENTES CADASTRADOS</h1>
<br>
<table border='5'>

<thead>
    <th>id_cliente</th>
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
foreach($listarClientes as $linha){
    echo "<tr>";
    echo "<td>".$linha->id_cliente."</td>";
    echo "<td>".$linha->nome."</td>";
    echo "<td>".$linha->sobrenome."</td>";
    echo "<td>".$linha->email."</td>";
    echo "<td>".$linha->senha."</td>";
    echo "<td>".$linha->telefone."</td>";
    echo "<td>".$linha->endereco."</td>";
    echo "<td>".$linha->cidade."</td>";
    echo "<td>".$linha->doc_identificacao."</td";

    echo "<td><a href='editarCliente.php?id_cliente=".$linha->id_usuario."'>EDITAR</a></td>";
    echo "<td><a href='ExcluirCliente.php?/id_cliente=".$linha->id_usuario."'>EXCLUIR</a></td>";
    echo "</tr>";



}

?>
</tbody>
</table>
<?php
include_once '../hotel/rodape.html';
?>