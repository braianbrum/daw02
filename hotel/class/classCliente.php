<?php

class Cliente{

    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $telefone;
    private $endereco;
    private $cidade;
    private $doc_identificacao;

    private $connection;
    private $tabela;

    public function construct(){
        $this->connection=mysqli_connect("localhost", "root","", "hotel")
        or die("não rolou");

        $this->tabela="hotel";

    }
    public function destruct(){

        unset($this->connection);

    }

    public function get(){

        return $this->name;
    }

    public function set($name, $value){
        $this->$name=$value;
    }
    public function AddClientes(){

        $sql="INSERT INTO  $this->tabela(nome,sobrenome,email,senha,telefone,endereco,cidade,doc_identificacao) values ('$this->nome','$this->sobrenome','$this->email','$this->senha','$this->telefone','$this->endereco','$this->cidade','$this->doc_identificacao')";

        $resultado = mysqli_query($this->connection,$sql);
        echo $sql;
        return $resultado;


        $retorno = null;
        while($res= mysqli_fetch_assoc($resultado)){
            $ObjUsuario = new Cliente();
            $ObjUsuario->nome=$res['nome'];
            $ObjUsuario->sobrenome=$res['sobrenome'];
            $ObjUsuario->email=$res['email'];
            $ObjUsuario->senha=$res['senha'];
            $ObjUsuario->telefone=$res['telefone'];
            $ObjUsuario->endereco=$res['endereco'];
            $ObjUsuario->cidade=$res['cidade'];
            $ObjUsuario->doc_identificacao=$res['doc_identificacao'];

        }
    return $retorno;


    public function listarCliente(){
         
        $sql=  "SELECT  *
                  FROM $this->tabela 
                    ";
        $resultado= mysqli_query($this->connection,$sql);    
        
        
        $retorno = null;
        while($res= mysqli_fetch_assoc($resultado)){
            $ObjClientes= new Cliente();
            $ObjClientes->id_cliente=$res['id_cliente'];
            $ObjClientes->nome=$res['nome'];
            $ObjClientes->sobrenome=$res['sobrenome'];
            $ObjClientes->email=$res['email'];
            $ObjClientes->senha=$res['senha'];
            $ObjClientes->endereco=$res['endereco'];
            $ObjClientes->cidade=$res['cidade'];
            $ObjClientes->doc_identificacao=$res['doc_identificacao'];
            $retorno[]=$objCliente;
        }
             return  $retorno; 
        }




}
public function retornarUnicoCliente(){
    $sql="SELECT * FROM $this->tabela where nome=$this->nome";
    
    $resultado= mysqli_query($this->connection,$sql);
    $retorno=null;

    if($res = mysqli_fetch_assoc($resultado)){
        $ObjUsuario = new Cliente();

        $ObjUsuario->nome=$res['nome'];
        $ObjUsuario->sobrenome=$res['sobrenome'];
        $ObjUsuario->email=$res['email'];
        $ObjUsuario->senha=$res['senha'];
        $ObjUsuario->telefone=$res['telefone'];
        $ObjUsuario->cidade=$res['cidade'];
        $ObjUsuario->endereco=$res['endereco'];
        $ObjUsuario->doc_identificacao=$res['doc_identificacao'];

        $retorno = $ObjUsuario;
    }
    return $retorno;

}


public function excluirUsuario(){
    $sql="DELETE * FROM $this->tabela WHERE nome='$this->nome'";
    $resultado= mysqli_query($this->connection,$sql);
    return $resultado;

}

    public function insertUsuario(Usuarios $usuarios){
        $connection;
        try{
            $connection= new PDO('mysql: host=127.0.0.1;dbname=hotel, root', ' ');

            $connection = biginTransaction();
            $sql = "INSERT clientes(nome) value (:nome)";

            $prepareStament= $connection->prepare($sql);

            $prepareStament= bindValue(":nome", $usuarios->getnome());
            $prepareStament= bindValue(":sobrenome", $usuarios->getsobrenome());
            $prepareStament= bindValue(":email",$usuarios->getemail());
            $preparestament= bindValue(":senha", $usuarios->getsenha());
             $prepareStament= bindValue(":telefone", $usuarios->gettelefone());
             $preparestament= bindValue("endereco", $usuarios->getendereco());
             $perpareStament= bindValue("cidade", $usuarios->getcidade());
             $prepareStament= bindValue("doc_identificacao"->getdoc_identificacao());


            

            $prepareStament-> execute();
            $connection->commit();

            return "sucesso";
        }

        catch(PDOException $exc){
            if(isset($connection)&&($connection->inTransaction())){
                $connection->rollBack();
            }
            echo $exc-> getMessage();
            return "FALHA";
            }
        
        
        finally {
            if(isset($connection)){
            unset($connection);
            }
        }
    }

}
?>