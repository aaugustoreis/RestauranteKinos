<?php
require_once 'Classes/Usuarios.php';
$u = new Usuario;
?>
<!DOCTYPE HTML>

<html lang="pt-ao">
<head>
    <meta charser="utf-8">
    <title> Cadastrar Cliente</title>
    <link rel="stylesheet" href="Estilo/EstiloLogineCad.css"/>
</head>
<body>
    <div id="corpo-form">
    <h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="morada" placeholder="Morada">
        <input type="number" name="contacto" placeholder="Contacto">
        <input type="Submit" value="Cadastrar" >
        <a href="index.php"><strong>Menu<strong> 
      </form>
    </div>
    <?php
     //Verificar passos
      if (isset($_POST['nome']))
          {
        $nome = ($_POST['nome']);
        $morada = ($_POST['morada']);
        $contacto = ($_POST['contacto']);
        
        
        //Verificar se essta preenchido
        if (!empty($nome)&& !empty($morada)&& !empty($contacto)) 
            {
           
            $u->conectar("restaurantekinos", "localhost","root","");
            if($u->msgErro =="")//Se esta tudo ok
            {
                
                    if($u->cadcliente($nome,$morada,$contacto))
                {
                        ?>
                   <div id="mssg-sucesso">Cadastrado com sucsso! 
                   </div>
                        <?php
                        }else{
                            ?>
                        <div class="msg-erro"> Nome já Cadastrado
                            </div>
                        <?php
                        }
                    }
                }
               else
                {?>
                <div class="msg-erro"> <?php echo "Erro: ".$u->msgErro;?></div>
                  
                <?php
        }
            }
          else {
              ?>
                <div class="msg-erro"> Preecha todos os campos!</div>
                <?php
               }
     ?>
    
</body>
</html>



