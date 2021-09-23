<?php
require_once 'Classes/Usuarios.php';
$u = new Usuario;
?>
<!DOCTYPE HTML>

<html lang="pt-ao">
<head>
    <meta charser="utf-8">
    <title> Cadastrar Funcionario</title>
    <link rel="stylesheet" href="Estilo/EstiloLogineCad.css"/>
</head>
<body >
    <div id="corpo-form">
    <h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="morada" placeholder="Morada">
        <input type="text" name="cargo" placeholder="Cargo">
        <input type="number" name="contacto" placeholder="Contacto">
        <input type="text" name="username" placeholder="User Name">
        <input type="password" name="senha" placeholder="Senha" minlengt="5">
        <input type="password" name="confsenha" placeholder="Confirmar Senha" minlengt="5">
        <input type="Submit" value="Cadastrar" >
        <a href="login.php"><strong>Logar<strong> 
        <a href="index.php"><strong>Menu<strong> 
   </form>
    </div>
    <?php
     //Verificar passos
      if (isset($_POST['username']))
          {
        $nome = ($_POST['nome']);
        $morada = ($_POST['morada']);
        $cargo = ($_POST['cargo']);
        $contacto = ($_POST['contacto']);
        $username = ($_POST['username']);
        $senha =($_POST['senha']);
        $confirmarSenha = ($_POST['confsenha']);
        
        //Verificar se essta preenchido
        if (!empty($nome)&& !empty($morada) && !empty($cargo) && !empty($contacto)&& !empty($username)&& !empty($senha)&& !empty($confirmarSenha)) 
            {
           
            $u->conectar("restaurantekinos", "localhost","root","");
           if($u->cadastrar($nome,$morada,$cargo,$contacto,$username, $senha))
                {
                        ?>
                   <div id="mssg-sucesso">Cadastrado com sucsso! Acesse para entar
                   </div>
                        <?php
                        }
                        else{
                            ?>
                        <div class="msg-erro"> Nome já Cadastrado
                            </div>
                        <?php
            }}
                    
                else
                {
                ?>
                <div class="m"> Senhasg-erro e Confirmar senha não Correrspondem</div>
                <?php
          }}
            
            else 
            {?>
                <div class="msg-erro"> Preecha todos os campos!</div>
                <?php
          }
             
       
    ?>
                 
</body>
</html>


