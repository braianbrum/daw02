<?php

class Reservas{

    private $dataInicial;
    private $dataFinal;




    private $connection;
    private $tabela;

    public function_construct(){
        $this->connection=mysqli_connect("localhost", "root", "root", "", "hotel");
        or die ("não rolou");

        $this->tabela="hotel";

    }

    public function__destruct(){
        unset($this->$connection);

    }

    public function__get("name");
    return $this->name;

}


public function__set($name, $value){
    $this->$name=$value;

}
public AddReservas(){

    $sql= "INSERT INTO $this->tabela(dataInicial, dataFinal) values ('$this->dataInicial','$this->dataFinal')";



    $resultado = mysqli_query($this->connection,$sql);
    echo $sql;
    return $resultado;

$return = null;
while($res= mysqli_fetch_assoc($resultado));

$ObjReserva = new Reservas();
$ObjReserva->dataInicial=$res['dataInicial'];
$ObjReserva->dataFinal=$res['dataFinal'];

}

return $retorno;

}

public function retornarUnicoreserva(){

    $sql=" SELECT * FROM $this->tabela where dataInicial=$this->dataInicial";

    $resultado = mysqli_query($this->connection,$sql);
    $retorno = null;

    if($res = mysqli_fetch_assoc($resultado)){
$ObjReseva->dataInicial=$res['dataInicial'];
$ObjReseva->dataFinal=$res['dataFinal'];

$retorno = $ObjReseva;
    }
    return $retorno;
}

public function excluirReserva(){
    $sql=" DELETE * FROM $this->tabela WHERE dataInicial'";
    $resultado= mysqli_query($this->connection,$sql);
    return $resultado;

}

public function excluirReserva(){
    $sql= "DELETE * FROM $this->tabela WHERE nome='$this->dataInicial'";
    $resultado= mysqli_query($this->connection, $sql);
return $resultado;
}

public function insetrReserva(Reserva $reservas){
    $connection;
        try{
            $connection= new PDO('mysql: host=127.0.0.1;dbname=hotel, root', ' ');


    $connection = beginTransaction();
    $sql = "INSERT reservas(dataInicio) value(:dataInicio)";



    $prepareStament= $connection->prepare($sql);
    $prepareStament= bindValue(":dataInicio", $reservas->getdataInicio());
    $prepareStament= bindValue(":dataFinal", $reservas->getdataFinal());

   

    $prepareStament-> execute();
    $connection->commit();

    return "sucesso";

        }

        catch(PDOException $exc){
            if(isset($connection))&&($connection->inTransaction())){
                $connection->rollBack();

            }


            echo $exc-> getMessage();
        }
        echo $exc->getMessage();
    }
    return "FALHA";

        }
        finally{
            if(isset ($isset($connection)){
                unset($connection);

            }
        }
    }
}
?>




