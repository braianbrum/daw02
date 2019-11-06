<?php

include_once '../H/cabecalho.html';

include_once '../class/classUsuario.php';
$objUsuarios = new Usuarios();


$objUsuarios->nome=$_POST["nome"];
$objUsuarios->sobrenome=$_POST["sobrenome"];
$objUsuarios->email=$_POST["email"];
$objUsuarios->senha=$_POST["senha"];
$objUsuarios->telefone=$_POST["telefone"];
$objUsuarios->endereco=$_POST["endereco"];
$objUsuarios->cidade=$_POST["cidade"];
$objUsuarios->doc_identificacao=$_POST["doc_identificacao"];


if($retorno)
echo "Usuario adicionado com sucesso!!!";

else

 echo "Não foi possivel adicionar usuario";

 include_once '../H/rodape.html';
 
?>