<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Faculdade Guerra - Conheça nossos cursos, programas de bolsas e outras formas de ingresso. Estude com excelência!">

        <!-- Ícone da Página -->
        <link rel="icon" type="image/png" href="images/logo.png">
    
        <!-- Fontes e Estilos -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Font Awesome Local -->
        <link rel="stylesheet" href="images/css/all.css"> <!-- Corrija o caminho se necessário -->

        <!-- Estilo Personalizado -->
        <link rel="stylesheet" type="text/css" href="style.css">
    
        <title>Faculdade Guerra</title>
    </head>


    <body>
<!-- Top Bar -->
<div class="top-bar">
  <div class="container d-flex justify-content-between align-items-center">
    <!-- Informações de Contato -->
    <div class="contact-info d-flex align-items-center">
      <span>
        <img src="images/telefone.png" alt="telefone" class="icon"> (61) 3977-1272
      </span>
      <span>
        <img src="images/location.png" alt="location" class="icon"> Q QSA 7 Lotes 15 a 22, Taguatinga Sul, Distrito Federal
      </span>
      <span>
        <img src="images/wpp.png" alt="WhatsApp" class="icon"> (61) 9 3977-1272
      </span>
    </div>
    <!-- Redes Sociais -->
    <div class="additional-info d-flex align-items-center">
      <span class="divider">|</span>
      <div class="social-icons d-flex align-items-center">
        <a href="https://www.instagram.com/faculdade_guerra/"><img src="images/instagram.png" alt="instagram" class="icon"> </a>
        <a href="https://www.facebook.com/faculdadeguerra/"><img src="images/facebook.png" alt="facebook" class="icon"> </a>
        <a href="https://wa.me/556139771272?text=Quero%20saber%20mais%20sobre%20os%20cursos"><img src="images/wpp.png" alt="WhatsApp" class="icon"></a>
        <a href="https://www.youtube.com/@faculdade_guerra/featured">
          <img src="images/youtube.png" alt="YouTube" class="icon"> 
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <!-- Logo na esquerda -->
      <a class="navbar-brand d-flex align-items-center" href="index.html">
          <img src="images/logo.png" alt="Logo" class="img-fluid me-2" style="height: 40px;">
      </a>

      <!-- Botão Toggler para mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>


        <!-- Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Links centralizados -->
            <ul class="navbar-nav mx-auto">
                <!-- Botão Inscreva-se -->
                <li class="nav-item">
                  <a class="nav-link btn btn-inscreva ms-3" href="#Matricula">Inscreva-se</a>
                </li>

              <!-- Cursos Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="contactDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cursos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="contactDropdown3">
                      <div class="dropdown-columns">
                          <div class="column">
                              <li><a class="dropdown-item" href="direito.php">Direito</a></li>
                              <li><a class="dropdown-item" href="tsp.php">Segurança Pública</a></li>
                          </div>
                      </div>
                  </ul>
              </li>
              <!-- Contatos Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="contactDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Contatos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="contactDropdown1">
                      <div class="dropdown-columns">
                          <div class="column">
                              <li><a class="dropdown-item" href="#">Localização</a></li>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15353.740277293968!2d-48.0537159!3d-15.8337148!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a332d78d5295f%3A0x894e489ea4be0fd4!2sFaculdade%20Guerra!5e0!3m2!1spt-BR!2sbr!4v1704773280569!5m2!1spt-BR!2sbr" 
                                      width="400" height="200" allowfullscreen></iframe>
                          </div>
                          <div class="column">
                              <li><a class="dropdown-item" href="#">Campus Principal</a></li>
                              <li><a class="dropdown-item" href="#">Endereço</a></li>
                              <span>Q QSA 7 Lotes 15 a 22<br>Taguatinga Sul<br>Distrito Federal</span>
                              <li><a class="dropdown-item" href="#">Email</a></li>
                              <span>contato@faculdadeguerra.edu.br</span>
                              <li><a class="dropdown-item" href="#">Telefone</a></li>
                              <p>(61) 3977-1272</p>
                          </div>
                      </div>
                  </ul>
              </li>
              <!-- Guerra -->
              <li class="nav-item">
                  <a class="nav-link" href="#Guerra">Guerra</a>
              </li>
              <!-- Sou Aluno Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="contactDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sou Aluno
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="contactDropdown2">
                      <div class="dropdown-columns">
                          <div class="column">
                              <li><a class="dropdown-item" href="http://educacional.usecerbrum.net/inicio.aspx">CERBRUM</a></li>
                              <li><a class="dropdown-item" href="https://faculdadeguerra.com.br/ava/">Ambiente Virtual de Aprendizagem</a></li>
                              <li><a class="dropdown-item" href="#">Calendário</a></li>
                          </div>
                      </div>
                  </ul>
              </li>
              <!-- Bolsas -->
              <li class="nav-item">
                  <a class="nav-link" href="#Bolsas">Bolsas</a>
              </li>
          </ul>

          <!-- Search Box no toggle -->
          <form class="d-flex ms-lg-auto mt-2 mt-lg-0">
              <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">
                  <img src="images/lopa.png" alt="Lupa" style="width: 16px; height: 16px;">
              </button>
          </form>
      </div>
  </div>
