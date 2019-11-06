<?php

$ObjReserva = new Reserva();

$ObjReserva->dataInicio=$_POST['dataInicio'];
$ObjReserva->dataFinal=$_POST['dataFinal'];


$retornar = $ObjReserva->editarReserva();

if(!retornar){
    echo "Reserva ALTERADA com SUCESSO!!!";

    else

    echo "ERRO ao alterar RESERVA";

}

?>