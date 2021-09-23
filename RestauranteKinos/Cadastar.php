<!DOCTYPE HTML>
<html lang="pt-ao">
<head>
    <meta charser="utf-8">
    <title> Cadastrar</title>
    <link rel="stylesheet" href="Estilo/EstiloLogineCad.css"/>
    
    <style>
    </style>
</head>
<body>
    
    
    
<h1>Cadastrar Usuarrio</h1>
<form action ="AreaPrivada.php?=cadastrar" method="POST">
   
    <input name="nome" value="" required type="text" placeholder="Nome">
    <p class=espaco></p>

    
    <input name="morada" value="" required type="text" placeholder="Morada">
    <p class=espaco></p>
    
       <select name="cargo" class="nivel" >
        <option value="">Selecione</option>
        <option value="Adm">Administrador</option>
        <option value="Operacional">Operacional</option>>
    </select>
    <p class=espaco></p>
    
    
    <input name="data" value="" required type="date" >
    <p class=espaco></p>
    
    <input name="contacto" value="" required type="number" placeholder="Contacto">
    <p class=espaco></p>
    
   
    <input name="unsername" value="" required type="text" placeholder="Nome de Usuario">
    <p class=espaco></p>
    
   
    <input name="senha" value="" required type="password" placeholder="Senha">
    <p class=espaco></p>
    
   
    <input name="csenha" value="" required type="password" placeholder="Confirmar Senha">
    <p class=espaco></p>

    <input name="confirmar" value="Cadastar"  type="submit">

</form>>  

</body>
</html>


