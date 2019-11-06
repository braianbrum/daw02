<?php

include_once '../hotel/cabecalho.html';

if(!isset($_GET['id_reservas'])){

    header("location:ListarReserva.php");

}


include_once '../class/ClassReservas.php';
$ObjReserva = new Reserva();
$ObjReserva->id_reservas=$_GET['id_reservas'];


if(!retorno)
echo "Reserva EXCLUIDA com Sucesso!!!";

else

echo "ERRO AO EXCLUIR RESERVA";

include_once '../hotel/rodape.html';

?>