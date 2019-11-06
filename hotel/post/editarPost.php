<?php

$ObjPost = new Post();
$ObjPost->id_post = $_GET['id_post'];
$retorno = $ObjPost-> editarPost();

?>

<form action="editarOKpost" method="POST">

data:<input type="date" name="datadia" value="<?php echo $retorno->datadia;?>"/></br>
hora:<input type="time" name="hora" value="<?php echo $retorno->hora;?>"/></br>
imagem:<input type="file" name="imagem" value="<?php echo $retorno->imagem;?>"></br>
texto:<input type="text" name="text" value="<?php echo $retorno->texto;?>"></br>



<input type='hidden' name='id_post' value="<?php echo $retorno->id_post;?>"></br>
<input type="submit" value='editar Post'/>

</form>

