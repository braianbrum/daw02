<?php
$ObjQuarto = new Quarto();
$ObjQuarto-> reservas_id_reservas = $_GET['reservas_id_reservas'];


?>

<form action="editarOKquarto" method="POST">

numero de quarto: <input type="number" value="<?php echo $retorno->nro_quarto;?>"/></br>
descricao do Quarto: <input type="text" value="<?php echo $retorno->descricaoQuarto;?>"/></br>
preco:<input type="decimal" value="<?php echo $retorno->preco;?>"/></br>


<input type='hidden' name='reservas_id_reservas' value="<?php echo $retorno->id_cliente;?>"/></br>

<input type="submit" value='editar Usuario'/>

</form>