<?php
require_once 'Classes/Usuarios.php';
$u = new Usuario;
?>
 
<!DOCTYPE HTML>
<html lang="pt-ao">
<head>
    <meta charser="utf-8">
    <title> Login</title>
    <link rel="stylesheet" href="Estilo/EstiloLogineCad.css"/>
</head>
<body>
    <div id="corpo-form">
    <h1>Entra</h1>
    <form method="POST" >
        <input type="text" name="username" placeholder="User Name">
        <input type="password" name="senha" placeholder="Senha" minlengt="5">
        <input type="Submit" value="Entrar" >
        <a href="cadastrarlogin.php">Ainda Não é inscrito?<strong>Cadastre-se<strong>    
        <!-- <a href="index.php"><strong>Menu<strong>  -->
    </form>
    </div>
    
    <?php
     //Verificar passos
     if (isset($_POST['username']))
          {
        $username = ($_POST['username']);
        $senha =($_POST['senha']);
                
        //Verificar se essta preenchido
        if (!empty($username) && !empty($senha)) 
            {

              $u->conectar("restaurantekinos", "localhost","root","");
            if($u->msgErro =="")//Se esta tudo ok
            {
              if($u-> logar($username, $senha))
                {
                  
                  header("location: crud.php");
            }else{
                ?>
                <div class="msg-erro"> Email ou senha incorrecta </div>
                <?php
            }
           }
           else{
               ?>
    <div class="msg-erro"> <?php echo "Erro: ".$u->msgErro;?></div>
                  
                <?php
                          }
            }else
                {
                ?>
                        <div class="msg-erro"> Preencha Todos os Campos
                            </div>
                        <?php
                }
            }
    ?>
    
    <?php
     //Verificar passos
     if (isset($_POST['username']))
          {
        $nome = ($_POST['username']);
        $contacto =($_POST['senha']);
                
        //Verificar se essta preenchido
        if (!empty($nome) && !empty($contacto)) 
            {
              $u->conectar("restaurantekinos", "localhost","root","");
            if($u->msgErro =="")//Se esta tudo ok
            {
              if($u-> logarcliente($nome, $contacto))
                {
                  
                  header("location: AreaPrivada.php");
            }else{
                ?>
                <div class="msg-erro"> Email ou senha incorrecta </div>
                <?php
            }
           }
           else{
               ?>
    <div class="msg-erro"> <?php echo "Erro: ".$u->msgErro;?></div>
                  
                <?php
                          }
            }else
                {
                ?>
                        <div class="msg-erro"> Preencha Todos os Campos
                            </div>
                        <?php
                }
            }
    ?>
</body>
</html>
