<?php
$ObjPost = new Post();

$ObjPost->datadia=$_POST['datadia'];
$ObjPost->hora=$_POST['hora'];
$ObjPost->imagem=$_POST['imagem'];
$ObjPost->texto=$_POST['texto'];


$retornar = $ObjPost->editarPost();

if(!retornar)

echo "POST ALTERADO COM SUCESSO!!!";

echo "ERRO ao altarar POST";


?>

