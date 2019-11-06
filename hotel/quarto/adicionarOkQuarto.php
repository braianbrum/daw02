<?php
include_once '../class/classQuarto.php';

$ObjQuarto = new Quarto();

$ObjQuarto->nro_quarto=$_POST['nro_quarto'];
$ObjQuarto->descricaoQuarto=$_POST['descricaoQuarto'];
$ObjQuarto->preco=$_POST['preco'];


if(!retornar){
    echo "quarto Adivonado com sucesso!!!";

    else 
    echo "ERRO ao cadastrar Quarto";
    
}
?>