</nav>
    

<!-- Carrossel -->
<div class="carousel-container">
    <!-- Imagem Principal -->
    <div class="main-image-container">
        <img id="mainImage" src="images/Prancheta 1.png" alt="Imagem Principal" class="main-image">
    </div>

    <!-- Imagens Laterais Direitas -->
    <div class="right-images">
        <img id="topRightImage" src="images/Prancheta 2.png" alt="Imagem Superior" class="small-image">
        <img id="bottomRightImage" src="images/Prancheta 3.png" alt="Imagem Inferior" class="small-image">
    </div>

    <!-- Seta Esquerda -->
    <div class="arrow" id="rotateArrowLeft">&#9664;</div>

    <!-- Seta Direita -->
    <div class="arrow" id="rotateArrowRight">&#9654;</div>
</div>


    <!-- Seção Busca -->
    <section class="section-busca">
        <div class="section-header">
            <h1 class="section-title">VENHA ESTUDAR NA GUERRA</h1>
        </div>

        <div class="search-box">
            <h2 class="search-title">O QUE VOCÊ PROCURA?</h2>
            <form action="/buscar" method="GET" class="search-form">
                <div class="input-container">
                    <input type="text" name="q" class="search-input" placeholder="Digite aqui sua pesquisa..." required />
                    <button type="submit" class="search-button">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section id="cursos" class="section-card">
      <div class="cards-container">
        <article class="card">
          <img class="card__background" src="images/Grad.png" alt="Imagem 1" width="1920" height="2193" />
          <div class="card__content | flow">
            <div class="card__content--container | flow">
              <h2 class="card__title">Graduações</h2>
              <p class="card__description">Escolha entre presencial, híbrido ou a distância para sua formação.</p>
            </div>
            <a href="graduação.php" class="card__button">Veja mais</a> <!-- Link para a página de graduações -->
          </div>
        </article>
    
        <article class="card">
          <img class="card__background" src="images/Pós.png" alt="Imagem 2" width="1920" height="2193" />
          <div class="card__content | flow">
            <div class="card__content--container | flow">
              <h2 class="card__title">Pós-graduação</h2>
              <p class="card__description">Cursos especializados para avançar na sua carreira profissional.</p>
            </div>
            <a href="pos.php" class="card__button">Veja mais</a> <!-- Link para a página de pós-graduações -->
          </div>
        </article>
    
        <article class="card">
          <img class="card__background" src="images/Téc.png" alt="Imagem 3" width="1920" height="2193" />
          <div class="card__content | flow">
            <div class="card__content--container | flow">
              <h2 class="card__title">Segurança Pública</h2>
              <p class="card__description">Formação rápida e prática voltada para a área de segurança pública.</p>
            </div>
            <a href="tsp.php" class="card__button">Veja mais</a> <!-- Link para a página do tecnólogo -->
          </div>
        </article>
    
        <article class="card">
          <img class="card__background" src="images/Cursos.png" alt="Imagem 4" width="1920" height="2193" />
          <div class="card__content | flow">
            <div class="card__content--container | flow">
              <h2 class="card__title">Concursos</h2>
              <p class="card__description">Preparação completa para conquistar sua vaga nos principais concursos.</p>
            </div>
            <a href="concursos.html" class="card__button">Veja mais</a> <!-- Link para a página de concursos -->
          </div>
        </article>
      </div>
    </section>

    <!-- Banner -->
    <div class="highlight-banner">
        Chegou a hora de fazer a <span>DIFERENÇA</span> na sua vida!
    </div>

