<?php 
include_once '../hotel/cabecalho.html';
include_once '../class/class/classCliente.php';

$ObjReservas = new Reserva();

$listarReservas  = $ObjReservas->listarReserva();
?>


<h1>RESERVAS</h1>
<br>
<table border='5'>

<thead>
    <th>id_reservas</th>
    <th>dataInicio</th>
    <th>dataFinal</th>
 
</thead>
<tbody>


<?php
foreach($listarReservas as $linha){
    echo "<tr>";
    echo "<td>".$linha->id_reservas."</td>";
    echo "<td>".$linha->dataInicio."</td>";
    echo "<td>".$linha->dataFinal."</td>";


    echo "<td><a href=""/id_reservas=.$linha->id_reservas."'>EDITAR"</a></td>";
    echo "<td><a href=""/id_reservas=.$linha->id_reservas."'>EXCLUIR"</a></td>";
    echo "</tr>";


    
}

?>
</tbody>
</table>
<?php
include_once '../hotel/rodape.html';
?>