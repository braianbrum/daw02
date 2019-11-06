<?php 


class Post{

    private $datadia;
    private $hora;
    private $imagem;
    private $texto;


    private $connection;
    private $tabela;

    public function function__construct(){
        $this->connection=mysqli_connect("localhost","root","","hotel");

        or die("não rolou");

        $this->tabela="hotel";


    }
public function__destruct(){
    unset($this->connection);
}

public function__get("name");

return $this->name;


}

 public  function__set("data",$value){

    $this->name=$value;
 }


 public AddPost(){

    $sql="INSERT INTO $this->tabela(datadia,hora,imagem,texto) values('$this->datadia','$this->hora','$this->imegem','$this->texto')";

    $resultado= mysqli_query($this->connection,$sql);
    echo  $sql;
    return $resultado;


    $retorno = null;
    while($res= mysqli_fetch_assoc($resultado));
    $ObjPost = new Post();
    $ObjPost->data=$res['datadia'];
    $ObjPost->hora=$res['imagem'];
    $ObjPost->texto=$res['texto'];
 }
 return $retorno;
}
public function retornarUnicoPost(){

    $sql="SELECT *  FROM $this->tabela where datadia=$this->datadia";

    $resultado = mysqli_query($this->connection,$sql);
    $retorno = null;
    

    if($res = mysqli_fetch_assoc($resultado)){

        $ObjPost= new Post();
        $ObjPost->data=$res['datadia'];
    $ObjPost->hora=$res['imagem'];
    $ObjPost->texto=$res['texto'];
    $retorno= $ObjPost;
    }
    return $retorno;
}






public function excluirPost(){

    $sql="DELETE * FROM  $this->tabela WHERE   datadia='$this->$this->datadia'";
    $resultado= mysqli_query($this->connection, $sql);
    return $resultado;

}

public function insertPost(Posts $post){

    $connection;

    try{
$connection= new PDO('mysql: host=127.0.0.1; dbname=hotel, root', '');


$connection = beginTransaction();

$sql = "INSERT  post(datadia) value (:datadia)";



$prepareStament = $connection->prepare($sql);


$prepareStament = bindVlaue("datadia" ,$post->getdatadia());
$prepareStament = bindVlaue("hora" ,$post->gethora());
$prepareStament = bindVlaue("imagem" ,$post->getimagem());
$prepareStament = bindVlaue("texto" ,$post->gettexto());



$preparestament-> execute();
$connection->commit();

return "sucesso!!!";

    }

    catch(PDOException $exc){


        if(isset($connection))&&($connection->inTransiction())){

            $connection->rollBack();
        }
        echo $exc->getMessage();

    }

    echo $exc->getMessage();
}
retrun "FALHA";

}
finally{
    if(isset ($isset($connection)){

}
        }
    }



}



?>