<!-- Seção Guerra -->
<div id="Guerra" class="section-Guerra py-5">
    <div class="container">
      <div class="row align-items-center text-white shadow p-4" style="background-color: #CA0F0F; border-radius: 12px; min-height: 50vh;">
        <!-- Texto -->
        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
          <h2 class="fw-bold">CONHEÇA A <span class="text-white">FACULDADE GUERRA</span></h2>
          <p>Certificada pelo MEC para instalações reconhecidas com notas máximas no MEC.</p>
          <p>Conteúdo claro e corpo docente altamente capacitado, composto por especialistas, mestres e doutores ativos no mercado.</p>
          <p>Certificada pelo MEC para instalações reconhecidas com notas máximas no MEC.</p>
        </div>
        <!-- Vídeo -->
        <div class="col-lg-6 col-md-12">
          <div class="ratio ratio-16x9">
     <!--       <iframe
              src=
              title="Vídeo Faculdade Guerra"
              allowfullscreen
            ></iframe> !-->
          </div>
        </div>
      </div>
    </div>
  </div>
  

    <section class="section-ingresso">
      <div class="section-ingresso__left">
          <h1 class="section-ingresso__title">CONHEÇA <br> AS FORMAS <br> DE INGRESSO:</h1>
      </div>
      <div class="section-ingresso__cards">
          <article class="ingresso-card ingresso-card--vestibular">
              <img class="ingresso-card__background" src="images/forma1.png" alt="Vestibular" width="1920" height="2193" />

          </article>
          <article class="ingresso-card ingresso-card--enem">
              <img class="ingresso-card__background" src="images/forma2.png" alt="Nota do Enem" width="1920" height="2193" />

          </article>
          <article class="ingresso-card ingresso-card--transferencia">
              <img class="ingresso-card__background" src="images/forma3.png" alt="Transferência ou Segunda Graduação" width="1920" height="2193" />
          </article>
      </div>
  </section>

<!-- Seção Matrícula -->
<section id="Matricula" class="section-matricula py-5" style="background: linear-gradient(to bottom, #000000, #333333); color: white;">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <!-- Texto -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold mb-3">
          Deseja fazer a matrícula na <span class="text-uppercase text-white">Faculdade Guerra?</span>
        </h2>
        <p class="fst-italic mb-4">
          Fique por dentro das oportunidades incríveis <br>
          que temos para você.
        </p>
      </div>
      <!-- Formulário -->
      <div class="col-md-5">
        <form action="formulario.php" method="POST">
          <!-- Nome -->
          <div class="mb-3">
            <input type="text" name="nome" class="form-control form-control-lg" placeholder="Seu nome" required />
          </div>
          <!-- WhatsApp -->
          <div class="mb-3">
            <input type="text" name="whatsapp" class="form-control form-control-lg" placeholder="Seu WhatsApp com DDD" required />
          </div>
          <!-- E-mail -->
          <div class="mb-3">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Seu e-mail" required />
          </div>
          <!-- Cursos Disponíveis -->
          <div class="mb-3">
            <label for="cursos" class="form-label">Escolha o curso de interesse:</label>
            <select class="form-select form-select-lg" name="curso" id="cursos" required>
              <option value="" disabled selected>Selecione um curso</option>
              <option value="Direito">Direito</option>
              <option value="Tecnólogo em Segurança Pública">Tecnólogo em Segurança Pública</option>
              <!-- Espaço para mais opções no futuro -->
            </select>
          </div>
          <!-- Checkbox Política de Privacidade -->
          <div class="form-check mb-3">
            <input type="checkbox" name="aceite_politica" class="form-check-input" id="privacy-policy" required />
            <label class="form-check-label" for="privacy-policy">
              Concordo com a Política de privacidade e desejo receber informações adicionais sobre os produtos da Faculdade Guerra.
            </label>
          </div>
          <!-- Botão -->
          <button type="submit" class="btn btn-light btn-lg w-100 fw-bold">INSCREVER</button>
        </form>
      </div>
    </div>
  </div>
