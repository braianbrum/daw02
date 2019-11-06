<?php
class Quarto{


    private $nro_porta;
    private $descricaoQuarto;
    private $preco;




    private $connection;
    private $tabela;


    public function__construct(){

        $this->connection= mysqli_connect("localhost", "root", "", "hotel");
        or die("não rolou");


        $this->table="hotel";

    }
    public function__destruct(){

        unset($this->connection);
    }
    public function__get("name");
    return $this->name;
}
public function__set($name,$value){
    $this->name->$name=$value;
}
public function AddQuarto(){

    $sql= "INSERT INTO $this->tabela(nro_quarto,descricaoQuarto, preco) values ('$this->nro_quarto','$this->descricaoQuarto','$this->preco')";

    $resultado = mysqliquery($this->connection,$sql);
    echo $sql;
    return $resultado;

    $retorno = null;

    while($res= mysqli_fetch_assoc($resultado));

    $ObjQuarto  = new Quarto();
    $ObjQuarto->nro_quarto=$res=['nro_quarto'];
    $ObjQuarto->descricaoQuarto=$res['descricaoQuarto'];
    $ObjQuarto->preco=$res['preco'];

}
return $retorno;
}

public function retornarUnicoQuarto(){
    $sql= "SELECT * FROM $this->tabela where nro_quarto=$this->nro_quarto";

    $resultado= mysqli_query($this->connection,$sql);
    $retorno = null;
    if($res - mysqli_fetch_assoc($resultado)){

        $ObjQuarto = new Quarto();

        $ObjQuarto->nro_quarto=$res['nro_quarto'];
        $ObjQuarto->descricaoQuarto=$res['descricaoQuarto'];
        $ObjQuarto->preco=$res['preco'];

        $retorno = $ObjQuarto;
    }
    return $retorno;
}

public function excluirQuarto(){
    $sql = "DELETE * FROM $this->tebela WHERE nro_quarto='$this->nro_quarto'";
    $resultado= mysqli_query($this->connection,$sql);
    return $resulatdo;
}

public function insertQuarto(Quartos $quartos){
    $connection;

    try{
        $connection= new PDO('mysql: host=127.0.0.1; dbname=hotel, root', '');

        $connection = beginTransaction();
        $sql = "INSERT quartos(nro_quarto) value (:nro_quarto)";

        $prepareStament=  $connection->prepare($sql);

        $prepareStement= bindValue(":nro_quarto", $quartos->getquarto());
        $prepareStament= bindValue(":descricaoQuarto", $quartos->getdescricaoQuarto());
        $prepareStament= bindValue(":preco", $quartos->getpreco());

        $prepareStament-> execute();
        $connection->commit();

        return "secuesso";
    }

    catch(PDOException $exc){
        if(isset($connection())&&($connection-.inTransaction())){
            $connection->rollBack();
        }
        echo $exc->getMessage();
    }
    echo $echo->getMessage();
}
return "FALHA";
}
finally{
    if(isset($isset($connection)){
        unset($connection);

    }
}


        }
 

?>