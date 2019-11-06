<?php

include_once '../hotel/cabecalho.html';
include_once '../class/classQuarto.php';

$Objquarto = new Quarto();

$listarQuarto = $ObjQuarto->listarQuarto();


?>

<h1>QUARTOS </h1>
<br>

<thead>
<th>reservas_id_reservas</th>
<th>nro_quarto</th>
<th>descricaoQuarto</th>
<th>preco</th>
</thead>
<tbody>

<?php



foreach($listarQuartos as $linha){

    echo "<tr>";
    echo "<td>".$linha->reservas_id_reservas."</td>";
    echo "<td>".$linha->descricaoQuarto;"</td>";
    echo "<td>".$linha->preco;"</td>";

  
    

    echo "<td><a href=""/reservas_id_reservas=.$linha->reservas_id_reservas."'>EDITAR"</a></td>";
    echo "<td><a href=""/reservas_id_reservas=.$linha->reservas_id-reservas."'>EXCLUIR"</a></td>";
    echo "</tr>";



}

?>

</tbody>
</table>
<?php

include-once '../hotel/rodape.html';
?>