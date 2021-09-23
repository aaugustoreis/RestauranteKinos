<?php

class Usuario {
    private $pdo;
    public $msgErro="";
    public function conectar($nome, $host, $usuario, $senha) {
        global $pdo;
        try {

            $pdo= new PDO("mysql:dbname=".$nome."; host=".$host, $usuario,$senha);

} catch (PDOException $e) {
    $msgErro = $e->getMessage();
    echo $exc->getTraceAsString();
}
}

            
     public function cadcliente($nome, $morada, $contacto)
                {
      global $pdo; 
      //Verificar se já existe um nome Cadastrado
       $sql = $pdo->prepare("SELECT idCliente FROM  cliente WHERE Nome = :n");
       $sql->bindValue(":n", $nome);
       $sql->execute();
       if($sql->rowCount() > 0)
       {
           return false; //Já esta cadastrado
       }
       else{
    //Caso não, Cadastrar 
      $sql = $pdo->prepare("INSERT INTO cliente(Nome, Morada, Contacto) VALUES(:n, :m, :ct)");
      $sql->bindValue(":n", $nome);
      $sql->bindValue(":m", $morada);
      $sql->bindValue(":ct", $contacto);
      $sql->execute();
       return true;}
       
    }
    public function cadastrar($nome, $morada, $cargo, $contacto, $username, $senha)
                {
      global $pdo; 
      //Verificar se já existe um nome Cadastrado
       $sql = $pdo->prepare("SELECT idFuncionario FROM  funcionario WHERE UserName = :un");
       $sql->bindValue(":un",$username);
       $sql->execute();
       if($sql->rowCount() > 0)
       {
           return false; //Já esta cadastrado
       }
       else{
    //Caso não, Cadastrar 
      $sql = $pdo->prepare("INSERT INTO funcionario(Nome, Cargo, Contacto, Morada, UserName, Senha) VALUES(:n, :c, :ct, :m, :un, :s)");
      $sql->bindValue(":n", $nome);
      $sql->bindValue(":m", $morada);
      $sql->bindValue(":c", $cargo);
      $sql->bindValue(":ct", $contacto);
      $sql->bindValue(":un", $username);
      $sql->bindValue(":s", $senha);

      $sql->execute();
       return true;}
       
    }
    public function logar($username, $senha) {

       global $pdo; 
       //Verificar se está Cadastrado
       $sql = $pdo->prepare("SELECT idFuncionario FROM  funcionario WHERE UserName = :un AND Senha = :s");
       $sql->bindValue(":un", $username);
       $sql->bindValue(":s", $senha);
       $sql->execute();
       if($sql->rowCount() > 0)
       {

           //entrat no sistema 
           $dado = $sql->fetch();
           session_start();

            $_SESSION['UserName'] = $username;
           $_SESSION['idFuncionario'] = $dado['idFuncionario'];

        if (isset($_POST['guardar'])) {
           self:: guardar($usuario); 
        }
        
        return TRUE;//Logado


       }  else {
           return FALSE; //Não foi possivel logar
       }
    }
    
    public function logarcliente($nome, $contacto) {
       global $pdo; 
       //Verificar se está Cadastrado
       $sql = $pdo->prepare("SELECT idCliente FROM  cliente WHERE Nome = :n AND Contacto = :c");
       $sql->bindValue(":n", $nome);
       $sql->bindValue(":c", $contacto);
       $sql->execute();
       if($sql->rowCount() > 0)
       {
           //entrat no sistema 
           $dado = $sql->fetch();
           session_start();
           $_SESSION['Nome'] = $nome;
           $_SESSION['idCliente'] = $dado['idCliente'];
           return TRUE;//Logado
       }  else {
           return FALSE; //Não foi possivel logar
       }
    }
    
    }
    
    



?>
