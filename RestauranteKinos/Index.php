<?php
session_start();
setcookie("Convidado", $_SERVER['REMOTE_ADDR'], time()+100000);
session_destroy();

?>


<!doctype html>
<html lang ="pt-ao">
<head>
<title> Restaurante Kinos</title>
<meta charset="utf-8">
    	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="author" content="Augusto Reis, Manuel Mulato, Hermogenio Monteiro">
    	<link rel="stylesheet" href="Estilo/Estilo.css">
    	<script language="javascript" src="javascript/funcoes.js"></script>
</head>
<body>
<div id="corp">
<header id="cabecalho">
</br></br></br>
<hgroup>
<h1>Kinos </h1>
<h2>O Melhor Restaurante de Angola</h2>
</hgroup>
<img id="icone" src="imagens/Menu/ImgMenu.gif" /> 


<nav id="menu">

	<h1>Menu Principal</h1>
	
<ul>
<li onmouseover= "mudaFoto('imagens/Menu/Home.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="Index.php">Inicio</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Cardapio.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="Cardapio.php">Cardapio</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Bebidas.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="Bebida.php">Bebidas</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/SejaMembro.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"><a href="CadCliente.php">Seja Membro</a></li>
<li onmouseover= "mudaFoto('imagens/Menu/Contato.png')" onmouseout="mudaFoto('imagens/Menu/ImgMenu.gif')"> <a href="SobreNos.php">Sobre Nós</a></li>
</ul>


</nav>


</header>




</div>
</br>
<h1 id="Bv">Bem-Vindo </h1>

<div id= "Publicidade">

<div id= "item">
<h2>Cozinha</h2>
<img src="imagens/Publicidade/Cozinha.jpg" id="item1">
<p>Temos os materias de ponta</p>


</div>
<div id= "item">
<h2>Espaço</h2>
<img src="imagens/Publicidade/Espaco.jpg" id="item2">
<p>Temos o melhor espaço</p>


</div>
<div id= "item">
<h2>Nossos Pratos</h2>
<img src="imagens/Publicidade/Pratos.jpg" id="item3">
<p>Temos os melhores pratos</p>


</div>
</div>
</br>



</br>
<div id="interface">
<section id="corpo"> 
<article id="artigo1">
<figure class = "foto-legenda" >
<figcaption>
<h1> Funge com Calulo de Peixe</h1>
<p> Os Melhores pratos tipicos da terra </p>
</figcaption>
<img src="imagens/Comida.jpg"/>
<p id="Letrafig"> Funge é um dos principais acompanhamento culinário típico de Angola, 
festo com farinha de milho ou de mandioca, base da alimentação das populações de Angola.
Pôr cerca de um litro de água a ferver. Quando estiver a ferver, retirar uma caneca para utilizar depois. 
Depois de fervida tira-se a panela do lume e deita-se lá para dentro a farinha toda de uma só vez mexendo sempre energicamente para não formar bolhinhas. 
Mexe-se até formar uma bola uniforme. 
Vai mexendo sempre com o luicô com as mãos e vai deitando a água da caneca para amaciar o funge.
De preferência sente-se num banco baixo e prenda a panela entre as pernas ou os pés para ela não baloiçar e trabalhe o funge com o luicô batendo sempre. 
Sirva com peixe ou carne</p>
</figure>
</article>
</section> 


<aside id="lateral">
<h1>Outras Notícias</h1>
<article id="artigo1">
<h2>Novidades</h2>
<p><b>Cuca Preta</b></p>
<p>Temos as melhores cervejas de Angola</p>


<figure class = "foto-legenda" >
<img src="imagens/Bebida.PNG"/>
</article>

<article id="artigo1">
<h2>Novidades</h2>
<p><b>Torta</b></p>
<p>Temos as melhores Sobremesas de Angola</p>

<figure class = "foto-legenda" >
<img src="imagens/Sobremesa.JPG"/>

</article>
<article id="artigo1">
<h2>Novidades</h2>
<p><b>Salgadinhos</b></p>
<p>Temos as melhores cervejas de Angola</p>
<figure class = "foto-legenda" >
<img src="imagens/Aperitivo.JPG" />
</article>

</aside>
</div>
</br>
</br>
<section id="Baixo">

<!-- BANNER --> 
<section id="Pub1">
<div class="banner container">
<div class="title">
<h2> Seja Membro! </h2>
<h3> Criamos experiências e estabelecemos ações estratégicas que conectam marcas e consumidores.</h3>
</div>
<div class="buttons">
    <button class="btn btn-cadastrar bg-white radius"> <a href="CadCliente.php"> Cadastrar </a> </button>
    <button class="btn btn-sobre bg-black radius"><a href="SobreNos.php"> Sobre Nós </a></button></div>
</div>
</section>
<!-- SERVICOS --> 
<section id="Pub2">
<main class="servicos container">
<article class="servico bg-white radius">
<img src="imagens/Gale3.jpg" alt="Campanhas publicitárias">
<div class="inner">
<h4>Batas com Salcichas</h4>
<p>Se você está precisando de inovação
Temos para si, as melhores criações
Dos nossos Chef's. </p></div>
</article>
<article class="servico bg-white radius">
<img src="imagens/Gale1.jpg" alt="Marketing Digital">
<div class="inner">
<h4>Batatas Frias com Bife</h4>
<p> Um prato tipicamente familiar, 
para compartilhar em momentos de felicidade, 
 momentos unicos de comemoração,  </p>
</div>
</article>
<article class="servico bg-white radius">
<img src="imagens/Gale2.jpg" alt="Criação de Sites">
<div class="inner">
<h4> Bife</h4>
<p>Agora você pode saboria a carne de vaca com molho de tomante aromado.
    com recheado de cove
    . </p>
               </div>
            </article>
        </main>
		</section>
        <!-- NEWSLETTER -->
        <section class="newsletter container bg-black">
           <h2> Faça o Login! </h2>
           <h3> Para Aceder mais conteudo da nossa pagina </h3>
           <form>
              
               <button class="bg-white radius"><a href="Login.php">Entrar</a> </button>
           </form>
        </section>
		</section >
        <!-- RODAPÉ -->
        <footer class="rodape container bg-gradient">
            <p class="copyright">
<p>Copyright &copy; 2013 - by Augusto Hermogenio Mulato<br/>
<a href="#">Facebook</a> | <a href="#">Twitter</a></p>

        </footer>       
        
           
    </body>
</html>