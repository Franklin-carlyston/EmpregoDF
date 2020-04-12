<?php

?>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <title>FC Emprego</title>
  </head>
  <body>
  

		
		
		<!-- menu bar 01 -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">	
		  <img src="img/LogoOFC.png" width="200px" height="50px">		
		  <div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
			
			</ul>
			<span class="navbar-items">
				<a class="p-2 text-dark" href="Login.php">Login</a>
				/
				<a class="p-2 text-dark" href="Inscrever-se.php">Inscrever-se</a>				
			</span>
		  </div>
		</nav>
    <!-- fim menu bar 01 -->
		
	<!-- menu bar 02 -->	
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
				  </li>				 
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Categoria
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="CadastroEmpregador.php">Cadast. Empregador</a>
					  <a class="dropdown-item" href="CadastroEmpregado.php">Cadast. Empregado</a>					  
					</div>
				  </li>
				   <li class="nav-item">
					<a class="nav-link" href="QuemSomos.php">Q. Somos</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="Contato.php">Contato</a>
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
				
				<br>
				<br>
				<br>
				
				<div class="my-2 my-lg-0">
				
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Indiomas</button>
				  
				</div>
			  </div>
			</nav>
			
	<!-- fim menu bar 02 -->
	
	<div class="container-md">	
		<!-- Carrosel -->
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="img/empre.jpg" class="d-block w-100" alt="..." width="1040px" height="450px">
			  <div class="carousel-caption d-none d-md-block">
				<h1 class="intro-title" style="color: #0a0a0a">Bem - Vindo Ao <span style="color: #3498DB">FC Emprego</span></h1>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="img/empre02.jpg" class="d-block w-100" alt="..." width="1040px" height="450px">
			  <div class="carousel-caption d-none d-md-block">
				<h5>Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="img/empre03.jpg" class="d-block w-100" alt="..." width="1040px" height="450px">
			  <div class="carousel-caption d-none d-md-block">
				<h5>Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			  </div>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- Fim Carrosel -->	
		<br>
		<br>
		<br>	
		<!-- Card -->	
		
			<div class="card-deck">
			  <div class="card ">
				<img src="https://goadmedia.com.br/wp-content/uploads/2015/11/c%C3%B3pia-de-GustavoReis3x4-354x450.jpg" class="card-img-top " alt="..."  width="354px" height="450px">
				<div class="card-body">
				  <h5 class="card-title">Card title</h5>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card">
				<img src="https://s.glbimg.com/jo/g1/f/original/2012/04/13/tereza-fotoruim_300_400.jpg" class="card-img-top " alt="..."  width="354px" height="450px">
				<div class="card-body">
				  <h5 class="card-title">Card title</h5>
				  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			  <div class="card">
				<img src="https://atelier-russo.e-monsite.com/medias/album/3x4-juju.jpg?fx=r_668_668" class="card-img-top " alt="..."  width="354px" height="450px">
				<div class="card-body">
				  <h5 class="card-title">Card title</h5>
				  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				</div>
				<div class="card-footer">
				  <small class="text-muted">Last updated 3 mins ago</small>
				</div>
			  </div>
			</div>
		
		<!-- Fim do Card -->	
	</div>
	
	<!-- Rodapé -->	
	 <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="img/logo01.png" width="150px" height="200px">
                </div>
                <div class="col-sm-2">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="#">Categoria</a></li>                        
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5>
                    <ul>
                        <li><a href="QuemSomos.php">Informações da Empresa</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="Contato.php">Telefones</a></li>
                        <li><a href="Chat.php">Chat</a></li>
                    </ul>
                </div>  
				<div class="col-sm-2 wrap">	
					<div class="widger">
						<div class="fecha">					
						</div>
						<div class="reloj">					
						</div>
					</div>					
				</div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Copyright - FC Emprego</p>
        </div>
    </footer>
	<!-- Fim Rodapé -->	
	 

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>