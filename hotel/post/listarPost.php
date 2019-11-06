<?php

include_once '../hotel/cabecalho.html';
include_once '../class/classPost.php';


$ObjPost = new Post();

$listarPost = $ObjPost->listarPost();
?>

<h1>TODAS AS POSTAGENS</h1>
<br>
<table border='5'>

<thead>
<th>id_post</th>
<th>datadia</th>
<th>hora</th>
<th>imagem</th>
<th>texto</th>
</thead>

<tbody>

<?php
foreach($listarPost as $linha){
    echo "<tr>";
    echo "<td>".$linha->id_post."</td>";
    echo "<td>".$linha->datadia."</td>";
    echo "<td>".$linha->hora."</td>";
    echo "<td>".$linha->imagem."</td>";
    echo "<td>".$linha->texto."</td>";


echo "<td><a href=""/id_post=.$linha->id_post."'>Editar Postagem"</a></td>";
echo "<td><a href=""/id_post=.$linha->id_usuario."'>EXCLUIR"</a></td>";
    echo "</tr>";

}

?>
</tbody>
</table>
<?php
include_once '../hotel/rodape.html';
?>

