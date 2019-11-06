<?php
include_once '../classCliente.php';

$ObjClientes = new Cliente();

$ObjClientes->nome=$_POST['nome'];
$ObjClientes->sobrenome=$_POST['sobrenome'];
$ObjClientes->email=$_POST['email'];
$ObjClientes->senha=$_POST['senha'];
$ObjClientes->telefone=$_POST['telefone'];
$ObjClientes->cidade=$_POST['cidade'];
$ObjClientes->doc_identificacao=$_POST['doc_identificacao'];


if(!retornar){
echo "CLIENTE CADASTRADO COM SUCESSO!!!";

else 
    echo "Erro ao cadastrar CLIENTE";
}

?>