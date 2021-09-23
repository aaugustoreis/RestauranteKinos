<!doctype html>
<html lang ="pt-ao">
<head>
<title> Seja Membro1</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="Estilo/Estilo.css"/>
<link rel="stylesheet" type="text/css" href="Estilo/EstiloSejaMembro.css"/>
<script language="javascript" src="javascript/funcoes.js"></script>
<script>
	function calc_total(){
	var qtd = parseInt(document.getElementById('cQtd').value);
	tot = qtd * 1500;
	document.getElementById('cTot').value = tot;
	}
</script>
</head>
<body>
<div id="corp">
<header id="cabecalho">
</br></br></br>
<hgroup>
<h1>Kinos </h1>
<h2>O Melhor Restaurante de Angola</h2>
</hgroup>
<img id="icone" src="imagens/Menu/SejaMembro.png" /> 


<nav id="menu">

	<h1>Menu Registro</h1>
	
<ul>
<li onmouseover= "mudaFoto('imagens/Menu/Home.png')" onmouseout="mudaFoto('imagens/Menu/SejaMembro.png')"><a href="PagInicial.html">Inicio</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Cardapio.png')" onmouseout="mudaFoto('imagens/Menu/SejaMembro.png')"><a href="Cardapio.html">Cardapio</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Bebidas.png')" onmouseout="mudaFoto('imagens/Menu/SejaMembro.png')"><a href="Bebida.html">Bebidas</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/SejaMembro.png')" onmouseout="mudaFoto('imagens/Menu/SejaMembro.png')"><a href="SejaMembro.html">Seja Membro</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Contato.png')" onmouseout="mudaFoto('imagens/Menu/SejaMembro.png')"> <a href="SobreNos.html">Sobre Nós</a></li>
</ul>
</nav>
</header>
</div>
</br>
<h1 id="Bv">Bem-Vindo </h1>
<div >

  <form method= "post" id="fContato" action="mailto:"  grupo@restourant.com" oninput="calc_total();">
  <fieldset id="usuário"><legend>identicação do Usuário</legend>
 <p><label for="cName">Nome:<label> <input type="text" name="tName" id="cName" size="15" maxlength="8" placeholder="Nome Completo"/></p>
  <p><label for="cSenha">Senha:<label> 
  <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="8 Dígitos"/></p>
  <p><label for="cMail">Email:<label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40"/></p>
  <fieldset id="sexo"><legend>Sexo</legend>
 <input type="radio" name="tSexo" id="cMasc"/<label for="cMasc">Masculino<label>
 <input type="radio" name="tSexo" id="cFem"/><label for="cMasc">Femenino<label>
 </fieldset>
 <p><label>Data de Nascimento: <input type="date" name="cNasc" id="cNasc"/></p>
 </fieldset>
 
  <fieldset id="endereco"><legend>Endereço do usuário</legend>
  <p><label for=" cRua"> Logradouro:</label> 
  <input type="text" name="cRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>
  <p><label>Número: <input type="number" name="tNum" id="cNum" min="0" max="9999"/></p>
 <p><label for="cEst">Estado:</label>
 <select name= "tEst" id="cEst">
 <optgroup label="Região Norte">
 <option value="LD">Maianga</option>
 <option value="PD" Selected>Prenda</option>
 <option value="CD">Cassenda</option>
 </optgroup>
 
 <optgroup label="Região Sul">
  <option value="VN">Viana</option>
 <option value="CC">Cacuaco</option>
 <option value="CD">Zango 1,2,3,4,5</option>
  </optgroup>
  
 </select> </p>
<p><label for="cEst">Cidade:</label>
  <input type="text" name="tCid" id="cCid" size="20" maxlength="40" placeholder="Sua Cidade" list="cidades"/></p>
  <datalist id="cidades">
  <option value="Luanda"></option>
  <option value="Maianga"></option>
  <option value="Talatona"></option>
  <option value="Samba"></option>
  </datalist>
 </fieldset>

 <fieldset id="mensagem"><legend>Mensagem do Usuário</legend>
<p><label for="cUrg">Grau de Urgente:</legend>
Min<input type="range" name="tUrg" id="cUrg" min="0" max="10"  step="2"/>Max </p>
<p><label for="cMsg">Mensagem:</label>
<textarea name="tMsg" id="cMsg" cols="45" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
</fieldset>

<input type="submit" value="Enviar" />
</form>
</div>
</br>
</br>
<footer id="rodape">
<p>Copyright &copy; 2013 - by Augusto Hermogenio Mulato<br/>
<a href="#">Facebook</a> | <a href="#">Twitter</a></p>
</footer>

</body>
</html>