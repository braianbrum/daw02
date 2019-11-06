<?php

class Usuario{
    
    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $telefone;
    private $endereco;
    private $cidade;
    private $doc_identificacao;

    private $connection;//conexao co o banco
    private $tabela;// tabela alvo da classe

    public function __construct(){
    
        $this->connection=mysqli_connect("localhost", "root","", "hotel")
        or die("não rolou");

        $this->tabela="hotel";

    }
    public function __destruct(){

        unset($this->connection);

    }

    public function __get($name){

        return $this->name;
    }

    public function __set($name,$value){

        $this->$name=$value;
    }
    public function Addusuarios(){

        $sql=  "INSERT INTO  $this->tabela(nome,sobrenome,email,senha,telefone,endereco,cidade,doc_identificacao) values ('$this->nome','$this->sobrenome','$this->email','$this->senha','$this->telefone','$this->endereco','$this->cidade','$this->doc_identificacao')";

        $resultado = mysqli_query($this->connection,$sql);
        echo $sql;
        return $resultado;
    }
    public function listarUsuario(){
         
        $sql=  "SELECT  *
                  FROM $this->tabela 
                    ";
        $resultado= mysqli_query($this->connection,$sql);    

        $retorno = null;
        while($res= mysqli_fetch_assoc($resultado));
$ObjUsuario = new Usuario();
$ObjUsuario->id_usuario=$res['id_usuario'];
$ObjUsuario->nome=$res['nome'];
$ObjUsuario->sobrenome=$res['sobrenome'];
$ObjUsuario->email=$res['email'];
$ObjUsuario->senha=$res['senha'];
$ObjUsuario->telefone=$res['telefone'];
$ObjUsuario->endereco=$res['endereco'];
$ObjUsuario->cidade=$res['cidade'];
$ObjUsuario->doc_identificacao=$res['doc_identificacao'];
$retorno[]=$ObjUsuario;
}
return  $retorno; 

}
public function retornarUnicoUsuario(){
    $sql="SELECT * FROM $this->tabela where id_usuario=$this->id_usuario";
    
    $resultado= mysqli_query($this->connection,$sql);
    $retorno=null;

    if($res = mysqli_fetch_assoc($resultado)){
$ObjUsuario = new Usuario();

$ObjUsuario->id_usuario=$res['id_usuario'];
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
    $resultado= mysqli_query($this->connection,$sql).
    return $resultado;

}

    public function insertUsuario(Usuarios $usuarios){
        $connection
        try{
            $connection= new PDO('msql: host=127.0.0.1;dbname=hotel, root', ' ');

            $connection = biginTransaction();
            $sql = "INSERT usuarios(nome) value (:nome)";

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
     if(isset($connection))&&($connection->inTransiction())){
         $connection->rollBack();
     }
     echo $exc-> getMessage();
    }
    echo $exc->getMessage();
}return "FALHA";
}
finally {
    if(isset ($isset($connection)){
     unset($connection);
    }
}
     }
 }
    



?>