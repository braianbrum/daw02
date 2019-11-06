<?php
$ObjReserva = new Reserva();
$ObjReserva->id_reservas = $_GET['id_reservas'];
$retorno = $ObjReservas-> editarReserva();
?>


<form action="editarOKreserva" method="POST">
    Data de Início: <input type="date" name="dataInicio" value="<?php echo $retorno; ?>"/></br>
    Data Final:<input type="date" name="dataFinal" value="<?php echo $retorno;?>"/></br>



    <input type='hidden' name='id_reserva' value="<?php echo $retorno->id_reserva;?>"/></br>

 <input type="submit" value='editar RESERVA'/>

</form>

