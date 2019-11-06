<?php
$ObjUsuarios= new Usuario();
$ObjUsuarios->nome=$_POST['nome'];
$ObjUsuarios->sobrenome=$_POST['sobrenome'];
$ObjUsuarios->email=$POST['email'];
$ObjUsuarios->senha=$_POST['senha'];
$ObjUsuarios->telefone=$_POST['telefone'];
$ObjUsuarios->endereco=$_POST['endereco'];
$ObjUsuarios->cidade=$_POST['cidade'];
$ObjUsuarios->doc_identificacao=$_POST['doc_identificacao'];

$retornar = $ObjUsuarios-> editarUsuario();

if(!retornar)
echo "Usuario alterado com sucesso!!!";

else

echo "Erro ao alterar usuario";

?>