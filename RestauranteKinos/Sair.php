  <?php
    session_start();
    unset($_SESSION['idFuncionario']);
    unset($_SESSION['idCliente']);
    
        header("location:index.php");
        
    

?>

