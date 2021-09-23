<?php
require_once'Classes/class-funcionario.php';
$p = new funcionario ("restaurantekinos","localhost","root","");
?>
<!DOCTYPE html>
<html lang="pt-ao">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
         <link rel="stylesheet" href="Estilo/EstiloLogineCad.css"/>
	<link rel="stylesheet" href="estilo.css"/>
         
</head>
<body>
    
    <?php
    session_start();
		echo "Logado por: ";
		echo   $_SESSION['UserName'] ;
    if(!isset($_SESSION['idFuncionario']))
        {


        header("location:Login.php");
        exit;
        }

?>
	<?php
        if (isset($_GET['id']) && !empty($_GET['id_act'])) 
	
	 {
	 	if (isset($_POST['nome']))//Verificar se apertou no botão
          
                {

                  //Adicionnar dados
		$nome = addslashes($_POST['nome']);
		$morada = addslashes($_POST['morada']);
		$cargo = addslashes($_POST['cargo']);
		$contacto = addslashes($_POST['contacto']);
		$username = addslashes($_POST['username']);
		$senha = addslashes($_POST['senha']);
                }
		
		//Verificar se essta preenchido
  if (!empty($nome)&& !empty($morada) && !empty($cargo) && !empty($contacto)&& !empty($username)&& !empty($senha)) 
        if(!$p-> cadastrarfuncionario($nome, $morada, $cargo, $contacto,$username, $senha))
        	{
                
        	echo "Nome Já Cadastrado";
        	}

         else{
	echo "Preencha Todos os Campos";
         

                }
                
         }  else
                {

                //Editar dados
        $id_act = addcslashes($_GET['id_act']);
		$nome = addslashes($_POST['nome']);
		$morada = addslashes($_POST['morada']);
		$cargo = addslashes($_POST['cargo']);
		$contacto = addslashes($_POST['contacto']);
		$username = addslashes($_POST['username']);
		$senha = addslashes($_POST['senha']);
                
		//Verificar se essta preenchido
  if (!empty($nome)&& !empty($morada) && !empty($cargo) && !empty($contacto)&& !empty($username)&& !empty($senha)) 
  { 
      $p-> actualizarDados($id, $nome, $morada, $cargo, $contacto, $username, $senha) ;
    
  }  else{
	echo "Preencha Todos os Campos";
                }          
  }
         

       
               
?>
<?php 
if(isset($_GET['id_act']))
{
    $id_act = addslashes($_GET['id_act']);
    $res = $p->procurardadospessoa($id_act);
}

?>
    <section id="esquerdo">
	 <form method="POST">
		<h2>CADASTRAR FUNCIONARIO</h2>
		<label for="nome">NOME</label>
		<input type="text" name="nome" id="nome"
                       value="<?php if(isset($res)){echo $res['Nome'];}?>">
		<label for="morada">MORADA</label>
		<input type="text" name="morada" id="morada"
                       value="<?php if(isset($res)){echo $res['Morada'];}?>">
		<label for="cargo">CARGO</label>
                <input type="text" name="cargo" id="cargo"
                       value="<?php if(isset($res)){echo $res['Cargo'];}?>">
		<label for="contacto">CONTACTO</label>
		<input type="number" name="contacto" id="contacto"
                       value="<?php if(isset($res)){echo $res['Contacto'];}?>">
		<label for="unome">NOME DE USUARIO</label>
		<input type="text" name="username" id="username"
                       value="<?php if(isset($res)){echo $res['UserName'];}?>">
		<label for="senha">SENHA</label>
		<input type="password" name="senha" id="senha"
                       value="<?php if(isset($res)){echo $res['Senha'];}?>">
                <input type= "submit" 
                       value ="<?php if(isset($res)){
                        echo "Actualizar";}  else {echo "Cadastrar";} ?>">
                <a href="Sair.php"><strong>Sair</strong> </a>
                            <a href="CrudCliente.php">Verificar os <strong>Clientes</strong> </a>
                
                
	</form>
    
	</section>

	<section id="direito">
		<table>
			<tr id="titulo">
				<td>NOME</td>
				<td>MORADA</td>
				<td>CARGO</td>
				<td>CONTACTO</td>
				<td>NOME DE USUARIO</td>
				<td colspan="2">SENHA</td>
			</tr>
		<?php
			$dados = $p->pesquisar();
			if (count($dados)>0)//Se tem pessoas no Bando
			 {
			 	for ($i=0; $i < count($dados); $i++) { 
			 		echo"<tr>";
			 		foreach ($dados[$i] as $k => $v) {
			 			if ($k !="idFuncionario") {
			 				echo "<td>".$v."</td>";
			 			}
			 		}
			 		?>
                        
                        <td>
                            
                            <a href="teste.php?id_act=<?php echo $dados[$i]['idFuncionario']; ?>">Editar</a>
                            <a href="teste.php?id=<?php echo $dados[$i]['idFuncionario']; ?>">Excluir</a></td>
			 		<?php
			 		echo"</tr>";
			 	}
			}
			else{
				echo "Ainda não tem Funcionarios Cadastradas";
			}

		?>
			
		</table>	

	</section>

 
    
    
</body>
</html>

<?php
if(isset($_GET['id']))
    {
    $id_funcionario = addslashes($_GET['id']);
    $p->excluirfun($id_funcionario);
    header("location: Crud.php");
    }
?>
