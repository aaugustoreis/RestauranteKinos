<?php 

//funcoes

//conexao
class funcionario{

private $pdo;
//Conexao
public function __construct($dbname, $host, $user, $senha){
        try {

           $this-> pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
	
} catch (PDOException $e) {
	echo "Erro com Base de Dados: ".$e->getMessage();
	exit();
}

catch(Exception $e){
     echo" Erro Generico:" .$e->getMessage();
     exit();
}

}
//Fun Para Visualizar os dados no lado direito da tela
public function pesquisar()
        {
	$res = array();
	$cmd = $this->pdo->query("SELECT * FROM funcionario ORDER BY nome");
	$res = $cmd->fetchAll(PDO:: FETCH_ASSOC);
	return $res;
	}

//Fun Para Visualizar os dados no lado direito da tela
public function pesquisarCliente()
        {
	$res = array();
	$cmd = $this->pdo->query("SELECT * FROM cliente ORDER BY Nome");
	$res = $cmd->fetchAll(PDO:: FETCH_ASSOC);
	return $res;
	}




//Funcao de Cadastrar Funcionario
public function cadastrarfuncionario($nome, $morada, $cargo, $contacto, $username, $senha)
{
	 //Verificar se já existe um nome Cadastrado
       $cmd = $this->pdo->prepare("SELECT idFuncionario from  funcionario WHERE UserName = :un");
       $cmd->bindValue(":un",$username);
       $cmd->execute();
       if($cmd->rowCount() > 0)
       {
           return false; //Já esta cadastrado
       }

       else{
    //Caso não, Cadastrar 
      $cmd = $this->pdo->prepare("INSERT INTO funcionario(Nome, Morada, Cargo, Contacto, UserName, Senha) VALUES(:n, :m, :c, :ct , :un, :s)");

      $cmd->bindValue(":n", $nome);
      $cmd->bindValue(":m", $morada);
      $cmd->bindValue(":c", $cargo);
      $cmd->bindValue(":ct", $contacto);
      $cmd->bindValue(":un", $username);
      $cmd->bindValue(":s", $senha);
      $cmd->execute(); 
       return true;
   }
}


//Funcao de Cadastrar Funcionario
public function cadastrarcliente($nome, $morada,  $contacto)
{
	 //Verificar se já existe um nome Cadastrado
       $cmd = $this->pdo->prepare("SELECT idCliente from  cliente WHERE Nome = :n");
       $cmd->bindValue(":n",$nome);
       $cmd->execute();
       if($cmd->rowCount() > 0)
       {
           return false; //Já esta cadastrado
       }

       else{
    //Caso não, Cadastrar 
      $cmd = $this->pdo->prepare("INSERT INTO cliente(Nome, Morada, Contacto) VALUES(:n, :m, :ct)");

      $cmd->bindValue(":n", $nome);
      $cmd->bindValue(":m", $morada);
      $cmd->bindValue(":ct", $contacto);
      $cmd->execute(); 
       return true;
   }
}


//Excluir Funcionario
public function excluirfun($id)
        {
    $cmd = $this->pdo->prepare("Delete FROM funcionario WHERE idFuncionario = :id");
    $cmd->bindValue(":id", $id);
    $cmd->execute();
        }
    
//Excluir Cliente
public function excluirCliente($id)
        {
    $cmd = $this->pdo->prepare("Delete FROM cliente WHERE idCliente = :id");
    $cmd->bindValue(":id", $id);
    $cmd->execute();
        }

  
        public function actualizarDados($id, $nome, $morada, $cargo, $contacto, $username, $senha) 
       {
            $cmd = $this->pdo->prepare("UPDATE funcionario SET Nome = :n, Morada = :m, Cargo = :c, Contacto = :ct, UserName = :un, Senha = :s WHERE idFuncionario = :id");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":m", $morada);
            $cmd->bindValue(":c", $cargo);
            $cmd->bindValue(":ct", $contacto);
            $cmd->bindValue(":un", $username);
            $cmd->bindValue(":s", $senha);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
           
           
       }

//PesquissarFuncionario
public function procurardadospessoa($id)
        {
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM funcionario WHERE idFuncionario = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
	$res = $cmd->fetch(PDO:: FETCH_ASSOC);
	return $res;
        }
        
//PesquissarFuncionario
public function procurardadoscliente($id)
        {
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM cliente WHERE idCliente = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
	$res = $cmd->fetch(PDO:: FETCH_ASSOC);
	return $res;
        }
          

       
       
        public function actualizarCliente($id, $nome, $morada, $contacto) 
       {
            $cmd = $this->pdo->prepare("UPDATE cliente SET Nome :n, Morada :m, Contacto :ct WHERE idCliente = :id");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":m", $morada);
            $cmd->bindValue(":ct", $contacto);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
           
           
       }
}

       
 ?>