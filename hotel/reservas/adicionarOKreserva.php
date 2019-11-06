<?php
include_once '../classReservas.php';

$ObjReserva-> new Reserva();

$ObjReserva->dataInicio->dataInicio=$POST['dataInicio'];
$ObjReserva->datafinal->dataFinal=$POST['dataFinal'];



if(!retornar){

echo "RESERVA CADASTRADA COM SUCESSO!!!";

else
    echo "Erro ao fazer RESERVA";
}


?>