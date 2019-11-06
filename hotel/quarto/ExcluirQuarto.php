<?php

include_once '../hotel/cabecalho.html';

if(!isset($_GET['reservas_id_reservas']);

header("location:ListarQuarto.php");

}

include_once '../class/ClassQuarto.php';

$ObjQuarto = new Quarto();
$ObjQuarto->reservas_id_reservas=$_GET['reservas_id_reservas'];

if(!retorno)
echo "excluindo com sucesso!!!";

else

echo "ERRO ao excluir";

include_once '../hotel/rodape.html';




?>