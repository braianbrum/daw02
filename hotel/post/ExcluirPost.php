<?php
include_once '../hotel/cabecaloh.html';

if(!isset($_GET['id_post']){

    header("location:ListarPost.php");



}

include_once '../class/ClasPost.php';
$ObjPost = new Post();
$ObjPost->id_post=$_GET['id_post'];

if(!retorno)
echo "Excluido com sucesso!!!";
else
echo "ERRO ao excluir";




include_once '../hotel/rodape.html';

?>
