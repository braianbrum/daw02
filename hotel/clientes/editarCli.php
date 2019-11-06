<?php
include_once '../class/classCliente.php';

$ObjClientes= new Cliente();



$ObjClientes->nome=$_POST['nome'];
$ObjClientes->sobrenome=$_POST['sobrenome'];
$ObjClientes->email=$_POST['email'];
$ObjClientes->senha=$_POST['senha'];
$ObjClientes->telefone=$_POST['telefone'];
$ObjClientes->endereco=$_POST['endereco'];
$ObjClientes->cidade=$_POST['cidade'];
$ObjClientes->doc_identificacao['doc_identificacao'];

$retornar = $ObjClientes->editarCliente();

if(!retornar){
echo "Cliente alterado com sucesso";

else

echo "Erro ao alterar cliente";
}
?>