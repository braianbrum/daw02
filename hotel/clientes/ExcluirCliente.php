<?php

include_once '../hotel/cabecalho.html';

if(!isset($_GET['id_cliente'])){

    header("location:ListarCliente.php");


}

include_once '../class/ClassCliente.php';
$ObjClientes = new Cliente();
$ObjClientes->id_cliente=$_GET['id_cliente'];

if(!retorno)
echo "excluido com sucesso!!!";

else

echo "não excluido";


include_once '../hotel/rodape.html';


?>