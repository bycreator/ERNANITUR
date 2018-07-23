<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap core CSS -->
    <link href="<?= SYS[0] ?>public/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= SYS[0] ?>public/assets/css/ernanitur.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title>Ernanitur - Receptivo do Ceará</title>

  </head>

  <body>
    <header class="navbar flex-column flex-md-row bd-navbar bg-top">
        <div class="container">            
                <div class="col-md-5 align-items-center">
                    <img src="<?= SYS[0] ?>public/assets/imgs/voudeernanitur-ernanitur.png">
                </div>           
                <div class="col-md-7 align-items-center right">
                    <ul class="li-car-acc">
                        <li class="li-search">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Informe a data e descubra!" aria-label="Informe a data e descubra!" aria-describedby="button-addon2">
                              <div class="input-group-append">
                                <button class="btn  btn btn-success" type="button" id="button-addon2">BUSCAR</button>
                              </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-user off-item"></i>Minha conta
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php if(isset($_POST["user"])): ?>
								<a class="dropdown-item" href="#">MEUS DADOS</a>
								<a class="dropdown-item" href="#">MEUS PEDIDOS</a>
								<?php else: ?>
								<a class="dropdown-item" href="#">LOGIN/CADASTRO</a>				
								<?php endif; ?>
                            </div>
                        </li>
                        <li class="li-top"><a href="#"><i class="fas fa-shopping-cart my-item"></i><spam class="text-acc">MEU CARRINHO</spam></a></li>
                    </ul>
                </div>
                
        </div>
    </header>

    <div class="bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">PACOTES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">PASSEIOS</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">TRANSLADOS</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">DESTINOS</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">PROMOÇÕES</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">BLOG</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">FALE CONOSCO</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Receba NOVIDADES!" aria-label="novidades">
                  <button class="btn btn-success my-2 my-sm-0" type="submit">CADASTRE</button>
                </form>
              </div>
            </nav>
        </div>
    </div>

    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://voudeernanitur.com.br/banner/ecffbc58aed33b60e1f33ee0df493a9e.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://voudeernanitur.com.br/banner/a3d4fe6357b974a4b72822c00eb6422e.jpeg" alt="Second slide">
            </div>
            
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

    <div class="container melhores-passeios">
        <div class="col col-md-4 title-passeios">
            <i class="far fa-flag"></i> OS MELHORES PASSEIOS
        </div>

        <div class="col col-md-8">
            Você só encontra aqui!
        </div>
    </div>

    <!-- BOX PASSEIOS -->
    <div class="container flex-pad">
        <div class="card-deck">

            <div class="col col-md-4 card-confi">
                  <div class="card line-top">
                    <div class="tiles">
                    <div class="tile" data-scale="1.1" data-image="http://voudeernanitur.com.br/passeios2/a357d51a10ac2cda5081cde2cc1d7737.jpeg"></div>
                    </div>
                    <br>
                    <div class="card-body testes">
                      <h5 class="card-title">Praia Linda do Ceará</h5>
                      <small class="text-success partir ">A partir de R$ 39,90</small>
                      <p class="text-muted text-card1">Na Praia do Porto das Dunas (a aprox. 22km de Fortaleza), visitaremos o “Complexo Turístico Beach Park” com tempo livre para banho...</p>
                      <button type="button" class="btn btn-success btn-lg btn-block buy-btn"><i class="fas fa-cart-plus"></i> COMPRAR ESTE PASSEIO</button>
                    </div>
                  </div>
            </div>

            <div class="col col-md-4 card-confi">
                  <div class="card line-top">
                    <div class="tiles">
                    <div class="tile" data-scale="1.1" data-image="http://voudeernanitur.com.br/passeios2/a357d51a10ac2cda5081cde2cc1d7737.jpeg"></div>
                    </div>
                    <br>
                    <div class="card-body testes">
                      <h5 class="card-title">Praia Linda do Ceará</h5>
                      <small class="text-success partir ">A partir de R$ 39,90</small>
                      <p class="text-muted text-card1">Na Praia do Porto das Dunas (a aprox. 22km de Fortaleza), visitaremos o “Complexo Turístico Beach Park” com tempo livre para banho...</p>
                      <button type="button" class="btn btn-success btn-lg btn-block buy-btn"><i class="fas fa-cart-plus"></i> COMPRAR ESTE PASSEIO</button>
                    </div>
                  </div>
            </div>

            <div class="col col-md-4 card-confi">
                  <div class="card line-top">
                    <div class="tiles">
                    <div class="tile" data-scale="1.1" data-image="http://voudeernanitur.com.br/passeios2/a357d51a10ac2cda5081cde2cc1d7737.jpeg"></div>
                    </div>
                    <br>
                    <div class="card-body testes">
                      <h5 class="card-title">Praia Linda do Ceará</h5>
                      <small class="text-success partir ">A partir de R$ 39,90</small>
                      <p class="text-muted text-card1">Na Praia do Porto das Dunas (a aprox. 22km de Fortaleza), visitaremos o “Complexo Turístico Beach Park” com tempo livre para banho...</p>
                      <button type="button" class="btn btn-success btn-lg btn-block buy-btn"><i class="fas fa-cart-plus"></i> COMPRAR ESTE PASSEIO</button>
                    </div>
                  </div>
            </div>

            <div class="col col-md-4 card-confi">
                  <div class="card line-top">
                    <div class="tiles">
                    <div class="tile" data-scale="1.1" data-image="http://voudeernanitur.com.br/passeios2/a357d51a10ac2cda5081cde2cc1d7737.jpeg"></div>
                    </div>
                    <br>
                    <div class="card-body testes">
                      <h5 class="card-title">Praia Linda do Ceará</h5>
                      <small class="text-success partir ">A partir de R$ 39,90</small>
                      <p class="text-muted text-card1">Na Praia do Porto das Dunas (a aprox. 22km de Fortaleza), visitaremos o “Complexo Turístico Beach Park” com tempo livre para banho...</p>
                      <button type="button" class="btn btn-success btn-lg btn-block buy-btn"><i class="fas fa-cart-plus"></i> COMPRAR ESTE PASSEIO</button>
                    </div>
                  </div>
            </div>

            <div class="col col-md-4 card-confi">
                  <div class="card line-top">
                    <div class="tiles">
                    <div class="tile" data-scale="1.1" data-image="http://voudeernanitur.com.br/passeios2/a357d51a10ac2cda5081cde2cc1d7737.jpeg"></div>
                    </div>
                    <br>
                    <div class="card-body testes">
                      <h5 class="card-title">Praia Linda do Ceará</h5>
                      <small class="text-success partir ">A partir de R$ 39,90</small>
                      <p class="text-muted text-card1">Na Praia do Porto das Dunas (a aprox. 22km de Fortaleza), visitaremos o “Complexo Turístico Beach Park” com tempo livre para banho...</p>
                      <button type="button" class="btn btn-success btn-lg btn-block buy-btn"><i class="fas fa-cart-plus"></i> COMPRAR ESTE PASSEIO</button>
                    </div>
                  </div>
            </div>

            <div class="col col-md-4 card-confi">
                  <div class="card line-top">
                    <div class="tiles">
                    <div class="tile" data-scale="1.1" data-image="http://voudeernanitur.com.br/passeios2/a357d51a10ac2cda5081cde2cc1d7737.jpeg"></div>
                    </div>
                    <br>
                    <div class="card-body testes">
                      <h5 class="card-title">Praia Linda do Ceará</h5>
                      <small class="text-success partir ">A partir de R$ 39,90</small>
                      <p class="text-muted text-card1">Na Praia do Porto das Dunas (a aprox. 22km de Fortaleza), visitaremos o “Complexo Turístico Beach Park” com tempo livre para banho...</p>
                      <button type="button" class="btn btn-success btn-lg btn-block buy-btn"><i class="fas fa-cart-plus"></i> COMPRAR ESTE PASSEIO</button>
                    </div>
                  </div>
            </div>


           
        </div>
    </div>
    <!-- FIM BOX PASSEIOS -->

    <!-- BOX NEWSLETTER -->
    <div class="home-newsletter">
        <div class="container">           
            <div class="row">                            
                <div class="col col-md-12 newsletter-home">
                    <div class="title-newsletter-home">Inscreva-se para receber ofertas exclusivas</div>
                    <form>
                      <div class="form-row justify-content-center">

                        <div class="input-group col-8">
                          <input type="text" class="form-control" placeholder="Nome" aria-label="Recipient's username" aria-describedby="button-addon2">
                          <input type="text" class="form-control" placeholder="E-mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-outline-success" type="button" id="button-addon2">Enviar</button>
                          </div>
                        </div>                  
                      </div>
                    </form>

                    Voce recebera e-mail promocionais, dicas e novidades da ernanitur.com.br e seus dados pessoais nao serão compartilhados com terceiro
                </div>
            </div>
        </div>
    </div>

    <div class="container melhores-passeios">
        <div class="col col-md-4 title-passeios">
            <i class="far fa-newspaper"></i> FIQUE POR DENTRO
        </div>

        <div class="col col-md-8">
            Fique por dentro de muitas notícias, dicas e novidades!
        </div>
    </div>

    <div class="container">
        <div class="card-deck">
			<?php foreach(\Src\Model\Request::feed()->channel->item as $i): ?>
			<div class="card"><a href="">
				<img class="card-img-top" src="<?= $i->image ?>" alt="Card image cap"></a>
				<div class="card-body">
					<h5 class="card-title"><?= $i->title ?></h5>
					<p class="card-text"><?= $i->description ?></p>
				</div>
				<div class="card-footer"><a href="<?= $i->link ?>">
					<small class="text-muted">FIQUE POR DENTRO...</small>
				</div></a>
			</div>
			<?php endforeach; ?>
        </div>
    </div>
  
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <h6>LINKS ÚTEIS</h6>

                <div class="row">
                    <div class="col-6">
                        <ul class="links-footer1">
                            <li><a href="#">SOBRE</a></li>
                            <li><a href="#">CONTATO</a></li>
                            <li><a href="#">MINHA CONTA</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="links-footer1">
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#">PASSEIOS</a></li>
                            <li><a href="#">SEJA UM PARCEIRO</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h6><i class="fas fa-lock"></i> SUA COMPRA PROTEGIDA</h6>

                <div class="pag-footer">
                    <img src="<?= SYS[0] ?>public/assets/imgs/pagseguro.gif">
                </div>
            </div>

            <div class="col-md-5">
                
                <h6>ACOMPANHE A ERNANITUR</h6>
                <div class="icons-social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fas fa-rss-square"></i></a>
                </div>

                <div class="end-footer">
                    Av. Barão de Studart Nº 300, 17º andar - Salas 1714 a 1718 - Meireles - Fortaleza - Ceará - Brasil - Cep 60120-000 
Fone: <a href="tel:558535337700">55 85 3533 7700</a> - Fax: 55 85 3533 7720 - Loja Aeroporto: <a href="tel:558533118600">55 85 3311 8600</a>
                </div>

                
            </div>

            </div>

        </div>
    </div>

    <div class="footer-2">
        <div class="container">
            
            <div class="row">
                <div class="col-md-5">
                    Todos os direitos reservador | &copy; <?= date("Y") ?> Eernanitur.
                </div>

                <div class="col-md-7 logo-bycreator">
                    <a href="www.bycreator.com.br"><img src="<?= SYS[0] ?>public/assets/imgs/logo-bycreator-marketing-digital.png"></a>
                </div>
            </div>

        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?= SYS[0] ?>public/assets/js/bootstrap.min.js"></script>
    <script src="<?= SYS[0] ?>public/assets/js/ernanitur.js"></script>
  </body>
</html>