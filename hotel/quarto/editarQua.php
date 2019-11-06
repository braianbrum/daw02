<?php

$ObjQuarto= new Quarto();

$ObjQuarto->nro_quarto=$_POST['nro_quarto'];
$ObjQuarto->descricaoQuarto=$POST['descricaoQuarto'];
$ObjQuarto->preco=$_POST['preco'];

$retornar = $ObjQuarto->editarQuarto();

if(!retornar){
    echo "QUARTO ALETRADO COM SUCESSO";

    else
    echo "ERRO ao alterar Quarto";
    
}

?>