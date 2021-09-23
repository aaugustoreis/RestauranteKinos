<!DOCTYPE HTML>
<html lang="pt-ao">
<head>
    <meta charser="utf-8">
    <title> Aria Privada</title>
    <link rel="stylesheet" type="text/css" href="Estilo/EstiloCard.css"/>
    <link rel="stylesheet" type="text/css" href="Estilo/EstiloBebi.css"/>
    
    <style>
        .espaco{height: 15px; display: block;}
        .title{font-weight: bold;}
    </style>
</head>
<body>
    
    <?php
    session_start();
    echo "Logado por: ";
    echo   $_SESSION['Nome'] ;
    if(!isset($_SESSION['idCliente']))
        {
        header("location:Login.php");
        exit;
        }

?>
<br>
<a href="Sair.php">Sair</a>
<h1 id="Bv">Promoções de Comida</h1>
<div id= "cardapio">

<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total1();">
<script>
	function calc_total1(){
	var qtd = parseInt(document.getElementById('cQtd1').value);
	tot = qtd * 3000;
	document.getElementById('cTot1').value = tot;
	}
</script>
<h2>Fino</h2>
<img src="imagens/cardapio/fino.jpg">
<p>Carne com Purer de Batata e Nata</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd1" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot1" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>3000KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total2();">
<script>
	function calc_total2(){
	var qtd = parseInt(document.getElementById('cQtd2').value);
	tot = qtd * 1000;
	document.getElementById('cTot2').value = tot;
	}
</script>
<h2>Muamba</h2>
<img src="imagens/cardapio/Muamba.jpg">
<p>Muamba com Galinha Rija</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd2" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot2" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>1000KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total3();">
<script>
	function calc_total3(){
	var qtd = parseInt(document.getElementById('cQtd3').value);
	tot = qtd * 1500;
	document.getElementById('cTot3').value = tot;
	}
</script>
<h2>Funge Com Kiabo</h2>
<img src="imagens/cardapio/FungeK.png">
<p>Funge com Kiabo</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd3" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot3" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>1500KZ</h1>
<button>Comprar</button>

</div>
</div>

<h1 id="Bv">Promoções de Bebidas</h1>
<div id= "cardapio">
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total1();">
<script>
	function calc_total1(){
	var qtd = parseInt(document.getElementById('cQtd1').value);
	tot = qtd * 350;
	document.getElementById('cTot1').value = tot;
	}
</script>
<h2>Cuca Preta</h2>
<img src="imagens/Bebidas/CPreta.jpg">
<p>Cuca Preta</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd1" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot1" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>350KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total2();">
<script>
	function calc_total2(){
	var qtd = parseInt(document.getElementById('cQtd2').value);
	tot = qtd * 350;
	document.getElementById('cTot2').value = tot;
	}
</script>
<h2>Eka</h2>
<img src="imagens/Bebidas/Eka.jpg">
<p>Eka</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd2" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot2" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>350KZ</h1>
<button>Comprar</button>

</div>
<div id= "item" action="mailto:" grupo@restourant.com" oninput="calc_total3();">
<script>
	function calc_total3(){
	var qtd = parseInt(document.getElementById('cQtd3').value);
	tot = qtd * 350;
	document.getElementById('cTot3').value = tot;
	}
</script>
<h2>Cuca Ruiva</h2>
<img src="imagens/Bebidas/CucaRuiva.jpg">
<p>Cuca Ruiva</p>
<fieldset id="pedido"><legend>Quer fazer um Pedido?</legend>
 </p><input type="checkbox" name="tPed" id="cPed" checked/>
Gostaria de adquirir um produto disponovel quando disponível
<p><label for="cQtd">Quantidade:</label>
<input type="number" name="tQtd" id="cQtd3" min="0" max="5" value="0"/></p>
<p><label for="cEst">Preço Total: Kz</label>
<input type="text" name="tTot" id="cTot3" placeholder="Total a Pagar" readonly /></p>
 </fieldset>
<h1>350KZ</h1>
<button>Comprar</button>

</div>
</div>






</body>
</html>