</section>

  
  <!-- Linha Horizontal -->
  <div class="horizontal-line"></div>
  
<!-- Seção Footer -->
<!-- Seção Footer -->
<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
      <div class="row text-center text-lg-start">
        <!-- Faculdade Guerra -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <img src="images/Logo_Guerra_Red.png" alt="Faculdade Guerra" class="img-fluid mb-3" style="max-width: 60%;">
          <img src="images/tag01.png" alt="Tagline" class="img-fluid" style="max-width: 70%;">
        </div>
  
        <!-- Sobre Nós -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Sobre Nós</h5>
          <p><a href="#" class="text-white text-decoration-none">Quem somos nós</a></p>
          <p><a href="#" class="text-white text-decoration-none">Serviço à comunidade</a></p>
          <p><a href="#" class="text-white text-decoration-none">Documentos</a></p>
          <p><a href="#" class="text-white text-decoration-none">Nossa equipe</a></p>
        </div>
  
        <!-- Nossos Cursos -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Nossos Cursos</h5>
          <p><a href="direito.php" class="text-white text-decoration-none">Direito</a></p>
          <p><a href="tsp.php" class="text-white text-decoration-none">Segurança Pública</a></p>
          <p><a href="pos.php" class="text-white text-decoration-none">Pós Graduação</a></p>
          <p><a href="#" class="text-white text-decoration-none">Extensão</a></p>
          <p><a href="#" class="text-white text-decoration-none">Preparatório OAB</a></p>
        </div>
  
        <!-- Acesso Rápido -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Acesso Rápido</h5>
          <p><a href="https://faculdadeguerra.com.br/ava/" class="text-white text-decoration-none">Acesso ao AVA</a></p>
          <p><a href="#" class="text-white text-decoration-none">Matrícula</a></p>
          <p><a href="#" class="text-white text-decoration-none">Calendário</a></p>
        </div>
  
        <!-- Contato -->
        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4" style="color: #CA0F0F;">Campus Principal</h5>
          <p><strong>Endereço:</strong><br> Q QSA 7 Lotes 15 a 22, Taguatinga Sul, Distrito Federal</p>
          <p><strong>Telefone:</strong> (61) 3977-1272  </p>
          <p><strong>Wpp:</strong> (61) 9 3977-1272</p>
          <p><strong>Email:</strong> contato@faculdadeguerra.edu.br</p>
        </div>
      </div>
  
      <!-- Linha Divisória -->
      <hr class="bg-white my-3">
  
      <!-- Copyright -->
      <div class="row">
        <div class="col text-center">
          <p class="mb-0">Copyright 2024 All Rights Reserved by:
            <a href="#" class="text-decoration-none" style="color: #CA0F0F;">
              <strong>Faculdade Guerra</strong>
            </a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  
    
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scripts Personalizados -->
    <script src="swiper-config.js"></script>
    <script src="script.js"></script>

</body>
</html>