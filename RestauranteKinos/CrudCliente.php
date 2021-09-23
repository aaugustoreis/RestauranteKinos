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
        
	if (isset($_POST['nome']))//Verificar se apertou no botão
	 {
            if (isset($_GET['id_act']) && !empty($_GET['id'])) 
                {
                //Editar dados
                $id_act = addcslashes($_GET['id_act']);
		$nome = addslashes($_POST['nome']);
		$morada = addslashes($_POST['morada']);
		$contacto = addslashes($_POST['contacto']);
		
                
		//Verificar se essta preenchido
  if (!empty($nome)&& !empty($morada)  && !empty($contacto)) 
  { 
      $p-> actualizarDados($id, $nome, $morada,  $contacto) ;
    
  }  else{
	echo "Preencha Todos os Campos";
                }          
  }
            else
                {
                  //Adicionnar dados
		$nome = addslashes($_POST['nome']);
		$morada = addslashes($_POST['morada']);
                $contacto = addslashes($_POST['contacto']);
		
                }
		
		//Verificar se essta preenchido
  if (!empty($nome)&& !empty($morada) && !empty($contacto)) 
        if(!$p-> cadastrarcliente($nome, $morada, $contacto))
        	{
                
        	echo "Nome Já Cadastrado";
        	}
                
         else{
	echo "Preencha Todos os Campos";
         

                }
                
         }  
               
?>
<?php 
if(isset($_GET['id_act']))
{
    $id_act = addslashes($_GET['id_act']);
    $res = $p->procurardadoscliente($id_act);
}

?>
    <section id="esquerdo">
	 <form method="POST">
		<h2>CADASTRAR CLIENTE</h2>
		<label for="nome">NOME</label>
		<input type="text" name="nome" id="nome"
                       value="<?php if(isset($res)){echo $res['Nome'];}?>">
		<label for="morada">MORADA</label>
		<input type="text" name="morada" id="morada"
                       value="<?php if(isset($res)){echo $res['Morada'];}?>">
		
		<label for="contacto">CONTACTO</label>
		<input type="number" name="contacto" id="contacto"
                       value="<?php if(isset($res)){echo $res['Contacto'];}?>">
		
                <input type= "submit" 
                       value ="<?php if(isset($res)){
                        echo "Actualizar";}  else {echo "Cadastrar";} ?>">
                <a href="index.php"><strong>Menu</strong></a>
                <a href="Crud.php"><strong>Voltar</strong></a>
	</form> 
	</section>

	<section id="direito">
		<table>
			<tr id="titulo">
				<td>NOME</td>
				<td>MORADA</td>
				<td colspan="2">CONTACTO</td>
				
			</tr>
		<?php
			$dados = $p->pesquisarCliente();
			if (count($dados)>0)//Se tem pessoas no Bando
			 {
			 	for ($i=0; $i < count($dados); $i++) { 
			 		echo"<tr>";
			 		foreach ($dados[$i] as $k => $v) {
			 			if ($k !="idCliente") {
			 				echo "<td>".$v."</td>";
			 			}
			 		}
			 		?>
                        
                        <td>
                            
                            <a href="CrudCliente?id_act=<?php echo $dados[$i]['idCliente']; ?>">Editar</a>
                            <a href="CrudCliente?id=<?php echo $dados[$i]['idCliente']; ?>">Excluir</a></td>
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
    $id_cliente = addslashes($_GET['id']);
    $p->excluirCliente($id_cliente);
    header("location: CrudCliente.php");
    }
?>